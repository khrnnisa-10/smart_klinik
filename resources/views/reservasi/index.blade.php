@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-3">Jadwal & Reservasi Konsultasi</h3>

    <div class="mb-3">
        <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Tambah Reservasi</a>
        <a href="{{ route('reservasi.pdf') }}" target="_blank" class="btn btn-danger">Cetak PDF</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th>#</th>
                <th>Nama Pasien</th>
                <th>Jenis Konsultasi</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reservasis as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_pasien }}</td>
                    <td>{{ $item->jenis_konsultasi }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_reservasi)->format('d-m-Y') }}</td>
                    <td>{{ $item->waktu }}</td>
                    <td>
                        @if($item->status == 'Menunggu')
                            <span class="badge bg-warning">{{ $item->status }}</span>
                        @elseif($item->status == 'Selesai')
                            <span class="badge bg-success">{{ $item->status }}</span>
                        @elseif($item->status == 'Dibatalkan')
                            <span class="badge bg-danger">{{ $item->status }}</span>
                        @else
                            <span class="badge bg-secondary">{{ $item->status }}</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-danger">Belum ada reservasi.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
