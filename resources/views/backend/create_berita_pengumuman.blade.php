<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita dan Pengumuman</title>
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
            width: 381px;
            position: fixed;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .sidebar img {
            width: 60px;
            height: auto;
        }

        .sidebar h4 {
            font-size: 18px;
            font-weight: bold;
            margin-left: 10px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            text-transform: uppercase;
            margin: 20px 0 10px;
        }

        .nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav .nav-item {
            margin-bottom: 10px;
        }

        .nav .nav-link {
            color: #000;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
            font-size: 14px;
        }

        .nav .nav-link i {
            font-size: 16px;
            margin-right: 10px;
        }

        .nav .nav-link:hover {
            background-color: #f5f5f5;
            color: #005599;
        }

        .nav .nav-link.active {
            background-color: #f5f5f5;
        }

        .logout-link {
            margin-top: auto;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .logout-link a {
            color: #005599;
            font-size: 14px;
            text-decoration: none;
        }

        .logout-link a:hover {
            text-decoration: underline;
        }

        .content {
            margin-left: 381px;
            padding: 20px;
            background-color: #ffffff;
            min-height: 100vh;
        }

        .btn-primary {
            background-color: #005599;
            border: none;
        }

        .btn-primary:hover {
            background-color: #004080;
        }

        .dropzone {
            border: 2px dashed #ddd;
            padding: 20px;
            text-align: center;
            color: #aaa;
        }

        /* Tombol Tambah */
        button.btn-primary {
            background-color: transparent;
            color: #00376b;
            border: 2px solid #00376b;
            border-radius: 50px; /* Membuat sudut tombol melingkar */
            padding: 10px 50px; /* Ukuran padding */
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease; /* Animasi saat hover */
        }

        button.btn-primary:hover {
            background-color: #00376b;
            color: #ffffff;
        }

        /* Gaya untuk Input Tanggal */
        input[type="date"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px 15px;
            font-size: 14px;
            width: 100%;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        input[type="date"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        input[type="date"]:hover {
            border-color: #005599;
        }

        input[type="date"]:focus {
            outline: none;
            border-color: #005599;
            box-shadow: 0 0 5px rgba(0, 85, 153, 0.5);
        }

    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-container">
                <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
                <h4>SD NEGERI 012 BABAKAN CIPARAY</h4>
            </div>

            <!-- Navigation Links -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-home"></i> Dashboard
                    </a>
                </li>
            </ul>

            <div class="section-title">Profil Sekolah</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-image"></i> Foto Kontribusi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-user"></i> Profil Guru
                    </a>
                </li>
            </ul>

            <div class="section-title">Informasi</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="fa fa-bullhorn"></i> Berita dan Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-camera"></i> Galeri Foto dan Video
                    </a>
                </li>
            </ul>

            <div class="logout-link">
                <a href="#">
                    <i class="fa fa-sign-out"></i> Log Out
                </a>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <h2>Berita & Pengumuman</h2>
            <p>
                Pada <b>Berita & Pengumuman</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> Berita dan Pengumuman terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>foto, deskripsi kegiatan, tanggal pelaksanaan, dan tempat pelaksanaan</b>.
            </p>

            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="created_at" class="form-label">Created At/Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="created_at" name="created_at" required>
                </div>
                <div class="mb-3">
                    <label for="created_by" class="form-label">Created By/Dibuat Oleh</label>
                    <input type="text" class="form-control" id="created_by" name="created_by" placeholder="Masukkan pembuat (Contoh: Admin)" required>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Berita dan Pengumuman</label>
                    <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita dan pengumuman" required>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Aktivitas</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan tanggal aktivitas (contoh: 11 Januari 2025)" required>
                </div>


                <div class="mb-3">
                    <label for="tempat" class="form-label">Tempat Aktivitas</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tempat aktivitas" required>
                </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>



</body>
</html>
