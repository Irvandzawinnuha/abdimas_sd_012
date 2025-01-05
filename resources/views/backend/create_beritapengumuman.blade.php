<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        <div class="content">
            <h2>Input Berita Pengumuman</h2>
            <p>
                Pada <b>Berita dan Pengumuman</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> berita terkait SD Negeri 012 Babakan Ciparay.
            </p>
            <form action="{{ route('berita.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul berita" required>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="5" placeholder="Masukkan isi berita" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Masukkan nama penulis" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
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
