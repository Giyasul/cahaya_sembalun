<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $table = 'galeri'; // Nama tabel di database

    protected $fillable = ['gambar', 'judul']; // Kolom yang dapat diisi massal
}
