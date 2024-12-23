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
                    <a href="/profil-guru">Profil Guru</a>
                    <a href="/profil/fasilitas">Fasilitas Sekolah</a>
                </div>
            </li>
            <li><a href="/">Informasi Akademik</a></li>
            <li><a href="/">Berita dan Pengumuman</a></li>
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
                <li><a href="/testimonials">Testimoni</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="#">Keamanan dan Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>
    <br><br><br>
    <!-- Header -->
    <section class="welcome">
        <div class="container">
        <div class="image" style="margin-right: 100px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/bagian_profil_sd/profil_sekolah_sd.png') }}" alt="Gambar" width="700">
            </div>
            <div class="text">
            <h2 style="font-size: 28px; font-weight: bold; color: #000000; margin-bottom: 20px;">Tentang SD NEGERI 012 BABAKAN CIPARAY</h2>
            <p style="font-size: 16px; line-height: 1.8; color: #333333;">SD Negeri 012 Babakan Ciparay Kota Bandung berdomisili di perkotaan yang berdekatan dengan Pasar Induk Caringin Bandung, dengan pengembangan ekonomi dan wilayah perdagangan dengan keterjangkauan lokasi yang mudah ditempuh melalui sarana transportasi dari berbagai rute.</p>
        </div>
    </section>


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

    <!-- Kontribusi Kepada Masyarakat -->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; text-align: center; display: block;">
        <h2 class="kontribusi-title">Kontribusi Kepada Masyarakat</h2>
            <div class="kontribusi-gallery">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_1.png') }}" alt="Deskripsi Gambar 1" class="gallery-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_2.png') }}" alt="Kegiatan 1" class="gallery-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_3.png') }}" alt="Kegiatan 1" class="gallery-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_4.jpg') }}" alt="Kegiatan 1" class="gallery-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_5.jpg') }}" alt="Kegiatan 1" class="gallery-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_6.jpg') }}" alt="Kegiatan 1" class="gallery-item">
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
    <div class="container" style="display: flex; justify-content: space-between; align-items: flex-start; gap: 20px; color: white;">
        <!-- Kontak Info -->
        <div class="footer-contact" style="flex: 1;">
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
                <div class="text">
                    <p>Jl. Caringin No.106, Babakan Ciparay, Kota Bandung</p>
                    <b>Kota Bandung, Jawa Barat, 40223.</b> <br>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-phone"></i>
                </div>
                <div class="text">
                    <p style="margin-top: 30px;">082130168612</p> <br>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-envelope"></i>
                </div>
                <div class="text">
                    <p>dapodiksdn012bacip@gmail.com</p>
                </div>
            </div>
            <div class="contact-info">
                <div class="icon">
                    <i class="fa fa-globe"></i>
                </div>
                <div class="text">
                    <p style="margin-top: 30px;">www.admin.com</p> <br>
                </div>
            </div>
        </div>

        <!-- Informasi Sekolah -->
        <div class="footer-info" style="flex: 1;">
            <h3>Tentang SD Negeri 012 Babakan Ciparay</h3>
            <p class="about">SD Negeri 012 Babakan Ciparay Kota Bandung berdomisili di perkotaan yang berdekatan dengan Pasar Induk Caringin Bandung, dengan pengembangan ekonomi dan wilayah perdagangan dengan keterjangkauan lokasi yang mudah ditempuh melalui sarana transportasi dari berbagai rute.</p>
        </div>
        <div class="footer-maps">
                <iframe src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
    </footer> 
</body>
</html>
