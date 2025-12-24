@extends('backend.layouts.app')

@section('title', 'Ticket Management')

@section('content')

{{-- Header --}}
<div class="row mb-4">
    <div class="col">
        <h4 class="fw-bold mb-1">Ticket Management</h4>
        <p class="text-muted mb-0">Kelola keluhan & laporan customer</p>
    </div>
</div>

{{-- Summary Cards --}}
<div class="row g-4 mb-4">
    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Total Tickets</span>
                    <h3 class="my-2">128</h3>
                </div>
                <span class="avatar-initial rounded bg-label-primary">
                    <i class="ti ti-ticket ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Open</span>
                    <h3 class="my-2">42</h3>
                </div>
                <span class="avatar-initial rounded bg-label-warning">
                    <i class="ti ti-alert-circle ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>In Progress</span>
                    <h3 class="my-2">31</h3>
                </div>
                <span class="avatar-initial rounded bg-label-info">
                    <i class="ti ti-loader ti-sm"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-xl-3">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-start">
                <div>
                    <span>Resolved</span>
                    <h3 class="my-2">55</h3>
                </div>
                <span class="avatar-initial rounded bg-label-success">
                    <i class="ti ti-check ti-sm"></i>
                </span>
            </div>
        </div>
    </div>
</div>

{{-- Ticket Table --}}
<div class="card">
    <div class="card-header border-bottom d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Daftar Ticket</h5>
        <button class="btn btn-primary btn-sm">
            <i class="ti ti-plus me-1"></i> Buat Ticket
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Customer</th>
                    <th>Issue</th>
                    <th>Status</th>
                    <th>Assigned To</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                {{-- Dummy data manual --}}
                <tr>
                    <td>1</td>
                    <td>Andi Pratama</td>
                    <td>
                        <a href="{{ route('ticket.show', 1) }}" class="fw-semibold text-primary">
                            Gagal bayar tiket
                        </a>
                    </td>
                    <td><span class="badge bg-warning">Open</span></td>
                    <td>CS - Rina</td>
                    <td>2025-01-10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Siti Rahma</td>
                    <td>Tiket tidak muncul</td>
                    <td><span class="badge bg-info">In Progress</span></td>
                    <td>CS - Budi</td>
                    <td>2025-01-09</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Fajar Nugroho</td>
                    <td>Refund belum diterima</td>
                    <td><span class="badge bg-success">Resolved</span></td>
                    <td>CS - Rina</td>
                    <td>2025-01-08</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection