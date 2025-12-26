<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::where('user_id', Auth::id())->latest()->get();

        $paketList = [
            ['nama' => 'Paket Kehamilan Dasar', 'harga' => 150000, 'deskripsi' => 'Konsultasi rutin + panduan kehamilan'],
            ['nama' => 'Paket Kehamilan Lengkap', 'harga' => 300000, 'deskripsi' => 'Konsultasi + Pemeriksaan + Edukasi'],
            ['nama' => 'Paket Ibu & Anak', 'harga' => 500000, 'deskripsi' => 'Pendampingan pasca melahirkan + edukasi bayi'],
        ];

        return view('pembayaran.index', compact('pembayaran', 'paketList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'paket' => 'required|string',
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
        ]);

        Pembayaran::create([
            'user_id' => Auth::id(),
            'paket' => $request->paket,
            'jumlah' => $request->jumlah,
            'status' => 'Menunggu Konfirmasi',
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pembayaran' => now(),
        ]);

        return redirect()->back()->with('success', 'Pembayaran berhasil dikirim. Menunggu konfirmasi admin.');
    }
}
