<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        return view('faq'); // Mengarahkan ke file views/faq.blade.php
    }
}
