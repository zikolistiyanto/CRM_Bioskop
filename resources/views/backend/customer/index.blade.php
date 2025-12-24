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
                    <h3 class="my-2">1,245</h3>
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
                    <h3 class="my-2">1,020</h3>
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
                    <h3 class="my-2">225</h3>
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- Dummy --}}
                <tr>
                    <td>1</td>
                    <td>Andi Pratama</td>
                    <td>andi@gmail.com</td>
                    <td>08123456789</td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>2025-01-10</td>
                    <td>
                        <a href="{{ route('customer.show', 1) }}" class="btn btn-sm btn-primary">
                            Detail
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Siti Rahma</td>
                    <td>siti@gmail.com</td>
                    <td>082233445566</td>
                    <td><span class="badge bg-warning">Inactive</span></td>
                    <td>2024-12-20</td>
                    <td>
                        <a href="{{ route('customer.show', 2) }}" class="btn btn-sm btn-primary">
                            Detail
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
