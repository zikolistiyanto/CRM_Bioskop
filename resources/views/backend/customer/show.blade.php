@extends('backend.layouts.app')

@section('title', 'Customer Detail')

@section('content')

<!-- Customer Header -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1">{{ $customer->name }}</h4>
                <p class="mb-0 text-muted">{{ $customer->email }}</p>
            </div>
            <span class="badge bg-label-primary">Created by: {{ $customer->creator->name ?? 'System' }}</span>
        </div>
    </div>
</div>

<!-- Customer Info + Stats -->
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-body">
                <h6 class="card-title">Customer Info</h6>
                <ul class="list-unstyled mb-0">
                    <li class="mb-2"><strong>Phone:</strong> {{ $customer->phone ?? '-' }}</li>
                    <li class="mb-2"><strong>Address:</strong> {{ $customer->address ?? '-' }}</li>
                    <li><strong>Joined:</strong> {{ $customer->created_at->format('d M Y') }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="row g-3">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0">{{ $customer->tickets->count() }}</h4>
                        <small>Total Tickets</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0 text-warning">{{ $customer->tickets->where('status_ticket', 'Open')->count() }}</h4>
                        <small>Open Tickets</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0 text-success">{{ $customer->leads->count() }}</h4>
                        <small>Total Leads</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tabs for History -->
<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tickets" aria-controls="navs-tickets" aria-selected="true">
                Tickets
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-interactions" aria-controls="navs-interactions" aria-selected="false">
                Interactions
            </button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-tickets" role="tabpanel">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Issue</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customer->tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->issue }}</td>
                            <td>
                                <span class="badge bg-label-{{ $ticket->status_ticket == 'Open' ? 'warning' : 'success' }}">
                                    {{ $ticket->status_ticket }}
                                </span>
                            </td>
                            <td>{{ $ticket->created_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-sm btn-primary">View</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No tickets found.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="navs-interactions" role="tabpanel">
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($customer->interactions as $interaction)
                        <tr>
                            <td>{{ $interaction->type_interaction }}</td>
                            <td>{{ $interaction->date->format('d/m/Y') }}</td>
                            <td>{{ $interaction->notes }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">No interactions recorded.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
