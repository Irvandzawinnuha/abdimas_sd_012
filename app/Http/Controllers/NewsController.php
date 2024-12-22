<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all(); 
        return view('news', compact('news')); 
    }
}
