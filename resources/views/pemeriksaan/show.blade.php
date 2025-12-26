@extends('layouts.dashboard')

@section('title', 'Detail Pemeriksaan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3 text-center">🩺 Detail Pemeriksaan</h2>

    @if(isset($pemeriksaan))
        <div class="card shadow-sm p-4">
            <p><strong>Tanggal Pemeriksaan:</strong> {{ $pemeriksaan->tanggal ?? '-' }}</p>
            <p><strong>Nama dokter:</strong> {{ $pemeriksaan->dokter ?? '-' }}</p>
            <p><strong>Catatan Pemeriksaan:</strong></p>
            <div class="border rounded p-3 bg-light">
                {{ $pemeriksaan->catatan ?? 'Tidak ada catatan.' }}
            </div>
        </div>
    @else
        <div class="alert alert-danger text-center">
            Data pemeriksaan tidak ditemukan.
        </div>
    @endif

    <div class="mt-3 text-center">
        <a href="{{ route('pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection
