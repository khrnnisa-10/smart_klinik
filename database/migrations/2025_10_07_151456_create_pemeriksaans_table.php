<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration untuk membuat tabel pemeriksaans.
     */
    public function up(): void
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(); // Pasien
            $table->unsignedBigInteger('bidan_id')->nullable(); // Bidan yang memeriksa
            $table->date('tanggal_pemeriksaan');
            $table->string('keluhan')->nullable();
            $table->text('diagnosa')->nullable();
            $table->text('tindakan')->nullable();
            $table->string('resep_obat')->nullable();
            $table->text('catatan_tambahan')->nullable();
            $table->timestamps();

            // Relasi ke tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('bidan_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Hapus tabel pemeriksaans jika di-rollback.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
