<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SD Negeri 012 Babakan Ciparay')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('additional_css')
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
                <h1 class="school-name">SD NEGERI 012 BABAKAN CIPARAY</h1>
            </div>

            <!-- Hamburger Menu -->
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- Desktop Menu -->
            <ul class="nav-links">
                <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn {{ Request::is('profil*') ? 'active' : '' }}">
                        Profil Sekolah <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="/profil/histori">Sejarah Singkat Sekolah</a>
                        <a href="/profil/visi-misi">Visi dan Misi</a>
                        <a href="/profil-guru">Profil Guru</a>
                        <a href="/profil/fasilitas">Fasilitas Sekolah</a>
                    </div>
                </li>
                <li><a href="/academic" class="{{ Request::is('academic') ? 'active' : '' }}">Informasi Akademik</a>
                </li>
                <li><a href="/news" class="{{ Request::is('news*') ? 'active' : '' }}">Berita dan Pengumuman</a></li>
                <li>
                    <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20PPDB%20SDN%20012%20Babakan%20Ciparay"
                        class="btn" target="_blank">
                        <i class="fa fa-graduation-cap"></i> Informasi PPDB
                    </a>
                </li>
            </ul>

            <!-- Mobile Menu -->
            <div class="mobile-menu">
                <ul class="nav-links">
                    <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn {{ Request::is('profil*') ? 'active' : '' }}">
                            Profil Sekolah <i class="fa fa-angle-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="/profil/histori">Sejarah Singkat Sekolah</a>
                            <a href="/profil/visi-misi">Visi dan Misi</a>
                            <a href="/profil-guru">Profil Guru</a>
                            <a href="/profil/fasilitas">Fasilitas Sekolah</a>
                        </div>
                    </li>
                    <li><a href="/academic" class="{{ Request::is('academic') ? 'active' : '' }}">Informasi Akademik</a>
                    </li>
                    <li><a href="/news" class="{{ Request::is('news*') ? 'active' : '' }}">Berita dan Pengumuman</a>
                    </li>
                    <li><a href="/extracurricular"
                            class="{{ Request::is('extracurricular') ? 'active' : '' }}">Kegiatan Ekstrakurikuler</a>
                    </li>
                    <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">Galeri Foto dan
                            Video</a></li>
                    <li><a href="/testimonials" class="{{ Request::is('testimonials') ? 'active' : '' }}">Testimoni</a>
                    </li>
                    <li><a href="/faq" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
                    <li><a href="/privacy-policy" class="{{ Request::is('privacy-policy') ? 'active' : '' }}">Keamanan
                            dan Kebijakan Privasi</a></li>
                    <li>
                        <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20PPDB%20SDN%20012%20Babakan%20Ciparay"
                            class="btn mobile-ppdb" target="_blank">
                            <i class="fa fa-graduation-cap"></i> Informasi PPDB
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Sub Navbar -->
    <div class="sub-navbar">
        <div class="container">
            <ul class="sub-nav-links">
                <li><a href="/extracurricular" class="{{ Request::is('extracurricular') ? 'active' : '' }}">Kegiatan
                        Ekstrakurikuler</a></li>
                <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">Galeri Foto dan Video</a>
                </li>
                <li><a href="/testimonials" class="{{ Request::is('testimonials') ? 'active' : '' }}">Testimoni</a>
                </li>
                <li><a href="/faq" class="{{ Request::is('faq') ? 'active' : '' }}">FAQ</a></li>
                <li><a href="/privacy-policy" class="{{ Request::is('privacy-policy') ? 'active' : '' }}">Keamanan dan
                        Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>
</body>

</html>
