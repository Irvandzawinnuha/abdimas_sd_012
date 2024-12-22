<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfilGuruController;
use App\Http\Controllers\TestimonialsController;


//backend
use App\Http\Controllers\Backend\GaleriController;
use App\Http\Controllers\Backend\IndexController;
use App\Http\Controllers\Backend\LoginController;
use App\Http\Controllers\Backend\DaftarController;
use App\Http\Controllers\Backend\ButtonsController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\EditController;
use App\Http\Controllers\Backend\KalenderController;
use App\Http\Controllers\Backend\KontakController;



Route::prefix('backend')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('backend.index');
    Route::get('/galeri', [GaleriController::class, 'html'])->name('backend.galeri');
    Route::get('/login', [LoginController::class, 'html'])->name('backend.login');
    Route::get('/daftar', [DaftarController::class, 'html'])->name('backend.daftar');
    Route::get('/buttons', [ButtonsController::class, 'html'])->name('backend.buttons');
    Route::get('/dashboard', [DashboardController::class, 'html'])->name('backend.dashboard');
    Route::get('/editprofil', [EditController::class, 'html'])->name('backend.editprofil');
    Route::get('/kalender', [KalenderController::class, 'html'])->name('backend.kalender');
    Route::get('/kontak', [KontakController::class, 'html'])->name('backend.kontak');


});



// Route Utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Profile
Route::prefix('profil')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('profil');
    Route::get('/histori', [ProfilController::class, 'histori'])->name('histori');
    Route::get('/fasilitas', [ProfilController::class, 'fasilitas'])->name('fasilitas');
});

// Route Akademik
Route::get('/academic', [AcademicController::class, 'index'])->name('academic');

// Route Berita
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Route Galeri
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Route Ekstrakurikuler
Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->name('extracurricular.index');

// Route Penerimaan Siswa Baru
Route::get('/admissions', [AdmissionController::class, 'index'])->name('admissions');

//  Route daftar berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// visi misi
Route::get('/profil/visi-misi', [ProfilController::class, 'visiMisi'])->name('profil.visi-misi');

// faq
Route::get('/faq', [FAQController::class, 'index'])->name('faq');

// profil guru sekolah
Route::get('/profil-guru', [ProfilGuruController::class, 'index'])->name('profil-guru');

// Testimoni
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');