<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FotoKontribusi; // Model untuk tabel foto_kontribusi
use App\Models\Guru; // Model untuk tabel guru

class DashboardController extends Controller
{
    public function html()
    {
        // Ambil semua data dari tabel foto_kontribusi
        $dataFoto = FotoKontribusi::all();

        // Ambil data guru dengan pagination
        $dataGuru = Guru::paginate(10); // 10 adalah jumlah data per halaman

        // Kirimkan data ke view dashboard.blade.php
        return view('backend.dashboard', compact('dataFoto', 'dataGuru'));
    }
}

