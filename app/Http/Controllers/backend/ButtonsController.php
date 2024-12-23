<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ButtonsController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return \Illuminate\View\View
     */
    public function html()
    {
        // Return the view located at resources/views/backend/buttons.blade.php
        return view('backend.buttons');
    }
}