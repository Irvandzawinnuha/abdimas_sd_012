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


    <section class="teacher-profile" style="padding-top: 30px;">
    <div class="container"  style = "display: block;">
        <h1 class="profile-title">Profil Guru Sekolah</h1>
        <h2 class="profile-subtitle">SDN 012 Babakan Ciparay</h2>
        <div class="profile-grid">
            <!-- Card Guru -->
            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/1.jpg') }}" alt alt="Ucu Supriatini,S.Pd.">
                <h3 style = "color: black;">Ucu Supriatini,S.Pd.</h3 > 
                <p>196812052008102007</p>
                <hr>
                <p>Guru Kelas 1A</p>
            </div>


            <div class="profile-card">
            <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/2.jpg') }}" alt alt="Sri Agustini Kusumaningih,S.Pd.">
                <h3 style = "color: black;">Sri Agustini Kusumaningih,S.Pd.</h3>
                <p>197808172021212004</p>
                <hr>
                <p>Guru Kelas 1B</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/3.jpg') }}" alt alt="Hani Anisa Fitrianti,S.Pd.">
                <h3 style = "color: black;">Hani Anisa Fitrianti,S.Pd.</h3>
                <p>198209262041112001</p>
                <hr>
                <p>Guru Kelas 1C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/4.jpg') }}" alt alt="Nadhira Safitri,S.Pd.">
                <h3 style = "color: black;">Nadhira Safitri,S.Pd.</h3> 
                <p>-</p>
                <hr>
                <p>Guru Kelas 1D</p>
            </div>

        

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/5.jpg') }}" alt alt="Alia Hildania,S.Pd.">
                <h3 style = "color: black;">Alia Hildania,S.Pd.</h3>
                <p>-</p>
                <hr>
                <p>Guru Kelas 2B</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/6.jpg') }}" alt alt="Dede Rosita,S.Pd.">
                <h3 style = "color: black;">Dede Rosita,S.Pd.</h3>
                <p>197001132022212003</p>
                <hr>
                <p>Guru Kelas 2C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/7.jpg') }}" alt alt="Yesi Nurmala,S.Pd.">
                <h3 style = "color: black;">Yesi Nurmala,S.Pd.</h3>
                <p> 8935774675230222</p>
                <hr>
                <p>Guru Kelas 2A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/8.jpg') }}" alt alt="Luthfiah Fauziah Imansyah,S.Pd.">
                <h3 style = "color: black;">Luthfiah Fauziah Imansyah,S.Pd.</h3>
                <p>199710202024212009</p>
                <hr>
                <p>Guru Kelas 2D</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/9.jpg') }}" alt alt="Dadang,S.Pd.">
                <h3 style = "color: black;">Dadang,S.Pd.</h3>
                <p>197206122008011008</p>
                <hr>
                <p>Guru Kelas 3A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/10.jpg') }}" alt alt="Rohayati,S.Pd.">
                <h3 style = "color: black;">Rohayati,S.Pd.</h3>
                <p>196607132008012003</p>
                <hr>
                <p>Guru Kelas 3B</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/11.jpg') }}" alt alt="Sri Rahayu,S.Pd.">
                <h3 style = "color: black;">Sri Rahayu,S.Pd.</h3>
                <p>196907132006042006</p>
                <hr>
                <p>Guru Kelas 3C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/12.jpg') }}" alt alt="Maryati,S.Pd.">
                <h3 style = "color: black;">Maryati,S.Pd.</h3>
                <p>197007232008012007</p>
                <hr>
                <p>Guru Kelas 3D</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/13.jpg') }}" alt alt="Ike Mustikawati,S.Pd.">
                <h3 style = "color: black;">Ike Mustikawati,S.Pd.</h3>
                <p>196703082007012013</p>
                <hr>
                <p>Guru Kelas 4A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/14.jpg') }}" alt alt="Dine Yuliane,S.Pd.">
                <h3 style = "color: black;">Dine Yuliane,S.Pd.</h3>
                <p>198307182022212017</p>
                <hr>
                <p>Guru Kelas 4B</p>
            </div>
    
            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/15.jpg') }}" alt alt="Isdianti,S.Pd.">
                <h3 style = "color: black;">Isdianti,S.Pd.</h3>
                <p>197605022022212007</p>
                <hr>
                <p>Guru Kelas 4A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/16.jpg') }}" alt alt="Fitriyanti Sarifah,S.Pd.">
                <h3 style = "color: black;">Fitriyanti Sarifah,S.Pd.</h3>
                <p>198307152022212017</p>
                <hr>
                <p>Guru Kelas 4A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/17.jpg') }}" alt alt="Irvan Nurtian,S.Pd.">
                <h3 style = "color: black;">Irvan Nurtian,S.Pd.</h3>
                <p>198212032022211006</p>
                <hr>
                <p>Guru Kelas 5A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/18.jpg') }}" alt alt="Angga Yudhi Permana,S.Pd.">
                <h3 style = "color: black;">Angga Yudhi Permana,S.Pd.</h3>
                <p>199307102019031004</p>
                <hr>
                <p>Guru Kelas 5B</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/19.jpg') }}" alt alt="Deden Gina Garnida,S.Pd.">
                <h3 style = "color: black;">Deden Gina Garnida,S.Pd</h3>
                <p>196810272006041002</p>
                <hr>
                <p>Guru Kelas 5C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/20.jpg') }}" alt alt="Nur Arief Hidayatullah,S.Pd.">
                <h3 style = "color: black;">Nur Arief Hidayatullah,S.Pd.</h3>
                <p>199311252024211006</p>
                <hr>
                <p>Guru Kelas 5D</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/21.jpg') }}" alt alt="Iwan Irawan,S.Pd.">
                <h3 style = "color: black;">Iwan Irawan,S.Pd.</h3>
                <p>197110281994121001</p>
                <hr>
                <p>Guru Kelas 6A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/22.jpg') }}" alt alt="Julaeha,S.Pd">
                <h3 style = "color: black;">Julaeha,S.Pd.</h3>
                <p>196710202007012010</p>
                <hr>
                <p>Guru Kelas 6B</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/23.jpg') }}" alt alt="Iin Indriyani,S.Pd.">
                <h3 style = "color: black;">Iin Indriyani,S.Pd.</h3>
                <p>196710202007012010</p>
                <hr>
                <p>Guru Kelas 6C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/24.jpg') }}" alt alt="Tena Imaniar,S.Pd.">
                <h3 style = "color: black;">Tena Imaniar,S.Pd.</h3>
                <p>199207152020122021</p>
                <hr>
                <p>Guru Kelas 6D</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/25.jpg') }}" alt alt="Wanda Firmansyah,S.Pd.">
                <h3 style = "color: black;">Wanda Firmansyah,S.Pd.</h3>
                <p>-</p>
                <hr>
                <p>Guru Bahasa Inggris kelas 3,4,5, dan 6</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/26.jpg') }}" alt alt="Masriah,S.Pd.I">
                <h3 style = "color: black;">Masriah,S.Pd.I</h3>
                <p>196501181986102003</p>
                <hr>
                <p>Guru PAI dan Budi Pekerti kelas 1-6</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/27.jpg') }}" alt alt="Hendi Septyansah,S.Pd.">
                <h3 style = "color: black;">Hendi Septyansah,S.Pd.</h3>
                <p>199009172023211008</p>
                <hr>
                <p>Guru Olahraga Kelas 6D</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/28.jpg') }}" alt alt="Ridwan,S.Pd.I.">
                <h3 style = "color: black;">Ridwan,S.Pd.I.</h3>
                <p>198305042022211010</p>
                <hr>
                <p>Guru PAI</p>
            </div>            
            

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/29.jpg') }}" alt alt="Ai Heti Nurhaeti,S.Pd.I">
                <h3 style = "color: black;">Ai Heti Nurhaeti,S.Pd.I</h3>
                <p>196812052008012007</p>
                <hr>
                <p>Guru PAI</p>
            </div>            
            
            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/30.jpg') }}" alt alt="Asep Saepul Rohmat,S.H.">
                <h3 style = "color: black;">Asep Saepul Rohmat,S.H.</h3>
                <p>-</p>
                <hr>
                <p>Guru PAI Kelas B</p>
            </div>            
            
            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/31.jpg') }}" alt alt="Yayat Ruhyat">
                <h3 style = "color: black;">Yayat Ruhyat</h3>
                <p>-</p>
                <hr>
                <p>Layanan Khusus</p>
            </div>            

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/32.jpg') }}" alt alt="Nandang">
                <h3 style = "color: black;">Nandang</h3>
                <p>-</p>
                <hr>
                <p>Layanan Khusus</p>
            </div>            

            
            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/33.jpg') }}" alt alt="Abdul Kodir">
                <h3 style = "color: black;">Abdul Kodir</h3>
                <p>3139764665130223</p>
                <hr>
                <p>Tenaga Administrasi Sekolah</p>
            </div>            

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/34.jpg') }}" alt alt="R. Ryanda Muharam,S.Pd.">
                <h3 style = "color: black;">R. Ryanda Muharam,S.Pd.</h3>
                <p>199107142020121004</p>
                <hr>
                <p>Guru PJOK Kelas C</p>
            </div>            

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
