@include('partials.header')

<!-- Bagian Testimoni -->
<div class="testimonials-section" style="padding: 50px 0; background-color: #f9f9f9; position: relative;">
    <div class="container" style="display: block;">
        <h2 class="section-title" style="text-align: center; font-size: 2rem; margin-bottom: 20px;">Testimoni</h2>
        <p style="text-align: center;">SDN 012 Babakan Ciparay</p> <br>
        <div class="testimonials">

            <div class="testimonial-item"
                style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div
                    style="position: absolute; top: 43px; left: 10px; width: 120px; height: 120px; border-top-right-radius: 50px; background-color: #005599; z-index: 0;">
                </div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Andi Pratama.png') }}"
                        alt="Andi Pratama"
                        style="width: 120px; height: auto; position: absolute; top: -25%; left: -10%;">
                </div>
                <div
                    style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Sekolah ini adalah tempat di mana mimpi saya
                        mulai terbentuk. Bukan hanya mendapatkan pendidikan terbaik, tetapi juga nilai-nilai
                        kehidupan yang membentuk karakter saya hingga saat ini. Saya sangat bangga menjadi bagian
                        dari keluarga besar sekolah ini."</p>
                    <p style="font-weight: bold; margin: 5px 0;">Andi Pratama</p>
                    <p style="color: gray;">Universitas Telkom</p>
                </div>
            </div>

            <div class="testimonial-item"
                style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div
                    style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Saya berterima kasih kepada sekolah ini karena
                        telah memberi saya pengalaman belajar yang menyenangkan dan penuh tantangan. Guru-gurunya
                        sangat peduli, dan suasananya mendukung pertumbuhan siswa secara akademik maupun personal."
                    </p>
                    <p style="font-weight: bold; margin: 5px 0;">Sarah Amelia</p>
                    <p style="color: gray;">Institut Teknologi Bandung</p>
                </div>
                <div
                    style="position: absolute; top: 43px; right: 10px; width: 120px; height: 120px; border-top-left-radius: 50px; background-color: #005599; z-index: 0;">
                </div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Sarah Amelia.png') }}"
                        alt="Sarah Amelia"
                        style="width: 120px; height: auto; position: absolute; top: -27%; right: -10%;">
                </div>
            </div>

            <div class="testimonial-item"
                style="display: flex; align-items: center; margin-bottom: 20px; gap: 20px; background-color: white; padding: 20px; border-radius: 10px; border: 1px solid #e0e0e0; position: relative;">
                <div
                    style="position: absolute; top: 43px; left: 10px; width: 120px; height: 120px; border-top-right-radius: 50px; background-color: #005599; z-index: 0;">
                </div>
                <div style="flex-shrink: 0; position: relative; width: 130px; height: 135px; z-index: 1;">
                    <img src="{{ asset('assets/buat foto fitur abdimas/testimoni/Budi Santoso.png') }}"
                        alt="Budi Santoso"
                        style="width: 120px; height: auto; position: absolute; top: -18%; left: -10%;">
                </div>
                <div
                    style="position: relative;z-index: 1;border: 2px solid #eeeeee;padding: 5px 15px;border-radius: 20px;">
                    <p style="font-style: italic; font-size: 14px;">"Anak saya menjadi lebih percaya diri dan
                        bersemangat belajar sejak masuk ke sekolah ini. Guru-guru di sini tidak hanya memberikan
                        ilmu pengetahuan, tetapi juga membangun karakter positif. Saya sangat bersyukur anak saya
                        bisa belajar di sini."</p>
                    <p style="font-weight: bold; margin: 5px 0;">Budi Santoso</p>
                    <p style="color: gray;">Orang Tua Siswa</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
