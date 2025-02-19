<?php

namespace Database\Seeders;

use App\Models\GaleriFotoVideo;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run()
    {
        $galleries = [
            'Acara Sekolah' => [
                'Boseh (Rebo Sehat).png',
                'Pramuka.png',
                'Pencak Silat.png',
                'kamis_siang.png',
                'Kamis Nyunda.png',
                'Makan Sehat Bersama.png',
                'Jumroh (Jumat Rohani).png',
                'Paskibra.png',
                'Literasi Asyik.png',
                'Sabar.png',
                'Workshop Pembelajaran di Kelas.png',
                'Upacara Bendera.png'
            ],
            'Prestasi Siswa' => [
                'Prestasi Peserta Didik Lomba Mewarnai.png',
                'Prestasi Peserta Didik Lomba Mewarnai(1).png',
                'Prestasi Peserta Didik Pencak Silat.png',
                'Prestasi Peserta Didik Tenis Meja Putri.png',
                'Prestasi Peserta Didik.png',
                'Prestasi Peserta Didik(2).png',
                'Prestasi Peserta Didik(3).png'
            ],
            // ... tambahkan kategori lainnya
        ];

        foreach ($galleries as $kategori => $images) {
            $paths = array_map(function($image) use ($kategori) {
                return 'gallery/' . strtolower(str_replace(' ', '-', $kategori)) . '/' . $image;
            }, $images);

            GaleriFotoVideo::create([
                'kategori' => $kategori,
                'created_by' => 'Admin',
                'foto' => $paths
            ]);
        }
    }
} 