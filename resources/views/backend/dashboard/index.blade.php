@extends('backend.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        {{-- Welcome Card --}}
        <div class="col-lg-12 mb-4">
            <div class="card bg-primary text-white">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="text-white mb-1">Selamat Datang di Cinema CRM! 🎬</h4>
                        <p class="mb-0">Berikut adalah ringkasan operasional bioskop hari ini.</p>
                    </div>
                    <i class="ti ti-device-tv ti-xl opacity-50"></i>
                </div>
            </div>
        </div>

        {{-- Statistics Cards --}}
        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-muted">Total Customers</span>
                            <div class="d-flex align-items-center mt-2">
                                <h3 class="mb-0 me-2">{{ $stats['total_customers'] }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="ti ti-users ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-muted">Sales Revenue</span>
                            <div class="d-flex align-items-center mt-2">
                                <h3 class="mb-0 me-2">Rp {{ number_format($stats['total_revenue'], 0, ',', '.') }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-success rounded p-2">
                            <i class="ti ti-currency-dollar ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-muted">Open Tickets</span>
                            <div class="d-flex align-items-center mt-2">
                                <h3 class="mb-0 me-2">{{ $stats['open_tickets'] }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-warning rounded p-2">
                            <i class="ti ti-ticket ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span class="text-muted">Internal Users</span>
                            <div class="d-flex align-items-center mt-2">
                                <h3 class="mb-0 me-2">{{ $stats['total_users'] }}</h3>
                            </div>
                        </div>
                        <span class="badge bg-label-info rounded p-2">
                            <i class="ti ti-shield ti-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Recent Activity Tables --}}
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">Recent Tickets</h5>
                    <a href="{{ route('tickets.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Issue</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats['recent_tickets'] as $ticket)
                            <tr>
                                <td>{{ $ticket->customer->name ?? '-' }}</td>
                                <td><span class="text-truncate" style="max-width: 150px; display: inline-block;">{{ $ticket->issue }}</span></td>
                                <td><span class="badge bg-label-warning">{{ $ticket->status_ticket }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mb-0">New Customers</h5>
                    <a href="{{ route('customers.index') }}" class="btn btn-sm btn-outline-primary">View All</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Joined At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($stats['recent_customers'] as $cust)
                            <tr>
                                <td><strong>{{ $cust->name }}</strong></td>
                                <td>{{ $cust->created_at->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
