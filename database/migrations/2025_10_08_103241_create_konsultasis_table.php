<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('konsultasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pasien');
            $table->string('topik');
            $table->date('tanggal');
            $table->text('deskripsi')->nullable();
            $table->enum('status', ['Menunggu Konfirmasi', 'Dijadwalkan', 'Selesai'])->default('Menunggu Konfirmasi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('konsultasis');
    }
};
