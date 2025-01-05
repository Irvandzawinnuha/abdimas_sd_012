<?php
namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BeritaPengumuman;
use Illuminate\Http\Request;

class BeritaPengumumanController extends Controller
{
    public function index()
    {
        $data = BeritaPengumuman::all();
        return view('backend.berita.index', compact('data'));
    }

    public function create()
    {
        return view('backend.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        BeritaPengumuman::create($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $berita = BeritaPengumuman::findOrFail($id);
        return view('backend.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $berita = BeritaPengumuman::findOrFail($id);
        $berita->update($request->all());

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $berita = BeritaPengumuman::findOrFail($id);
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
