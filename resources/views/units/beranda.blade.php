@extends('layouts.app')

@section('content')
<style>
    /* ======== HERO SECTION TANPA KOTAK ======== */
   .hero-section {
    position: relative;
    background: 
        linear-gradient(135deg, rgba(0, 180, 150, 0.7), rgba(0, 230, 180, 0.7)),
        url("{{ asset('img/foto.jpg') }}")
        center/50% no-repeat;
    color: white;
    text-align: center;
    padding: 180px 20px;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

    /* ======== TEKS UTAMA ======== */
    .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        animation: fadeInDown 1.5s ease;
    }

    .hero-section h1 span {
        color: #A7FFEB;
    }

    .hero-section p {
        font-size: 1.25rem;
        margin-top: 15px;
        color: #f1f1f1;
        animation: fadeInUp 2s ease;
    }

    /* ======== TOMBOL ======== */
    .hero-buttons {
        margin-top: 30px;
        animation: fadeIn 2.5s ease;
    }

    .hero-buttons .btn {
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: 600;
        margin: 10px;
        transition: 0.3s ease;
    }

    .btn-primary-custom {
        background-color: #009688;
        color: white;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 150, 136, 0.5);
    }

    .btn-primary-custom:hover {
        background-color: #00796B;
        box-shadow: 0 6px 18px rgba(0, 150, 136, 0.6);
    }

    .btn-outline-light {
        border: 2px solid white;
        color: white;
    }

    .btn-outline-light:hover {
        background-color: white;
        color: #00796B;
    }

    .btn-danger {
        background-color: #E53935;
        border: none;
        color: white;
    }

    .btn-danger:hover {
        background-color: #B71C1C;
    }

    /* ======== ANIMASI ======== */
    @keyframes fadeInDown {
        from { opacity: 0; transform: translateY(-30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* ======== RESPONSIVE ======== */
    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 2.3rem;
        }
        .hero-section p {
            font-size: 1rem;
        }
        .hero-buttons .btn {
            width: 100%;
            max-width: 250px;
        }
    }
</style>

<!-- ======== HERO SECTION ======== -->
<section class="hero-section">
    <h1>Jaga Kesehatanmu <span>Setiap Hari</span></h1>
    <p>Konsultasi online dengan dokter profesional untuk hidup yang lebih sehat 🌿</p>

    <div class="hero-buttons">
        @guest
            <a href="{{ route('login') }}" class="btn btn-primary-custom">Masuk</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light">Daftar Sekarang</a>
        @else
            <a href="{{ url('/konsultasi') }}" class="btn btn-primary-custom">Mulai Konsultasi</a>
            <a href="{{ url('/layanan') }}" class="btn btn-outline-light">Lihat Layanan</a>
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        @endguest
    </div>
</section>
@endsection