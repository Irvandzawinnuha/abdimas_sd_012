<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FotoKontribusi;
use App\Models\Guru;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;


class FotoKontribusiController extends Controller
{
    public function index()
    {
        $dataFoto = FotoKontribusi::all(); // Ambil data foto kontribusi
        $dataGuru = Guru::paginate(10); // Ambil data guru
        $berita_pengumuman = Berita::latest()->paginate(3); // Pagination
        return view('backend.dashboard', compact('dataFoto', 'dataGuru', 'berita_pengumuman'));
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
            'created_at' => 'required|date',
        ]);

        $path = $request->file('foto')->store('foto_kontribusi', 'public');

        FotoKontribusi::create([
            'created_by' => $request->created_by,
            'foto' => $path,
            'created_at' => $request->created_at,
        ]);

        return redirect()->route('backend.dashboard')->with('success', 'Foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $foto = FotoKontribusi::findOrFail($id); // Pastikan ID ditemukan
        return view('backend.edit', compact('foto'));
    }

    public function update(Request $request, $id)
    {
        $foto = FotoKontribusi::findOrFail($id);

        $request->validate([
            'created_by' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'created_at' => 'required|date',
        ]);

        $data = [
            'created_by' => $request->created_by,
            'created_at' => $request->created_at,
        ];

        // Jika ada file baru, ganti file lama
        if ($request->hasFile('foto')) {
            if ($foto->foto) {
                Storage::disk('public')->delete($foto->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_kontribusi', 'public');
        }

        $foto->update($data);

        return redirect()->route('backend.dashboard')->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $foto = FotoKontribusi::findOrFail($id);
        $foto->delete();

        return redirect()->route('backend.dashboard')->with('success', 'Foto berhasil dihapus.');
    }
}
