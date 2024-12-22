<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaTableSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Berita Pertama',
            'konten' => 'Ini adalah konten berita pertama.',
        ]);

        Berita::create([
            'judul' => 'Berita Kedua',
            'konten' => 'Ini adalah konten berita kedua.',
        ]);
    }
}
