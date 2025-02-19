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
            'konten' => 'required|string',
            'created_by' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'foto.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->except('foto');
        $paths = [];

        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $paths[] = $file->store('berita', 'public');
            }
        }

        $data['foto'] = $paths;
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
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'konten' => 'required|string',
            'created_by' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
            'tempat' => 'required|string|max:255',
            'foto.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $data = $request->except(['foto', 'existing_photos']);
        
        $paths = $request->existing_photos ?? [];

        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $paths[] = $file->store('berita', 'public');
            }
        }

        $data['foto'] = $paths;
        $berita->update($data);

        return redirect()->route('backend.dashboard')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        if ($berita->foto) {
            foreach ($berita->foto as $path) {
                Storage::disk('public')->delete($path);
            }
        }
        
        $berita->delete();
        return redirect()->route('backend.dashboard')->with('success', 'Berita berhasil dihapus.');
    }
}
