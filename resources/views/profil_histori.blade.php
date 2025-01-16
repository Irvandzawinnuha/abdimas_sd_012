@include('partials.header')

<!-- Header -->
<section class="welcome">
    <div class="container">
        <div class="image" style="margin-right: 100px;">
            <img src="{{ asset('assets/buat foto fitur abdimas/bagian_profil_sd/profil_sekolah_sd.png') }}"
                alt="Gambar" width="700">
        </div>
        <div class="text">
            <h2 style="font-size: 28px; font-weight: bold; color: #000000; margin-bottom: 20px;">Tentang SD NEGERI
                012 BABAKAN CIPARAY</h2>
            <p style="font-size: 16px; line-height: 1.8; color: #333333;">SD Negeri 012 Babakan Ciparay Kota Bandung
                berdomisili di perkotaan yang berdekatan dengan Pasar Induk Caringin Bandung, dengan pengembangan
                ekonomi dan wilayah perdagangan dengan keterjangkauan lokasi yang mudah ditempuh melalui sarana
                transportasi dari berbagai rute.</p>
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
                menanamkan kompetensi Abad-21 dalam proses pembelajaran tematik untuk menumbuhkan kemampuan siswa
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

<!-- Kontribusi Kepada Masyarakat -->
<section class="kontribusi" style="padding: 50px 0; background-color: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; text-align: center; display: block;">
        <h2 class="kontribusi-title">Kontribusi Kepada Masyarakat</h2>
        <div class="kontribusi-gallery">
        @foreach ($dataFoto as $foto)
            <!-- <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_1.png') }}"
                alt="Deskripsi Gambar 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_2.png') }}"
                alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_3.png') }}"
                alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_4.jpg') }}"
                alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_5.jpg') }}"
                alt="Kegiatan 1" class="gallery-item">
            <img src="{{ asset('assets/buat foto fitur abdimas/kontribusi_masyarakat_sd/Kontribusi_6.jpg') }}"
                alt="Kegiatan 1" class="gallery-item"> -->
                <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto" class="gallery-item">
            @endforeach
        </div>
    </div>
</section>

@include('partials.footer')
