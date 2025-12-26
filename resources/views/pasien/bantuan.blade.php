@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h3 class="mb-4">Bantuan / Hubungi Admin</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Kirim Bantuan -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            Kirim Pesan Bantuan
        </div>
        <div class="card-body">
            <form action="{{ route('bantuan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Judul Pesan</label>
                    <input type="text" name="judul" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Isi Pesan</label>
                    <textarea name="pesan" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>
    </div>

    <!-- Riwayat Bantuan -->
    <div class="card">
        <div class="card-header bg-secondary text-white">
            Riwayat Pesan Bantuan
        </div>
        <div class="card-body">
            @if($bantuan->isEmpty())
                <p class="text-muted">Belum ada pesan bantuan.</p>
            @else
                <ul class="list-group">
                    @foreach($bantuan as $item)
                        <li class="list-group-item">
                            <strong>{{ $item->judul }}</strong>
                            <p class="mb-1">{{ $item->pesan }}</p>
                            <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
