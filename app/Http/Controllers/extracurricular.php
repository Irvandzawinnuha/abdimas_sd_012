<?php
//Controller ini menangani kegiatan ekstrakurikuler.
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class ExtracurricularController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::all(); // Mengambil semua kegiatan ekstrakurikuler
        return view('extracurricular', compact('extracurriculars')); // Mengirim data ke view
    }
}