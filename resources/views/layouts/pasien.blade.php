<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samara Midwife Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #fff0f5; font-family: 'Poppins', sans-serif; }
        .navbar { background-color: #fff; border-bottom: 2px solid #ff66a3; }
        .navbar-brand, .nav-link { color: #ff007f !important; font-weight: 600; }
        .btn-outline-primary {
            color: #ff007f; border-color: #ff007f;
        }
        .btn-outline-primary:hover {
            background-color: #ff007f; color: white;
        }
        footer {
            background-color: #fff; border-top: 2px solid #ff66a3;
            padding: 10px; text-align: center; color: #777;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg px-4">
    <a class="navbar-brand" href="/">Samara Midwife Center</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ route('beranda') }}">Beranda</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('layanan') }}">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Bidan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Artikel</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
        <a class="btn btn-outline-primary ms-3" href="#">Samara Quolan Sadida</a>
    </div>
</nav>

<div class="container my-5">
    @yield('content')
</div>

<footer>
    <p>&copy; 2025 Samara Midwife Center. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
