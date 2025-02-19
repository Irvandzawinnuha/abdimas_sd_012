<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaleriFotoVideosTable extends Migration
{
    public function up()
    {
        Schema::create('galeri_foto_videos', function (Blueprint $table) {
            $table->id();
            $table->string('kategori'); // Acara Sekolah, Prestasi Siswa, dll
            $table->string('created_by'); // Dibuat oleh
            $table->json('foto')->nullable(); // Ubah menjadi json untuk menyimpan multiple files
            $table->timestamps(); // Kembali menggunakan timestamps() default Laravel
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeri_foto_videos');
    }
}