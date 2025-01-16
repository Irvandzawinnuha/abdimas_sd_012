@include('partials.header')


<section class="teacher-profile" style="padding-top: 30px;">
    <div class="container" style = "display: block;">
        <h1 class="profile-title">Profil Guru Sekolah</h1>
        <h2 class="profile-subtitle">SDN 012 Babakan Ciparay</h2>
        <div class="profile-grid">

            <!-- Card Guru -->
            @foreach ($dataGuru as $guru)
            <div class="profile-card">
                <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru">
                <h3 style = "color: black;">{{ $guru->nama }}</h3>
                <p>{{ $guru->nip }}</p>
                <hr>
                <p>{{ $guru->jabatan }}</p>
            </div>
            <!-- <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/1.jpg') }}" alt
                    alt="Ucu Supriatini,S.Pd.">
                <h3 style = "color: black;">Ucu Supriatini,S.Pd.</h3>
                <p>196812052008102007</p>
                <hr>
                <p>Guru Kelas 1A</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/2.jpg') }}" alt
                    alt="Sri Agustini Kusumaningih,S.Pd.">
                <h3 style = "color: black;">Sri Agustini Kusumaningih,S.Pd.</h3>
                <p>197808172021212004</p>
                <hr>
                <p>Guru Kelas 1B</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/3.jpg') }}" alt
                    alt="Hani Anisa Fitrianti,S.Pd.">
                <h3 style = "color: black;">Hani Anisa Fitrianti,S.Pd.</h3>
                <p>198209262041112001</p>
                <hr>
                <p>Guru Kelas 1C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/4.jpg') }}" alt
                    alt="Nadhira Safitri,S.Pd.">
                <h3 style = "color: black;">Nadhira Safitri,S.Pd.</h3>
                <p>-</p>
                <hr>
                <p>Guru Kelas 1D</p>
            </div>



            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/5.jpg') }}" alt
                    alt="Alia Hildania,S.Pd.">
                <h3 style = "color: black;">Alia Hildania,S.Pd.</h3>
                <p>-</p>
                <hr>
                <p>Guru Kelas 2B</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/6.jpg') }}" alt
                    alt="Dede Rosita,S.Pd.">
                <h3 style = "color: black;">Dede Rosita,S.Pd.</h3>
                <p>197001132022212003</p>
                <hr>
                <p>Guru Kelas 2C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/7.jpg') }}" alt
                    alt="Yesi Nurmala,S.Pd.">
                <h3 style = "color: black;">Yesi Nurmala,S.Pd.</h3>
                <p> 8935774675230222</p>
                <hr>
                <p>Guru Kelas 2A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/8.jpg') }}" alt
                    alt="Luthfiah Fauziah Imansyah,S.Pd.">
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
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/11.jpg') }}" alt
                    alt="Sri Rahayu,S.Pd.">
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
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/13.jpg') }}" alt
                    alt="Ike Mustikawati,S.Pd.">
                <h3 style = "color: black;">Ike Mustikawati,S.Pd.</h3>
                <p>196703082007012013</p>
                <hr>
                <p>Guru Kelas 4A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/14.jpg') }}" alt
                    alt="Dine Yuliane,S.Pd.">
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
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/16.jpg') }}" alt
                    alt="Fitriyanti Sarifah,S.Pd.">
                <h3 style = "color: black;">Fitriyanti Sarifah,S.Pd.</h3>
                <p>198307152022212017</p>
                <hr>
                <p>Guru Kelas 4A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/17.jpg') }}" alt
                    alt="Irvan Nurtian,S.Pd.">
                <h3 style = "color: black;">Irvan Nurtian,S.Pd.</h3>
                <p>198212032022211006</p>
                <hr>
                <p>Guru Kelas 5A</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/18.jpg') }}" alt
                    alt="Angga Yudhi Permana,S.Pd.">
                <h3 style = "color: black;">Angga Yudhi Permana,S.Pd.</h3>
                <p>199307102019031004</p>
                <hr>
                <p>Guru Kelas 5B</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/19.jpg') }}" alt
                    alt="Deden Gina Garnida,S.Pd.">
                <h3 style = "color: black;">Deden Gina Garnida,S.Pd</h3>
                <p>196810272006041002</p>
                <hr>
                <p>Guru Kelas 5C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/20.jpg') }}" alt
                    alt="Nur Arief Hidayatullah,S.Pd.">
                <h3 style = "color: black;">Nur Arief Hidayatullah,S.Pd.</h3>
                <p>199311252024211006</p>
                <hr>
                <p>Guru Kelas 5D</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/21.jpg') }}" alt
                    alt="Iwan Irawan,S.Pd.">
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
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/23.jpg') }}" alt
                    alt="Iin Indriyani,S.Pd.">
                <h3 style = "color: black;">Iin Indriyani,S.Pd.</h3>
                <p>196710202007012010</p>
                <hr>
                <p>Guru Kelas 6C</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/24.jpg') }}" alt
                    alt="Tena Imaniar,S.Pd.">
                <h3 style = "color: black;">Tena Imaniar,S.Pd.</h3>
                <p>199207152020122021</p>
                <hr>
                <p>Guru Kelas 6D</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/25.jpg') }}" alt
                    alt="Wanda Firmansyah,S.Pd.">
                <h3 style = "color: black;">Wanda Firmansyah,S.Pd.</h3>
                <p>-</p>
                <hr>
                <p>Guru Bahasa Inggris kelas 3,4,5, dan 6</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/26.jpg') }}" alt
                    alt="Masriah,S.Pd.I">
                <h3 style = "color: black;">Masriah,S.Pd.I</h3>
                <p>196501181986102003</p>
                <hr>
                <p>Guru PAI dan Budi Pekerti kelas 1-6</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/27.jpg') }}" alt
                    alt="Hendi Septyansah,S.Pd.">
                <h3 style = "color: black;">Hendi Septyansah,S.Pd.</h3>
                <p>199009172023211008</p>
                <hr>
                <p>Guru Olahraga Kelas 6D</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/28.jpg') }}" alt
                    alt="Ridwan,S.Pd.I.">
                <h3 style = "color: black;">Ridwan,S.Pd.I.</h3>
                <p>198305042022211010</p>
                <hr>
                <p>Guru PAI</p>
            </div>


            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/29.jpg') }}" alt
                    alt="Ai Heti Nurhaeti,S.Pd.I">
                <h3 style = "color: black;">Ai Heti Nurhaeti,S.Pd.I</h3>
                <p>196812052008012007</p>
                <hr>
                <p>Guru PAI</p>
            </div>

            <div class="profile-card">
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/30.jpg') }}" alt
                    alt="Asep Saepul Rohmat,S.H.">
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
                <img src="{{ asset('assets/buat foto fitur abdimas/foto_guru_fix/34.jpg') }}" alt
                    alt="R. Ryanda Muharam,S.Pd.">
                <h3 style = "color: black;">R. Ryanda Muharam,S.Pd.</h3>
                <p>199107142020121004</p>
                <hr>
                <p>Guru PJOK Kelas C</p>
            </div> -->
            @endforeach

        </div>
    </div>
</section>



@include('partials.footer')
