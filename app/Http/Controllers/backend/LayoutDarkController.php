<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutDarkController extends Controller
{
    public function html()
    {
        return view('backend.layoutdark');
    }
}