<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemeriksaanController extends Controller
{
    public function index()
    {
        // sementara contoh dummy data
        $pemeriksaans = [
            (object)['id' => 1, 'tanggal' => '2025-10-07', 'bidan' => 'Bidan Sari', 'catatan' => 'Tekanan darah normal, janin sehat.'],
            (object)['id' => 2, 'tanggal' => '2025-09-25', 'bidan' => 'Bidan Rina', 'catatan' => 'Kontrol rutin, tidak ada keluhan.'],
        ];

        return view('pemeriksaan.index', compact('pemeriksaans'));
    }

    public function show($id)
    {
        $pemeriksaan = (object)[
            'id' => $id,
            'tanggal' => '2025-10-07',
            'bidan' => 'Bidan Sari',
            'catatan' => 'Tekanan darah normal, tidak ada keluhan.',
        ];

        return view('pemeriksaan.show', compact('pemeriksaan'));
    }
}
