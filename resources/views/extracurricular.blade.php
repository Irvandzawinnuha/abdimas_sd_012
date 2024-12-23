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
        <div class="container" style="display: block; text-align: center;"> <br>
                <h2>Galeri Foto dan Video Sekolah</h2> 
                <p>SD NEGERI 012 BABAKAN CIPARAY</p>
                
    <!--Pramuka -->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Pramuka</h2>
                <button id="toggle-button-pramuka" style="
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
                    <span id="button-text-pramuka">Lihat Selengkapnya</span>
                    <span id="arrow-icon-pramuka" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-pramuka">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_1.png') }}" alt="Kegiatan 1" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_2.png') }}" alt="Kegiatan 2" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_3.png') }}" alt="Kegiatan 3" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_4.png') }}" alt="Kegiatan 4" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_5.png') }}" alt="Kegiatan 5" style="width: 100%; border-radius: 8px;">
                <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/pramuka/pramuka_6.png') }}" alt="Kegiatan 6" style="width: 100%; border-radius: 8px;">
            </div>
        </div>
    </section>



    <!--Paskibraka-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Paskibraka</h2>
                <button id="toggle-button-paskibra" style="
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
                    <span id="button-text-paskibra">Lihat Selengkapnya</span>
                    <span id="arrow-icon-paskibra" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-paskibra">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/paskibraka/paskibraka_1.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/paskibraka/paskibraka_2.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/paskibraka/paskibraka_3.png') }}" alt="Kegiatan 3" class="gallery-item">
            </div>
        </div>
    </section>



    <!--Sepak Bola-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Sepak Bola</h2>
                <button id="toggle-button-sepak-bola" style="
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
                    <span id="button-text-sepak-bola">Lihat Selengkapnya</span>
                    <span id="arrow-icon-sepak-bola" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-sepak-bola">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Sepak Bola/sepakbola_1.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Sepak Bola/sepakbola_2.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Sepak Bola/sepakbola_3.png') }}" alt="Kegiatan 3" class="gallery-item">
            <!--tambahin gambar 3 lagi agar berfungsi-->
            </div>
        </div>
    </section>



    <!--Rohis-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Rohis</h2>
                <button id="toggle-button-rohis" style="
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
                    <span id="button-text-rohis">Lihat Selengkapnya</span>
                    <span id="arrow-icon-rohis" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-rohis">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/rohis/rohis_1.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/rohis/rohis_2.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/rohis/rohis_3.png') }}" alt="Kegiatan 3" class="gallery-item">
            <!--tambahin gambar 3 lagi agar berfungsi-->
            </div>
        </div>
    </section>

    <!--Marching Band-->
    <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Marching Band</h2>
                <button id="toggle-button-marching-band" style="
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
                    <span id="button-text-marching-band">Lihat Selengkapnya</span>
                    <span id="arrow-icon-marching-band" style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
        <div class="galeri-kategori" style="width: 100%;">
            <div class="kontribusi-gallery" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;" id="gallery-marching-band">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Marching Band/MarchingBands_1.png') }}" alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Marching Band/MarchingBands_2.png') }}" alt="Kegiatan 2" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/Kegiatan Ekstrakurikuler/Marching Band/MarchingBands_3.png') }}" alt="Kegiatan 3" class="gallery-item">
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
        document.getElementById('toggle-button-pramuka').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-pramuka');
            const arrow = document.getElementById('arrow-icon-pramuka');
            const buttonText = document.getElementById('button-text-pramuka');

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

        document.getElementById('toggle-button-paskibra').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-paskibra');
            const arrow = document.getElementById('arrow-icon-paskibra');
            const buttonText = document.getElementById('button-text-paskibra');

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

        document.getElementById('toggle-button-sepak-bola').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-sepak-bola');
            const arrow = document.getElementById('arrow-icon-sepak-bola');
            const buttonText = document.getElementById('button-text-sepak-bola');

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

        document.getElementById('toggle-button-rohis').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-rohis');
            const arrow = document.getElementById('arrow-icon-rohis');
            const buttonText = document.getElementById('button-text-rohis');

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

        document.getElementById('toggle-button-marching-band').addEventListener('click', function () {
            const gallery = document.getElementById('gallery-marching-band');
            const arrow = document.getElementById('arrow-icon-marching-band');
            const buttonText = document.getElementById('button-text-marching-band');

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
