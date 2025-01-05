<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #2C2C2C;
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
            background-color: #f8f9fa;
            min-height: 100vh;
        }

        .btn-primary {
            background-color: #005599;
            border: none;
        }

        .btn-primary:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column">
            <div class="logo-container">
                <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
                <h4>SD NEGERI 012 BABAKAN CIPARAY</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-house-door"></i> Dashboard</a>
                </li>
            </ul>
            <div class="section-title">Profil Sekolah</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-image"></i> Foto Kontribusi</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-person"></i> Profil Guru</a>
                </li>
            </ul>
            <div class="section-title">Informasi</div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-megaphone"></i> Berita dan Pengumuman</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-people"></i> Kegiatan Ekstrakurikuler</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-images"></i> Galeri Foto dan Video</a>
                </li>
            </ul>
            <div class="logout-link">
                <a href="#"><i class="bi bi-box-arrow-right"></i> Log Out</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="content">
            <h3>Berita dan Pengumuman</h3>
            <p>
                Pada <b>Berita Pengumuman</b>, admin dapat  <b>menambah, menghapus, memperbarui</b>  Berita dan Pengumuman terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b> foto, deskripsi kegiatan, tanggal pelaksanaan, <b> dan </b>tempat pelaksanaan.</b>
            </p>

            <form id="editForm" action="{{ route('berita.update', $berita->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" 
                        placeholder="Masukkan judul berita" required aria-label="Judul">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea class="form-control" id="isi" name="isi" rows="5" 
                        placeholder="Tulis isi berita pengumuman di sini..." required aria-label="Isi berita">{{ $berita->isi }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="penulis" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="penulis" name="penulis" 
                        value="{{ $berita->penulis }}" placeholder="Masukkan nama penulis" required aria-label="Penulis">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" 
                        value="{{ $berita->tanggal }}" required aria-label="Tanggal">
                </div>
                <button type="submit" class="btn btn-primary" id="submitButton">Simpan</button>
                <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validasi Form sebelum Submit
        document.getElementById('editForm').addEventListener('submit', function(event) {
            const judul = document.getElementById('judul').value.trim();
            const isi = document.getElementById('isi').value.trim();
            const penulis = document.getElementById('penulis').value.trim();
            const tanggal = document.getElementById('tanggal').value;

            if (!judul || !isi || !penulis || !tanggal) {
                event.preventDefault();
                alert('Semua kolom wajib diisi.');
            } else {
                if (!confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')) {
                    event.preventDefault();
                }
            }
        });

        // Otomatis tambahkan kelas aktif ke sidebar
        const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
        const currentURL = window.location.href;
        sidebarLinks.forEach(link => {
            if (link.href === currentURL) {
                link.classList.add('active');
            }
        });
    </script>
</body>
</html>
