<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'nama', 'no_hp', 'kamar_id',
        'tanggal_masuk', 'tanggal_keluar',
        'jumlah_tamu', 'catatan', 'status',
    ];

    protected $casts = [
        'tanggal_masuk' => 'date',
        'tanggal_keluar' => 'date',
    ];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}
