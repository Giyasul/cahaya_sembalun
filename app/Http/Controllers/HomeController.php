<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Kamar;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua kamar yang tersedia
        $kamars = Kamar::get();
        $galeris = Galeri::latest()->get();

        return view('welcome', compact('kamars', 'galeris'));
    }
}
