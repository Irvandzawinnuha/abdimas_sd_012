<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKegiatanEkstrakurikulerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kegiatan_ekstrakurikuler', function (Blueprint $table) {
            $table->id();
            $table->string('CreatedBy');
            $table->string('foto_kontribusi'); // Kolom untuk menyimpan path file foto
            $table->timestamps();// Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan_ekstrakurikuler');
    }
}
