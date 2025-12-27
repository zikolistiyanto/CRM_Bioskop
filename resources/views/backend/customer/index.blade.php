@extends('backend.layouts.app')

@section('title', 'Customer Management')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Customer Management</h4>
        <p class="text-muted mb-0">Data pelanggan aplikasi ticketing bioskop</p>
    </div>
</div>

{{-- Summary --}}
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <span>Total Customers</span>
                    <h3 class="my-2">{{ $customers->total() }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-primary">
                    <i class="ti ti-user ti-sm"></i>
                </span>
            </div>
        </div>
    </div>
</div>

{{-- Table --}}
<div class="card">
    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Customer List</h5>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created By</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @forelse($customers as $customer)
                <tr>
                    <td><strong>{{ $customer->name }}</strong></td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone ?? '-' }}</td>
                    <td>{{ $customer->creator->name ?? 'System' }}</td>
                    <td>{{ $customer->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-sm btn-primary">
                            Detail
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No customers found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $customers->links() }}
    </div>
</div>

@endsection
