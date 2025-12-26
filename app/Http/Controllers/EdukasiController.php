<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        $infos = [
            [
                'judul' => 'Tentang Smart Digital Clinic 4.0',
                'kategori' => 'Profil Klinik',
                'deskripsi' => 'Smart Digital Clinic 4.0 adalah klinik modern berbasis Internet of Things (IoT) yang mengintegrasikan teknologi sensor suhu dan deteksi api untuk meningkatkan keselamatan pasien dan tenaga medis.',
                'ikon' => 'bi-hospital'
            ],
            [
                'judul' => 'Layanan Klinik',
                'kategori' => 'Pelayanan',
                'deskripsi' => 'Kami menyediakan layanan konsultasi medis, pemeriksaan ibu & anak, pemantauan pasien rawat inap, serta monitoring ruangan berbasis sensor IoT.',
                'ikon' => 'bi-heart-pulse'
            ],
            [
                'judul' => 'Teknologi IoT di Klinik',
                'kategori' => 'Teknologi',
                'deskripsi' => 'Setiap kamar pasien dipantau secara real-time menggunakan sensor suhu dan sensor api yang terhubung langsung ke dashboard monitoring.',
                'ikon' => 'bi-cpu'
            ],
            [
                'judul' => 'Keamanan & Keselamatan',
                'kategori' => 'Keselamatan',
                'deskripsi' => 'Sistem akan memberikan peringatan dini apabila terdeteksi suhu abnormal atau api, sehingga tindakan cepat dapat dilakukan.',
                'ikon' => 'bi-shield-check'
            ],
            [
                'judul' => 'Visi & Misi Klinik',
                'kategori' => 'Manajemen',
                'deskripsi' => 'Menjadi klinik digital terpercaya yang mengutamakan keselamatan, kenyamanan, dan pelayanan kesehatan berbasis teknologi.',
                'ikon' => 'bi-bullseye'
            ],
            [
                'judul' => 'Tim Medis Profesional',
                'kategori' => 'SDM',
                'deskripsi' => 'Didukung oleh dokter dan tenaga medis profesional yang berpengalaman serta ramah terhadap pasien.',
                'ikon' => 'bi-people'
            ],
        ];

        return view('edukasi.index', compact('infos'));
    }
}
