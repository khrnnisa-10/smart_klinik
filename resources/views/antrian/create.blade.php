@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
<h4 class="fw-bold mb-3">🎟 Ambil Antrian</h4>

<form method="POST" action="{{ route('antrian.store') }}">
@csrf

<input type="text" name="nama_pasien" class="form-control mb-3" placeholder="Nama Pasien" required>

<select name="layanan" class="form-control mb-3">
    <option>Konsultasi Umum</option>
    <option>KIA</option>
    <option>Pemeriksaan</option>
</select>

<button class="btn btn-primary w-100">
    Ambil Antrian
</button>
</form>
</div>
@endsection
