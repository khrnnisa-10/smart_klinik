<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title','Smart Clinic 4.0')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root{
            --primary:#0b3c5d;     /* Biru Gelap */
            --secondary:#145da0;   /* Biru Medium */
            --accent:#1f7fd1;      /* Biru Muda */
            --bg:#f2f5f9;
            --text:#1f2937;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:var(--bg);
            color:var(--text);
        }

        /* ================= NAVBAR ================= */
        .navbar{
            background:linear-gradient(135deg,var(--primary),var(--secondary));
            box-shadow:0 8px 25px rgba(0,0,0,.25);
        }

        .navbar-brand{
            font-weight:700;
            letter-spacing:.5px;
        }

        /* ================= SIDEBAR ================= */
        .sidebar{
            min-height:100vh;
            background:#ffffff;
            border-right:1px solid #e5e7eb;
            padding-top:18px;
        }

        .sidebar a{
            display:flex;
            align-items:center;
            gap:12px;
            padding:12px 18px;
            margin:6px 12px;
            border-radius:12px;
            color:#334155;
            font-weight:500;
            text-decoration:none;
            transition:.25s;
        }

        .sidebar a i{
            font-size:18px;
        }

        .sidebar a:hover{
            background:rgba(20,93,160,.08);
            color:var(--secondary);
        }

        .sidebar a.active{
            background:linear-gradient(135deg,var(--primary),var(--secondary));
            color:#fff;
            box-shadow:0 10px 25px rgba(11,60,93,.35);
        }

        /* ================= CONTENT ================= */
        .dashboard-content{
            padding:30px;
        }

        /* ================= FOOTER ================= */
        footer{
            background:linear-gradient(135deg,var(--primary),var(--secondary));
            color:#fff;
            text-align:center;
            padding:14px;
            font-size:14px;
        }

        @media(max-width:768px){
            .sidebar{
                min-height:auto;
            }
        }
    </style>

    @stack('styles')
</head>
<body>

{{-- ================= NAVBAR ================= --}}
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <i class="bi bi-heart-pulse-fill me-2"></i> Smart Clinic 4.0
        </a>

        <div class="ms-auto d-flex align-items-center gap-3">
            <span class="text-white fw-semibold">
                {{ Auth::user()->name ?? '' }}
            </span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-light btn-sm rounded-pill px-3">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

{{-- ================= BODY ================= --}}
<div class="container-fluid">
    <div class="row">

        {{-- SIDEBAR --}}
        <div class="col-lg-2 col-md-3 sidebar p-0">

            <a href="{{ route('dashboard') }}"
               class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Beranda
            </a>

            <a href="{{ route('monitor.iot') }}"
               class="{{ request()->is('monitor-iot*') ? 'active' : '' }}">
                <i class="bi bi-activity"></i> Monitoring IoT
            </a>

            <a href="{{ route('antrian.index') }}"
               class="{{ request()->is('antrian*') ? 'active' : '' }}">
                <i class="bi bi-list-ol"></i> Antrian Klinik
            </a>

            <a href="{{ route('konsultasi.index') }}"
               class="{{ request()->is('konsultasi*') ? 'active' : '' }}">
                <i class="bi bi-chat-dots"></i> Konsultasi Digital
            </a>

            <a href="{{ route('edukasi.index') }}"
               class="{{ request()->is('edukasi*') ? 'active' : '' }}">
                <i class="bi bi-book"></i> Edukasi
            </a>

            <a href="{{ route('profil.index') }}"
               class="{{ request()->is('profil*') ? 'active' : '' }}">
                <i class="bi bi-person"></i> Profil
            </a>

        </div>

        {{-- CONTENT --}}
        <div class="col-lg-10 col-md-9 dashboard-content">
            @yield('content')
        </div>

    </div>
</div>

<footer>
    © {{ date('Y') }} Smart Clinic 4.0 — IoT Monitoring System
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
