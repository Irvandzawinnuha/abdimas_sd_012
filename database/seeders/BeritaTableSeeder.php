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
            'deskripsi' => 'Ini adalah deskripsi berita pertama.',
            'konten' => 'Ini adalah konten berita pertama.', // Hapus jika kolom ini tidak digunakan
        ]);

        Berita::create([
            'judul' => 'Berita Kedua',
            'deskripsi' => 'Ini adalah deskripsi berita kedua.',
            'konten' => 'Ini adalah konten berita kedua.',
        ]);
    }
}
