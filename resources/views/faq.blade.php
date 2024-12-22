<!-- Untuk pertanyaan yang sering diajukan (FAQ). -->
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
                <li><a href="/testimonials">Testimoni</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="#">Keamanan dan Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>

    <section class="faq-section">
    <div class="container" style = "display: block;">
        <h1 class="faq-title">Frequently Asked Question</h1>
        <h2 class="faq-subtitle">Terkait SDN 012 Babakan Ciparay</h2>
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-icon"><i class="fa fa-comment"></i></div>
                <div>
                    <h3>Apa visi dan misi SDN 012 Babakan Ciparay?</h3>
                    <p>SDN 012 Babakan Ciparay memiliki visi untuk menciptakan generasi cerdas, kreatif, dan berkarakter berdasarkan nilai-nilai budaya bangsa. Untuk mewujudkannya, sekolah ini berkomitmen menyediakan pendidikan berkualitas.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-icon"><i class="fa fa-comment"></i></div>
                <div>
                    <h3>Program unggulan apa saja yang ditawarkan SDN 012 Babakan Ciparay?</h3>
                    <p>SDN 012 Babakan Ciparay menawarkan program unggulan seperti literasi, ekstrakurikuler seni dan olahraga, pengembangan karakter, serta kelas teknologi untuk siswa kelas 5 dan 6.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-icon"><i class="fa fa-comment"></i></div>
                <div>
                    <h3>Bagaimana proses pendaftaran siswa baru di SDN 012 Babakan Ciparay?</h3>
                    <p>Pendaftaran siswa baru biasanya dibuka pada bulan Mei hingga Juli setiap tahun. Calon siswa dan orang tua perlu mengisi formulir, melengkapi dokumen seperti akta kelahiran dan kartu keluarga.</p>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-icon"><i class="fa fa-comment"></i></div>
                <div>
                    <h3>Apa saja fasilitas yang tersedia di SDN 012 Babakan Ciparay?</h3>
                    <p>Fasilitas yang tersedia meliputi ruang kelas nyaman, perpustakaan dengan koleksi buku lengkap, lapangan olahraga, ruang komputer, dan kantin sehat.</p>
                </div>
            </div>
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
