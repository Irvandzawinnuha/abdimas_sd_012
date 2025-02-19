<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        News::create([
            'judul' => 'Mewujudkan Pendidikan Berkualitas Melalui Inovasi dan Kerjasama',
            'deskripsi' => 'Bandung, 13 November 2024 — Siswa SDN 012 Babakan Ciparay, Ahmad Firdaus, berhasil meraih Juara Lomba Matematika Tingkat Kota Bandung...',
            'konten' => 'Bandung, 10 Januari 2024 — Dalam menghadapi tantangan pendidikan di era digital...',
            'created_by' => 'Admin',
            'tanggal' => '13 November 2024',
            'tempat' => 'Bandung',
            'foto' => [
                'news/ss_3.png',
                'news/foto2.png',
                'news/foto3.png',
                'news/foto4.png'
            ]
        ]);

        // Tambahkan berita lainnya dengan multiple foto
        News::create([
            'judul' => 'Peningkatan Kualitas Pembelajaran Melalui Kurikulum Merdeka',
            'deskripsi' => 'Bandung, 9 Juli 2024 — SDN 012 Babakan Ciparay terus berupaya untuk meningkatkan pembelajaran siswa dengan Kurikulum Merdeka...',
            'konten' => 'Bandung, 9 Juli 2024 — SDN 012 Babakan Ciparay terus berupaya...',
            'created_by' => 'Admin',
            'tanggal' => '9 Juli 2024',
            'tempat' => 'Bandung',
            'foto' => [
                'news/foto5.png',
                'news/foto6.png',
                'news/foto7.png'
            ]
        ]);
    }
} 