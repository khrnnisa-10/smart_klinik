<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalReservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_pasien',
        'jenis_konsultasi',
        'tanggal_reservasi',
        'waktu',
        'status'
    ];
}
