<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bantuan;
use Illuminate\Support\Facades\Auth;

class BantuanController extends Controller
{
    public function index()
    {
        $bantuan = Bantuan::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();

        return view('pasien.bantuan', compact('bantuan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Bantuan::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'pesan' => $request->pesan,
        ]);

        return redirect()->back()->with('success', 'Pesan bantuan berhasil dikirim!');
    }
}
