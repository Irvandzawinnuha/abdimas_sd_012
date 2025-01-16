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
            $table->string('created_by'); // Dibuat oleh
            $table->string('foto')->nullable(); // Path foto
            $table->timestamps(); // created_at & updated_at otomatis
        });
    }

    public function down()
    {
        Schema::dropIfExists('galeri_foto_videos');
    }
}