@include('partials.header')

<section class="fasilitas-sekolah">
    <div class="container" style="display: block;">
        <h2 class="section-title">Fasilitas Sekolah</h2>
        <p class="school-name">SDN 012 Babakan Ciparay</p>

        <!-- Ruang Belajar -->
        <div class="facility-section">
            <h3>Ruang Belajar</h3>
            <p>Ruang belajar yang memadai yang dilengkapi dengan berbagai fasilitas pembelajaran</p>
            <div class="facility-items">
                <div class="facility-item">
                    <img src="{{ asset('assets/buat foto fitur abdimas/fasilitas_sd/Proyektor_sd.png') }}"
                        alt="Proyektor">
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
                <li>2. Memiliki perpustakaan yang memadai, yang dapat menunjang proses pembelajaran yang dikelola dengan
                    baik</li>
                <li>3. Hubungan baik tenaga pendidik, tenaga kependidikan, komite, dan peserta didik</li>
                <li>4. Kepala sekolah minimal 1 bulan sekali mengadakan rapat pembinaan terhadap guru dan tenaga
                    kependidikan</li>
                <li>5. Animo masyarakat terhadap sekolah sangat besar, terbukti dengan jumlah siswa saat ini sebanyak
                    672 siswa</li>
            </ul>
        </div>
    </div>
</section>

@include('partials.footer')
