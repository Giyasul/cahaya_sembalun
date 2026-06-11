<?php

namespace App\Http\Controllers;

use App\Models\Kamar;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua kamar yang tersedia
        $kamars = Kamar::where('tersedia', true)->get();

        return view('welcome', compact('kamars'));
    }
}
