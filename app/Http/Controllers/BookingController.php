<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Simpan data booking dari form
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'kamar_id' => 'required|exists:kamars,id',
            'tanggal_masuk' => 'required|date|after_or_equal:today',
            'tanggal_keluar' => 'required|date|after:tanggal_masuk',
            'jumlah_tamu' => 'required|integer|min:1|max:10',
            'catatan' => 'nullable|string|max:500',
        ]);

        $booking = Booking::create($request->all());

        // Redirect ke WhatsApp dengan pesan otomatis terisi
        $pesan = urlencode(
            "Halo Cahaya Sembalun, saya *{$booking->nama}* ingin konfirmasi booking:\n".
            "🏠 Kamar: {$booking->kamar->nama}\n".
            "📅 Check-in: {$booking->tanggal_masuk->format('d/m/Y')}\n".
            "📅 Check-out: {$booking->tanggal_keluar->format('d/m/Y')}\n".
            "👥 Tamu: {$booking->jumlah_tamu} orang\n".
            '📝 Catatan: '.($booking->catatan ?? '-')
        );

        return redirect("https://wa.me/6283871323721?text={$pesan}");
    }
}
