<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Foto Kontribusi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #000000;
        }

        /* Sidebar Styles */
        .sidebar {
            height: 100vh;
            width: 336px;
            position: fixed;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }


        .sidebar img {
            width: 80px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .sidebar h4 {
            font-size: 18px; /* Header utama */
            font-weight: bold; /* Bold hanya untuk header utama */
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #005599;
        }


        .sidebar .section-title {
            font-size: 14px; /* Kategori seperti "Profil Sekolah" */
            font-weight: bold; /* Bold untuk kategori */
            color: #000000;
            margin-top: 20px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #000000;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-size: 14px;
            font-weight: normal; /* Non-bold untuk link biasa */
        }

        .sidebar ul li a i {
            margin-right: 10px;
            font-size: 18px;
        }

        .sidebar ul li a:hover {
            background-color: #f5f5f5;
            color: #005599;
        }

        .logout-link {
            margin-top: auto;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .sidebar ul li a.active {
            background-color: #f5f5f5;
            color: #005599; /* Warna teks aktif */
            font-weight: normal; /* Non-bold untuk link aktif */
        }

        /* tambahnya cuman dikit bagian ini  */
        .logout-link a {
            font-weight: normal; /* Non-bold untuk link logout */
            color: #005599;
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-link a:hover {
            text-decoration: underline;
            text-decoration: none;
        }

        .sidebar .logo-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Jarak antara logo dan tulisan */
            margin-bottom: 20px;
        }

        .sidebar .logo-container img {
            width: 50px; /* Ukuran logo */
            height: auto;
        }

        .sidebar .logo-container h4 {
            font-size: 14px;
            font-weight: bold;
            color: #333333;
            margin: 0;
            text-align: left;
        }
        

            .logout-link {
            margin-top: auto;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .logout-link a {
            color: #005599; /* Warna biru */
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; /* Jarak antara ikon dan teks */
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-link a i {
            font-size: 18px;
        }

        .logout-link a:hover {
            background-color: #f5f5f5; /* Background hover */
            text-decoration: none;
        }


        /* Content Styles */
        .content {
            margin-left: 381px;
            padding: 20px;
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .content h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .content p {
            font-size: 14px;
            color: #000000;
            margin-bottom: 20px;
        }
        .nav-tabs .nav-link.active {
            color: #fff;
            background-color: #005599;
            border-radius: 5px;
        }
        .nav-tabs .nav-link {
            font-size: 14px;
            color: #000000;
            margin-right: 10px;
        }
        .table img {
            width: 150px;
            height: auto;
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #005599;
            border: none;
        }
        .btn-primary:hover {
            background-color: #005599;
        }
    </style>
</head>
<body>

<!-- bagian side bar -->
    <div class="sidebar">
        <div class="logo-container">
            <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
            <h4>SD NEGERI 012 BABAKAN CIPARAY</h4>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link active"><i class="fa fa-home"></i> Dashboard</a>
            </li>
        </ul>
        <div class="section-title">PROFIL SEKOLAH</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-image"></i> Foto Kontribusi</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-user"></i> Profile Guru</a>
            </li>
        </ul>
        <div class="section-title">INFORMASI</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-bullhorn"></i> Berita dan Pengumuman</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-users"></i> Kegiatan Ekstrakurikuler</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-camera"></i> Galeri Foto dan Video</a>
            </li>
        </ul>
        <div class="logout-link">
            <a href="#"><i class="fa fa-sign-out"></i> Log Out</a>
        </div>
    </div>



        <!-- Content -->
        <div class="content">
            <h2>Input Foto Kontribusi</h2>
            <p>
                Pada <b>Foto Kontribusi</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> foto kegiatan
                SD Negeri 012 Babakan Ciparay saat kontribusi kepada masyarakat.
            </p>
            <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="created_at">Created At/Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="created_at" name="created_at" required>
                </div>
                <div class="form-group mb-3">
                    <label for="created_by">Created By/Dibuat Oleh</label>
                    <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan pembuat (contoh: Admin)" required>
                </div>
                <div class="form-group mb-3">
                    <label for="foto">Foto Kontribusi</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>



    

    <script>
    // Ambil semua link pada sidebar
    const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');

    // Dapatkan URL halaman saat ini
    const currentURL = window.location.href;

    // Loop melalui setiap link dan tambahkan kelas "active" jika URL cocok
    sidebarLinks.forEach(link => {
        if (link.href === currentURL) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

</script>

</body>
</html>
