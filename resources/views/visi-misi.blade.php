<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri 012 Babakan Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
    <!-- Navbar -->
<nav class="navbar">
    <div class="container">
        <div class="logo">
            <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012"> 
            <h1 class="school-name">SD NEGERI 012 BABAKAN CIPARAY</h1>
        </div>
        <ul class="nav-links">
            <li><a href="/">Beranda</a></li>
            <!-- Dropdown Profil Sekolah -->
            <li class="dropdown">
                <a href="#" class="dropbtn">Profil Sekolah <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="/profil/histori">Sejarah Singkat Sekolah</a>
                    <a href="/profil/visi-misi">Visi dan Misi</a>
                    <a href="profil-guru">Profil Guru</a>
                    <a href="/profil/fasilitas">Fasilitas Sekolah</a>
                </div>
            </li>
            <!-- Dropdown Informasi Akademik -->
            <li class="dropdown">
                <a href="#" class="dropbtn">Informasi Akademik <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="/academic/curriculum">Kurikulum</a>
                    <a href="/academic/program">Program Pembelajaran</a>
                    <a href="/academic/calendar">Kalender Akademik</a>
                </div>
            </li>
            <!-- Dropdown Berita dan Pengumuman -->
            <li class="dropdown">
                <a href="#" class="dropbtn">Berita dan Pengumuman <i class="fa fa-angle-down"></i></a>
                <div class="dropdown-content">
                    <a href="/news/latest">Berita Terbaru</a>
                    <a href="/news/announcements">Pengumuman</a>
                    <a href="/news/events">Kegiatan Sekolah</a>
                </div>
            </li>
            <li><a href="/admissions" class="btn"><i class="fa fa-graduation-cap"></i> Informasi PPDB</a></li>
        </ul>
    </div>
</nav>

    <!-- Sub Navbar -->
    <div class="sub-navbar">
        <div class="container">
            <ul class="sub-nav-links">
                <li><a href="/extracurricular">Kegiatan Ekstrakurikuler</a></li>
                <li><a href="/gallery">Galeri Foto dan Video</a></li>
                <li><a href="#">Kontak dan Lokasi</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="#">Keamanan dan Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>

<!-- Visi dan Misi -->
<section class="visi-misi">
        <div class="container">
            <div class="visi"> <br> <br> <br>
                <h2>Visi</h2>
                <p>SD Negeri 012 Babakan Ciparay Kota Bandung yang pembelajar sepanjang hayat, berkarakter,berprestasi, dan berwawasan global <br> <br> <br>
                </p>
            </div>
            <div class="misi">
                <h2>Misi</h2> <br>
                <div class="misi-card">

                1. Menanamkan dan meningkatkan keimanan, ketakwaan warga sekolah kepada Tuhan Yang Maha Esa melalui pengamalan ajaran agama. <br> <br>
                2. Membina dan mengembangkan budi pekerti luhur pada diri peserta didik dengan melaksanakan Gerakan Penumbuhan Budi Pekertidi lingkungan sekolah (GPBP) melalui program Penguatan Pendidikan Karakter (PPK) dalam menanamkan nilai utama karakter relijiusitas, nasionalisme, kemandirian, gotong royong dan integritas. <br> <br>
                3. Mewujudkan lingkungan sekolah yang sehat, bersih, indah, aman, nyaman dan menyenangkan. <br> <br>
                4. Melaksanakan proses pembelajaran aktif, inovatif, kreatif, efektif dan menyenangkan melalui pendekatan Saintifik (mengamati, menanya, menalar, mengumpulkan data dan mengkomunikasikan, serta menanamkan kompetensi Abad-21 dalam proses pembelajaran tematik untuk menumbuhkan kemampuan siswa dalam berikir kritis (critical thinking), kolaborasi (collaboration), kreativitas (creativity), dan komunikasi (communication), serta keterampilan berpikir tingkat tinggi (higher order thinking skills/HOTS). <br> <br>
                5. Melaksanakan kegiatan ekstrakurikuler dalam mengembangkan potensi peserta didik di bidang kesenian, budaya, dan olahraga.  <br> <br>
                6. Meningkatkan prestasi siswa baik di bidang akademik maupun non akademik.  <br> <br>
                7. Mewujudkan gerakan hidup bersih dan sehat serta pelestarian lingkungan hidup <br> <br>
                </div>
            </div>
        </div>
    </section>
    

        <!-- Footer -->
        <footer class="footer" style="background-color: #005599; padding: 40px 0;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; color: white;">
        <!-- Kontak Info -->
        <div class="footer-contact" style="flex: 1;">
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="text">
                    <p>Jl. Caringin No.106, Babakan Ciparay, Kota Bandung</p>
                    <b>Kota Bandung, Jawa Barat, 40223.</b>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="text">
                    <p>(+62) 812 0812 0812</p>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="text">
                    <p>admin@gmail.com</p>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="text">
                    <p>www.admin.com</p>
                </div>
            </div>
        </div>

        <!-- Informasi Sekolah -->
        <div class="footer-info" style="flex: 1;">
            <h3>Tentang SD Negeri 012 Babakan Ciparay</h3>
            <p class="about">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</p>
            <div class="footer-socmed" style="display: flex; gap: 20px; margin-top: 15px;">
                <div class="footer-socmed-split">
                    <div class="contact-info">
                        <div class="icon">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="icon">
                            <i class="fa fa-youtube-play"></i>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
                <div class="footer-socmed-split">
                    <div class="contact-info">
                        <div class="icon">
                            <i class="fa fa-instagram"></i>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="icon">
                            <i class="fa fa-linkedin"></i>
                        </div>
                        <div class="text">
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div class="footer-maps" style="flex: 1;">
                <iframe   iframe 
                    src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed" 
                    width="100%" 
                    height="250" 
                    style="border: 1px solid #ddd; border-radius: 10px;" 
                    allowfullscreen="" 
                    loading="lazy">
                    </iframe>
            </div>
        </div>
    </footer>


</body>
</html>