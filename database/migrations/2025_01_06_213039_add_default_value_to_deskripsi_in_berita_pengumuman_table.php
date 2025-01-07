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
        Schema::table('berita_pengumuman', function (Blueprint $table) {
            $table->text('deskripsi')->default('Tidak ada deskripsi')->change();
        });
    }
    
    public function down(): void
    {
        Schema::table('berita_pengumuman', function (Blueprint $table) {
            $table->text('deskripsi')->nullable(false)->change();
        });
    }
    
};
