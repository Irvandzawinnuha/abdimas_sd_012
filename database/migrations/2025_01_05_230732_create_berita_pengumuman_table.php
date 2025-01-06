<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berita_pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('foto')->nullable(); // Untuk menyimpan path foto
            $table->string('created_by')->nullable(); // Siapa yang membuat
            $table->date('tanggal')->nullable(); // Tanggal aktivitas
            $table->string('tempat')->nullable(); // Tempat aktivitas
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_pengumuman');
    }
};
