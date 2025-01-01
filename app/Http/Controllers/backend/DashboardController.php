<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\FotoKontribusi;

class DashboardController extends Controller
{
    public function html()
    {
        // Ambil semua data dari tabel foto_kontribusi
        $data = FotoKontribusi::all();

        // Kirimkan data ke view dashboard.blade.php
        return view('backend.dashboard', compact('data'));
    }
}
