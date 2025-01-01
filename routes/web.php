<?php
//front end
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
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\NewsDetailController;
use App\Http\Controllers\FotoKontribusiController;


//backend
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\IndexController;

use App\Http\Controllers\backend\LoginController;

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;


use App\Http\Controllers\backend\AddPostController;
use App\Http\Controllers\backend\DaftarController;
use App\Http\Controllers\backend\ButtonsController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\EditController;
use App\Http\Controllers\backend\KalenderController;
use App\Http\Controllers\backend\LupaPaswordController;
use App\Http\Controllers\backend\EmailBerhasilController;
use App\Http\Controllers\backend\EmailResetController;
use App\Http\Controllers\backend\FormValidasiController;
use App\Http\Controllers\backend\IconController;
use App\Http\Controllers\backend\LandingPageController;
use App\Http\Controllers\backend\LayoutDarkController;
use App\Http\Controllers\backend\ResetSandiController;
use App\Http\Controllers\backend\SearchController;
use App\Http\Controllers\backend\TabelProgressController;


// Route backend
Route::prefix('backend')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('backend.index');

    // Login Routes
    Route::get('/login', [LoginController::class, 'html'])->name('backend.login');
    Route::post('/login', [LoginController::class, 'login'])->name('backend.login.post');
    Route::post('/logout', [LoginController::class, 'logout'])->name('backend.logout');

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'html'])->name('backend.dashboard')->middleware('auth');

    // Registration Routes
    Route::get('/daftar', [DaftarController::class, 'html'])->name('backend.daftar');
    Route::post('/daftar', [DaftarController::class, 'store'])->name('backend.daftar.store');

    // Other Routes
    Route::get('/galeri', [GaleriController::class, 'html'])->name('backend.galeri');
    Route::get('/buttons', [ButtonsController::class, 'html'])->name('backend.buttons');
    Route::get('/editprofil', [EditController::class, 'html'])->name('backend.editprofil');
    Route::get('/kalender', [KalenderController::class, 'html'])->name('backend.kalender');
    Route::get('/addpost', [AddPostController::class, 'html'])->name('backend.addpost');
});
// Forgot Password Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset Password Routes
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Tambah, Edit, dan Hapus pada backend
Route::prefix('backend')->group(function () {
    Route::get('/foto-kontribusi', [FotoKontribusiController::class, 'index'])->name('foto.index');
    Route::get('/foto-kontribusi/create', [FotoKontribusiController::class, 'create'])->name('foto.create'); // Menambahkan rute ini
    Route::post('/foto-kontribusi/store', [FotoKontribusiController::class, 'store'])->name('foto.store');
    Route::get('/foto-kontribusi/edit/{id}', [FotoKontribusiController::class, 'edit'])->name('foto.edit');
    Route::put('/foto-kontribusi/update/{id}', [FotoKontribusiController::class, 'update'])->name('foto.update');
    Route::delete('/foto-kontribusi/delete/{id}', [FotoKontribusiController::class, 'destroy'])->name('foto.delete');
});

Route::prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'html'])->name('backend.dashboard');
});

Route::prefix('backend')->group(function () {
    Route::get('/foto-kontribusi', [FotoKontribusiController::class, 'index'])->name('foto.index');
    Route::get('/foto-kontribusi/create', [FotoKontribusiController::class, 'create'])->name('foto.create');
    Route::post('/foto-kontribusi/store', [FotoKontribusiController::class, 'store'])->name('foto.store');
    Route::get('/foto-kontribusi/edit/{id}', [FotoKontribusiController::class, 'edit'])->name('foto.edit');
    Route::put('/foto-kontribusi/update/{id}', [FotoKontribusiController::class, 'update'])->name('foto.update');
    Route::delete('/foto-kontribusi/delete/{id}', [FotoKontribusiController::class, 'destroy'])->name('foto.delete');
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

//privacy-policy
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');

//bagian news detail atau berita pengumuman semuanya
Route::get('news_detail', [NewsDetailController::class, 'index'])->name('news_detail');

// bagian delete dan edit
Route::prefix('backend')->group(function () {
    Route::get('/foto-kontribusi', [FotoKontribusiController::class, 'index'])->name('foto.index');
    Route::get('/foto-kontribusi/edit/{id}', [FotoKontribusiController::class, 'edit'])->name('foto.edit');
    Route::delete('/foto-kontribusi/delete/{id}', [FotoKontribusiController::class, 'destroy'])->name('foto.delete');
});