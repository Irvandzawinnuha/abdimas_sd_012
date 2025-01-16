<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FotoKontribusi;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Extracurricular;
use App\Models\GaleriFotoVideo;

class DashboardController extends Controller
{
    public function html()
    {
        // Data Foto Kontribusi
        $dataFoto = FotoKontribusi::all();

        // Data Guru
        $dataGuru = Guru::paginate(3);

        // Data Berita dan Pengumuman
        $berita_pengumuman = Berita::latest()->paginate(3); //3 berita terbaru

        // Data Ekstrakurikuler
        $dataEkskul = Extracurricular::all();

        // Data Galeri
        $dataGaleri = GaleriFotoVideo::all();

        // Kirim semua data ke view
        return view('backend.dashboard', compact('dataFoto', 'dataGuru', 'berita_pengumuman', 'dataEkskul', 'dataGaleri'));
    }
}
