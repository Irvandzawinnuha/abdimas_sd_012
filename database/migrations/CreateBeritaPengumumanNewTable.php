<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaPengumumanNewTable extends Migration
{
    public function up()
    {
        Schema::create('berita_pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('judul'); 
            $table->text('konten');
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('berita_pengumuman');
    }
}
