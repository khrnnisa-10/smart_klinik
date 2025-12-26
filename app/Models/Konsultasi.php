<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasis';

    protected $fillable = [
        'nama_pasien',
        'nama_dokter',
        'topik',
        'tanggal',
        'deskripsi',
        'status',
    ];
}
