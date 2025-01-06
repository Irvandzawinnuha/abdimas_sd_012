<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Return the view located at resources/views/backend/index.blade.php
        return view('backend.index');
    }
}


namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display the HTML view for the gallery description.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        // Return the view located at resources/views/backend/gallery_description.blade.php
        return view('backend.galeri');
    }
}
