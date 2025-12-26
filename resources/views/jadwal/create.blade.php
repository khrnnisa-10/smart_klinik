@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mentor</h1>

    <form action="{{ route('mentor.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('mentor.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
