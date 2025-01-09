<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SD Negeri 012 Babakan Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style>
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1600px;
    margin: 0 auto;
}

h2, h3, h4, h5, h6 {
    margin: 0;
    padding: 0;
}

/* Navbar */
.navbar {
    background-color: #ffffff;
    padding: 15px;
}

.navbar .logo img {
    height: 50px;
}

/*nama sekolah */ 
.school-name {
    color: black;
    font-size: 1.5em;
    margin-left: 20px;
    text-align: center;
}

.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

.nav-links li {
    position: relative;
}

.nav-links li a {
    color: black;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 4px;
    border-radius: 5px;
}

.nav-links li .btn {
    background-color: #005599;
    color: #ffffff;
    border-radius: 25px;
    padding: 15px 30px;
    text-decoration: none;
}

.nav-links li a:hover {
    background-color: white;
    color: #005599;
    transition: background-color 0.3s ease;
}

.nav-links .dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 220px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.nav-links .dropdown:hover .dropdown-content {
    display: block;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Sub Navbar */
.sub-navbar {
    background-color: #005599;
    padding: 10px 0;
}

.sub-nav-links {
    list-style: none;
    display: flex;
    justify-content: space-around;
    margin-left: auto;
}

.sub-nav-links li a {
    color: white;
    text-decoration: none;
    padding: 10px;
}

.logo {
    display: flex;
    justify-content: center;
    align-items: center;
}


/* Welcome Section */
.welcome {
    padding: 20px;
    background-color: #ffffff;
}

.welcome .text h3 {
    font-size: 30px;
    font-weight: 400;
    color: #000000;
    margin-bottom: 0;
}

.welcome .text h2 {
    font-size: 50px;
    color: #000000;
    margin: 20px 0;
    width: 450px;
    text-transform: uppercase;
}

.welcome .text p {
    font-size: 15px;
    font-style: italic;
    margin-bottom: 45px;
}

.welcome .text .btn {
    background-color: #005599;
    color: #ffffff;
    border-radius: 25px;
    padding: 15px 30px;
    text-decoration: none;
}

.welcome .text .btn:hover {
    background-color: #073d69;
    color: #ffffff;
    transition: 1s;
}

.welcome .image img {
    border-radius: 15px;
    max-width: 700px;
    float: right;
}


/* Pencapaian Section */
.pencapaian {
    background-color: #2f4b7c;
    padding: 20px 0; 
    color: #ffffff;
}


.pencapaian-title {
    font-size: 36px; 
    font-weight: bold; 
    text-align: center; 
    color: #ffffff; 
    margin-bottom: 30px; 
}


.cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.card {
    background-color: #ffffff;
    color: #000;
    border-radius: 15px;
    box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    flex: 1;
    max-width: 300px;
    text-align: center;
}

/* buat kolom yang ada warna biru*/
.card .card-bg {
    background-color: #2f4b7c;
    height: 150px;
}


.card p {
    font-size: 16px;
    line-height: 1.6;
}


.visi-misi {
    padding: 20px;
    background-color: #ffffff; 
}

.visi-misi .container {
    display: block; 
    text-align: center; 
}

.visi, .misi {
    flex: 1; 
    margin: 0 10px; 
}

/*buat bagian visi misi*/
.visi h2, .misi h2 {
    font-size: 1.8em; 
    color: #000000; 
    margin-bottom: 10px; 
}

.visi p, .misi p {
    margin-bottom: 20px; 
    line-height: 1.6; 
}

.misi .misi-card {
    display: flex;
    gap: 10px;
    text-align: left;
}

.misi .misi-card .body {
    font-size: 15px;
    width: 33%;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 13px 37px rgba(92,107,121,.1);
    border-radius: 13px;;
    text-align: left;
}

/* visi misi */
.kontak {
    padding: 20px;
    background-color: #ffffff; 
}

.kontak h2 {
    font-size: 45px;
    margin-top: 30px; 
}

.kontak h3 {
    font-weight: 500;
}

.kontak p {
    font-style: italic;
}

.kontak iframe {
    border-radius: 35px;
}


/* Footer */
.footer {
    background-image: url('../assets/buat foto fitur abdimas/bagianBawah_sd.png'); 
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    color: white;
    padding: 70px 0 40px; 
}

.footer-contact {
    width: 50%;
    padding: 5px;
}

.footer-contact .contact-info {
    color: #ffffff;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.footer-contact .contact-info .icon {
    font-size: 20px;
    background-color: #005599;
    border-radius: 100%;
    padding: 10px 15px;
    margin-right: 10px;
}

.footer-contact .contact-info .text {
    font-size: 15px;
}

.footer-contact .contact-info .text p {
    margin-bottom: 10px;
}

.footer-contact .contact-info .text b {
    font-size: 15px;
}

/* bagian tulisan Tentang SD Negeri 012 Babakan Ciparay bagian paling bawah*/
.footer-info {
    width: 50%;
    padding: 15px 5px 5px;
    margin-bottom: auto;
    margin-right: 51px
}

.footer-info h3 {
    margin: 0;
}

.footer-info .about {
    margin-top: 40px;
    letter-spacing: 1px;
    line-height: 2rem;
    margin-bottom: 50px;
}

.footer-contact {
    width: 50%;
    padding: 5px;
}

/* .footer-socmed */
.footer-socmed {
    display: flex;
}

.footer-socmed-split {
    width: 50%;
}

.footer-socmed .contact-info {
    color: #ffffff;
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

/* logo sosmed*/
.footer-socmed .contact-info .icon {
    font-size: 20px;
    background-color: #1b3f63;
    border-radius: 100%;
    padding: 10px 15px;
    margin-right: 10px;
}

.footer-socmed .contact-info .text {
    font-size: 15px;
}

.footer-socmed .contact-info .text p {
    margin-bottom: 10px;
}

.footer .footer-maps iframe {
    border-radius: 35px;
}

      /* Media Queries */
@media (max-width: 1024px) {
    /* Tablet */
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .nav-links {
        flex-direction: column;
        gap: 10px;
    }

    .welcome {
        flex-direction: column;
    }

    .footer {
        flex-direction: column;
        gap: 20px;
        align-items: center;
    }

    .footer .footer-contact,
    .footer .footer-info,
    .footer .footer-maps {
        width: 100%;
    }
}

@media (max-width: 768px) {
    /* Mobile */
    .navbar {
        flex-direction: column;
        align-items: center;
    }

    .nav-links {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .nav-links li {
        text-align: center;
        width: 100%;
    }

    .welcome {
        flex-direction: column;
        text-align: center;
    }

    .welcome .text h2 {
        font-size: 28px;
    }

    .footer {
        flex-direction: column;
        align-items: center;
    }

    .footer .footer-contact,
    .footer .footer-info,
    .footer .footer-maps {
        width: 100%;
        text-align: center;
    }
}

@media (max-width: 480px) {
    /* Extra Small Devices */
    .navbar .logo img {
        height: 40px;
    }

    .welcome .text h2 {
        font-size: 24px;
    }

    .welcome .text p {
        font-size: 14px;
    }

    .footer .footer-contact,
    .footer .footer-info,
    .footer .footer-maps {
        text-align: center;
        padding: 10px;
    }
}
    </style>

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


<!-- Bagian tengah Header -->
<section class="welcome">
    <div class="container">
        <div class="text"> <br> <br> <br>
            <h3>Selamat Datang di</h3>
            <h2>SD Negeri 012 Babakan Ciparay</h2>
            <p>Jl. Caringin No. 106 RT 02, RW 04 Kec. Babakan Ciparay kota Bandung, kode pos 20233</p>
            <a href="https://wa.me/6282130168612?text=Halo%20Kak,%20saya%20ingin%20bertanya%20mengenai%20PPDB%20SDN%20012%20Babakan%20Ciparay%20yang%20di%20alamat%20jalan.%20Caringin%20No.%20106%20RT%2002/%20RW%2004%20Kecamatan%20Babakan%20Ciparay%20Kota%20Bandung,%20Jawa%20Barat,%20Indonesia%20kode%20pos%2020233." 
            class="btn" target="_blank">
                <i class="fa fa-graduation-cap"></i> Informasi PPDB
            </a>
        </div>
        <div class="image">
            <img src="{{ asset('assets/buat foto fitur abdimas/beranda_sd/beranda_sd.png') }}" alt="Gambar">
        </div>
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

    <!-- Kontak -->
    <section class="kontak">
        <div class="container">
            <div class="contact-detail">
                <h2>Temui Kami</h2> <br>
                <h3>Lokasi:</h3>
                <p>Jl. Caringin No. 106 RT 02, RW 04 Kec. Babakan Ciparay kota Bandung, kode pos 20233</p> <br>
                <h3>Office Hours:</h3>
                <p>Senin - Sabtu, 07.00 WIB - 16.00 WIB</p> <br>
                <p >082130168612</p>
                <p>dapodiksdn012bacip@gmail.com</p> 
            </div>

            <div class="contact-maps" style="position: relative; width: 500px; height: 250px;">
                <iframe 
                    src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed" 
                    width="500" 
                    height="250" 
                    style="border:0;" 
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
