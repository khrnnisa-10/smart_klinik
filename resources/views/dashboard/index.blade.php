@extends('layouts.app')

@section('title', 'Smart Clinic 4.0')

@section('content')
<div class="container-fluid py-4">

    {{-- ================= HERO ================= --}}
    <div class="p-4 mb-4 rounded-4 text-white shadow"
        style="background: linear-gradient(135deg,#ff4d8d,#ff7eb3);">
        <h2 class="fw-bold mb-1">🏥 Smart Clinic 4.0</h2>
        <p class="mb-2">
            Sistem Klinik Pintar berbasis <b>Internet of Things (IoT)</b>
            untuk monitoring <b>suhu ruangan</b> dan <b>deteksi api</b>
            secara real-time demi keselamatan pasien dan tenaga medis.
        </p>
        <span class="badge bg-light text-dark px-3 py-2">
            🔴 Live Monitoring Aktif
        </span>
    </div>

    {{-- ================= HITUNG STATUS ================= --}}
    @php
        $totalKamar = count($rooms);
        $bahaya = collect($rooms)->contains(fn($r) => $r['api'] || $r['suhu'] >= 38);
        $kamarBahaya = collect($rooms)->filter(fn($r) => $r['api'] || $r['suhu'] >= 38)->count();
        $kamarAman = $totalKamar - $kamarBahaya;
    @endphp

    {{-- ================= STATISTIK CEPAT ================= --}}
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6 class="text-muted">Total Kamar</h6>
                <h3 class="fw-bold">{{ $totalKamar }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6 class="text-muted">Kondisi Aman</h6>
                <h3 class="fw-bold text-success">{{ $kamarAman }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6 class="text-muted">Perlu Perhatian</h6>
                <h3 class="fw-bold text-danger">{{ $kamarBahaya }}</h3>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm border-0 text-center p-3">
                <h6 class="text-muted">Sensor Aktif</h6>
                <h3 class="fw-bold text-primary">100%</h3>
            </div>
        </div>

    </div>

    {{-- ================= ALERT STATUS ================= --}}
    @if($bahaya)
        <div class="alert alert-danger">
            🚨 <b>PERINGATAN!</b>
            Terdeteksi suhu tinggi atau api pada salah satu ruangan.
            Silakan ikuti prosedur keselamatan klinik.
        </div>
    @else
        <div class="alert alert-success">
            ✅ Semua ruangan dalam kondisi <b>AMAN & TERKENDALI</b>.
        </div>
    @endif

    {{-- ================= MONITORING IOT ================= --}}
    <h5 class="fw-bold mb-3 mt-4">📡 Monitoring IoT Per Ruangan</h5>

    <div class="row g-4">

        @foreach($rooms as $room)
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">

                <div class="card-body">
                    <h5 class="fw-bold mb-3">{{ $room['nama'] }}</h5>

                    {{-- SUHU --}}
                    <p class="mb-1">🌡️ Suhu Ruangan</p>
                    <h4 class="{{ $room['suhu'] >= 38 ? 'text-danger' : 'text-success' }}">
                        {{ $room['suhu'] }}°C
                    </h4>
                    <span class="badge {{ $room['suhu'] >= 38 ? 'bg-danger' : 'bg-success' }}">
                        {{ $room['suhu'] >= 38 ? 'Suhu Tinggi' : 'Normal' }}
                    </span>

                    <hr>

                    {{-- KELEMBABAN --}}
                    <p class="mb-1">💧 Kelembaban</p>
                    <h5 class="text-primary">{{ $room['kelembaban'] }}%</h5>
                    <span class="badge bg-info">Stabil</span>

                    <hr>

                    {{-- API --}}
                    <p class="mb-1">🔥 Sensor Api</p>
                    <h5 class="{{ $room['api'] ? 'text-danger' : 'text-success' }}">
                        {{ $room['api'] ? 'BAHAYA' : 'AMAN' }}
                    </h5>
                    <span class="badge {{ $room['api'] ? 'bg-danger' : 'bg-success' }}">
                        {{ $room['api'] ? 'Api Terdeteksi' : 'Tidak Ada Api' }}
                    </span>
                </div>

            </div>
        </div>
        @endforeach

    </div>

    {{-- ================= PENJELASAN SISTEM ================= --}}
    <div class="mt-5 p-4 rounded-4 bg-light border">
        <h6 class="fw-bold">ℹ️ Tentang Smart Clinic 4.0</h6>
        <p class="mb-0 text-muted">
            Smart Clinic 4.0 adalah solusi klinik digital berbasis IoT
            yang dikembangkan dalam Bootcamp Hackathon untuk meningkatkan
            keselamatan pasien dan tenaga medis melalui monitoring suhu
            dan deteksi api secara real-time.
        </p>
    </div>

    {{-- ================= FOOTER ================= --}}
    <div class="mt-4 text-center text-muted small">
        Smart Clinic 4.0 © {{ date('Y') }} • IoT Monitoring System •
        Last update: {{ now()->format('d M Y H:i:s') }}
    </div>

</div>
@endsection
