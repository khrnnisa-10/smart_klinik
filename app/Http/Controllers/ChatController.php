<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::latest()->get();
        return view('chat.index', compact('chats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesan' => 'required',
        ]);

        Chat::create([
            'nama_pasien' => auth()->user()->name ?? 'Pasien',
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
