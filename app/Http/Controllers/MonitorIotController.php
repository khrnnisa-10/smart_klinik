<?php

namespace App\Http\Controllers;

use App\Models\SensorData;
use Illuminate\Http\Request;

class MonitorIotController extends Controller
{
    // LIST SEMUA KAMAR
    public function index()
    {
        // contoh data kamar (sementara)
        $rooms = [
            [
                'id' => 1,
                'nama' => 'Kamar 1',
                'temperature' => 27,
                'smoke' => 'Aman',
                'fire' => false
            ],
            [
                'id' => 2,
                'nama' => 'Kamar 2',
                'temperature' => 39,
                'smoke' => 'Bahaya',
                'fire' => true
            ],
            [
                'id' => 3,
                'nama' => 'Kamar 3',
                'temperature' => 30,
                'smoke' => 'Aman',
                'fire' => false
            ],
        ];

        return view('monitor.dashboardiot', compact('rooms'));
    }

    // DETAIL KAMAR
    public function show($id)
    {
        $room = [
            'id' => $id,
            'nama' => 'Kamar ' . $id,
            'temperature' => 39,
            'smoke' => 'Bahaya',
            'fire' => true,
            'keterangan' => 'Suhu tinggi dan api terdeteksi. Harap evakuasi.'
        ];

        return view('monitor.kamar', compact('room'));
    }
}
