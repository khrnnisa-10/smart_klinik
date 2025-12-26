<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DepanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\JadwalReservasiController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PemeriksaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\MonitorIotController;
use App\Http\Controllers\AntrianController;



Route::get('/antrian', [AntrianController::class, 'index'])
    ->name('antrian.index');



Route::get('/monitor-iot', [MonitorIotController::class, 'index'])
        ->name('monitor.iot');

Route::get('/monitor-iot/kamar/{id}', [MonitorIotController::class, 'show'])
        ->name('monitor.kamar');


/*
|--------------------------------------------------------------------------
| FRONTEND (TANPA LOGIN)
|--------------------------------------------------------------------------
*/
Route::get('/', [DepanController::class, 'index'])->name('frontend');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi.index');
Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
Route::post('/antrian/ambil', [AntrianController::class, 'ambil'])->name('antrian.ambil');
Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
    Route::post('/antrian/ambil', [AntrianController::class, 'ambil'])->name('antrian.ambil');
    Route::post('/antrian/panggil', [AntrianController::class, 'panggil'])->name('antrian.panggil');
 
Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
 Route::post('/antrian/ambil', [AntrianController::class, 'ambil'])->name('antrian.ambil');

Route::get('/antrian', [AntrianController::class,'index'])->name('antrian.index');
Route::get('/antrian/create', [AntrianController::class,'create'])->name('antrian.create');
Route::post('/antrian', [AntrianController::class,'store'])->name('antrian.store');
Route::post('/antrian/{id}/panggil', [AntrianController::class,'panggil']);
Route::post('/antrian/{id}/selesai', [AntrianController::class,'selesai']);


/*
|--------------------------------------------------------------------------
| AUTHENTICATED USER
|--------------------------------------------------------------------------
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // MONITORING IOT (SATU KALI SAJA!)
    Route::get('/monitor-iot', [MonitorIotController::class, 'index'])->name('monitor.iot');

    // KONSULTASI
    Route::get('/konsultasi', [KonsultasiController::class, 'index'])->name('konsultasi.index');
    Route::get('/konsultasi/create', [KonsultasiController::class, 'create'])->name('konsultasi.create');
    Route::post('/konsultasi', [KonsultasiController::class, 'store'])->name('konsultasi.store');
    Route::get('/konsultasi/export/pdf', [KonsultasiController::class, 'exportPDF'])->name('konsultasi.export.pdf');

    // RESERVASI
    Route::get('/reservasi', [JadwalReservasiController::class, 'index'])->name('reservasi.index');
    Route::get('/reservasi/create', [JadwalReservasiController::class, 'create'])->name('reservasi.create');
    Route::post('/reservasi', [JadwalReservasiController::class, 'store'])->name('reservasi.store');
    Route::get('/reservasi/pdf', [JadwalReservasiController::class, 'cetakPdf'])->name('reservasi.pdf');

    // EDUKASI DETAIL
    Route::get('/edukasi/{id}', [EdukasiController::class, 'show'])->name('edukasi.show');

    // CHAT
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');

    // PROFIL
    Route::get('/profil', [ProfilController::class, 'index'])->name('profil.index');
    Route::post('/profil/update', [ProfilController::class, 'update'])->name('profil.update');

    // PEMERIKSAAN
    Route::get('/pemeriksaan', [PemeriksaanController::class, 'index'])->name('pemeriksaan.index');
    Route::get('/pemeriksaan/{id}', [PemeriksaanController::class, 'show'])->name('pemeriksaan.show');

    // PEMBAYARAN
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran.index');
    Route::get('/pembayaran/paket', [PembayaranController::class, 'paket'])->name('pembayaran.paket');
    Route::post('/pembayaran/proses', [PembayaranController::class, 'proses'])->name('pembayaran.proses');

    // RIWAYAT
    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');

    // BANTUAN
    Route::get('/bantuan', [BantuanController::class, 'index'])->name('bantuan.index');
    Route::post('/bantuan', [BantuanController::class, 'store'])->name('bantuan.store');
});
