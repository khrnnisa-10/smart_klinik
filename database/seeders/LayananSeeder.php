<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('layanans')->insert([
            [
                'nama_layanan' => 'Konsultasi Kehamilan',
                'deskripsi' => 'Konsultasi untuk ibu hamil secara online atau langsung di klinik.',
                'harga' => 50000,
                'gambar' => 'konsultasi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Pemeriksaan Bayi dan Anak',
                'deskripsi' => 'Pemeriksaan rutin tumbuh kembang bayi dan anak.',
                'harga' => 75000,
                'gambar' => 'pemeriksaan.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_layanan' => 'Edukasi Kesehatan Ibu & Anak',
                'deskripsi' => 'Penyuluhan dan konsultasi seputar kesehatan ibu dan anak.',
                'harga' => 40000,
                'gambar' => 'edukasi.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
