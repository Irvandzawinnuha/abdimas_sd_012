@include('partials.header')

<!-- Galeri -->
<section class="galeri">
    <div class="container" style="display: block; text-align: center;"> <br> <br>
        <h2>Galeri Foto dan Video Sekolah</h2>
        <p>SD NEGERI 012 BABAKAN CIPARAY</p>

        <!-- Semua konten galeri tetap sama -->
        <!--Acara Sekolah-->
        <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar"
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Acara Sekolah</h2>
                <button id="toggle-button-acara-sekolah"
                    style="
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
                    <span id="arrow-icon-acara-sekolah"
                        style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
            <div class="galeri-kategori" style="width: 100%;">
                <div class="kontribusi-gallery"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;"
                    id="gallery-acara-sekolah">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Boseh (Rebo Sehat).png') }}"
                        alt="Kegiatan 1" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Pramuka.png') }}"
                        alt="Kegiatan 2" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Pencak Silat.png') }}"
                        alt="Kegiatan 3" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/kamis_siang.png') }}"
                        alt="Kegiatan 4" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kamis Nyunda.png') }}"
                        alt="Kegiatan 5" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Makan Sehat Bersama.png') }}"
                        alt="Kegiatan 6" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Jumroh (Jumat Rohani).png') }}"
                        alt="Kegiatan 7" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Paskibra.png') }}"
                        alt="Kegiatan 8" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Literasi Asyik.png') }}"
                        alt="Kegiatan 9" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Sabar.png') }}"
                        alt="Kegiatan 10" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Workshop Pembelajaran di Kelas.png') }}"
                        alt="Kegiatan 11" style="width: 100%; border-radius: 8px;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Upacara Bendera.png') }}"
                        alt="Kegiatan 12" style="width: 100%; border-radius: 8px;">
                </div>
            </div>
        </section>

        <!-- Prestasi Siswa-->
        <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar"
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;"> Prestasi Siswa</h2>
                <button id="toggle-button-prestasi-siswa"
                    style="
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
                    <span id="arrow-icon-prestasi-siswa"
                        style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
            <div class="galeri-kategori-prestasi-siswa" style="width: 100%;">
                <div class="kontribusi-gallery"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;"
                    id="gallery-prestasi-siswa">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Lomba Mewarnai.png') }}"
                        alt="Kegiatan 1" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Lomba Mewarnai(1).png') }}"
                        alt="Kegiatan 2" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Pencak Silat.png') }}"
                        alt="Kegiatan 3" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik Tenis Meja Putri.png') }}"
                        alt="Kegiatan 4" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik.png') }}"
                        alt="Kegiatan 5" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(2).png') }}"
                        alt="Kegiatan 6" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(3).png') }}"
                        alt="Kegiatan 7" class="gallery-item">
                </div>
            </div>
        </section>

        <!--Kontribusi Kepada Masyarakat -->
        <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar"
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kontribusi Kepada Masyarakat
                </h2>
                <button id="toggle-button-kontribusi-kepada-masyarakat"
                    style="
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
                    <span id="arrow-icon-kontribusi-kepada-masyarakat"
                        style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
            <div class="galeri-kategori" style="width: 100%;">
                <div class="kontribusi-gallery"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;"
                    id="gallery-kontribusi-kepada-masyarakat">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat.png') }}"
                        alt="Kegiatan 1" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina.png') }}"
                        alt="Kegiatan 2" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(2).png') }}"
                        alt="Kegiatan 3" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(3).png') }}"
                        alt="Kegiatan 4" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat(1).png') }}"
                        alt="Kegiatan 5" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Donasi Palestina(1).png') }}"
                        alt="Kegiatan 6" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kontribusi Kepada Masyarakat(2).png') }}"
                        alt="Kegiatan 7" class="gallery-item">
                </div>
            </div>
        </section>

        <!--Kegiatan P5-->
        <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar"
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kegiatan P5</h2>
                <button id="toggle-button-kegiatan-p5"
                    style="
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
                    <span id="arrow-icon-kegiatan-p5"
                        style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
            <div class="galeri-kategori" style="width: 100%;">
                <div class="kontribusi-gallery"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;"
                    id="gallery-kegiatan-p5">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_1.png') }}"
                        alt="Kegiatan 1" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_2.png') }}"
                        alt="Kegiatan 2" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5(1).png') }}"
                        alt="Kegiatan 3" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5.png') }}"
                        alt="Kegiatan 4" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_7.png') }}"
                        alt="Kegiatan 5" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_8.png') }}"
                        alt="Kegiatan 6" class="gallery-item">
                </div>
            </div>
        </section>

        <!--Kemitraan-->
        <section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
            <div class="title-bar"
                style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 5px 15px;">
                <h2 class="kontribusi-title" style="font-size: 24px; margin: 0;">Kemitraan</h2>
                <button id="toggle-button-kemitraan"
                    style="
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
                    <span id="arrow-icon-kemitraan"
                        style="transform: rotate(0deg); transition: transform 0.3s;">▼</span>
                </button>
            </div>
            <div class="galeri-kategori" style="width: 100%;">
                <div class="kontribusi-gallery"
                    style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px; max-height: 300px; overflow: hidden;"
                    id="gallery-kemitraan">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_6.png') }}"
                        alt="Kegiatan 1" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_5.png') }}"
                        alt="Kegiatan 2" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_4.png') }}"
                        alt="Kegiatan 3" class="gallery-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_3.png') }}"
                        alt="Kegiatan 4" class="gallery-item">
                    <!--tambahin gambar 3 lagi agar berfungsi-->
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Script tetap sama -->
<script>
    document.getElementById('toggle-button-acara-sekolah').addEventListener('click', function() {
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

    document.getElementById('toggle-button-prestasi-siswa').addEventListener('click', function() {
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

    document.getElementById('toggle-button-kontribusi-kepada-masyarakat').addEventListener('click', function() {
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

    document.getElementById('toggle-button-kegiatan-p5').addEventListener('click', function() {
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

    document.getElementById('toggle-button-kemitraan').addEventListener('click', function() {
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

@include('partials.footer')
