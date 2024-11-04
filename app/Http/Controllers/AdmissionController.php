<?php

namespace App\Http\Controllers;
use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $admission = Admission::first(); // Mengambil data pendaftaran
        return view('admissions', compact('admission')); // Mengirim data ke view
    }
}