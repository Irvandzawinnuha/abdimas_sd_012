@include('partials.header')

<section class="news-section">
    <div class="container" style="display: block; text-align: center"> <br>
        <h2 class="section-title">Berita dan Pengumuman</h2>
        <p class="section-subtitle">SDN 012 Babakan Ciparay</p> <br>

        <div class="news-card"
            style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/ss_3.png') }}" alt="Berita 1"
                style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
            <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
                <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">
                    Mewujudkan
                    Pendidikan Berkualitas Melalui Inovasi dan Kerjasama</h3>
                <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i
                        class="fa fa-calendar"></i> 13 November 2024</p>
                <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">
                    Bandung, 13
                    November 2024 — Siswa SDN 012 Babakan Ciparay, Ahmad Firdaus, berhasil meraih Juara Lomba
                    Matematika Tingkat Kota Bandung...</p> <br>
                <a href="/news_detail"
                    style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a>
            </div>
        </div>

        <div class="news-card"
            style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Prestasi Peserta Didik(3).png') }}"
                alt="Berita 2" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
            <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
                <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">
                    Peningkatan
                    Kualitas Pembelajaran Melalui Kurikulum Merdeka</h3>
                <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i
                        class="fa fa-calendar"></i> 9 Juli 2024</p>
                <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">
                    Bandung, 9 Juli
                    2024 — SDN 012 Babakan Ciparay terus berupaya untuk meningkatkan pembelajaran siswa dengan
                    Kurikulum Merdeka...</p> <br>
                <a href="/news_detail"
                    style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a>
            </div>
        </div>

        <div class="news-card"
            style="background-color: white; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden; display: flex; gap: 20px; padding: 20px;">
            <img src="{{ asset('assets/buat foto fitur abdimas/galeri foto dan video/Kegiatan P5(1).png') }}"
                alt="Berita 3" style="width: 269px; height: 212px; object-fit: cover; border-radius: 8px;">
            <div class="news-content" style="text-align: left; flex: 1; padding-left: 5px;">
                <h3 class="news-title" style="font-size: 1.5rem; font-weight: 600; margin: 0 0 10px; line-height: 1.4;">
                    Pembinaan
                    Karakter melalui Program Pengenalan Lingkungan</h3>
                <p class="news-date" style="font-size: 0.9rem; color: #000000; margin-bottom: 10px;"><i
                        class="fa fa-calendar"></i> 1 Mei 2024</p>
                <p class="news-snippet" style="font-size: 1rem; line-height: 1.6; margin-bottom: 15px; color: #000000;">
                    Bandung, 1 Mei
                    2024 — SDN 012 Babakan Ciparay percaya bahwa pendidikan karakter harus menjadi bagian penting
                    dalam pembelajaran...</p> <br>
                <a href="/news_detail"
                    style="color: #FFFFFF; text-decoration: none; font-weight: 400; background-color: #005599; border-radius: 20px; padding: 5px 80px; font-size: 13px; float:right;">Selengkapnya</a>
            </div>
        </div>

        <br><br>
        <!-- Pagination -->
        <div class="pagination" style="display: flex; justify-content: center; gap: 10px; margin-top: 20px;">
            <a href="/news_detail" class="page"
                style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">1</a>
            <a href="/news_detail" class="page active"
                style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd;border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">2</a>
            <a href="/news_detail" class="page"
                style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 500; transition: all 0.3s ease;">3</a>
            <a href="/news_detail" class="page next"
                style="display: inline-block; padding: 10px 15px; border: 1px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-size: 1rem; font-weight: 600; transition: all 0.3s ease;">Selanjutnya</a>
        </div>
        <br><br>
    </div>
</section>

@include('partials.footer')
