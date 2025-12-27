<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Tampilkan daftar customer
     */
    public function index()
    {
        $customers = Customer::with('creator')->latest()->paginate(10);
        return view('backend.customer.index', compact('customers'));
    }

    /**
     * Simpan customer baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:customers,email',
            'address' => 'nullable|string',
        ]);

        $validated['created_by'] = Auth::id();

        Customer::create($validated);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan');
    }

    /**
     * Tampilkan detail customer
     */
    public function show($id)
    {
        $customer = Customer::with(['interactions', 'leads', 'tickets', 'creator'])->findOrFail($id);
        return view('backend.customer.show', compact('customer'));
    }

    /**
     * Update customer
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|unique:customers,email,' . $id,
            'address' => 'nullable|string',
        ]);

        $customer->update($validated);

        return redirect()->route('customers.show', $id)->with('success', 'Data customer berhasil diperbarui');
    }

    /**
     * Hapus customer
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus');
    }
}
