@extends('backend.layouts.app')

@section('title', 'Ticket Detail')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Ticket #{{ $ticket['id'] }}</h4>
        <p class="text-muted mb-0">{{ $ticket['subject'] }}</p>
    </div>
</div>

{{-- Info --}}
<div class="row g-4 mb-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Deskripsi Masalah</h5>
            </div>
            <div class="card-body">
                <p>{{ $ticket['description'] }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Ticket Info</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('ticket.updateStatus', $ticket['id']) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="Open" {{ $ticket['status']=='Open' ? 'selected' : '' }}>Open</option>
                            <option value="In Progress" {{ $ticket['status']=='In Progress' ? 'selected' : '' }}>In Progress</option>
                            <option value="Resolved" {{ $ticket['status']=='Resolved' ? 'selected' : '' }}>Resolved</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Priority</label>
                        <input type="text" class="form-control" value="{{ $ticket['priority'] }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Assigned To</label>
                        <input type="text" class="form-control" value="{{ $ticket['assigned_to'] }}" disabled>
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
    <div class="card-header">
        <h5 class="mb-0">Customer Info</h5>
    </div>
    <div class="card-body">
        <p><strong>Name:</strong> {{ $ticket['customer'] }}</p>
        <p><strong>Email:</strong> {{ $ticket['email'] }}</p>
    </div>
</div>

{{-- History --}}
<div class="card">
    <div class="card-header">
        <h5 class="mb-0">Ticket History</h5>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ticket['history'] as $history)
                <tr>
                    <td>{{ $history['date'] }}</td>
                    <td>{{ $history['note'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection