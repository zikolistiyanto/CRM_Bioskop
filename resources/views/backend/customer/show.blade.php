@extends('backend.layouts.app')

@section('title', 'Customer Detail')

@section('content')

<!-- Customer Header -->
<div class="card mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h4 class="mb-1">{{ $customer['name'] }}</h4>
                <p class="mb-0 text-muted">{{ $customer['email'] }}</p>
            </div>
            <span class="badge bg-label-success">{{ $customer['status'] }}</span>
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
                    <li><strong>Phone:</strong> {{ $customer['phone'] }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="row g-3">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0">12</h4>
                        <small>Total Tickets</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0 text-warning">4</h4>
                        <small>Open</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="mb-0 text-success">8</h4>
                        <small>Closed</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ticket History -->
<div class="card">
    <div class="card-header border-bottom">
        <h5 class="card-title mb-0">Ticket History</h5>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead class="border-top">
                <tr>
                    <th>#</th>
                    <th>Subject</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Dummy manual data --}}
                <tr>
                    <td>#TCK-001</td>
                    <td>Login issue</td>
                    <td><span class="badge bg-label-danger">High</span></td>
                    <td><span class="badge bg-label-warning">Open</span></td>
                    <td>2025-03-10</td>
                    <td>
                        <a href="{{ route('ticket.show', 1) }}" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
                <tr>
                    <td>#TCK-002</td>
                    <td>Payment failed</td>
                    <td><span class="badge bg-label-secondary">Medium</span></td>
                    <td><span class="badge bg-label-success">Closed</span></td>
                    <td>2025-03-05</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">View</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
