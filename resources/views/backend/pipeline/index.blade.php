@extends('backend.layouts.app')

@section('title', 'Ticket Pipeline')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Ticket Pipeline</h4>
        <p class="text-muted mb-0">Monitoring status dan progres ticket</p>
    </div>
</div>

<div class="row">
@foreach($pipeline as $status => $tickets)
    <div class="col-md-3">
        <div class="card h-100">
            <div class="card-header bg-light">
                <h6 class="mb-0">{{ $status }}</h6>
            </div>

            <div class="card-body">

                @forelse($tickets as $ticket)
                    <div class="card mb-3 shadow-sm">
                        <div class="card-body p-2">
                            <strong>{{ $ticket['title'] }}</strong>
                            <p class="mb-1 text-muted small">
                                {{ $ticket['customer'] }}
                            </p>
                            <a href="{{ route('ticket.show', $ticket['id']) }}"
                               class="btn btn-sm btn-outline-primary w-100">
                                Detail
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-muted text-center small">
                        No tickets
                    </p>
                @endforelse

            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
