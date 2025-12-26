@extends('layouts.app')

@section('title', 'Informasi Klinik')

@section('content')
<div class="container-fluid py-4">

    {{-- Header --}}
    <div class="mb-4">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-info-circle me-2"></i> Informasi Smart Digital Clinic 4.0
        </h2>
        <p class="text-muted">
            Profil, layanan, teknologi, dan sistem keselamatan klinik berbasis IoT
        </p>
    </div>

    {{-- Grid Informasi --}}
    <div class="row g-4">

        @foreach ($infos as $info)
        <div class="col-lg-4 col-md-6">
            <div class="card h-100 shadow-sm border-0">

                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-primary bg-opacity-10 p-3 rounded me-3">
                            <i class="bi {{ $info['ikon'] }} text-primary fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">{{ $info['judul'] }}</h5>
                            <small class="text-muted">{{ $info['kategori'] }}</small>
                        </div>
                    </div>

                    <p class="text-muted">
                        {{ $info['deskripsi'] }}
                    </p>
                </div>

            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection
