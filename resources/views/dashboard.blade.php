@extends('layouts.app')

@section('title', 'Smart Clinic 4.0')

@section('content')
<div class="container-fluid py-4">

    {{-- ================= HERO ================= --}}
    <div class="p-5 mb-5 rounded-4 text-white shadow"
        style="background: linear-gradient(135deg,#0a2a66,#0b3c8a,#0d6efd);">
        <h1 class="fw-bold mb-2">🏥 Smart Clinic 4.0</h1>
        <p class="fs-5 mb-3 opacity-90">
            Sistem Klinik Pintar berbasis <b>Internet of Things (IoT)</b>
            untuk meningkatkan <b>keselamatan pasien</b> dan
            <b>tenaga medis</b>.
        </p>
        <span class="badge bg-light text-dark px-4 py-2 shadow-sm">
            🟢 Sistem Monitoring Aktif
        </span>
    </div>

    {{-- ================= STATISTIK RINGKAS ================= --}}
    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="bi bi-thermometer-half fs-1 text-danger mb-2"></i>
                <h6 class="text-muted">Sensor Suhu</h6>
                <h3 class="fw-bold text-danger">Realtime</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="bi bi-fire fs-1 text-warning mb-2"></i>
                <h6 class="text-muted">Sensor Api</h6>
                <h3 class="fw-bold text-warning">Aktif 24 Jam</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="bi bi-cloud-check fs-1 text-success mb-2"></i>
                <h6 class="text-muted">Status Sistem</h6>
                <h3 class="fw-bold text-success">Aman & Stabil</h3>
            </div>
        </div>

    </div>

    {{-- ================= PENJELASAN SENSOR ================= --}}
    <div class="row g-4 mb-5">

        {{-- SENSOR SUHU --}}
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold text-primary mb-3">
                        🌡️ Sensor Suhu Ruangan
                    </h4>
                    <p class="text-muted">
                        Sensor suhu digunakan untuk memantau kondisi suhu
                        ruangan klinik secara <b>real-time</b>.
                        Jika suhu melebihi batas aman, sistem akan:
                    </p>
                    <ul class="text-muted">
                        <li>Mendeteksi kenaikan suhu abnormal</li>
                        <li>Memberikan peringatan dini</li>
                        <li>Membantu mencegah risiko kesehatan pasien</li>
                    </ul>
                    <span class="badge bg-danger">
                        Threshold: ≥ 38°C
                    </span>
                </div>
            </div>
        </div>

        {{-- SENSOR API --}}
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="fw-bold text-warning mb-3">
                        🔥 Sensor Api
                    </h4>
                    <p class="text-muted">
                        Sensor api berfungsi untuk mendeteksi adanya
                        <b>nyala api atau indikasi kebakaran</b>
                        di area klinik.
                    </p>
                    <ul class="text-muted">
                        <li>Mendeteksi api sejak dini</li>
                        <li>Mengurangi risiko kebakaran besar</li>
                        <li>Meningkatkan keselamatan ruangan klinik</li>
                    </ul>
                    <span class="badge bg-warning text-dark">
                        Deteksi Otomatis
                    </span>
                </div>
            </div>
        </div>

    </div>

    {{-- ================= TENTANG SISTEM ================= --}}
    <div class="p-4 rounded-4 border mb-4"
         style="background:#f0f4fb;">
        <h5 class="fw-bold mb-2" style="color:#0a2a66;">
            ℹ️ Tentang Smart Clinic 4.0
        </h5>
        <p class="mb-0 text-muted">
            Smart Clinic 4.0 dikembangkan sebagai solusi klinik digital
            dalam kegiatan <b>Bootcamp / Hackathon</b>,
            mengintegrasikan teknologi IoT dengan sistem informasi
            untuk menciptakan lingkungan klinik yang
            <b>aman, modern, dan responsif</b>.
        </p>
    </div>

    {{-- ================= FOOTER ================= --}}
    <div class="text-center text-muted small">
        Smart Clinic 4.0 © {{ date('Y') }} • IoT Monitoring System  
        <br>
        Last update: {{ now()->format('d M Y H:i:s') }}
    </div>

</div>
@endsection
