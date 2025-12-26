@extends('layouts.app')

@section('content')
<h3 class="mb-3">Tambah Reservasi</h3>

<form action="{{ route('reservasi.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama Pasien</label>
        <input type="text" name="nama_pasien" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Jenis Konsultasi</label>
        <select name="jenis_konsultasi" class="form-control" required>
            <option value="Kehamilan">Kehamilan</option>
            <option value="Bayi & Anak">Bayi & Anak</option>
            <option value="Konsultasi Dokter">Konsultasi Dokter</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Tanggal Reservasi</label>
        <input type="date" name="tanggal_reservasi" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Waktu</label>
        <input type="time" name="waktu" class="form-control" required>
    </div>

    <button class="btn btn-success">Simpan</button>
</form>
@endsection
