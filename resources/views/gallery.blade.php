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
                    <li><a href="/academic">Informasi Akademik</a></li>
                    <li><a href="/news">Berita dan Pengumuman</a></li>
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
        <div class="container" style="display: block; text-align: center;"> <br> <br>
                <h2>Galeri Foto dan Video Sekolah</h2> 
                <p>SD NEGERI 012 BABAKAN CIPARAY</p>


    
    <!--Acara Sekolah-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Acara Sekolah</h2>
                <button id="toggle-button-acara-sekolah" style="
                    background-color: #005599; 
                    color: white; 
                    border: none; 
                    padding: 10px 30px; 
                    border-radius: 30px; 
                    font-size: 16px; 
                    display: flex; 
                    align-items: center; 
                    gap: 10px; 
                    cursor: pointer;">
                    <span id="button-text-acara-sekolah">Lihat Selengkapnya</span>
                    <span id="arrow-icon-acara-sekolah" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-acara-sekolah">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Boseh (Rebo Sehat).png') }}" alt="Kegiatan 1" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Pramuka.png') }}" alt="Kegiatan 2" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Pencak Silat.png') }}" alt="Kegiatan 3" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/kamis_siang.png') }}" alt="Kegiatan 4" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kamis Nyunda.png') }}" alt="Kegiatan 5" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Makan Sehat Bersama.png') }}" alt="Kegiatan 6" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Jumroh (Jumat Rohani).png') }}" alt="Kegiatan 7" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Paskibra.png') }}" alt="Kegiatan 8" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Literasi Asyik.png') }}" alt="Kegiatan 9" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Sabar.png') }}" alt="Kegiatan 10" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Workshop Pembelajaran di Kelas.png.png') }}" alt="Kegiatan 11" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Upacara Bendera.png') }}" alt="Kegiatan 12" style="width: 100%; border-radius: 8px;">
            </div>
        </div>
    </section>



    <!-- Prestasi Siswa-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;"> Prestasi Siswa</h2>
                <button id="toggle-button-prestasi-siswa" style="
                    background-color: #005599; 
                    color: white; 
                    border: none; 
                    padding: 10px 30px; 
                    border-radius: 30px; 
                    font-size: 16px; 
                    display: flex; 
                    align-items: center; 
                    gap: 10px; 
                    cursor: pointer;">
                    <span id="button-text-prestasi-siswa">Lihat Selengkapnya</span>
                    <span id="arrow-icon-prestasi-siswa" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori-prestasi-siswa" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-prestasi-siswa">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Lomba Mewarnai.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Lomba Mewarnai(1).png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Pencak Silat.png') }}" alt="Kegiatan 3" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Tenis Meja Putri.png') }}" alt="Kegiatan 4" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik.png') }}" alt="Kegiatan 5" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(2).png') }}" alt="Kegiatan 6" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(3).png') }}" alt="Kegiatan 7" class="gallery-item">
            </div>
        </div>
    </section>



    <!--Kontribusi Kepada Masyarakat -->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kontribusi Kepada Masyarakat </h2>
                <button id="toggle-button-kontribusi-kepada-masyarakat" style="
                    background-color: #005599; 
                    color: white; 
                    border: none; 
                    padding: 10px 30px; 
                    border-radius: 30px; 
                    font-size: 16px; 
                    display: flex; 
                    align-items: center; 
                    gap: 10px; 
                    cursor: pointer;">
                    <span id="button-text-kontribusi-kepada-masyarakat">Lihat Selengkapnya</span>
                    <span id="arrow-icon-kontribusi-kepada-masyarakat" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-kontribusi-kepada-masyarakat">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(2).png') }}" alt="Kegiatan 3" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(3).png') }}" alt="Kegiatan 4" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat(1).png') }}" alt="Kegiatan 5" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(1).png') }}" alt="Kegiatan 6" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat(2).png') }}" alt="Kegiatan 7" class="gallery-item">
            </div>
        </div>
    </section>



    <!--Kegiatan P5-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kegiatan P5</h2>
                <button id="toggle-button-kegiatan-p5" style="
                    background-color: #005599; 
                    color: white; 
                    border: none; 
                    padding: 10px 30px; 
                    border-radius: 30px; 
                    font-size: 16px; 
                    display: flex; 
                    align-items: center; 
                    gap: 10px; 
                    cursor: pointer;">
                    <span id="button-text-kegiatan-p5">Lihat Selengkapnya</span>
                    <span id="arrow-icon-kegiatan-p5" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-kegiatan-p5">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_1.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_2.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5(1).png') }}" alt="Kegiatan 3" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5.png') }}" alt="Kegiatan 4" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_7.png') }}" alt="Kegiatan 5" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_8.png') }}" alt="Kegiatan 6" class="gallery-item">
            </div>
        </div>
    </section>


    <!--Kemitraan-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kemitraan</h2>
                <button id="toggle-button-kemitraan" style="
                    background-color: #005599; 
                    color: white; 
                    border: none; 
                    padding: 10px 30px; 
                    border-radius: 30px; 
                    font-size: 16px; 
                    display: flex; 
                    align-items: center; 
                    gap: 10px; 
                    cursor: pointer;">
                    <span id="button-text-kemitraan">Lihat Selengkapnya</span>
                    <span id="arrow-icon-kemitraan" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-kemitraan">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_6.png') }}" alt="Kegiatan 1" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_5.png') }}" alt="Kegiatan 2" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_4.png') }}" alt="Kegiatan 3" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_3.png') }}" alt="Kegiatan 4" class="gallery-item">
                    <!--tambahin gambar 3 lagi agar berfungsi-->
            </div>
        </div>
    </section>
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

        <script>
        document.getElementById('toggle-button-acara-sekolah').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-acara-sekolah');
            const arrow = document.getElementById('arrow-icon-acara-sekolah');
            const buttonText = document.getElementById('button-text-acara-sekolah');

            if (gallery.style.maxHeight === '300px' || gallery.style.maxHeight === '') {
                gallery.style.maxHeight = 'none'; // Tampilkan semua gambar
                arrow.style.transform = 'rotate(180deg)';
                buttonText.textContent = 'Sembunyikan';
            } else {
                gallery.style.maxHeight = '300px'; // Sembunyikan sebagian gambar
                arrow.style.transform = 'rotate(0deg)';
                buttonText.textContent = 'Lihat Selengkapnya';
            }
        });

        document.getElementById('toggle-button-prestasi-siswa').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-prestasi-siswa');
            const arrow = document.getElementById('arrow-icon-prestasi-siswa');
            const buttonText = document.getElementById('button-text-prestasi-siswa');

            if (gallery.style.maxHeight === '300px' || gallery.style.maxHeight === '') {
                gallery.style.maxHeight = 'none'; // Tampilkan semua gambar
                arrow.style.transform = 'rotate(180deg)';
                buttonText.textContent = 'Sembunyikan';
            } else {
                gallery.style.maxHeight = '300px'; // Sembunyikan sebagian gambar
                arrow.style.transform = 'rotate(0deg)';
                buttonText.textContent = 'Lihat Selengkapnya';
            }
        });

        document.getElementById('toggle-button-kontribusi-kepada-masyarakat').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-kontribusi-kepada-masyarakat');
            const arrow = document.getElementById('arrow-icon-kontribusi-kepada-masyarakat');
            const buttonText = document.getElementById('button-text-kontribusi-kepada-masyarakat');

            if (gallery.style.maxHeight === '300px' || gallery.style.maxHeight === '') {
                gallery.style.maxHeight = 'none'; // Tampilkan semua gambar
                arrow.style.transform = 'rotate(180deg)';
                buttonText.textContent = 'Sembunyikan';
            } else {
                gallery.style.maxHeight = '300px'; // Sembunyikan sebagian gambar
                arrow.style.transform = 'rotate(0deg)';
                buttonText.textContent = 'Lihat Selengkapnya';
            }
        });

        document.getElementById('toggle-button-kegiatan-p5').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-kegiatan-p5');
            const arrow = document.getElementById('arrow-icon-kegiatan-p5');
            const buttonText = document.getElementById('button-text-kegiatan-p5');

            if (gallery.style.maxHeight === '300px' || gallery.style.maxHeight === '') {
                gallery.style.maxHeight = 'none'; // Tampilkan semua gambar
                arrow.style.transform = 'rotate(180deg)';
                buttonText.textContent = 'Sembunyikan';
            } else {
                gallery.style.maxHeight = '300px'; // Sembunyikan sebagian gambar
                arrow.style.transform = 'rotate(0deg)';
                buttonText.textContent = 'Lihat Selengkapnya';
            }
        });

        document.getElementById('toggle-button-kemitraan').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-kemitraan');
            const arrow = document.getElementById('arrow-icon-kemitraan');
            const buttonText = document.getElementById('button-text-kemitraan');

            if (gallery.style.maxHeight === '300px' || gallery.style.maxHeight === '') {
                gallery.style.maxHeight = 'none'; // Tampilkan semua gambar
                arrow.style.transform = 'rotate(180deg)';
                buttonText.textContent = 'Sembunyikan';
            } else {
                gallery.style.maxHeight = '300px'; // Sembunyikan sebagian gambar
                arrow.style.transform = 'rotate(0deg)';
                buttonText.textContent = 'Lihat Selengkapnya';
            }
        });


		</script>
    </body>
</html>





