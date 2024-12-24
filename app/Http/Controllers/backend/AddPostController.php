<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    /**
     * Display the add_post page.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        // Return the view located at resources/views/backend/add_post.blade.php
        return view('backend.add_post');
    }
}
