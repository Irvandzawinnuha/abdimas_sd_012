<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Data galeri kategori
        $gallery = [
            'Acara Sekolah' => [
                'https://example.com/foto1.jpg',
                'https://example.com/foto2.jpg',
                'https://example.com/foto3.jpg',
                'https://example.com/foto4.jpg',
            ],
            'Prestasi Siswa' => [
                'https://example.com/prestasi1.jpg',
                'https://example.com/prestasi2.jpg',
                'https://example.com/prestasi3.jpg',
                'https://example.com/prestasi4.jpg',
            ],
            'Kontribusi Kepada Masyarakat' => [
                'https://example.com/masyarakat1.jpg',
                'https://example.com/masyarakat2.jpg',
                'https://example.com/masyarakat3.jpg',
                'https://example.com/masyarakat4.jpg',
            ],
            'Kegiatan P5' => [
                'https://example.com/p5_1.jpg',
                'https://example.com/p5_2.jpg',
                'https://example.com/p5_3.jpg',
            ],
            'Kemitraan' => [
                'https://example.com/kemitraan1.jpg',
                'https://example.com/kemitraan2.jpg',
                'https://example.com/kemitraan3.jpg',
            ],
        ];

        return view('gallery', compact('gallery'));
    }
}
