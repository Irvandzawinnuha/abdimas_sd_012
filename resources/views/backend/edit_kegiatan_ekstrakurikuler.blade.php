<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Ekstrakurikuler</title>
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
            <h3>Edit Kegiatan Ekstrakurikuler</h3>
            <p>
                Pada <b>Kegiatan Ekstrakurikuler</b>, admin dapat memperbarui informasi berupa <b>tanggal publikasi</b>, <b>dibuat oleh</b>, dan <b>foto kontribusi</b>.
            </p>
            <form id="editForm" action="{{ route('kegiatan-ekstrakurikuler.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" 
                        value="{{ $kegiatan->tanggal_publikasi }}" required aria-label="Tanggal Publikasi">
                </div>
                <div class="mb-3">
                    <label for="dibuat_oleh" class="form-label">Dibuat Oleh</label>
                    <input type="text" class="form-control" id="dibuat_oleh" name="dibuat_oleh" 
                        value="{{ $kegiatan->dibuat_oleh }}" placeholder="Masukkan nama pembuat" required aria-label="Dibuat Oleh">
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">Foto Kontribusi</label>
                    <input type="file" class="form-control" id="file" name="file" accept="image/*">
                    @if ($kegiatan->foto_kontribusi)
                        <p class="mt-2">Foto saat ini: <a href="{{ asset('storage/' . $kegiatan->foto_kontribusi) }}" target="_blank">Lihat Foto</a></p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary" id="submitButton">Simpan</button>
                <a href="{{ route('kegiatan-ekstrakurikuler.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Validasi Form sebelum Submit
        document.getElementById('editForm').addEventListener('submit', function(event) {
            const tanggal = document.getElementById('tanggal_publikasi').value;
            const dibuatOleh = document.getElementById('dibuat_oleh').value.trim();

            if (!tanggal || !dibuatOleh) {
                event.preventDefault();
                alert('Semua kolom wajib diisi.');
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
