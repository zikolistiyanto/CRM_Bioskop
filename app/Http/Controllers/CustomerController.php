<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Tampilkan semua customer di Blade
    public function index()
    {
        $customers = Customer::with('user')->get(); // load creator user
        return view('backend.customer.index', compact('customers'));
    }

    // Tampilkan form buat customer baru
    public function create()
    {
        return view('backend.customer.create');
    }

    // Simpan customer baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string|max:100',
            'phone'=>'nullable|string|max:20',
            'email'=>'nullable|email|unique:customers,email',
            'address'=>'nullable|string',
            'created_by'=>'required|exists:users,id_user',
            'status'=>'required|in:active,inactive'
        ]);

        Customer::create($data);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan');
    }

    // Tampilkan detail customer
    public function show(Customer $customer)
    {
        $customer->load('user','interactions','tickets','leads');
        return view('backend.customer.show', compact('customer'));
    }

    // Tampilkan form edit
    public function edit(Customer $customer)
    {
        return view('backend.customer.edit', compact('customer'));
    }

    // Update customer
    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'name'=>'sometimes|required|string|max:100',
            'phone'=>'nullable|string|max:20',
            'email'=>'nullable|email|unique:customers,email,'.$customer->id_customer.',id_customer',
            'address'=>'nullable|string',
            'created_by'=>'sometimes|required|exists:users,id_user',
            'status'=>'sometimes|required|in:active,inactive'
        ]);

        $customer->update($data);

        return redirect()->route('customers.index')->with('success', 'Customer berhasil diperbarui');
    }

    // Hapus customer
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus');
    }
}
