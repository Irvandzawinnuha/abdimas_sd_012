<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    public function index()
    {
        return view('news_detail');
    }
}
