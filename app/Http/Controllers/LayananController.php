<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        // Nanti bisa ambil data dari database, sekarang kita tampilkan view dulu
       return view('pasien.konsultasi.layanan');

    }
}
