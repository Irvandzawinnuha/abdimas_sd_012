<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmailResetController extends Controller
{
    public function html()
    {
        return view('backend.emailreset');
    }
}
