<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('home'); 
    }

    // Halaman kontak
    public function kontak()
    {
        return view('kontak');
    }

    // Logika kirim pesan
    public function kirimPesan(Request $request)
    {
        // Validasi form
        $request->validate([
            'nama' => 'required|max:50',
            'email' => 'required|email',
            'pesan' => 'required|max:500',
        ]);

        // Kirim email atau simpan ke database
        // Mail::to('admin@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }

    // Lokasi Google Maps
    public function lokasi()
    {
        return view('lokasi'); // View untuk peta lokasi
    }
}
