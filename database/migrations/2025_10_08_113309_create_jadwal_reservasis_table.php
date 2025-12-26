<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal_reservasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_pasien');
            $table->string('jenis_konsultasi'); // ex: Kehamilan, Ibu & Anak, Laktasi
            $table->date('tanggal_reservasi');
            $table->time('waktu');
            $table->enum('status', ['Menunggu', 'Dikonfirmasi', 'Selesai', 'Dibatalkan'])->default('Menunggu');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_reservasis');
    }
};
