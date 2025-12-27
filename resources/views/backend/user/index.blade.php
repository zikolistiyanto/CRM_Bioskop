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
    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <span>Total Users</span>
                    <h3 class="my-2">{{ $totalUsers }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-primary">
                    <i class="ti ti-users ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <span>Admin</span>
                    <h3 class="my-2">{{ $adminCount }}</h3>
                </div>
                <span class="avatar-initial rounded bg-label-danger">
                    <i class="ti ti-shield ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-4">
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <span>Customer Service</span>
                    <h3 class="my-2">{{ $csCount }}</h3>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $user)
                <tr>
                    <td><strong>{{ $user->name }}</strong></td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'cs' ? 'info' : 'primary') }}">
                            {{ strtoupper($user->role) }}
                        </span>
                    </td>
                    <td>{{ $user->created_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">Detail</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No users found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        {{ $users->links() }}
    </div>
</div>

@endsection
