<?php

namespace App\Http\Controllers;

use App\Models\SensorData;

class DepanController extends Controller
{
    public function index()
    {
        $rooms = [
            'Ruang Rawat Inap',
            'Kamar Bersalin',
            'Ruang Konsultasi Dokter'
        ];

        $sensorData = [];

        foreach ($rooms as $room) {
            $sensor = SensorData::latest()
                ->first();

            $sensorData[$room] = [
                'temperature' => $sensor->temperature ?? 0,
                'humidity'    => $sensor->humidity ?? 0,
                'smokeStatus' => $sensor->smoke_status ?? 'Aman',
            ];
        }

        return view('frontend', compact('sensorData'));
    }
}
