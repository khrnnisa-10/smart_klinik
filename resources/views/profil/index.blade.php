@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-header bg-gradient text-white" style="background: linear-gradient(to right, #e83e8c, #ad1457);">
            <h4 class="mb-0"><i class="bi bi-person-circle me-2"></i> Profil Saya</h4>
        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-3 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" 
                         alt="Avatar" 
                         class="rounded-circle mb-3" 
                         width="120">
                    <h5>{{ $user->name }}</h5>
                    <p class="text-muted mb-0">{{ $user->email }}</p>
                </div>

                <div class="col-md-9">
                    <table class="table table-borderless mt-3">
                        <tr>
                            <th style="width: 30%;">Nama Lengkap</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Bergabung</th>
                            <td>{{ $user->created_at ? $user->created_at->format('d M Y') : '-' }}</td>
                        </tr>
                        <tr>
                            <th>Status Akun</th>
                            <td><span class="badge bg-success">Aktif</span></td>
                        </tr>
                    </table>

                    <div class="mt-4">
                        <a href="#" class="btn btn-outline-danger me-2">
                            <i class="bi bi-pencil-square me-1"></i> Edit Profil
                        </a>
                        <a href="#" class="btn btn-outline-secondary">
                            <i class="bi bi-shield-lock me-1"></i> Ubah Password
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
