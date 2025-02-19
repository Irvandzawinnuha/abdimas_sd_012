<?php

namespace App\Http\Controllers;

use App\Models\Extracurricular;
use Illuminate\Http\Request;

class ExtracurricularController extends Controller
{
    public function index()
    {
        // Mengambil semua data ekstrakurikuler dan mengelompokkan berdasarkan nama_kegiatan
        $extracurriculars = Extracurricular::all()
            ->groupBy('nama_kegiatan')
            ->map(function ($group) {
                return [
                    'images' => $group->pluck('foto_kontribusi')->flatten()->filter(),
                    'created_by' => $group->pluck('CreatedBy')->unique()
                ];
            });

        return view('extracurricular', compact('extracurriculars'));
    }

    // Method untuk menambah data (untuk admin)
    public function store(Request $request)
    {
        $request->validate([
            'nama_kegiatan' => 'required|string',
            'CreatedBy' => 'required|string',
            'foto_kontribusi.*' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $paths = [];
        if ($request->hasFile('foto_kontribusi')) {
            foreach($request->file('foto_kontribusi') as $file) {
                $path = $file->store('ekstrakurikuler/' . strtolower($request->nama_kegiatan), 'public');
                $paths[] = $path;
            }
        }

        Extracurricular::create([
            'nama_kegiatan' => $request->nama_kegiatan,
            'CreatedBy' => $request->CreatedBy,
            'foto_kontribusi' => $paths
        ]);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }
}
