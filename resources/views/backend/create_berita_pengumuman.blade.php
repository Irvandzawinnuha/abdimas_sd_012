<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
    
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
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
            color: #005599;
        }
        .sidebar .section-title {
            font-size: 14px;
            font-weight: bold;
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
        }
        .sidebar ul li a i {
            margin-right: 10px;
            font-size: 18px;
        }
        .sidebar ul li a:hover {
            background-color: #f5f5f5;
            color: #005599;
        }

    /* Logo Container */
    .logo-container {
        display: flex; /* Gunakan flexbox */
        align-items: center; /* Selaraskan secara vertikal */
        justify-content: start; /* Selaraskan secara horizontal */
        gap: 10px; /* Tambahkan jarak antara logo dan tulisan */
        margin-bottom: 20px; /* Jarak dengan elemen berikutnya */
    }

    .logo-container img {
        width: 60px;
        height: auto;
    }

    .logo-container h4 {
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        margin: 8px;
        color: #000;
    }

    /* Section Titles */
    .section-title {
        font-size: 14px;
        font-weight: bold;
        color: #000;
        text-transform: uppercase;
        margin: 20px 0 10px;
    }

    /* Navigation Links */
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
        color: #005599;
        font-weight: bold;
    }

    /* Logout Section */
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

    /* Content Area */
    .content {
        margin-left: 381px;
        padding: 20px;
        background-color: #ffffff;
        min-height: 100vh;
    }
</style>


</head>
<body>
    <div class="d-flex">
    
    <div class="sidebar">
    <!-- Logo -->
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

    <!-- Section Title -->
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

    <!-- Section Title -->
    <div class="section-title">Informasi</div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="fa fa-bullhorn"></i> Berita dan Pengumuman
            </a>
        </li>
    </ul>

    <!-- Logout -->
    <div class="logout-link">
        <a href="#">
            <i class="fa fa-sign-out"></i> Log Out
        </a>
    </div>
</div>



        <!-- Content -->

<div class="container">
    <h2>Tambah Berita dan Pengumuman</h2>

    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" placeholder="Masukkan deskripsi" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tempat">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>


<script>
    const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
    const currentURL = window.location.href;
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
