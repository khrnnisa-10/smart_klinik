@extends('layouts.app')

@section('title', 'Monitoring Kamar Pasien')

@section('content')
<style>
    :root{
        --primary:#0D47A1;
        --secondary:#1976D2;
        --accent:#26A69A;
        --bg:#F4F7FB;
        --card:#FFFFFF;
        --text:#1F2937;
        --muted:#6B7280;
    }

    body{
        background:var(--bg);
    }

    /* HEADER */
    .page-header{
        background:linear-gradient(135deg,var(--primary),var(--secondary));
        color:#fff;
        border-radius:18px;
        padding:28px 32px;
        box-shadow:0 20px 45px rgba(13,71,161,.35);
    }

    /* ROOM CARD */
    .room-card{
        background:var(--card);
        border-radius:18px;
        border:1px solid #e5e7eb;
        transition:.3s ease;
        height:100%;
    }

    .room-card:hover{
        transform:translateY(-6px);
        box-shadow:0 20px 40px rgba(0,0,0,.08);
        border-color:var(--primary);
    }

    .room-link{
        text-decoration:none;
        color:inherit;
    }

    .room-icon{
        width:80px;
        height:80px;
        border-radius:18px;
        display:flex;
        align-items:center;
        justify-content:center;
        margin:0 auto 16px;
        background:linear-gradient(135deg,var(--primary),var(--secondary));
        color:#fff;
        font-size:34px;
        box-shadow:0 12px 30px rgba(13,71,161,.35);
        transition:.3s ease;
    }

    .room-card:hover .room-icon{
        transform:scale(1.08);
    }

    .room-title{
        font-weight:600;
        color:var(--text);
    }

    .room-sub{
        font-size:14px;
        color:var(--muted);
    }

    .room-btn{
        margin-top:18px;
        border-radius:30px;
        padding:8px 22px;
        font-size:14px;
        font-weight:600;
        background:var(--primary);
        border:none;
    }

    .room-btn:hover{
        background:var(--secondary);
    }
</style>

<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="page-header mb-5">
        <h3 class="fw-bold mb-1">
            🏥 Monitoring Kamar Pasien
        </h3>
        <p class="mb-0 opacity-75">
            Sistem pemantauan kamar pasien berbasis IoT – Smart Clinic 4.0
        </p>
    </div>

    {{-- GRID KAMAR --}}
    <div class="row g-4">

        @forelse($rooms as $room)
        <div class="col-xl-4 col-md-6">

            <a href="{{ url('/monitor-iot/kamar/'.$room['id']) }}" class="room-link">
                <div class="room-card p-4 text-center">

                    <div class="room-icon">
                        <i class="bi bi-door-closed"></i>
                    </div>

                    <h5 class="room-title mb-1">
                        {{ $room['nama'] }}
                    </h5>

                    <div class="room-sub">
                        Ruang Perawatan Pasien
                    </div>

                    <button class="btn room-btn text-white">
                        Lihat Detail Kamar
                    </button>

                </div>
            </a>

        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-warning text-center rounded-4 py-4">
                Data kamar belum tersedia
            </div>
        </div>
        @endforelse

    </div>

    <div class="mt-5 text-end text-muted small">
        Smart Clinic 4.0 • {{ now()->format('d M Y H:i') }}
    </div>

</div>
@endsection
