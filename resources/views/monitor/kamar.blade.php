@extends('layouts.app')

@section('title', 'Detail Kamar Pasien')

@section('content')
<style>
    :root{
        --primary:#0b3c8c;     /* biru gelap utama */
        --secondary:#062a63;   /* biru navy */
        --bg:#f3f6fb;
    }

    body{
        background:var(--bg);
    }

    /* HEADER */
    .detail-header{
        background:linear-gradient(135deg,var(--primary),var(--secondary));
        color:#fff;
        border-radius:20px;
        padding:28px 32px;
        box-shadow:0 18px 40px rgba(11,60,140,.45);
        margin-bottom:30px;
    }

    /* SENSOR CARD */
    .sensor-card{
        background:#ffffff;
        border-radius:18px;
        padding:26px;
        text-align:center;
        box-shadow:0 12px 28px rgba(0,0,0,.08);
        transition:.25s ease;
        height:100%;
        border:1px solid #e5ebf5;
    }

    .sensor-card:hover{
        transform:translateY(-5px);
        box-shadow:0 20px 45px rgba(0,0,0,.14);
    }

    .sensor-icon{
        width:66px;
        height:66px;
        border-radius:18px;
        display:flex;
        align-items:center;
        justify-content:center;
        margin:0 auto 14px;
        font-size:30px;
        color:#fff;
        background:linear-gradient(135deg,var(--primary),var(--secondary));
        box-shadow:0 8px 20px rgba(11,60,140,.45);
    }

    /* STATUS BOX */
    .status-box{
        border-radius:18px;
        padding:22px;
        font-weight:600;
        margin-top:24px;
        box-shadow:0 10px 25px rgba(0,0,0,.1);
    }
</style>

<div class="container-fluid py-4">

    {{-- BACK --}}
    <a href="{{ route('monitor.iot') }}"
       class="btn btn-outline-primary mb-4 rounded-pill px-4">
        ← Kembali
    </a>

    {{-- HEADER --}}
    <div class="detail-header">
        <h4 class="fw-bold mb-1">
            <i class="bi bi-door-open"></i> {{ $room['nama'] }}
        </h4>
        <small class="opacity-75">
            Detail kondisi kamar pasien berbasis IoT — Smart Clinic 4.0
        </small>
    </div>

    {{-- SENSOR --}}
    <div class="row g-4">

        {{-- SUHU --}}
        <div class="col-md-4">
            <div class="sensor-card">
                <div class="sensor-icon">
                    <i class="bi bi-thermometer-half"></i>
                </div>
                <h6 class="text-muted">Suhu Ruangan</h6>
                <h2 class="fw-bold {{ $room['temperature'] >= 38 ? 'text-danger' : '' }}"
                    style="color:var(--primary)">
                    {{ $room['temperature'] }}°C
                </h2>
                <span class="badge {{ $room['temperature'] >= 38 ? 'bg-danger' : 'bg-success' }}">
                    {{ $room['temperature'] >= 38 ? 'Tinggi' : 'Normal' }}
                </span>
            </div>
        </div>

        {{-- ASAP --}}
        <div class="col-md-4">
            <div class="sensor-card">
                <div class="sensor-icon">
                    <i class="bi bi-cloud-haze2"></i>
                </div>
                <h6 class="text-muted">Status Asap</h6>
                <h4 class="fw-bold {{ $room['smoke'] == 'Bahaya' ? 'text-danger' : '' }}"
                    style="color:var(--primary)">
                    {{ $room['smoke'] }}
                </h4>
                <span class="badge {{ $room['smoke'] == 'Bahaya' ? 'bg-danger' : 'bg-success' }}">
                    {{ $room['smoke'] == 'Bahaya' ? 'Bahaya' : 'Aman' }}
                </span>
            </div>
        </div>

        {{-- API --}}
        <div class="col-md-4">
            <div class="sensor-card">
                <div class="sensor-icon">
                    <i class="bi bi-fire"></i>
                </div>
                <h6 class="text-muted">Sensor Api</h6>
                <h4 class="fw-bold {{ $room['fire'] ? 'text-danger' : '' }}"
                    style="color:var(--primary)">
                    {{ $room['fire'] ? 'TERDETEKSI' : 'AMAN' }}
                </h4>
                <span class="badge {{ $room['fire'] ? 'bg-danger' : 'bg-success' }}">
                    {{ $room['fire'] ? 'Bahaya' : 'Normal' }}
                </span>
            </div>
        </div>

    </div>

    {{-- STATUS GLOBAL --}}
    @if($room['fire'])
        <div class="alert alert-danger status-box mt-4">
            🚨 <strong>DARURAT!</strong><br>
            Api terdeteksi. Segera lakukan evakuasi dan hubungi petugas.
        </div>
    @elseif($room['temperature'] >= 38 || $room['smoke'] == 'Bahaya')
        <div class="alert alert-warning status-box mt-4">
            ⚠️ <strong>PERINGATAN!</strong><br>
            Suhu atau asap tinggi. Mohon lakukan pengecekan.
        </div>
    @else
        <div class="alert alert-success status-box mt-4">
            ✅ Kondisi kamar <strong>AMAN & TERKENDALI</strong>.
        </div>
    @endif

    <div class="text-end text-muted small mt-3">
        Last update: {{ now()->format('d M Y H:i:s') }}
    </div>

</div>
@endsection
