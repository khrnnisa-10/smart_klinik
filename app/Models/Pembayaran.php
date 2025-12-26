<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = [
        'user_id',
        'paket',
        'jumlah',
        'status',
        'metode_pembayaran',
        'tanggal_pembayaran'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
