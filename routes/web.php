<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\AdmissionController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/academic', [AcademicController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/admissions', [AdmissionController::class, 'index']);
