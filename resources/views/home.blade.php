@include('partials.header')

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
            <p>SD Negeri 012 Babakan Ciparay Kota Bandung yang pembelajar sepanjang hayat, berkarakter,berprestasi,
                dan berwawasan global <br> <br> <br>
            </p>
        </div>
        <div class="misi">
            <h2>Misi</h2> <br>
            <div class="misi-card">
                1. Menanamkan dan meningkatkan keimanan, ketakwaan warga sekolah kepada Tuhan Yang Maha Esa melalui
                pengamalan ajaran agama. <br> <br>
                2. Membina dan mengembangkan budi pekerti luhur pada diri peserta didik dengan melaksanakan Gerakan
                Penumbuhan Budi Pekertidi lingkungan sekolah (GPBP) melalui program Penguatan Pendidikan Karakter
                (PPK) dalam menanamkan nilai utama karakter relijiusitas, nasionalisme, kemandirian, gotong royong
                dan integritas. <br> <br>
                3. Mewujudkan lingkungan sekolah yang sehat, bersih, indah, aman, nyaman dan menyenangkan. <br> <br>
                4. Melaksanakan proses pembelajaran aktif, inovatif, kreatif, efektif dan menyenangkan melalui
                pendekatan Saintifik (mengamati, menanya, menalar, mengumpulkan data dan mengkomunikasikan, serta
                menanamkan kompetensi Abad-21 dalam proses pembelajaran tematik untuk menumbuhkan kemampuan siswa)
                dalam berikir kritis (critical thinking), kolaborasi (collaboration), kreativitas (creativity), dan
                komunikasi (communication), serta keterampilan berpikir tingkat tinggi (higher order thinking
                skills/HOTS). <br> <br>
                5. Melaksanakan kegiatan ekstrakurikuler dalam mengembangkan potensi peserta didik di bidang
                kesenian, budaya, dan olahraga. <br> <br>
                6. Meningkatkan prestasi siswa baik di bidang akademik maupun non akademik. <br> <br>
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
            <p>082130168612</p>
            <p>dapodiksdn012bacip@gmail.com</p>
        </div>

        <div class="contact-maps" style="position: relative; width: 500px; height: 250px;">
            <iframe
                src="https://maps.google.com/maps?q=Jl.%20Caringin%20No.106,%20Babakan%20Ciparay&t=&z=13&ie=UTF8&output=embed"
                width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
            <!-- Overlay untuk menangkap klik -->
            <a href="https://www.google.com/maps?q=Jl.+Caringin+No.106,+Babakan+Ciparay,+Kota+Bandung" target="_blank"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; text-decoration: none; z-index: 10;">
            </a>
        </div>
    </div>
</section>

@include('partials.footer')
