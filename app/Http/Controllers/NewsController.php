<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(4);
        return view('news', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news-detail', compact('news'));
    }
}
