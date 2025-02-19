<?php

namespace App\Http\Controllers;

use App\Models\GaleriFotoVideo;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Mengambil dan mengelompokkan data galeri berdasarkan kategori
        $gallery = GaleriFotoVideo::all()
            ->groupBy('kategori')
            ->map(function ($group) {
                return [
                    'images' => $group->pluck('foto')->flatten()->filter(),
                    'created_by' => $group->pluck('created_by')->unique()
                ];
            });

        return view('gallery', compact('gallery'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|string',
            'created_by' => 'required|string',
            'foto.*' => 'required|file|mimes:jpeg,png,jpg|max:2048'
        ]);

        $paths = [];
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $path = $file->store('gallery/' . strtolower(str_replace(' ', '-', $request->kategori)), 'public');
                $paths[] = $path;
            }
        }

        GaleriFotoVideo::create([
            'kategori' => $request->kategori,
            'created_by' => $request->created_by,
            'foto' => $paths
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
