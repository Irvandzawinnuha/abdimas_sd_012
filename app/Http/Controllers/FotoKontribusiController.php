<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoKontribusi;
use App\Models\Guru;

class FotoKontribusiController extends Controller
{
    public function index()
    {
        $dataFoto = FotoKontribusi::paginate(10); // Ambil data dengan paginasi
        $dataGuru = Guru::paginate(10); // Ambil data dengan paginasi
    
        return view('backend.dashboard', compact('dataFoto', 'dataGuru'));
    }

    public function create()
    {
        return view('backend.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'created_by' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'created_by.required' => 'Kolom pembuat wajib diisi.',
            'foto.required' => 'Kolom foto wajib diunggah.',
            'foto.image' => 'File yang diunggah harus berupa gambar (jpeg, png, jpg).',
            'foto.mimes' => 'Format file harus jpeg, png, atau jpg.',
            'foto.max' => 'Ukuran file maksimum adalah 2MB.',
        ]);
    
        // Konversi file ke base64
        $fotoBase64 = base64_encode(file_get_contents($request->file('foto')->getRealPath()));
    
        // Simpan ke database
        FotoKontribusi::create([
            'created_by' => $request->created_by,
            'foto' => $fotoBase64,
        ]);
    
        return redirect()->route('foto.index')->with('success', "Foto berhasil ditambahkan oleh {$request->created_by}.");
    }

    public function destroy($id)
    {
        $foto = FotoKontribusi::findOrFail($id);

        // Hapus data dari database
        $foto->delete();

        return redirect()->route('foto.index')->with('success', 'Foto dan datanya berhasil dihapus.');
    }

}
