<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        return view('backend.ticket.index');
    }

    /**
     * Tampilkan detail user (nanti)
     */
    public function show($id)
    {
        return view('backend.ticket.show');
    }
}
