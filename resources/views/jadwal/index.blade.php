@extends('layouts.app')

@section('title', 'Jadwal Bidan')

@section('content')
<div class="container py-4">
    <h2 class="text-primary mb-4">Jadwal Bidan</h2>

    <table class="table table-hover table-bordered">
        <thead class="table-info">
            <tr class="text-center">
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Bidan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jadwals as $jadwal)
            <tr class="text-center">
                <td>{{ $jadwal->tanggal }}</td>
                <td>{{ $jadwal->waktu }}</td>
                <td>{{ $jadwal->bidan }}</td>
                <td>
                    <span class="badge bg-{{ $jadwal->status == 'tersedia' ? 'success' : 'secondary' }}">
                        {{ ucfirst($jadwal->status) }}
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
