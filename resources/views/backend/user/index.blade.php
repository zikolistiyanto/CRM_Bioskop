index.blade.php
@extends('backend.layouts.app')

@section('title', 'User Management')

@section('content')

    {{-- Header --}}
    <div class="row mb-4">
        <div class="col">
            <h4 class="fw-bold mb-1">User Management</h4>
            <p class="text-muted mb-0">Kelola akun internal sistem CRM</p>
        </div>
    </div>

    {{-- Summary --}}
    <div class="row g-4 mb-4">
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Total Users</span>
                        <h3 class="my-2">12</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-primary">
                        <i class="ti ti-users ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Admin</span>
                        <h3 class="my-2">2</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-danger">
                        <i class="ti ti-shield ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between">
                    <div>
                        <span>Customer Service</span>
                        <h3 class="my-2">6</h3>
                    </div>
                    <span class="avatar-initial rounded bg-label-info">
                        <i class="ti ti-headset ti-sm"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div class="card">
        <div class="card-header border-bottom">
            <h5 class="card-title mb-0">User List</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td> {{-- nomor urut --}}
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->role === 'admin')
                                    <span class="badge bg-danger">Admin</span>
                                @elseif($user->role === 'staff')
                                    <span class="badge bg-info">Staff</span>
                                @elseif($user->role === 'manager')
                                    <span class="badge bg-warning">Manager</span>
                                @endif
                            </td>
                            <td>
                                @if ($user->status === 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- Dummy --}}
                {{-- <tbody>
                    <tr>
                        <td>1</td>
                        <td>Admin CRM</td>
                        <td>admin@crm.com</td>
                        <td><span class="badge bg-danger">Admin</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Rina CS</td>
                        <td>rina@crm.com</td>
                        <td><span class="badge bg-info">CS</span></td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>
                </tbody> --}}


            </table>
        </div>
    </div>

@endsection
