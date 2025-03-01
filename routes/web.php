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


//backend
use App\Http\Controllers\backend\FotoKontribusiController;
use App\Http\Controllers\backend\GaleriController;
use App\Http\Controllers\backend\IndexController;

use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\LupaPasswordController;

use App\Http\Controllers\backend\ForgotPasswordController;
use App\Http\Controllers\backend\ResetPasswordController;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ProfileGuruController;

use App\Http\Controllers\backend\BeritaPengumumanController;
use App\Http\Controllers\backend\UserController;

use App\Http\Controllers\backend\DaftarController;
use App\Http\Controllers\backend\EditController;


use App\Http\Controllers\backend\EmailBerhasilController;

use App\Http\Controllers\backend\EmailResetController;
use App\Http\Controllers\backend\ResetSandiController;

use App\Http\Controllers\backend\ResetLinkController;
use App\Http\Controllers\backend\SearchController;

use App\Http\Controllers\backend\KegiatanEkstrakurikulerController;
use App\Http\Controllers\backend\EmailController;

use App\Http\Controllers\Backend\GaleriFotoVideoController;

//bagian sitemaps
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


// Route backend
Route::prefix('backend')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('backend.index');

    // Login Routes
    Route::get('/login', [LoginController::class, 'html'])->name('backend.login');
    Route::post('/login', [LoginController::class, 'login'])->name('backend.login.post');
    Route::get('/logout', [LoginController::class, 'logout'])->name('backend.logout');
    Route::post('/logout', [LoginController::class, 'logout'])->name('backend.logout.post');

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

    // Pindahkan route verifikasi ke sini
    Route::get('/verify-email/{token}', [DaftarController::class, 'verifyEmail'])->name('verify.email');

    // Lupa Password & Reset Password Routes
    Route::controller(LupaPasswordController::class)->group(function () {
        Route::get('/lupa-password', 'showForm')->name('backend.lupa_password');
        Route::post('/lupa-password/send', 'sendResetLink')->name('backend.lupa_password.send');
    });

    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])
            ->name('backend.password.reset');
        Route::post('/reset-password/update', [ResetPasswordController::class, 'reset'])
            ->name('backend.password.update');
    });
});

//back end dashboard buat mencankup semuanya
Route::prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'html'])->name('backend.dashboard');
});


Route::prefix('backend')->group(function () {
    // Menampilkan daftar guru
    Route::get('/profile-guru', [ProfileGuruController::class, 'index'])->name('profile.guru.index');

    // Menampilkan form tambah guru
    Route::get('/profile-guru/create', [ProfileGuruController::class, 'create'])->name('profile.guru.create');

    // Menyimpan data guru baru
    Route::post('/profile-guru/store', [ProfileGuruController::class, 'store'])->name('profile.guru.store');

    // Menampilkan form edit guru
    Route::get('/profile-guru/edit/{id}', [ProfileGuruController::class, 'edit'])->name('profile.guru.edit');

    // Memperbarui data guru
    Route::put('/profile-guru/update/{id}', [ProfileGuruController::class, 'update'])->name('profile.guru.update');

    // Menghapus data guru
    Route::delete('/profile-guru/destroy/{id}', [ProfileGuruController::class, 'destroy'])->name('profile.guru.destroy');
});




Route::get('/dashboard', [App\Http\Controllers\backend\DashboardController::class, 'html']);

Route::prefix('backend')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'html'])->name('backend.dashboard');
});




//Bagian Sign in to account
// Forgot Password Routes
Route::get('/backend/lupa_password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('backend.lupa_password');
Route::post('/backend/lupa_password/send', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('backend.lupa_password.send');

// Menampilkan form reset password
Route::get('/backend/lupa_password', [ForgotPasswordController::class, 'showForm'])->name('backend.lupa_password');
Route::get('/lupa_password', [ForgotPasswordController::class, 'showForm'])->name('password.request');

// Mengirim email reset password
Route::post('/backend/lupa_password/send', [ResetLinkController::class, 'sendResetLink'])->name('backend.lupa_password.send');

// Reset Password Routes udh bener
Route::get('/backend/resetpassword/{token}', [ResetPasswordController::class, 'showResetForm'])->name('backend.password.reset');
Route::post('/backend/resetpassword', [ResetPasswordController::class, 'reset'])->name('backend.password.update');
Route::get('/backend/resetpassword/debug', function () {
    return "Route works!";
});

Route::get('/test-email', function () {
    \Illuminate\Support\Facades\Mail::raw('Test email content', function ($message) {
        $message->to('irvandzwinnuha15@gmail.com')
            ->subject('Test Email');
    });
    return 'Email sent!';
});



Route::prefix('backend')->group(function () {
    Route::resource('foto', FotoKontribusiController::class);
});

Route::prefix('backend')->group(function () {
    Route::get('/foto-kontribusi', [FotoKontribusiController::class, 'index'])->name('foto.index');
    Route::get('/foto-kontribusi/create', [FotoKontribusiController::class, 'create'])->name('foto.create');
    Route::post('/foto-kontribusi/store', [FotoKontribusiController::class, 'store'])->name('foto.store');
    Route::get('/foto-kontribusi/edit/{id}', [FotoKontribusiController::class, 'edit'])->name('foto.edit');
    Route::put('/foto-kontribusi/update/{id}', [FotoKontribusiController::class, 'update'])->name('foto.update');
    Route::delete('/foto-kontribusi/delete/{id}', [FotoKontribusiController::class, 'destroy'])->name('foto.destroy');
});

//bagian lupa pasword mail
Route::post('/send-email', [UserController::class, 'sendDynamicEmail'])->name('send.email');

Route::post('/send-email', [EmailController::class, 'sendDynamicEmail'])->name('send.email');

Route::post('/send-reset-password-email', [EmailController::class, 'sendResetPasswordEmail'])->name('send.reset_password.email');

//bagian berita dan pengumuman
Route::prefix('backend')->group(function () {
    Route::get('/berita', [BeritaPengumumanController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [BeritaPengumumanController::class, 'create'])->name('berita.create');
    Route::post('/berita', [BeritaPengumumanController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [BeritaPengumumanController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [BeritaPengumumanController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [BeritaPengumumanController::class, 'destroy'])->name('berita.destroy');
    Route::resource('berita', BeritaPengumumanController::class);
});

//bagian kegiatan ekstrakurikuler back end
Route::prefix('kegiatan-ekstrakurikuler')->group(function () {
    Route::get('/', [KegiatanEkstrakurikulerController::class, 'index'])->name('kegiatan-ekstrakurikuler.index');
    Route::get('/create', [KegiatanEkstrakurikulerController::class, 'create'])->name('kegiatan-ekstrakurikuler.create');
    Route::post('/', [KegiatanEkstrakurikulerController::class, 'store'])->name('kegiatan-ekstrakurikuler.store');
    Route::get('/{id}/edit', [KegiatanEkstrakurikulerController::class, 'edit'])->name('kegiatan-ekstrakurikuler.edit');
    Route::put('/{id}', [KegiatanEkstrakurikulerController::class, 'update'])->name('kegiatan-ekstrakurikuler.update');
    Route::delete('/{id}', [KegiatanEkstrakurikulerController::class, 'destroy'])->name('kegiatan-ekstrakurikuler.destroy');
});

//bagian galeri foto dan video back end
Route::prefix('backend/galeri')->group(function () {
    Route::get('/', [GaleriFotoVideoController::class, 'index'])->name('galeri.index');
    Route::get('/create', [GaleriFotoVideoController::class, 'create'])->name('galeri.create');
    Route::post('/store', [GaleriFotoVideoController::class, 'store'])->name('galeri.store');
    Route::get('/edit/{id}', [GaleriFotoVideoController::class, 'edit'])->name('galeri.edit');
    Route::put('/update/{id}', [GaleriFotoVideoController::class, 'update'])->name('galeri.update');
    Route::delete('/delete/{id}', [GaleriFotoVideoController::class, 'destroy'])->name('galeri.destroy');
});

// Route untuk galeri foto video
Route::get('/galeri-foto-video', [GaleriFotoVideoController::class, 'index'])->name('galeri.index');
Route::get('/galeri-foto-video/create', [GaleriFotoVideoController::class, 'create'])->name('create_foto_video');
Route::post('/galeri-foto-video', [GaleriFotoVideoController::class, 'store'])->name('galeri.store');
Route::get('/galeri-foto-video/{id}/edit', [GaleriFotoVideoController::class, 'edit'])->name('galeri.edit');
Route::put('/galeri-foto-video/{id}', [GaleriFotoVideoController::class, 'update'])->name('galeri.update');
Route::delete('/galeri-foto-video/{id}', [GaleriFotoVideoController::class, 'destroy'])->name('galeri.destroy');



//bagian sitemaps
Route::get('/sitemap', function () {
    return Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'))
        ->toResponse(request());
});








// Route Utama front end landing page sd
Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Profil  sekolah
Route::prefix('profil')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('profil');
    Route::get('/histori', [ProfilController::class, 'histori'])->name('histori');
    Route::get('/fasilitas', [ProfilController::class, 'fasilitas'])->name('fasilitas');
});

// Route Akademik
Route::get('/academic', [AcademicController::class, 'index'])->name('academic');

// Route Berita
Route::resource('news', NewsController::class);

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

if (app()->environment('local')) {
    Route::get('/backend/check-verification/{email}', [DaftarController::class, 'checkVerificationStatus']);
}

Route::get('/news_detail/{id}', [NewsDetailController::class, 'index'])->name('news_detail');
