@extends('layouts.app')

@section('content')
<h3>Tambah Konsultasi</h3>

<form action="{{ route('konsultasi.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Nama dokter</label>
        <input type="text" name="nama_dokter" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Topik</label>
        <input type="text" name="topik" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <button class="btn btn-success" type="submit">Simpan</button>
</form>
@endsection
