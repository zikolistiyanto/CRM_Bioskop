@extends('backend.layouts.app')

@section('title', 'Ticket Management')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Ticket Management</h4>
        <p class="text-muted mb-0">Kelola keluhan & laporan customer</p>
    </div>
</div>

{{-- Summary Cards --}}
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Total Tickets</span>
                    <h3 class="my-2">{{ $tickets->total() }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-primary">
                    <i class="ti ti-ticket ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Open</span>
                    <h3 class="my-2">{{ \App\Models\Ticket::where('status_ticket', 'Open')->count() }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-warning">
                    <i class="ti ti-alert-circle ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Resolved</span>
                    <h3 class="my-2">{{ \App\Models\Ticket::where('status_ticket', 'Resolved')->count() }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-success">
                    <i class="ti ti-check ti-sm"></i>
                </span>
            </div>
        </div>
    </div>
</div>

{{-- Ticket Table --}}
<div class="card">
    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Daftar Ticket</h5>
        <!-- Button trigger modal for Add Ticket would go here -->
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Customer</th>
                    <th>Issue</th>
                    <th>Status</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->customer->name ?? '-' }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="fw-semibold text-primary">
                            {{ $ticket->issue }}
                        </a>
                    </td>
                    <td>
                        <span class="badge bg-{{ $ticket->status_ticket == 'Open' ? 'warning' : 'success' }}">
                            {{ $ticket->status_ticket }}
                        </span>
                    </td>
                    <td>{{ $ticket->creator->name ?? 'System' }}</td>
                    <td>{{ $ticket->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No tickets found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $tickets->links() }}
    </div>
</div>

@endsection
