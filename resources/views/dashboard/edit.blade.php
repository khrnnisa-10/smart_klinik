@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Materi</h2>
    <form action="{{ route('materi.update', $materi->materi_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" name="judul" class="form-control" value="{{ $materi->judul }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $materi->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label>File URL</label>
            <input type="text" name="file_url" class="form-control" value="{{ $materi->file_url }}" required>
        </div>
        <div class="mb-3">
            <label>Tipe Materi</label>
            <select name="tipe_materi" class="form-control" required>
                <option value="pdf" {{ $materi->tipe_materi == 'pdf' ? 'selected' : '' }}>PDF</option>
                <option value="video" {{ $materi->tipe_materi == 'video' ? 'selected' : '' }}>Video</option>
                <option value="ppt" {{ $materi->tipe_materi == 'ppt' ? 'selected' : '' }}>PPT</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
