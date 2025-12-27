<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Lead;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_customers' => Customer::count(),
            'total_leads' => Lead::count(),
            'open_tickets' => Ticket::where('status_ticket', 'Open')->count(),
            'total_users' => User::count(),
            'total_revenue' => Lead::where('stage', 'Closed Won')->sum('value'),
            'recent_tickets' => Ticket::with('customer')->latest()->take(5)->get(),
            'recent_customers' => Customer::latest()->take(5)->get(),
        ];

        return view('backend.dashboard.index', compact('stats'));
    }
}
