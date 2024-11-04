<?php
//Controller ini akan mengatur logika untuk menampilkan profil sekolah.
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::first(); // Mengambil data profil sekolah
        return view('profile', compact('profile')); // Mengirim data ke view
    }
}
