@extends('layouts.app')

@section('title', 'Riwayat Pemeriksaan')

@section('content')
<div class="container">
    <h2 class="mb-4"><i class="bi bi-clipboard2-heart me-2"></i> Riwayat Pemeriksaan Anda</h2>

    @if($riwayat->isEmpty())
        <div class="alert alert-info">
            <i class="bi bi-info-circle me-2"></i> Belum ada riwayat pemeriksaan yang tercatat.
        </div>
    @else
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="table-danger text-center">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama dokter</th>
                            <th>Jenis Pemeriksaan</th>
                            <th>Hasil</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($riwayat as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}</td>
                                <td>{{ $item->dokter }}</td>
                                <td>{{ $item->jenis }}</td>
                                <td>{{ $item->hasil }}</td>
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection