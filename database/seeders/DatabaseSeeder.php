<?php

namespace Database\Seeders;

use App\Models\Kamar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Kamar
        Kamar::create([
            'nama' => 'Kamar Kecil',
            'deskripsi' => 'Nyaman untuk 2 orang, view sawah Sembalun.',
            'harga' => 250000,
            'gambar' => 'gambar/Kamar Kecil.jpeg',
            'fasilitas' => ['WiFi', 'Kamar Mandi Dalam', 'Kipas Angin'],
            'kapasitas' => 2,
        ]);
        Kamar::create([
            'nama' => 'Kamar Keluarga',
            'deskripsi' => 'Luas untuk keluarga, view Gunung Rinjani.',
            'harga' => 400000,
            'gambar' => 'gambar/Kamar Keluarga.webp',
            'fasilitas' => ['WiFi', 'Kamar Mandi Dalam', 'AC', 'TV'],
            'kapasitas' => 4,
        ]);
        Kamar::create([
            'nama' => 'Kamar Segitiga',
            'deskripsi' => 'Unik dengan atap segitiga, suasana cozy.',
            'harga' => 300000,
            'gambar' => 'gambar/Kamar Segitiga.jpeg',
            'fasilitas' => ['WiFi', 'Kamar Mandi Dalam'],
            'kapasitas' => 2,
        ]);
        Kamar::create([
            'nama' => 'Camping Area',
            'deskripsi' => 'Tenda & matras disediakan, bintang malam Rinjani.',
            'harga' => 40000,
            'gambar' => 'gambar/Camping Area.jpeg',
            'fasilitas' => ['Tenda', 'Matras', 'Toilet Umum'],
            'kapasitas' => 2,
        ]);
    }
}
