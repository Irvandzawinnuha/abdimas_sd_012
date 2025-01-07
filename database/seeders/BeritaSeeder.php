<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Berita::create([
            'judul' => 'Berita Pertama',
            'deskripsi' => 'Ini adalah deskripsi berita pertama.',
            'tanggal' => now(),
            'created_by' => 'Admin',
        ]);

        Berita::create([
            'judul' => 'Berita Kedua',
            'deskripsi' => 'Ini adalah deskripsi berita kedua.',
            'tanggal' => now(),
            'created_by' => 'Admin',
        ]);
    }
}
