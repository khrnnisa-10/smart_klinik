<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // DATA CONTOH (NANTI BISA DARI DATABASE / SENSOR)
        $rooms = [
            [
                'nama' => 'Kamar 101',
                'suhu' => 27.6,
                'kelembaban' => 65,
                'api' => false,
            ],
            [
                'nama' => 'Kamar 102',
                'suhu' => 28.1,
                'kelembaban' => 60,
                'api' => false,
            ],
            [
                'nama' => 'Kamar 103',
                'suhu' => 39.2,
                'kelembaban' => 70,
                'api' => true,
            ],
        ];

        return view('dashboard', compact('rooms'));
    }
}
