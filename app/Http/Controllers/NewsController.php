<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('tanggal', 'desc')->paginate(3);
        return view('news', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news_detail', compact('news'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'konten' => 'required|string',
            'created_by' => 'required|string',
            'tanggal' => 'required|string',
            'tempat' => 'required|string',
            'foto.*' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $paths = [];
        if ($request->hasFile('foto')) {
            foreach($request->file('foto') as $file) {
                $paths[] = $file->store('news', 'public');
            }
        }

        News::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'konten' => $request->konten,
            'created_by' => $request->created_by,
            'tanggal' => $request->tanggal,
            'tempat' => $request->tempat,
            'foto' => $paths
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan');
    }
}
