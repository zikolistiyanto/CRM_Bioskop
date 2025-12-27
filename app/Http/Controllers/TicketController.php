<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Tampilkan daftar ticket
     */
    public function index()
    {
        $tickets = Ticket::with(['customer', 'creator'])->latest()->paginate(10);
        return view('backend.ticket.index', compact('tickets'));
    }

    /**
     * Simpan ticket baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'issue' => 'required|string|max:255',
            'status_ticket' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $validated['created_by'] = Auth::id();

        Ticket::create($validated);

        return redirect()->back()->with('success', 'Ticket berhasil dibuat');
    }

    /**
     * Tampilkan detail ticket
     */
    public function show($id)
    {
        $ticket = Ticket::with(['customer', 'creator'])->findOrFail($id);
        return view('backend.ticket.show', compact('ticket'));
    }

    /**
     * Update status ticket
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status_ticket' => 'required|string'
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update(['status_ticket' => $request->status_ticket]);

        return redirect()
            ->route('tickets.show', $id)
            ->with('success', 'Status ticket berhasil diperbarui');
    }

    /**
     * Hapus ticket
     */
    public function destroy($id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->delete();

        return redirect()->route('tickets.index')->with('success', 'Ticket berhasil dihapus');
    }
}
