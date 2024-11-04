<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->text('curriculum');
            $table->text('learning_program');
            $table->text('academic_calendar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('academics');
    }
}