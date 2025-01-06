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


        @extends('layouts.backend')
        @section('content')
        <!-- Main Content -->
        <div class="content">
            <h3>Berita dan Pengumuman</h3>
            <p>
                Pada <b>Berita Pengumuman</b>, admin dapat  <b>menambah, menghapus, memperbarui</b>  Berita dan Pengumuman terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b> foto, deskripsi kegiatan, tanggal pelaksanaan, <b> dan </b>tempat pelaksanaan.</b>
            </p>

            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" required>{{ $berita->deskripsi }}</textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $berita->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="{{ $berita->created_by }}">
        </div>
        <div class="mb-3">
            <label for="tempat" class="form-label">Tempat</label>
            <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $berita->tempat }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            @if ($berita->foto)
                <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" class="img-thumbnail mt-2" style="max-width: 200px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
        </div>
    </div>


    <script>
    Dropzone.options.fotoDropzone = {
        url: "{{ route('berita.upload') }}", // Endpoint untuk upload file
        method: "POST",
        maxFiles: 1, // Batasi jumlah file
        maxFilesize: 2, // Maksimal ukuran file dalam MB
        acceptedFiles: "image/*", // Hanya menerima file gambar
        addRemoveLinks: true, // Tambahkan tombol hapus
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}" // Token CSRF Laravel
        },
        init: function () {
            let fotoInput = document.getElementById('fotoInput');
            
            // Jika sudah ada file yang diunggah sebelumnya, tampilkan
            @if($berita->foto)
                let mockFile = { name: "{{ basename($berita->foto) }}", size: 12345 }; // Mock file
                this.emit("addedfile", mockFile);
                this.emit("thumbnail", mockFile, "{{ asset('storage/' . $berita->foto) }}");
                this.emit("complete", mockFile);
                this.files.push(mockFile);
            @endif

            // Saat berhasil upload
            this.on("success", function (file, response) {
                fotoInput.value = response.filePath; // Simpan path file ke input hidden
            });

            // Saat file dihapus
            this.on("removedfile", function (file) {
                fotoInput.value = ""; // Hapus path file dari input hidden
            });
        }
    };
</script>











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
