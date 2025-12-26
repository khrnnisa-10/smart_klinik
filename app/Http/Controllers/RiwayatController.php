<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil riwayat milik user login
        $riwayat = Riwayat::where('user_id', Auth::id())->latest()->get();
        return view('riwayat.index', compact('riwayat'));
    }
}
