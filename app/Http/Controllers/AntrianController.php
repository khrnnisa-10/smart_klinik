<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AntrianController extends Controller
{
    public function index()
    {
        $today = Carbon::today();

        $antrianSekarang = Antrian::whereDate('tanggal', $today)
            ->where('status', 'dipanggil')
            ->first();

        $menunggu = Antrian::whereDate('tanggal', $today)
            ->where('status', 'menunggu')
            ->count();

        return view('antrian.index', [
            'antrianSekarang' => $antrianSekarang,
            'menunggu' => $menunggu,
        ]);
    }

    public function ambil(Request $request)
    {
        $today = Carbon::today();

        $last = Antrian::whereDate('tanggal', $today)
            ->max('nomor');

        Antrian::create([
            'nama' => $request->nama ?? 'Pasien',
            'nomor' => $last + 1,
            'tanggal' => $today,
            'status' => 'menunggu',
        ]);

        return redirect()->route('antrian.index')
            ->with('success', 'Antrian berhasil diambil');
    }

    public function panggil()
    {
        $today = Carbon::today();

        // Selesaikan yang dipanggil sebelumnya
        Antrian::whereDate('tanggal', $today)
            ->where('status', 'dipanggil')
            ->update(['status' => 'selesai']);

        // Ambil antrian berikutnya
        $next = Antrian::whereDate('tanggal', $today)
            ->where('status', 'menunggu')
            ->orderBy('nomor')
            ->first();

        if ($next) {
            $next->update(['status' => 'dipanggil']);
        }

        return back();
    }
}
