<?php 

namespace App\Http\Controllers;

use App\Models\JadwalReservasi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Auth;

class JadwalReservasiController extends Controller
{
    public function index()
    {
        // Hanya tampilkan reservasi milik user login
        $reservasis = JadwalReservasi::where('user_id', Auth::id())
                        ->orderBy('tanggal_reservasi', 'desc')
                        ->get();
        return view('reservasi.index', compact('reservasis'));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required|string|max:255',
            'jenis_konsultasi' => 'required|string|max:255',
            'tanggal_reservasi' => 'required|date',
            'waktu' => 'required',
        ]);

        JadwalReservasi::create([
            'user_id' => Auth::id(),
            'nama_pasien' => $request->nama_pasien,
            'jenis_konsultasi' => $request->jenis_konsultasi,
            'tanggal_reservasi' => $request->tanggal_reservasi,
            'waktu' => $request->waktu,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan!');
    }

   public function cetakPdf()
{
    $reservasis = JadwalReservasi::where('user_id', Auth::id())->get();
    $pdf = PDF::loadView('reservasi.pdf', compact('reservasis'))
              ->setPaper('A4','portrait');
    return $pdf->stream('JadwalReservasi.pdf');
}
}