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
            'konten' => 'Ini adalah konten berita pertama.',
            'created_by' => 'Admin',
            'tanggal' => '19 Februari 2025',
            'tempat' => 'SD Negeri 012 Babakan Ciparay',
            'foto' => ['berita/default1.jpg'], // Sesuaikan dengan path foto default
        ]);

        Berita::create([
            'judul' => 'Berita Kedua',
            'deskripsi' => 'Ini adalah deskripsi berita kedua.',
            'konten' => 'Ini adalah konten berita kedua.',
            'created_by' => 'Admin',
            'tanggal' => '20 Februari 2025',
            'tempat' => 'SD Negeri 012 Babakan Ciparay',
            'foto' => ['berita/default2.jpg'], // Sesuaikan dengan path foto default
        ]);
    }
}
