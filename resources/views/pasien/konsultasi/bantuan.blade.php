@extends('layouts.pasien')

@section('title', 'Bantuan - Pasien')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm border-0">
        <div class="card-header bg-gradient text-white" style="background: linear-gradient(90deg, #e83e8c, #ad1457);">
            <h5 class="mb-0"><i class="bi bi-question-circle me-2"></i>Bantuan & Dukungan</h5>
        </div>
        <div class="card-body">
            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            {{-- Form kirim bantuan --}}
            <form action="{{ route('bantuan.store') }}" method="POST" class="mb-4">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Pertanyaan</label>
                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul') }}" placeholder="Contoh: Tidak bisa mengakses fitur konsultasi">
                    @error('judul') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label for="pesan" class="form-label">Isi Pesan</label>
                    <textarea name="pesan" id="pesan" rows="4" class="form-control" placeholder="Jelaskan permasalahan Anda...">{{ old('pesan') }}</textarea>
                    @error('pesan') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn text-white" style="background-color: #e83e8c;">
                    <i class="bi bi-send me-2"></i>Kirim Pesan
                </button>
            </form>

            <hr>

            {{-- Daftar pesan bantuan yang sudah dikirim --}}
            <h6 class="fw-bold text-secondary mb-3"><i class="bi bi-chat-left-text me-2"></i>Riwayat Pesan Anda</h6>
            @if($bantuan->isEmpty())
                <p class="text-muted">Belum ada pesan bantuan yang Anda kirim.</p>
            @else
                @foreach($bantuan as $item)
                    <div class="card mb-3 border-0 shadow-sm">
                        <div class="card-body">
                            <h6 class="fw-semibold text-primary">{{ $item->judul }}</h6>
                            <p class="mb-1">{{ $item->pesan }}</p>
                            <small class="text-muted">Dikirim pada {{ $item->created_at->translatedFormat('d F Y, H:i') }}</small>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
