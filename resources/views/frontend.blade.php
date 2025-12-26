<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Digital Clinic 4.0</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --primary:#1e5eff;
    --secondary:#00c2ff;
    --bg-dark:#0f172a;
    --bg-soft:#111827;
    --card:#ffffff;
    --text:#e5e7eb;
    --muted:#9ca3af;
    --success:#22c55e;
    --danger:#ef4444;
}

/* RESET */
*{margin:0;padding:0;box-sizing:border-box}

/* BODY */
body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(180deg,var(--bg-dark),var(--bg-soft));
    color:var(--text);
}

/* ================= NAVBAR ================= */
header{
    background:rgba(15,23,42,.9);
    backdrop-filter: blur(12px);
    border-bottom:1px solid rgba(255,255,255,.05);
    position:sticky;
    top:0;
    z-index:100;
}

.navbar{
    max-width:1200px;
    margin:auto;
    padding:16px 24px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.brand{
    display:flex;
    align-items:center;
    gap:14px;
}

.logo{
    width:48px;height:48px;
    border-radius:14px;
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:700;
    color:#fff;
}

.brand h1{
    font-size:18px;
    font-weight:700;
}

/* BUTTON */
.btn{
    padding:10px 18px;
    border-radius:10px;
    font-weight:600;
    text-decoration:none;
    transition:.3s;
}

.btn-primary{
    background:linear-gradient(135deg,var(--primary),var(--secondary));
    color:#fff;
}

.btn-outline{
    border:1.5px solid var(--secondary);
    color:var(--secondary);
}

.btn:hover{
    transform:translateY(-2px);
    box-shadow:0 10px 25px rgba(0,194,255,.35);
}

/* ================= HERO ================= */
.hero{
    padding:90px 20px;
}

.hero-inner{
    max-width:1200px;
    margin:auto;
    display:grid;
    grid-template-columns:1.1fr .9fr;
    gap:50px;
    align-items:center;
}

.hero h2{
    font-size:42px;
    margin-bottom:18px;
    line-height:1.3;
}

.hero p{
    color:var(--muted);
    margin-bottom:28px;
    font-size:16px;
}

.hero img{
    width:100%;
    border-radius:22px;
    box-shadow:0 25px 60px rgba(0,0,0,.6);
}

/* ================= SECTION ================= */
.section{
    padding:80px 20px;
}

.section-title{
    text-align:center;
    font-size:32px;
    margin-bottom:50px;
    font-weight:700;
}

/* ================= SERVICES ================= */
.services{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));
    gap:30px;
}

.service{
    background:rgba(255,255,255,.05);
    border:1px solid rgba(255,255,255,.08);
    padding:30px;
    border-radius:20px;
    text-align:center;
    transition:.3s;
}

.service:hover{
    transform:translateY(-8px);
    box-shadow:0 25px 50px rgba(0,194,255,.25);
}

.service i{
    font-size:40px;
    color:var(--secondary);
    margin-bottom:18px;
}

.service h4{
    font-size:18px;
    font-weight:600;
}

/* ================= MONITORING ================= */
.monitoring{
    background:rgba(255,255,255,.02);
}

.room-grid{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:30px;
}

.room{
    background:#fff;
    color:#1f2937;
    border-radius:22px;
    padding:26px;
    box-shadow:0 20px 50px rgba(0,0,0,.25);
}

.room h4{
    font-weight:700;
    margin-bottom:18px;
}

.sensor{
    display:flex;
    justify-content:space-between;
    margin-bottom:12px;
    font-size:14px;
}

.badge{
    padding:6px 12px;
    border-radius:8px;
    font-weight:600;
    font-size:13px;
}

.safe{background:#e7f9ef;color:var(--success)}
.alert{background:#fee2e2;color:var(--danger)}

/* ================= TECH ================= */
.tech{
    background:linear-gradient(135deg,#020617,#020617);
}

.tech-grid{
    max-width:1100px;
    margin:auto;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:35px;
    text-align:center;
}

.tech-grid i{
    font-size:46px;
    color:var(--secondary);
    margin-bottom:12px;
}

/* ================= FOOTER ================= */
footer{
    background:#020617;
    color:#9ca3af;
    text-align:center;
    padding:35px;
    font-size:14px;
}

@media(max-width:900px){
    .hero-inner{grid-template-columns:1fr;text-align:center}
}
</style>
</head>

<body>

<header>
<nav class="navbar">
<div class="brand">
<div class="logo">IoT</div>
<h1>Smart Clinic 4.0</h1>
</div>

<div>
<a href="{{ route('login') }}" class="btn btn-outline">Masuk</a>
<a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
</div>
</nav>
</header>

<section class="hero">
<div class="hero-inner">
<div>
<h2>Smart Digital Clinic<br>Berbasis IoT</h2>
<p>
Monitoring suhu, asap, dan kondisi ruangan pasien secara <b>real-time</b>
untuk keamanan & kenyamanan klinik modern.
</p>
<a href="{{ url('/dashboard') }}" class="btn btn-primary">Buka Dashboard</a>
</div>

<img src="{{ asset('images/klinik.jpg') }}" alt="Klinik">
</div>
</section>

<section class="section">
<h3 class="section-title">Layanan Klinik</h3>

<div class="services">
<div class="service">
<i class="fas fa-user-nurse"></i>
<h4>Konsultasi Digital</h4>
</div>
<div class="service">
<i class="fas fa-baby"></i>
<h4>Pemeriksaan Bayi</h4>
</div>
<div class="service">
<i class="fas fa-heartbeat"></i>
<h4>Monitoring Pasien</h4>
</div>
</div>
</section>

<section class="section monitoring">
<h3 class="section-title">Monitoring Ruangan (IoT)</h3>

<div class="room-grid">
@foreach($sensorData as $roomName => $data)
<div class="room">
<h4>{{ $roomName }}</h4>

<div class="sensor">
🌡 Suhu
<span class="badge safe">{{ $data['temperature'] }}°C</span>
</div>

<div class="sensor">
💧 Kelembaban
<span class="badge safe">{{ $data['humidity'] }}%</span>
</div>

<div class="sensor">
💨 Asap
<span class="badge {{ $data['smokeStatus']=='Aman'?'safe':'alert' }}">
{{ $data['smokeStatus'] }}
</span>
</div>
</div>
@endforeach
</div>
</section>

<section class="section tech">
<h3 class="section-title">Teknologi Klinik 4.0</h3>

<div class="tech-grid">
<div><i class="fas fa-microchip"></i><p>ESP32</p></div>
<div><i class="fas fa-cloud"></i><p>Cloud IoT</p></div>
<div><i class="fas fa-chart-line"></i><p>Realtime Data</p></div>
<div><i class="fas fa-bell"></i><p>Notifikasi Darurat</p></div>
</div>
</section>

<footer>
<p>© {{ date('Y') }} Smart Digital Clinic 4.0</p>
</footer>

<script>
setTimeout(()=>location.reload(),5000);
</script>

</body>
</html>
