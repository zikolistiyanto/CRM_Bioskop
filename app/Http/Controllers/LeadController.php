<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    /**
     * Tampilkan daftar lead
     */
    public function index()
    {
        $leads = Lead::with(['customer', 'assignedUser'])->latest()->paginate(10);
        return view('backend.lead.index', compact('leads'));
    }

    /**
     * Simpan lead baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'value' => 'required|numeric',
            'stage' => 'required|string',
            'notes' => 'nullable|string',
            'assigned_to' => 'required|exists:users,id',
        ]);

        Lead::create($validated);

        return redirect()->back()->with('success', 'Lead berhasil dibuat');
    }

    /**
     * Update lead
     */
    public function update(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);

        $validated = $request->validate([
            'value' => 'required|numeric',
            'stage' => 'required|string',
            'notes' => 'nullable|string',
            'assigned_to' => 'required|exists:users,id',
        ]);

        $lead->update($validated);

        return redirect()->back()->with('success', 'Lead berhasil diperbarui');
    }

    /**
     * Hapus lead
     */
    public function destroy($id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return redirect()->back()->with('success', 'Lead berhasil dihapus');
    }
}
