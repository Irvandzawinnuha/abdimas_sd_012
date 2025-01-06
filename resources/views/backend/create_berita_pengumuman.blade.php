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
            background-color: #ffffff;
            color: #000000;
        }

        .sidebar {
            height: 100vh;
            width: 336px;
            position: fixed;
            background-color: #ffffff;
            border-right: 1px solid #ddd;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
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
            background-color: #005599;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo-container">
                <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
                <h4>SD Negeri 012 Babakan Ciparay</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-home"></i> Dashboard</a></li>
                <div class="section-title">Profil Sekolah</div>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-image"></i> Foto Kontribusi</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-user"></i> Profil Guru</a></li>
                <div class="section-title">Informasi</div>
                <li class="nav-item"><a href="#" class="nav-link active"><i class="fa fa-bullhorn"></i> Berita dan Pengumuman</a></li>
            </ul>
            <div class="logout-link"><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></div>
        </div>

        <!-- Content -->
        @extends('layouts.backend')

@section('content')
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
@endsection


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
