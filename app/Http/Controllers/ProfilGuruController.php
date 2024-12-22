<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilGuruController extends Controller
{

    public function index()
    {
        return view('profil_guru'); 
    }
}
