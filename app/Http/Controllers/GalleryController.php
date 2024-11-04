<?php
//Controller ini akan mengatur galeri foto dan video.
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class GalleryController extends Controller
{
    public function index()
    {
        $photos = Photo::all(); // Mengambil semua foto
        $videos = Video::all(); // Mengambil semua video
        return view('gallery', compact('photos', 'videos')); // Mengirim data ke view
    }
}
