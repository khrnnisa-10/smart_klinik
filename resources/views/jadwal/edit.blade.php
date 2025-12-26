@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mentor</h1>

    <form action="{{ route('mentor.update', $mentor->mentor_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $mentor->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" value="{{ $mentor->kontak }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" value="{{ $mentor->keahlian }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('mentor.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
