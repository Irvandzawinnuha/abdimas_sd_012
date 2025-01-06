<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FotoKontribusi;
use App\Models\Guru;
use App\Models\Berita;

class DashboardController extends Controller
{
    public function html()
    {
        // Data Foto Kontribusi
        $dataFoto = FotoKontribusi::all();

        // Data Guru
        $dataGuru = Guru::paginate(10);

        // Data Berita dan Pengumuman
        $berita_pengumuman = Berita::latest()->paginate(10); // 10 berita terbaru

        // Kirim semua data ke view
        return view('backend.dashboard', compact('dataFoto', 'dataGuru', 'berita_pengumuman'));
    }
}
