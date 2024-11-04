<?php
//Controller ini akan menangani berita dan pengumuman.
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); // Mengambil semua berita
        return view('news', compact('news')); // Mengirim data ke view
    }
}
