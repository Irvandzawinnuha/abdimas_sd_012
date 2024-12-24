<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormValidasiController extends Controller
{
    public function html()
    {
        return view('backend.formvalidasi');
    }
}
