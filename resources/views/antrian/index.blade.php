@extends('layouts.app')

@section('title', 'Antrian Klinik')

@section('content')
<div class="container">

    <h3 class="fw-bold mb-4">📋 Antrian Klinik</h3>

    <div class="card mb-4 shadow">
        <div class="card-body text-center">
            <h6 class="text-muted">Sedang Dipanggil</h6>
            <h1 class="display-4 fw-bold text-primary">
                {{ $antrianSekarang->nomor ?? '-' }}
            </h1>
            <p>Jumlah menunggu: <strong>{{ $menunggu }}</strong></p>
        </div>
    </div>

    {{-- AMBIL ANTRIAN --}}
    <form method="POST" action="{{ route('antrian.ambil') }}">
        @csrf
        <input type="hidden" name="nama" value="{{ Auth::user()->name }}">
        <button class="btn btn-success btn-lg w-100 mb-3">
            ➕ Ambil Antrian
        </button>
    </form>

    {{-- PANGGIL (PETUGAS) --}}
    <form method="POST" action="{{ route('antrian.panggil') }}">
        @csrf
        <button class="btn btn-danger w-100">
            📣 Panggil Antrian Berikutnya
        </button>
    </form>

</div>
@endsection
