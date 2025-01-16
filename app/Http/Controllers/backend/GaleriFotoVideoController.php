<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\GaleriFotoVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriFotoVideoController extends Controller
{
    public function index()
    {
        $dataGaleri = GaleriFotoVideo::orderBy('created_at', 'desc')->get();
        return view('backend.dashboard', compact('dataGaleri'));
    }

    public function create()
    {
        return view('backend.create_foto_video');
    }

    public function store(Request $request)
    {
        $request->validate([
            'media' => 'required|file|mimes:jpeg,png,jpg,mp4|max:10240',
            'created_by' => 'required|string|max:255',
            'created_at' => 'required|date'
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('galeri', 'public');
        }

        GaleriFotoVideo::create([
            'foto' => $path,
            'created_by' => $request->created_by,
            'created_at' => $request->created_at
        ]);

        return redirect()->route('backend.dashboard')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = GaleriFotoVideo::findOrFail($id);
        return view('backend.edit_galeri_foto_video', compact('galeri'));
    }
    

    public function update(Request $request, $id)
    {
        $galeri = GaleriFotoVideo::findOrFail($id);

        $request->validate([
            'created_by' => 'required|string|max:255',
            'created_at' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($galeri->foto) {
                Storage::disk('public')->delete($galeri->foto);
            }

            $path = $request->file('foto')->store('galeri_foto_video', 'public');
            $galeri->foto = $path;
        }

        $galeri->update([
            'created_by' => $request->created_by,
            'created_at' => $request->created_at,
            'foto' => $galeri->foto,
        ]);

        return redirect()->route('backend.dashboard')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = GaleriFotoVideo::findOrFail($id);

        if ($galeri->foto) {
            Storage::disk('public')->delete($galeri->foto);
        }

        $galeri->delete();

        return redirect()->route('backend.dashboard')->with('success', 'Data berhasil dihapus.');
    }
}
