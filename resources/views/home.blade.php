<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri 012 Babakan Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('logo sd.png') }}" alt="Logo SD Negeri 012"> 
                <h1 class="school-name">SD NEGERI 012 BABAKAN CIPARAY</h1>
            </div>
            <ul class="nav-links">
                <li><a href="/">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Profil Sekolah <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#">Sambutan</a>
                        <a href="#">Sejarah</a>
                        <a href="#">Identitas Sekolah</a>
                        <a href="#">Target dan Tujuan</a>
                        <a href="#">PROGRAM</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Informasi Akademik <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#">Kurikulum</a>
                        <a href="#">Program Pembelajaran</a>
                        <a href="#">Kalender Akademik</a>
                    </div>
                </li>
                <li><a href="/news">Berita dan Pengumuman</a></li>
                <li><a href="/admissions" class="btn"><i class="fa fa-graduation-cap"></i> Informasi PPDB</a></li>
            </ul>
        </div>
    </nav>

    <!-- Sub Navbar -->
    <div class="sub-navbar">
        <div class="container">
            <ul class="sub-nav-links">
                <li><a href="#">Kegiatan Ekstrakurikuler</a></li>
                <li><a href="#">Galeri Foto dan Video</a></li>
                <li><a href="#">Kontak dan Lokasi</a></li>
                <li><a href="#">Testimoni</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Layanan Orang Tua</a></li>
                <li><a href="#">Keamanan dan Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>

    <!-- Header -->
    <section class="welcome">
        <div class="container">
            <div class="text">
                <h3>Selamat Datang di</h3>
                <h2>SD Negeri 012 Babakan Ciparay</h2>
                <p>Jl. Caringin No.106, Babakan Ciparay, Kota Bandung, Jawa Barat, dengan kode pos 40223.</p>
                <a href="/ppdb" class="btn"><i class="fa fa-graduation-cap"></i> Informasi PPDB</a>
            </div>
            <div class="image">
                <img src="{{ asset('banner.png') }}" alt="Gambar">
            </div>
        </div>
    </section>

    <!-- Visi dan Misi -->
    <section class="visi-misi">
        <div class="container">
            <div class="visi">
                <h2>Visi</h2>
                <p>Terwujudnya Lulusan SD Negeri 012 Babakan Ciparay Kota Bandung yang berakhlak mulia, berprestasi, dan berwawasan lingkungan.</p>
            </div>
            <div class="misi">
                <h2>Misi</h2>
                <div class="misi-card">
                    <div class="body">Menanamkan IMTAK dan IPTEK melalui pembelajaran.</div>
                    <div class="body">Membina peserta didik secara akademik maupun non akademik untuk berprestasi dan hidup mandiri.</div>
                    <div class="body">Menciptakan suasana pembelajaran yang aktif, kreatif, efektif, inovatif, dan menyenangkan.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section class="kontak">
        <div class="container">
            <div class="contact-detail">
                <h2>Temui Kami</h2>
                <h3>Lokasi:</h3>
                <p>Jl. Caringin No.106, Babakan Ciparay, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat, kode pos 40223.</p>
                <h3>Office Hours:</h3>
                <p>Senin - Sabtu, 07.00 WIB - 16.00 WIB</p>
            </div>
            <div class="contact-maps">
                <iframe src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-contact">
                <div class="contact-info">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="text">
                        <p>Jl. Caringin No.106, Babakan Ciparay, Kec. Babakan Ciparay</p>
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
            <div class="footer-info">
                <h3>Tentang SD Negeri 012 Babakan Ciparay</h3>
                <p class="about">Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet Lorem Ipsum Dolor Sir Amet</p>
                <div class="footer-socmed">
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
        </div>
    </footer>
</body>
</html>
