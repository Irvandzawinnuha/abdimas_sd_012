<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Extracurricular;
class KegiatanEkstrakurikulerController extends Controller
{
    public function index()
    {
        // Data dummy untuk sementara, nanti bisa diambil dari database
        $kegiatan = [
            [
                'id' => 1,
                'tanggal' => '2024-01-01',
                'created_by' => 'Admin',
                'images' => [
                    'https://example.com/foto1.jpg',
                    'https://example.com/foto2.jpg',
                ],
            ],
        ];

        return view('backend.create_kegiatan_ekstrakurikuler', ['kegiatan' => $kegiatan]);
    }

    public function create()
    {
        return view('backend.create_kegiatan_ekstrakurikuler');
    }

    public function store(Request $request)
    {
        // // Debugging
        // if ($request->hasFile('file')) {
        //     dd($request->file('file')); // Debugging: Tampilkan informasi file
        // }
    
        // // Validasi input
        // $request->validate([
        //     'file' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        // ]);
    
        // // Simpan file jika ada
        // if ($request->hasFile('file')) {
        //     $file = $request->file('file');
        //     $filename = time() . '_' . $file->getClientOriginalName();
        //     $path = $file->storeAs('uploads', $filename, 'public'); // Simpan ke storage
    
        //     // Simpan informasi ke database
        //     Extracurricular::create([
        //         'dibuat_oleh' => $request->input('dibuat_oleh'),
        //         'tanggal_publikasi' => $request->input('tanggal_publikasi'),
        //         'foto_kontribusi' => $path, // Simpan path file di database
        //     ]);
        // }
        Extracurricular::create([
            'dibuat_oleh' => $request->input('dibuat_oleh'),
            'tanggal_publikasi' => $request->input('tanggal_publikasi'),
            'foto_kontribusi' => "path", // Simpan path file di database
        ]);
        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil ditambahkan.');
    }
    
    


    public function edit($id)
    {
        // Cari data berdasarkan id
        $kegiatan = [
            'id' => $id,
            'tanggal' => '2024-01-01',
            'created_by' => 'Admin',
            'images' => [
                'https://example.com/foto1.jpg',
                'https://example.com/foto2.jpg',
            ],
        ];

        return view('backend.edit_kegiatan_ekstrakurikuler', ['kegiatan' => $kegiatan]);
    }

    public function update(Request $request, $id)
    {
        // Proses update data
        // Contoh:
        // $validatedData = $request->validate([...]);
        // $kegiatan = Model::find($id);
        // $kegiatan->update($validatedData);

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Proses penghapusan data
        // Contoh:
        // Model::destroy($id);

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
