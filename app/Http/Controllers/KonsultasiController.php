<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = Konsultasi::orderBy('tanggal', 'desc')->get();
        return view('pasien.konsultasi.index', compact('konsultasi'));
    }

    public function create()
    {
        return view('pasien.konsultasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dokter' => 'required|string|max:255',
            'topik'       => 'required|string|max:255',
            'tanggal'     => 'required|date',
            'deskripsi'   => 'nullable|string',
        ]);

        Konsultasi::create([
            'nama_pasien' => Auth::user()->name, // 🔥 INI PENTING
            'nama_dokter' => $request->nama_dokter,
            'topik'       => $request->topik,
            'tanggal'     => $request->tanggal,
            'deskripsi'   => $request->deskripsi,
            'status'      => 'Menunggu Konfirmasi',
        ]);

        return redirect()
            ->route('konsultasi.index')
            ->with('success', 'Konsultasi berhasil ditambahkan');
    }

    public function exportPDF()
    {
        $konsultasis = Konsultasi::all();
        $pdf = Pdf::loadView('pasien.konsultasi.pdf', compact('konsultasis'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('Laporan_Konsultasi.pdf');
    }
}
