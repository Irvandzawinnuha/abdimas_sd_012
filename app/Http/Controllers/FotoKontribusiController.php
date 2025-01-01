<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotoKontribusi;

class FotoKontribusiController extends Controller
{
    public function index()
    {
        $data = FotoKontribusi::all();
        return view('backend.dashboard', compact('data'));
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
        ]);

        $path = $request->file('foto')->store('foto_kontribusi', 'public');

        FotoKontribusi::create([
            'created_by' => $request->created_by,
            'foto' => $path,
        ]);

        return redirect()->route('foto.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $foto = FotoKontribusi::findOrFail($id);
        return view('backend.edit', compact('foto')); // Pastikan file edit.blade.php ada
    }

    public function update(Request $request, $id)
    {
        $foto = FotoKontribusi::findOrFail($id);

        $request->validate([
            'created_by' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto_kontribusi', 'public');
            $foto->update([
                'created_by' => $request->created_by,
                'foto' => $path,
            ]);
        } else {
            $foto->update([
                'created_by' => $request->created_by,
            ]);
        }

        return redirect()->route('foto.index')->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $foto = FotoKontribusi::findOrFail($id);
        $foto->delete();

        return redirect()->route('foto.index')->with('success', 'Foto berhasil dihapus.');
    }
}
