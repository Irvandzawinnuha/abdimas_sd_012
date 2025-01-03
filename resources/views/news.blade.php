<!-- Berita dan Pengumuman -->
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


    <section class="news-section">
    <div class="container" style="display: block; text-align: center"> <br>
        <h2 class="section-title">Berita dan Pengumuman</h2>
        <p class="section-subtitle">SDN 012 Babakan Ciparay</p> <br>


        
    <div class="news-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
        <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_3.png') }}" alt="Berita 1" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
        <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
            <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">Mewujudkan Pendidikan Berkualitas Melalui Inovasi dan Kerjasama</h3>
            <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i class="fa fa-calendar"></i> 13 November 2024</p> 
            <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">Bandung, 13 November 2024 — Siswa SDN 012 Babakan Ciparay, Ahmad Firdaus, berhasil meraih Juara Lomba Matematika Tingkat Kota Bandung...</p> <br>
            <a href="/news_detail" style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a> 
        </div>
</div>



<div class="news-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
        <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(3).png') }}" alt="Berita 2" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
        <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
            <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">Peningkatan Kualitas Pembelajaran Melalui Kurikulum Merdeka</h3>
            <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i class="fa fa-calendar"></i> 9 Juli 2024</p>
            <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">Bandung, 9 Juli 2024 — SDN 012 Babakan Ciparay terus berupaya untuk meningkatkan pembelajaran siswa dengan Kurikulum Merdeka...</p> <br>
            <a href="/news_detail" style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a>
        </div>
</div>



<div class="news-card" style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
        <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5(1).png') }}" alt="Berita 3" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
        <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
            <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">Pembinaan Karakter melalui Program Pengenalan Lingkungan</h3>
            <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i class="fa fa-calendar"></i> 1 Mei 2024</p>
            <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">Bandung, 1 Mei 2024 — SDN 012 Babakan Ciparay percaya bahwa pendidikan karakter harus menjadi bagian penting dalam pembelajaran...</p> <br>
            <a href="/news_detail" style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a>
        </div>
</div> 

    <br><br>
        <!-- Pagination -->
        <div class="pagination" style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">
            <a href="/news_detail" class="page" style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">1</a>
            <a href="/news_detail" class="page active" style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd;border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">2</a>
            <a href="/news_detail" class="page" style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">3</a>
            <a href="/news_detail" class="page next" style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 600; transition: all 0.3s ease;">Selanjutnya</a>
    </div> 
    <br><br>
    </div> 
</section> 


    <!-- Footer -->
<footer class="footer">
    <div class="container" style="display: flex; justify-content: space-between; align-items: flex-start; gap: 10px; color: white;">
        <style>
            .footer {
                background-color: #2e3b55; /* Warna latar */
                padding: 20px;
                color: white;
                font-family: Arial, sans-serif;
            }

            .footer a {
                text-decoration: none; /* Menghilangkan underline */
                color: white; /* Pastikan teks tetap putih */
            }

            .footer-contact {
                display: flex;
                flex-direction: column;
                gap: 20px;
            }

            .contact-info {
                display: flex;
                align-items: center;
                gap: 10px; /* Jarak antara ikon dan teks */
            }

            .contact-info .icon {
                width: 14px0px; /* Lebar lingkaran ikon */
                height: 20px; /* Tinggi lingkaran ikon */
                background-color: #0073e6; /* Warna background lingkaran ikon */
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .contact-info .icon i {
                font-size: 14px; /* Ukuran ikon lebih kecil */
                color: white;
            }

            .contact-info .text p {
                margin: 0;
            }

            .footer-info h3 {
                margin-bottom: 10px;
            }
        </style>

        <!-- Kontak Info -->
        <div class="footer-contact" style="flex: 1;">
            <div class="contact-info">
                <div class="icon">
                    <a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung" target="_blank">
                        <i class="fa fa-map-marker"></i>
                    </a>
                </div>
                <div class="text">
                    <p><a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung" target="_blank">Jl. Caringin No.106, Babakan Ciparay, Kota Bandung</a></p>
                    <b>Kota Bandung, Jawa Barat, 20233.</b>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20PPDB%20SDN%20012%20Babakan%20Ciparay" target="_blank">
                        <i class="fa fa-phone"></i>
                    </a>
                </div>
                <div class="text">
                    <p>
                        <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20informasi%20PPDB." target="_blank">
                            082130168612
                        </a>
                    </p>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="mailto:dapodiksdn012bacip@gmail.com">
                        <i class="fa fa-envelope"></i>
                    </a>
                </div>
                <div class="text">
                    <p>
                        <a href="mailto:dapodiksdn012bacip@gmail.com">dapodiksdn012bacip@gmail.com</a>
                    </p>
                </div>
            </div>

            <div class="contact-info">
                <div class="icon">
                    <a href="https://www.admin.com" target="_blank">
                        <i class="fa fa-globe"></i>
                    </a>
                </div>
                <div class="text">
                    <p><a href="https://www.admin.com" target="_blank">www.admin.com</a></p>
                </div>
            </div>
        </div>

        <!-- Informasi Sekolah -->
        <div class="footer-info" style="flex: 1;">
            <h3>Tentang SD Negeri 012 Babakan Ciparay</h3>
            <p class="about">SD Negeri 012 Babakan Ciparay Kota Bandung berdomisili di perkotaan yang berdekatan dengan Pasar Induk Caringin Bandung, dengan pengembangan ekonomi dan wilayah perdagangan dengan keterjangkauan lokasi yang mudah ditempuh melalui sarana transportasi dari berbagai rute.</p>
        </div>

        <!-- Peta -->
        <div class="footer-maps" style="position: relative; width: 300px; height: 300px;">
                <iframe 
                    src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed" 
                    width="300" 
                    height="300" 
                    style="border: 0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
                <!-- Overlay untuk menangkap klik -->
                <a 
                    href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung" 
                    target="_blank" 
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; text-decoration: none; z-index: 10;">
                </a>
            </div>
    </div>
</footer>



</body>
</html>
