<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
    Schema::create('pembayarans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id')->nullable();
        $table->string('nama_pasien');
        $table->string('metode_pembayaran');
        $table->decimal('jumlah', 10, 2);
        $table->date('tanggal_pembayaran')->nullable();
        $table->string('status')->default('Belum Lunas');
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
