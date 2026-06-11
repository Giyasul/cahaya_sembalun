<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Proses booking
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
