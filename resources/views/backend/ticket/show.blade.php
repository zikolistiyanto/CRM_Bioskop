@extends('backend.layouts.app')

@section('title', 'Ticket Detail')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Ticket #{{ $ticket->id }}</h4>
        <p class="text-muted mb-0">{{ $ticket->issue }}</p>
    </div>
</div>

{{-- Info --}}
<div class="row g-4 mb-4">
    <div class="col-md-8">
        <div class="card h-100">
            <div class="card-header border-bottom">
                <h5 class="mb-0">Description</h5>
            </div>
            <div class="card-body mt-3">
                <p>{{ $ticket->description ?? 'No description provided.' }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-header border-bottom">
                <h5 class="mb-0">Ticket Info</h5>
            </div>
            <div class="card-body mt-3">

                <form action="{{ route('tickets.updateStatus', $ticket->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status_ticket" class="form-select">
                            <option value="Open" {{ $ticket->status_ticket == 'Open' ? 'selected' : '' }}>Open</option>
                            <option value="Resolved" {{ $ticket->status_ticket == 'Resolved' ? 'selected' : '' }}>Resolved</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Created By</label>
                        <input type="text" class="form-control" value="{{ $ticket->creator->name ?? 'System' }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Created At</label>
                        <input type="text" class="form-control" value="{{ $ticket->created_at->format('d M Y H:i') }}" disabled>
                    </div>

                    <button class="btn btn-primary w-100">
                        Update Status
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

{{-- Customer --}}
<div class="card mb-4">
    <div class="card-header border-bottom">
        <h5 class="mb-0">Customer Info</h5>
    </div>
    <div class="card-body mt-3">
        <div class="row">
            <div class="col-sm-6">
                <p><strong>Name:</strong> {{ $ticket->customer->name ?? '-' }}</p>
                <p><strong>Email:</strong> {{ $ticket->customer->email ?? '-' }}</p>
            </div>
            <div class="col-sm-6">
                <p><strong>Phone:</strong> {{ $ticket->customer->phone ?? '-' }}</p>
                <p class="mb-0">
                    <a href="{{ route('customers.show', $ticket->customer_id) }}" class="btn btn-sm btn-outline-primary">
                        View Customer Profile
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
