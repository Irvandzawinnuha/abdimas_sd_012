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
            'foto.*' => 'required|file|mimes:jpeg,png,jpg,mp4|max:10240',
            'created_by' => 'required|string|max:255',
            'created_at' => 'required|date',
            'kategori' => 'required|string',
        ]);

        $paths = [];
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $extension = $file->getClientOriginalExtension();
                $folder = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) ? 'galeri/images' : 'galeri/videos';
                $paths[] = $file->store($folder, 'public');
            }
        }

        $galeri = new GaleriFotoVideo([
            'foto' => $paths,
            'created_by' => $request->created_by,
            'kategori' => $request->kategori,
        ]);
        
        $galeri->created_at = $request->created_at;
        $galeri->save();

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
            'foto.*' => 'nullable|file|mimes:jpeg,png,jpg,mp4|max:10240',
            'hapus_foto' => 'nullable|array',
            'created_at' => 'required|date',
            'kategori' => 'required|string',
        ]);

        $existingPhotos = $galeri->foto ?? [];

        // Handle photo deletion
        if ($request->has('hapus_foto')) {
            foreach ($request->hapus_foto as $index) {
                if (isset($existingPhotos[$index])) {
                    Storage::disk('public')->delete($existingPhotos[$index]);
                    unset($existingPhotos[$index]);
                }
            }
            $existingPhotos = array_values($existingPhotos);
        }

        // Handle new photos
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $extension = $file->getClientOriginalExtension();
                $folder = in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) ? 'galeri/images' : 'galeri/videos';
                $existingPhotos[] = $file->store($folder, 'public');
            }
        }

        // Update data biasa
        $galeri->fill([
            'foto' => $existingPhotos,
            'created_by' => $request->created_by,
            'kategori' => $request->kategori,
        ]);
        
        $galeri->created_at = $request->created_at;
        $galeri->save();

        return redirect()->route('backend.dashboard')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $galeri = GaleriFotoVideo::findOrFail($id);

        // Delete all associated files
        if ($galeri->foto) {
            foreach ($galeri->foto as $path) {
                Storage::disk('public')->delete($path);
            }
        }

        $galeri->delete();

        return redirect()->route('backend.dashboard')
            ->with('success', 'Data berhasil dihapus');
    }
}
