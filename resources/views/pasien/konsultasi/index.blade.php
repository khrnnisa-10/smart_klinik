@extends('layouts.app')

@section('content')
<h3 class="mb-3">Data Konsultasi</h3>

<a href="{{ route('konsultasi.create') }}" class="btn btn-primary mb-3">
    Tambah Konsultasi
</a>
<a href="{{ route('konsultasi.export.pdf') }}" class="btn btn-danger mb-3">
    Cetak PDF
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="bg-dark text-white">
        <tr>
            <th>#</th>
            <th>Nama dokter</th>
            <th>Topik</th>
            <th>Tanggal</th>
            <th>Deskripsi</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($konsultasi as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->nama_dokter }}</td>
            <td>{{ $item->topik }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>
                <span class="badge bg-warning">
                    {{ $item->status }}
                </span>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center text-muted">
                Belum ada data konsultasi
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
