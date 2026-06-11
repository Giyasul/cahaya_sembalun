<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');           // "Kamar Keluarga"
            $table->text('deskripsi');
            $table->decimal('harga', 10, 0);  // 350000
            $table->string('gambar');         // path file
            $table->json('fasilitas');        // ["WiFi","AC","TV"]
            $table->integer('kapasitas');     // 4 orang
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
