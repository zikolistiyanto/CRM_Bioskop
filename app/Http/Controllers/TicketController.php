<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('backend.ticket.index');
    }

    public function show($id)
    {
        // Dummy ticket detail
        $ticket = [
            'id' => $id,
            'subject' => 'Gagal bayar tiket',
            'status' => 'Open',
            'priority' => 'High',
            'customer' => 'Andi Pratama',
            'email' => 'andi@gmail.com',
            'assigned_to' => 'CS - Rina',
            'created_at' => '2025-01-10',
            'description' => 'Customer melaporkan pembayaran gagal namun saldo terpotong.',
            'history' => [
                [
                    'date' => '2025-01-10 10:00',
                    'note' => 'Ticket dibuat oleh customer'
                ],
                [
                    'date' => '2025-01-10 11:30',
                    'note' => 'Ticket di-assign ke CS Rina'
                ],
                [
                    'date' => '2025-01-10 14:00',
                    'note' => 'CS meminta bukti pembayaran'
                ],
            ]
        ];

        return view('backend.ticket.show', compact('ticket'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required'
        ]);

        // Dummy: nanti diganti update DB
        // Ticket::where('id', $id)->update(['status' => $request->status]);

        return redirect()
            ->route('ticket.show', $id)
            ->with('success', 'Status ticket berhasil diperbarui');
    }
}
