<!-- Konten kebijakan privasi -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri 012 Babakan Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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


    <!-- Konten Kebijakan Privasi -->
    <div class="container" style = "display: block;"> <br>
        <h1 style="text-align: center; margin-top: 20px;">Keamanan dan Kebijakan Privasi</h1>
        <p style="text-align: center; margin-bottom: 30px;">SDN 012 Babakan Ciparay</p>
        <br>
        <h2>Perlindungan Data Pengguna</h2>
        <p>Kami menjaga kerahasiaan semua data pengguna, termasuk data pribadi seperti nama, alamat email, dan informasi lainnya. Data ini hanya digunakan untuk tujuan administratif sekolah dan tidak akan dibagikan kepada pihak ketiga tanpa persetujuan pengguna.</p>
        <br>

        <h2>Keamanan Sistem</h2>
        <p>Website kami dilengkapi dengan enkripsi SSL (Secure Socket Layer) untuk melindungi informasi yang dikirimkan melalui website. Sistem kami juga dilengkapi dengan firewall dan pemantauan keamanan secara rutin untuk mencegah akses tidak sah.</p>
        <br>

        <h2>Pengumpulan Data</h2>
        <p>Kami hanya mengumpulkan data yang relevan dan sesuai dengan tujuan pendidikan, seperti formulir pendaftaran, testimoni, atau survei kepuasan. Data ini dikelola dengan hati-hati sesuai dengan peraturan perlindungan data yang berlaku.</p>
        <br>

        <h2>Hak Pengguna</h2>
        <p>Pengguna memiliki hak untuk mengakses, memperbarui, atau menghapus data pribadi mereka yang tersimpan di sistem kami. Permintaan terkait dapat dilakukan dengan menghubungi administrator website melalui kontak resmi sekolah.</p>
        <br>

        <h2>Cookie dan Pelacakan</h2>
        <p>Website kami menggunakan cookie untuk meningkatkan pengalaman pengguna, seperti menyimpan preferensi pengguna atau menganalisis lalu lintas website. Informasi ini bersifat anonim dan tidak dapat digunakan untuk mengidentifikasi individu secara langsung.</p>

        <h2>Pelaporan Keamanan</h2>
        <p>Jika Anda menemukan masalah keamanan atau privasi pada website kami, segera hubungi tim pengelola website melalui email resmi. Kami akan menangani laporan tersebut dengan serius dan mengambil tindakan yang diperlukan untuk melindungi pengguna.</p>
        <br>
    </div>

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
        </div>
    </footer> 
</body>
</html>
