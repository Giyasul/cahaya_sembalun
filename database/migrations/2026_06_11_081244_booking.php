<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->foreignId('kamar_id')->constrained('kamars');
            $table->date('tanggal_masuk');
            $table->date('tanggal_keluar');
            $table->integer('jumlah_tamu');
            $table->text('catatan')->nullable();
            $table->enum('status', ['pending', 'konfirmasi', 'batal'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
