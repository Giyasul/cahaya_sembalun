<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'harga', 'gambar',
        'fasilitas', 'kapasitas', 'tersedia',
    ];

    // Otomatis decode JSON fasilitas jadi array
    protected $casts = [
        'fasilitas' => 'array',
        'tersedia' => 'boolean',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
