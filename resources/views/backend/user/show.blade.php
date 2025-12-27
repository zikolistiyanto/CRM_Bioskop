@extends('backend.layouts.app')

@section('title', 'User Detail')

@section('content')

<!-- User Header -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div class="avatar avatar-xl me-3">
                    <span class="avatar-initial rounded-circle bg-label-primary">{{ substr($user->name, 0, 2) }}</span>
                </div>
                <div>
                    <h4 class="mb-1">{{ $user->name }}</h4>
                    <p class="mb-0 text-muted">{{ $user->email }}</p>
                </div>
            </div>
            <div>
                <span class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'cs' ? 'info' : 'primary') }} text-uppercase">
                    {{ $user->role }}
                </span>
            </div>
        </div>
    </div>
</div>

<!-- Stats Widgets -->
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Customers Managed</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">{{ $user->customers->count() }}</h4>
                        </div>
                    </div>
                    <span class="badge bg-label-primary rounded p-2">
                        <i class="ti ti-user ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Tickets Handled</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">{{ $user->tickets->count() }}</h4>
                        </div>
                    </div>
                    <span class="badge bg-label-warning rounded p-2">
                        <i class="ti ti-ticket ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Leads Assigned</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">{{ $user->leads->count() }}</h4>
                        </div>
                    </div>
                    <span class="badge bg-label-success rounded p-2">
                        <i class="ti ti-currency-dollar ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="content-left">
                        <span>Interactions</span>
                        <div class="d-flex align-items-end mt-2">
                            <h4 class="mb-0 me-2">{{ $user->interactions->count() }}</h4>
                        </div>
                    </div>
                    <span class="badge bg-label-info rounded p-2">
                        <i class="ti ti-message-dots ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- User Activity Tabs -->
<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-customers" aria-controls="navs-customers" aria-selected="true">
                Customers
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-tickets" aria-controls="navs-tickets" aria-selected="false">
                Tickets
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-leads" aria-controls="navs-leads" aria-selected="false">
                Leads
            </button>
        </li>
    </ul>
    <div class="tab-content">
        {{-- Customers Tab --}}
        <div class="tab-pane fade show active" id="navs-customers" role="tabpanel">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user->customers as $customer)
                        <tr>
                            <td><strong>{{ $customer->name }}</strong></td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone ?? '-' }}</td>
                            <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-3">No customers managed by this user.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Tickets Tab --}}
        <div class="tab-pane fade" id="navs-tickets" role="tabpanel">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Issue</th>
                            <th>Customer</th>
                            <th>Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user->tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->issue }}</td>
                            <td>{{ $ticket->customer->name ?? '-' }}</td>
                            <td>
                                <span class="badge bg-label-{{ $ticket->status_ticket == 'Open' ? 'warning' : 'success' }}">
                                    {{ $ticket->status_ticket }}
                                </span>
                            </td>
                            <td>{{ $ticket->created_at->format('d/m/Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-3">No tickets handled by this user.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Leads Tab --}}
        <div class="tab-pane fade" id="navs-leads" role="tabpanel">
            <div class="table-responsive text-nowrap">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Customer</th>
                            <th>Value</th>
                            <th>Stage</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($user->leads as $lead)
                        <tr>
                            <td>{{ $lead->customer->name ?? '-' }}</td>
                            <td>Rp {{ number_format($lead->value, 0, ',', '.') }}</td>
                            <td><span class="badge bg-label-primary">{{ $lead->stage }}</span></td>
                            <td>{{ $lead->created_at->format('d/m/Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center py-3">No leads assigned to this user.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
