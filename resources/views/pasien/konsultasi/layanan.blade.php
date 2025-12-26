@extends('layouts.pasien')

@section('content')
<div class="text-center mb-5">
    <h2 class="fw-bold text-danger">Layanan Kami</h2>
    <p>Kami menyediakan berbagai layanan kebidanan profesional untuk ibu, bayi, dan keluarga Anda.</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-4 mb-4">
        <div class="card shadow border-danger">
            <div class="card-body text-center">
                <h5 class="card-title text-danger fw-bold">Konsultasi Kehamilan</h5>
                <p class="card-text">Dapatkan saran dan pendampingan dari bidan berpengalaman selama masa kehamilan.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow border-danger">
            <div class="card-body text-center">
                <h5 class="card-title text-danger fw-bold">Pemeriksaan Bayi & Anak</h5>
                <p class="card-text">Pantau tumbuh kembang anak Anda dengan pemeriksaan rutin bersama bidan profesional.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow border-danger">
            <div class="card-body text-center">
                <h5 class="card-title text-danger fw-bold">Edukasi Ibu & Anak</h5>
                <p class="card-text">Ikuti kelas edukatif tentang kesehatan ibu, bayi, dan nutrisi keluarga.</p>
            </div>
        </div>
    </div>
</div>
@endsection
