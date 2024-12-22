<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AcademicController extends Controller
{
    public function index()
    {
        $academic = Academic::first(); 
        return view('academic', compact('academic')); 
    }
}
