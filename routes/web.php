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
use App\Http\Controllers\Backend\AddPostController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\ProfilGuruController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\BeritaController;

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
use App\Http\Controllers\Backend\LupaPaswordController;
use App\Http\Controllers\Backend\EmailBerhasilController;
use App\Http\Controllers\Backend\EmailResetController;
use App\Http\Controllers\Backend\FormValidasiController;
use App\Http\Controllers\Backend\IconController;
use App\Http\Controllers\Backend\LandingPageController;
use App\Http\Controllers\Backend\LayoutDarkController;
use App\Http\Controllers\Backend\MaintenanceController;
use App\Http\Controllers\Backend\ResetSandiController;
use App\Http\Controllers\Backend\SearchController;
use App\Http\Controllers\Backend\TabelProgressController;


// Route backend
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
    Route::get('/lupapasword', [LupaPaswordController::class, 'html'])->name('backend.lupapasword');
    Route::get('/addpost', [AddPostController::class, 'html'])->name('backend.addpost');
    Route::get('/email-berhasil', [EmailBerhasilController::class, 'html'])->name('backend.email.berhasil');
    Route::get('/email-reset', [EmailResetController::class, 'html'])->name('backend.email.reset');
    Route::get('/faq', [FaqController::class, 'html'])->name('backend.faq');
    Route::get('/form-validasi', [FormValidasiController::class, 'html'])->name('backend.form.validasi');
    Route::get('/icon', [IconController::class, 'html'])->name('backend.icon');
    Route::get('/landing-page', [LandingPageController::class, 'html'])->name('backend.landing.page');
    Route::get('/layout-dark', [LayoutDarkController::class, 'html'])->name('backend.layout.dark');
    Route::get('/maintenance', [MaintenanceController::class, 'html'])->name('backend.maintenance');
    Route::get('/reset-sandi', [ResetSandiController::class, 'html'])->name('backend.reset.sandi');
    Route::get('/search', [SearchController::class, 'html'])->name('backend.search');
    Route::get('/tabel-progress', [TabelProgressController::class, 'html'])->name('backend.tabel.progress');
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
