@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Materi</h2>
    <form action="{{ route('materi.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>File URL</label>
            <input type="text" name="file_url" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tipe Materi</label>
            <select name="tipe_materi" class="form-control" required>
                <option value="pdf">PDF</option>
                <option value="video">Video</option>
                <option value="ppt">PPT</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
