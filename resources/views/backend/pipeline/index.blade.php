@extends('backend.layouts.app')

@section('title', 'Lead Pipeline')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Lead Pipeline</h4>
        <p class="text-muted mb-0">Monitoring tahapan prospek (Leads)</p>
    </div>
</div>

<div class="row g-4 overflow-auto flex-nowrap pb-3" style="min-height: 70vh;">
@php
    $stages = ['Prospecting', 'Qualification', 'Proposal', 'Negotiation', 'Closed Won', 'Closed Lost'];
@endphp

@foreach($stages as $stage)
    @php
        $leadsInStage = $pipeline->get($stage, collect());
    @endphp
    <div class="col-md-3" style="min-width: 300px;">
        <div class="card bg-light h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold text-uppercase">{{ $stage }}</h6>
                <span class="badge bg-primary rounded-pill">{{ $leadsInStage->count() }}</span>
            </div>

            <div class="card-body p-2">
                @forelse($leadsInStage as $lead)
                    <div class="card mb-2 shadow-sm border-0">
                        <div class="card-body p-3">
                            <div class="d-flex justify-content-between mb-2">
                                <h6 class="mb-0 fw-bold">{{ $lead->customer->name ?? 'Unknown' }}</h6>
                            </div>
                            <p class="mb-2 text-primary fw-bold">Rp {{ number_format($lead->value, 0, ',', '.') }}</p>
                            @if($lead->notes)
                                <p class="mb-2 text-muted small text-truncate">{{ $lead->notes }}</p>
                            @endif
                            <div class="d-flex justify-content-between align-items-center mt-2 pt-2 border-top">
                                <span class="small text-muted">
                                    <i class="ti ti-calendar ti-xs me-1"></i>{{ $lead->created_at->format('d/m/Y') }}
                                </span>
                                <a href="{{ route('customers.show', $lead->customer_id) }}" class="btn btn-xs btn-label-primary p-1">
                                    <i class="ti ti-eye"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="text-center py-4">
                        <p class="text-muted small mb-0">No leads in this stage</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
