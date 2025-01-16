<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\backend\ProfileGuruController;
use App\Models\Guru;

class ProfilGuruController extends Controller
{
    public function index()
    {
        $dataGuru = Guru::all();
        return view('profil_guru', compact('dataGuru'));
    }
}
