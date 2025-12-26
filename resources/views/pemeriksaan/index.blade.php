@extends('layouts.dashboard')

@section('title', 'Riwayat Pemeriksaan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-center">🩺 Riwayat Pemeriksaan Anda</h2>

    @if(isset($pemeriksaans) && count($pemeriksaans) > 0)
        <table class="table table-bordered table-striped">
            <thead class="table-primary">
                <tr>
                    <th>No</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Nama dokter</th>
                    <th>Catatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pemeriksaans as $key => $pemeriksaan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $pemeriksaan->tanggal ?? '-' }}</td>
                        <td>{{ $pemeriksaan->dokter ?? '-' }}</td>
                        <td>{{ Str::limit($pemeriksaan->catatan, 50) }}</td>
                        <td>
                            <a href="{{ route('pemeriksaan.show', $pemeriksaan->id) }}" class="btn btn-sm btn-info">
                                Detail
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning text-center">
            Belum ada data pemeriksaan.
        </div>
    @endif
</div>
@endsection
