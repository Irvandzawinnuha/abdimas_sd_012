<?php
//Controller ini akan menangani halaman beranda (home) dari website.
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // Menampilkan halaman beranda
    }
}