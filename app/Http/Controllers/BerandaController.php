@extends('layouts.app')

@section('title', 'Smart Clinic 4.0')

@section('content')
<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="mb-4">
        <h3 class="fw-bold text-primary">
            🏥 Smart Clinic 4.0 – IoT Monitoring Dashboard
        </h3>
        <p class="text-muted">
            Sistem klinik pintar berbasis Internet of Things (IoT) untuk memantau
            <b>suhu ruangan</b> dan <b>deteksi api</b> secara real-time demi keselamatan pasien.
        </p>
    </div>

    <!-- STATUS KLINIK -->
    @php
        $statusBahaya = collect($rooms)->contains(fn($r) => $r['api'] || $r['suhu'] >= 38);
    @endphp

    <div class="alert {{ $statusBahaya ? 'alert-danger' : 'alert-success' }}">
        <strong>Status Klinik:</strong>
        {{ $statusBahaya ? 'PERLU PERHATIAN' : 'AMAN & TERKENDALI' }}
    </div>

    <!-- GRID KAMAR -->
    <div class="row g-4">

        @foreach($rooms as $room)
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">
                    <h5 class="fw-bold mb-3">{{ $room['nama'] }}</h5>

                    <!-- SUHU -->
                    <div class="mb-3">
                        <small class="text-muted">🌡️ Suhu Ruangan</small>
                        <h4 class="{{ $room['suhu'] >= 38 ? 'text-danger' : 'text-success' }}">
                            {{ $room['suhu'] }}°C
                        </h4>
                        <span class="badge {{ $room['suhu'] >= 38 ? 'bg-danger' : 'bg-success' }}">
                            {{ $room['suhu'] >= 38 ? 'Suhu Tinggi' : 'Normal' }}
                        </span>
                    </div>

                    <!-- KELEMBABAN -->
                    <div class="mb-3">
                        <small class="text-muted">💧 Kelembaban</small>
                        <h5 class="text-primary">
                            {{ $room['kelembaban'] }}%
                        </h5>
                        <span class="badge bg-info">Stabil</span>
                    </div>

                    <!-- API -->
                    <div class="mb-2">
                        <small class="text-muted">🔥 Sensor Api</small>
                        <h5 class="{{ $room['api'] ? 'text-danger' : 'text-success' }}">
                            {{ $room['api'] ? 'BAHAYA' : 'AMAN' }}
                        </h5>
                        <span class="badge {{ $room['api'] ? 'bg-danger' : 'bg-success' }}">
                            {{ $room['api'] ? 'Terdeteksi' : 'Tidak Ada Api' }}
                        </span>
                    </div>

                </div>

            </div>
        </div>
        @endforeach

    </div>

    <!-- FOOTER INFO -->
    <div class="mt-5 text-center text-muted small">
        Sistem Smart Clinic 4.0 • Monitoring IoT Realtime •
        Last update: {{ now()->format('d M Y H:i:s') }}
    </div>

</div>
@endsection
