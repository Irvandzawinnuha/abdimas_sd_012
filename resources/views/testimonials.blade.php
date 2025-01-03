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


<!-- Bagian Testimoni -->
<div class="testimonials-section" style="padding: 50px 0; background-color: #f9f9f9; position: relative;">
    <div class="container" style="display: block;">
        <h2 class="section-title" style="text-align: center; font-size: 2rem; margin-bottom: 20px;">Testimoni</h2>
        <p style="text-align: center;">SDN 012 Babakan Ciparay</p> <br>
        <div class="testimonials">

            <div class="testimonial-item" style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div style="position: absolute; top: 43px; left: 10px; width: 120px; height: 120px; border-top-right-radius: 50px; background-color: #005599; z-index: 0;"></div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Andi Pratama.png') }}" alt="Andi Pratama" style="width: 120px; height: auto; position: absolute; top: -25%; left: -10%;">
                </div>
                <div style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Sekolah ini adalah tempat di mana mimpi saya mulai terbentuk. Bukan hanya mendapatkan pendidikan terbaik, tetapi juga nilai-nilai kehidupan yang membentuk karakter saya hingga saat ini. Saya sangat bangga menjadi bagian dari keluarga besar sekolah ini."</p>
                    <p style="font-weight: bold; margin: 5px 0;">Andi Pratama</p>
                    <p style="color: gray;">Universitas Telkom</p>
                </div>
            </div>

            <div class="testimonial-item" style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Saya berterima kasih kepada sekolah ini karena telah memberi saya pengalaman belajar yang menyenangkan dan penuh tantangan. Guru-gurunya sangat peduli, dan suasananya mendukung pertumbuhan siswa secara akademik maupun personal."</p>
                    <p style="font-weight: bold; margin: 5px 0;">Sarah Amelia</p>
                    <p style="color: gray;">Institut Teknologi Bandung</p>
                </div>
                <div style="position: absolute; top: 43px; right: 10px; width: 120px; height: 120px; border-top-left-radius: 50px; background-color: #005599; z-index: 0;"></div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Sarah Amelia.png') }}" alt="Sarah Amelia" style="width: 120px; height: auto; position: absolute; top: -27%; right: -10%;">
                </div>
            </div>

            <div class="testimonial-item" style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div style="position: absolute; top: 43px; left: 10px; width: 120px; height: 120px; border-top-right-radius: 50px; background-color: #005599; z-index: 0;"></div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Budi Santoso.png') }}" alt="Budi Santoso" style="width: 120px; height: auto; position: absolute; top: -18%; left: -10%;">
                </div>
                <div style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Anak saya menjadi lebih percaya diri dan bersemangat belajar sejak masuk ke sekolah ini. Guru-guru di sini tidak hanya memberikan ilmu pengetahuan, tetapi juga membangun karakter positif. Saya sangat bersyukur anak saya bisa belajar di sini."</p>
                    <p style="font-weight: bold; margin: 5px 0;">Budi Santoso</p>
                    <p style="color: gray;">Orang Tua Siswa</p>
                </div>
            </div>
        </div>
    </div>
</div>





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
