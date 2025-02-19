<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extracurricular;
use Illuminate\Support\Facades\Storage;

class KegiatanEkstrakurikulerController extends Controller
{
    public function index()
    {
        $dataEkskul = Extracurricular::all();
        return view('backend.dashboard', compact('dataEkskul'));
    }

    /**
     * Menampilkan halaman form tambah kegiatan ekstrakurikuler.
     */
    public function create()
    {
        return view('backend.create_kegiatan_ekstrakurikuler');
    }

    /**
     * Menyimpan data kegiatan ekstrakurikuler ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string',
            'CreatedBy' => 'required|string',
            'foto.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'created_at' => 'required|date',
        ]);

        $paths = [];
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $paths[] = $file->store('kegiatan_ekstrakurikuler', 'public');
            }
        }

        // Buat instance baru dengan timestamp yang spesifik
        $kegiatan = new Extracurricular([
            'nama_kegiatan' => $request->nama_kegiatan,
            'CreatedBy' => $request->CreatedBy,
            'foto_kontribusi' => $paths,
        ]);
        
        // Set created_at secara manual
        $kegiatan->created_at = $request->created_at;
        $kegiatan->save();

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    /**
     * Menampilkan halaman edit kegiatan ekstrakurikuler.
     */
    public function edit($id)
    {
        $kegiatan = Extracurricular::findOrFail($id);
        return view('backend.edit_kegiatan_ekstrakurikuler', compact('kegiatan'));
    }

    /**
     * Memperbarui data kegiatan ekstrakurikuler.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string',
            'CreatedBy' => 'required|string',
            'foto.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'created_at' => 'required|date',
        ]);

        $kegiatan = Extracurricular::findOrFail($id);
        $data = $request->except(['foto', 'existing_photos']);
        
        $paths = $request->existing_photos ?? [];

        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $paths[] = $file->store('kegiatan_ekstrakurikuler', 'public');
            }
        }

        // Update data biasa
        $kegiatan->fill([
            'nama_kegiatan' => $request->nama_kegiatan,
            'CreatedBy' => $request->CreatedBy,
            'foto_kontribusi' => $paths,
        ]);
        
        // Set created_at secara manual
        $kegiatan->created_at = $request->created_at;
        $kegiatan->save();

        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    /**
     * Menghapus data kegiatan ekstrakurikuler.
     */
    public function destroy($id)
    {
        $kegiatan = Extracurricular::findOrFail($id);
        
        if ($kegiatan->foto_kontribusi) {
            foreach ($kegiatan->foto_kontribusi as $path) {
                Storage::disk('public')->delete($path);
            }
        }
        
        $kegiatan->delete();
        return redirect()->route('backend.dashboard')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
