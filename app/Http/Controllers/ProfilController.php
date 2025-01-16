<?php

namespace App\Http\Controllers;

use App\Http\Controllers\backend\FotoKontribusiController;
use App\Models\FotoKontribusi;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('profil'); // bagian html profile sekolah
    }

    public function histori()
    {
        $dataFoto = FotoKontribusi::all();
        return view('profil_histori', compact('dataFoto'));
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
