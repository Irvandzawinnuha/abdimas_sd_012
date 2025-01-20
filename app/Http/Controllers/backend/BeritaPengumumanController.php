<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaPengumumanController extends Controller
{
    public function index()
    {
        $berita_pengumuman = Berita::latest()->paginate(10); // Pagination
        return view('backend.berita.index', compact('berita_pengumuman'));
    }

    public function create()
    {
        return view('backend.create_berita_pengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'created_by' => 'nullable|string|max:255',
            'tanggal' => 'required|string|max:500',
            'tempat' => 'nullable|string|max:255',
            'konten' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('berita', 'public');
        }

        Berita::create($data);

        return redirect()->route('backend.dashboard')->with('success', 'Berita berhasil ditambahkan.');
    }



    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('backend.edit_berita_pengumuman', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'created_by' => 'nullable|string|max:255',
            'tanggal' => 'required|date',
            'tempat' => 'nullable|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');
        if ($request->hasFile('foto')) {
            if ($berita->foto) {
                Storage::disk('public')->delete($berita->foto);
            }
            $data['foto'] = $request->file('foto')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('backend.dashboard')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->foto) {
            Storage::disk('public')->delete($berita->foto);
        }
        $berita->delete();

        return redirect()->route('backend.dashboard')->with('success', 'Berita berhasil dihapus.');
    }
}
