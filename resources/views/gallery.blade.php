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
                <li><a href="/privacy-policy">Keamanan dan Kebijakan Privasi</a></li>
            </ul>
        </div>
    </div>
	
	
	
	<!-- Galeri -->
    <section class="galeri">
    <div class="container" style="display: block; text-align: center;">
            <h2>Galeri Foto dan Video Sekolah</h2>
            <p>SD NEGERI 012 BABAKAN CIPARAY</p>
    <section class="galeri">
    <div class="container" style="text-align: left; margin-left: 20px;">


    
        <!-- Acara Sekolah -->
        <div class="galeri-kategori" style="display: flex; flex-direction: column; align-items: flex-start;">
            <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 15px;">Acara Sekolah</h3>
            <div class="galeri-items" style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto1.jpg" alt="Acara Sekolah" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto2.jpg" alt="Acara Sekolah" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="lihat-selengkapnya" style="margin-top: 10px;">
                <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </div>
</section>


<!-- Prestasi Siswa -->
<div class="galeri-kategori" style="display: flex; flex-direction: column; align-items: flex-start;">
            <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 15px;">Prestasi Siswa</h3>
            <div class="galeri-items" style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto1.jpg" alt="Prestasi Siswa" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto2.jpg" alt="Prestasi Siswa" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="lihat-selengkapnya" style="margin-top: 10px;">
                <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Kontribusi Kepada Masyarakat -->
<div class="galeri-kategori" style="display: flex; flex-direction: column; align-items: flex-start;">
            <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 15px;">Kontribusi Kepada Masyarakat</h3>
            <div class="galeri-items" style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto1.jpg" alt="Kontribusi Kepada Masyarakat" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto2.jpg" alt="Kontribusi Kepada Masyarakat" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="lihat-selengkapnya" style="margin-top: 10px;">
                <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </div>
</section>


<!--Kegiatan P5-->
<div class="galeri-kategori" style="display: flex; flex-direction: column; align-items: flex-start;">
            <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 15px;">Kegiatan P5</h3>
            <div class="galeri-items" style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto1.jpg" alt="Kegiatan P5" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto2.jpg" alt="Kegiatan P5" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="lihat-selengkapnya" style="margin-top: 10px;">
                <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Lihat Selengkapnya
                </button>
            </div>
        </div>
    </div>
</section>




<!--Kemitraan-->
<div class="galeri-kategori" style="display: flex; flex-direction: column; align-items: flex-start;">
            <h3 style="font-size: 24px; font-weight: bold; margin-bottom: 15px;">Kemitraan</h3>
            <div class="galeri-items" style="display: flex; gap: 15px; flex-wrap: wrap;">
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto1.jpg" alt="Kemitraan" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
                <div class="galeri-item" style="margin-bottom: 10px;">
                    <img src="https://example.com/foto2.jpg" alt="Kemitraan" style="width: 150px; height: 100px; object-fit: cover; border-radius: 5px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="lihat-selengkapnya" style="margin-top: 10px;">
                <button style="background-color: #007bff; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">
                    Lihat Selengkapnya
                </button>
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
