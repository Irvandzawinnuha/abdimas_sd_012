<?php
//Controller ini akan mengatur informasi akademik.
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
        $academic = Academic::first(); // Mengambil data akademik
        return view('academic', compact('academic')); // Mengirim data ke view
    }
}
