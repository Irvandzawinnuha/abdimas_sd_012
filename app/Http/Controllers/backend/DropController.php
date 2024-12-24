<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DropController extends Controller
{
    /**
     * Display the kalender page.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        // Return the view located at resources/views/backend/kalender.blade.php
        return view('backend.drop');
    }
}
