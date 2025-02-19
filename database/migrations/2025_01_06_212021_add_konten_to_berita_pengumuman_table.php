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
            if (!Schema::hasColumn('berita_pengumuman', 'konten')) {
                $table->text('konten')->nullable()->after('judul');
            }
        });
    }
    
    public function down(): void
    {
        Schema::table('berita_pengumuman', function (Blueprint $table) {
            if (Schema::hasColumn('berita_pengumuman', 'konten')) {
                $table->dropColumn('konten');
            }
        });
    }
    
};
