<!--Informasi Akademik-->
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



<!-- Informasi Akademik -->
<section class="academic-info">
    <div class="container" style="display:block;">
    <br><br>
        <h2 style="text-align:center; font-size: 50px;">Informasi Akademik</h2>
        <p style="text-align: center; margin-bottom: 30px; font-size: 30px;">SDN 012 Babakan Ciparay</p> 

        <!-- Tabs Navigation -->
        <div class="tabs" style="text-align: center; margin-top: 20px; width: 100%; justify-content: center;">
            <ul style="display: inline-flex; list-style: none; padding: 0; background: #f8f8f8; border-radius: 25px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);">
                <li onclick="showTab('kurikulum')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                    Kurikulum
                </li>
                <li onclick="showTab('program-pembelajaran')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                    Program Pembelajaran
                </li>
                <li onclick="showTab('kalender-akademik')" style="padding: 10px 20px; margin: 0 5px; cursor: pointer; border-radius: 25px; background-color: #ffffff; font-size: 18px; font-weight: bold; box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.05);">
                    Kalender Akademik
                </li>
            </ul>
        </div>

        <!-- Tab Contents -->
        <div id="kurikulum" class="tab-content" style="display: block; margin-top: 20px;">
        <div class="grade"> <br> <br>
                <h3>Kelas 1</h3>
                <ul>
                    <li>Bahasa Indonesia: Pengenalan huruf, membaca kalimat sederhana, menulis huruf dan angka.</li>
                    <li>Matematika: Pengenalan angka dan operasi dasar (penjumlahan, pengurangan), bentuk-bentuk geometri sederhana.</li>
                    <li>IPA: Pengenalan benda-benda di sekitar, hewan dan tumbuhan, dasar-dasar ilmu alam.</li>
                    <li>IPS: Pengenalan lingkungan sekitar, pengenalan keluarga dan masyarakat.</li>
                    <li>Pendidikan Agama: Pengenalan nilai-nilai agama, doa sehari-hari.</li>
                    <li>Pendidikan Kewarganegaraan: Pengenalan pentingnya bekerja sama, bertanggung jawab, dan peduli terhadap lingkungan.</li>
                    <li>Seni dan Budaya: Mengenal alat musik sederhana, bernyanyi, menari tradisional.</li>
                    <li>Olahraga: Latihan fisik dasar, permainan kelompok.</li>
                </ul>
            </div>
<br> <br>

            <div class="grade">
                <h3>Kelas 2</h3>
                <ul>
                    <li>Bahasa Indonesia: Meningkatkan kemampuan membaca dan menulis, mengenal kalimat yang lebih kompleks.</li>
                    <li>Matematika: Penjumlahan dan pengurangan lebih kompleks, pengenalan perkalian dan pembagian, waktu dan uang.</li>
                    <li>IPA: Sifat benda, pengenalan energi, perubahan bentuk benda.</li>
                    <li>IPS: Pengenalan tempat-tempat bersejarah, pemahaman lingkungan sosial.</li>
                    <li>Pendidikan Agama: Menghargai perbedaan, pelajaran tentang nilai moral dalam agama.</li>
                    <li>Pendidikan Kewarganegaraan: Pengenalan tata tertib dan hak serta kewajiban di sekolah.</li>
                    <li>Seni dan Budaya: Pengenalan seni lukis, seni kriya, serta karya seni budaya lokal.</li>
                    <li>Olahraga: Olahraga terstruktur, seperti lari, senam, dan permainan bola kecil.</li>
                </ul>
            </div>
<br> <br>

            <div class="grade">
                <h3>Kelas 3</h3>
                <ul>
                    <li>Bahasa Indonesia: Meningkatkan kemampuan menulis dan memahami teks, cerita pendek.</li>
                    <li>Matematika: Operasi perkalian dan pembagian lebih lanjut, pengenalan pengukuran (panjang, berat, volume).</li>
                    <li>IPA: Sumber daya alam, hewan dan tumbuhan di Indonesia, siklus air.</li>
                    <li>IPS: Mengenal peta, provinsi, dan kota di Indonesia.</li>
                    <li>Pendidikan Agama: Penghargaan terhadap orang tua dan sesama, belajar nilai-nilai kebaikan.</li>
                    <li>Pendidikan Kewarganegaraan: Pengenalan tentang dasar hukum dan hak-hak anak.</li>
                    <li>Seni dan Budaya: Menggambar dan membuat kerajinan dari bahan sederhana.</li>
                    <li>Olahraga: Olahraga tim, seperti sepak bola dan bola voli, serta latihan keseimbangan.</li>
                </ul>
            </div>
<br> <br>

            <div class="grade">
                <h3>Kelas 4</h3>
                <ul>
                    <li>Bahasa Indonesia: Pemahaman bacaan yang lebih kompleks, menulis laporan sederhana.</li>
                    <li>Matematika: Pecahan, pengukuran waktu, temperatur, dan panjang.</li>
                    <li>IPA: Gaya dan gerak, magnet, pembelajaran tentang planet dan luar angkasa.</li>
                    <li>IPS: Sejarah Indonesia, keragaman budaya dan suku bangsa.</li>
                    <li>Pendidikan Agama: Menumbuhkan sikap toleransi antarumat beragama.</li>
                    <li>Pendidikan Kewarganegaraan: Pengenalan dasar sistem pemerintahan di Indonesia.</li>
                    <li>Seni dan Budaya: Mengenal tari daerah, serta pengenalan seni rupa dan patung.</li>
                    <li>Olahraga: Permainan tim lebih lanjut, seperti basket, dan teknik dasar dalam renang.</li>
                </ul>
            </div>
<br> <br>

            <div class="grade">
                <h3>Kelas 5</h3>
                <ul>
                    <li>Bahasa Indonesia: Membaca dan menulis esai pendek, meningkatkan pemahaman bacaan.</li>
                    <li>Matematika: Operasi hitung pecahan dan desimal, bilangan bulat dan pembagian.</li>
                    <li>IPA: Sistem pencernaan manusia, ekosistem, dan berbagai proses alam lainnya.</li>
                    <li>IPS: Sejarah peradaban manusia, sistem ekonomi dan perdagangan di Indonesia.</li>
                    <li>Pendidikan Agama: Pemahaman lebih mendalam tentang agama yang dianut, praktik ibadah yang lebih rutin.</li>
                    <li>Pendidikan Kewarganegaraan: Hak dan kewajiban warga negara dalam kehidupan berbangsa dan bernegara.</li>
                    <li>Seni dan Budaya: Membuat dan memperagakan karya seni budaya, seperti drama dan musik tradisional.</li>
                    <li>Olahraga: Atletik, renang, dan permainan tradisional.</li>
                </ul>
            </div>
<br> <br>

            <div class="grade">
                <h3>Kelas 6</h3>
                <ul>
                    <li>Bahasa Indonesia: Menulis artikel dan presentasi, berargumentasi dengan cara yang baik.</li>
                    <li>Matematika: Geometri, perbandingan, dan penerapan matematika dalam kehidupan sehari-hari.</li>
                    <li>IPA: Pelajaran lanjutan tentang fisika, kimia sederhana, serta materi tentang energi dan listrik.</li>
                    <li>IPS: Pengenalan lebih lanjut tentang dunia global, geografi negara-negara lain.</li>
                    <li>Pendidikan Agama: Penguatan karakter dan keimanan, serta kesiapan menghadapi ujian akhir.</li>
                    <li>Pendidikan Kewarganegaraan: Pembelajaran tentang demokrasi, partisipasi aktif dalam masyarakat.</li>
                    <li>Seni dan Budaya: Pengenalan lebih dalam tentang seni pertunjukan, seperti drama dan musik kontemporer.</li>
                    <li>Olahraga: Permainan olah raga yang lebih profesional, seperti futsal, bola basket, dan tenis meja.</li>
                </ul>
            </div>
        </div>

    <br>
    <div id="program-pembelajaran" class="tab-content" style="display: none; margin-top: 20px;">
    <br>
    <h2 style="text-align: left; font-size: 40px; margin-bottom: 20px;">Program Pembelajaran SDN 012 Babakan Ciparay</h2>
    <br>
    <div style="font-size: 18px; line-height: 1.8;">
        <h3>1. Program Literasi dan Numerasi</h3>
        <p>
            SDN 012 Babakan Ciparay memiliki Program Literasi dan Numerasi yang bertujuan untuk meningkatkan kemampuan siswa dalam membaca, menulis, serta menghitung. 
            Program ini dilaksanakan dengan berbagai metode yang menyenangkan, seperti pembelajaran berbasis proyek, permainan edukatif, dan penggunaan teknologi. 
            Setiap siswa didorong untuk meningkatkan keterampilan literasi mereka dengan cara membaca buku cerita, menulis refleksi, serta menyelesaikan soal matematika 
            dengan cara yang kreatif.
        </p>
        <br>

        <h3>2. Program Pengembangan Karakter</h3>
        <p>
            Untuk mendukung perkembangan karakter siswa, SDN 012 Babakan Ciparay memiliki Program Pengembangan Karakter yang difokuskan pada nilai-nilai kebersamaan, 
            tanggung jawab, dan disiplin. Program ini dilaksanakan melalui kegiatan rutin seperti Upacara Bendera, Pendidikan Karakter di kelas, serta kegiatan sosial 
            yang melibatkan orang tua dan masyarakat sekitar.
        </p>
        <br>

        <h3>3. Program Penggunaan Teknologi dalam Pembelajaran</h3>
        <p>
            Sebagai bagian dari transformasi digital, SDN 012 Babakan Ciparay mengimplementasikan Program Penggunaan Teknologi dalam Pembelajaran. Siswa diajarkan untuk 
            menggunakan berbagai alat digital, seperti Google Classroom, Zoom, dan Kahoot!, untuk mengakses materi pembelajaran dan mengikuti kuis interaktif. Hal ini 
            bertujuan agar siswa terbiasa dengan teknologi yang akan berguna di masa depan.
        </p>
        <br>

        <h3>4. Program Pembelajaran Seni dan Budaya</h3>
        <p>
            Untuk mengembangkan kreativitas siswa, SDN 012 Babakan Ciparay memiliki Program Pembelajaran Seni dan Budaya. Siswa diberi kesempatan untuk mengikuti 
            berbagai kegiatan seni, seperti Tari Tradisional, Musik, Seni Rupa, dan Drama. Program ini bertujuan untuk membentuk siswa yang tidak hanya cerdas dalam 
            akademik, tetapi juga memiliki keterampilan seni yang mendalam.
        </p>
        <br>

        <h3>5. Program Kesehatan dan Kebugaran</h3>
        <p>
            SDN 012 Babakan Ciparay menganggap kesehatan dan kebugaran sebagai hal yang sangat penting. Oleh karena itu, sekolah ini menyediakan Program Kesehatan 
            dan Kebugaran yang meliputi kegiatan olahraga teratur, seperti Senam Pagi, Bola Voli, dan Lari. Selain itu, siswa juga diberikan edukasi mengenai gizi 
            seimbang dan hidup sehat untuk meningkatkan daya tahan tubuh mereka.
        </p>
        <br>

    </div>
</div>










<div id="kalender-akademik" class="tab-content" style="display: none; margin-top: 20px;">
    <div style="text-align: center;">
        <img src="{{ asset('assets/buat foto fitur abdimas/informasi akademik/kalender_akademik.png') }}" alt="Kalender Akademik Semester Ganjil 2023/2024" style="max-width: 80%; height: auto; border: 1px solid #ccc; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: auto;">
    </div>
    <br> <br> <br>
</div>











    </div>
</section>

        <div class="academic-content">

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
        </div>
    </footer> 

<!-- JavaScript untuk Tab Navigasi -->
<script>
    function showTab(tabId) {
        // Sembunyikan semua tab
        const tabs = document.querySelectorAll('.tab-content');
        tabs.forEach(tab => tab.style.display = 'none');

        // Tampilkan tab yang dipilih
        document.getElementById(tabId).style.display = 'block';
    }
</script>
</body>
</html>

