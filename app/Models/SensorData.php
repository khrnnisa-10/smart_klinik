<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    protected $fillable = [
        'kamar',
        'temperature',
        'humidity',
        'smoke_status',
        'fire_status'
    ];
}
