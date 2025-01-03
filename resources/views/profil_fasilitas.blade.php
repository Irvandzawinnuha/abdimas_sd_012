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

    
<!-- Fasilitas Sekolah -->
<section class="fasilitas-sekolah">
    <div class="container"  style = "display: block;">
        <h2 class="section-title">Fasilitas Sekolah</h2>
        <p class="school-name">SDN 012 Babakan Ciparay</p>

        <!-- Ruang Belajar -->
        <div class="facility-section">
            <h3>Ruang Belajar</h3>
            <p>Ruang belajar yang memadai yang dilengkapi dengan berbagai fasilitas pembelajaran</p>
            <div class="facility-items">
                <div class="facility-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/fasilitas_sd/Proyektor_sd.png') }}" alt="Proyektor">
                    <p>Proyektor</p>
                </div>

                <div class="facility-item">
                <img src="{{ asset('assets/buat foto fitur abdimas/fasilitas_sd/speaker_sd.png') }}" alt="Speaker">
                    <p>Speaker</p>
                </div>

                <div class="facility-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/fasilitas_sd/wifi_sd.png') }}" alt="Wifi">
                    <p>Wi-fi</p>
                </div>

            </div>
        </div>

        <!-- Tenaga Didik -->
        <div class="facility-section"> <br>
            <h3>Tenaga Didik</h3>
            <p>Tersedianya tenaga pendidik dan kependidikan yang berkompeten, terdiri atas:</p>
            <div class="staff-stats">
            <div class="staff-stat">
                    <p class="number">32</p>
                    <div class="text">
                        <p>Kepala</p>
                        <p>Sekolah</p>
                    </div>
                </div>
                <div class="staff-stat">
                    <p class="number">32</p>
                    <div class="text">
                        <p>Orang</p>
                        <p>Pendidik</p>
                    </div>
                </div>
                <div class="staff-stat">
                    <p class="number">32</p>
                    <div class="text">
                        <p>Tenaga</p>
                        <p>Kependidikan</p>
                    </div>
                </div>  
            </div>
        </div>

    <!-- Latar Belakang Pendidik -->
        <div class="facility-section-background"> <br>
            <h3>Latar Belakang Pendidik</h3>
            <div class="staff-stats">
                <div class="staff-stat">
                    <p class="number">24</p>
                    <div class="text">
                        <p>Lulusan</p>
                        <p>S-1 PGSG</p>
                    </div>
                </div>
                <div class="staff-stat">
                    <p class="number">4</p>
                    <div class="text">
                        <p>Lulusan</p>
                        <p>S-1 PAI</p>
                    </div>
                </div>
                <div class="staff-stat">
                    <p class="number">4</p>
                    <div class="text">
                        <p>Lulusan</p>
                        <p>S-1 PJKO</p>
                    </div>
                </div>  
            </div>
        </div>



        <!-- Fasilitas Lainnya -->
        <div class="facility-section"> <br>
            <h3>Fasilitas Lainnya</h3>
            <ul class="facility-list">
                <li>1. Memiliki lab komputer yang dilengkapi 18 komputer beserta jaringan Wi-Fi</li>
                <li>2. Memiliki perpustakaan yang memadai, yang dapat menunjang proses pembelajaran yang dikelola dengan baik</li>
                <li>3. Hubungan baik tenaga pendidik, tenaga kependidikan, komite, dan peserta didik</li>
                <li>4. Kepala sekolah minimal 1 bulan sekali mengadakan rapat pembinaan terhadap guru dan tenaga kependidikan</li>
                <li>5. Animo masyarakat terhadap sekolah sangat besar, terbukti dengan jumlah siswa saat ini sebanyak 672 siswa</li>
            </ul>
        </div>
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
