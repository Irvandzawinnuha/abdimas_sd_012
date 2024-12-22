<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil'); // bagian html profile sekolah
    }

    public function histori()
    {
        return view('profil_histori'); 
    }

    public function fasilitas()
    {
        return view('profil_fasilitas'); 
    }

    public function visiMisi()
    {
        return view('visi-misi'); // bagian visi-misi sekolah
    }
}
