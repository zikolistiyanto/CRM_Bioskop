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
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Total Customers</span>
                        <h3 class="my-2">{{ $customers->count() }}</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-primary">
                        <i class="ti ti-user ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Active</span>
                        <h3 class="my-2">{{ $customers->where('status', 'active')->count() }}</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-success">
                        <i class="ti ti-user-check ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Inactive</span>
                        <h3 class="my-2">{{ $customers->where('status', 'inactive')->count() }}</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-warning">
                        <i class="ti ti-user-x ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-0">Customer List</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                        <th>Last Interaction</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $index => $customer)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phone }}</td>
                            <td>
                                <span class="badge {{ $customer->status == 'active' ? 'bg-success' : 'bg-warning' }}">
                                    {{ ucfirst($customer->status) }}
                                </span>
                            </td>
                            <td>{{ $customer->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
