@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="fw-bold text-primary mb-4">💳 Pembayaran & Paket</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach($paketList as $paket)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <h5 class="card-title fw-bold">{{ $paket['nama'] }}</h5>
                    <p class="text-muted">{{ $paket['deskripsi'] }}</p>
                    <h6 class="text-primary fw-bold mb-3">Rp {{ number_format($paket['harga'], 0, ',', '.') }}</h6>
                    
                    <form action="{{ route('pembayaran.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="paket" value="{{ $paket['nama'] }}">
                        <input type="hidden" name="jumlah" value="{{ $paket['harga'] }}">
                        
                        <select class="form-select mb-3" name="metode_pembayaran" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="Transfer Bank">Transfer Bank</option>
                            <option value="E-Wallet">E-Wallet (OVO, DANA, GoPay)</option>
                        </select>
                        
                        <button type="submit" class="btn btn-primary w-100">Bayar Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <hr class="my-5">

    <h4 class="fw-bold mb-3">🧾 Riwayat Pembayaran Anda</h4>
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-light">
                <tr>
                    <th>Paket</th>
                    <th>Jumlah</th>
                    <th>Metode</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pembayaran as $item)
                <tr>
                    <td>{{ $item->paket }}</td>
                    <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                    <td>{{ $item->metode_pembayaran }}</td>
                    <td>
                        <span class="badge 
                            @if($item->status == 'Selesai') bg-success 
                            @elseif($item->status == 'Menunggu Konfirmasi') bg-warning text-dark 
                            @else bg-secondary @endif">
                            {{ $item->status }}
                        </span>
                    </td>
                    <td>{{ \Carbon\Carbon::parse($item->tanggal_pembayaran)->format('d M Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada pembayaran.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
