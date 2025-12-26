<?php

namespace App\Http\Controllers\Api;
use App\Models\SensorData;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'temperature' => 'required|numeric',
            'humidity'    => 'required|numeric',
        ]);

        $data = SensorData::create($validated);

        return response()->json([
            'message' => 'Data berhasil disimpan!',
            'data' => $data
        ], 201);
    }

}
