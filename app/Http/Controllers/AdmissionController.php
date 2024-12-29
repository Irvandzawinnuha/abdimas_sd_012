<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        // Ambil data admission pertama dari tabel
        $admission = Admission::first();

        // Jika tidak ada data, kirim pesan ke view
        if (!$admission) {
            return view('admissions', ['message' => 'No admission data found.']);
        }

        // Jika ada data, kirim data ke view
        return view('admissions');
    }
}
