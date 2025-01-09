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

       .logout-link a {
    color: #000000; /* Warna teks hitam */
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px; /* Jarak antara ikon dan teks */
    padding: 10px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.logout-link a i {
    color: #005599; /* Warna ikon biru */
    font-size: 18px;
}

.logout-link a:hover {
    background-color: #f5f5f5; /* Background hover */
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


    .logout-link a i {
        font-size: 18px;
    }

    .logout-link a:hover {
          background-color: #f5f5f5; /* Background hover */
        text-decoration: none;
    }

    /* css main content*/
    
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

<!-- Sidebar -->
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
            <a href="#" class="d-flex align-items-center">
                <i class="bi bi-box-arrow-right me-2"></i> Log Out
            </a>
        </div>



    </div>
</div>


        @section('content')
        <div class="content-wrapper">
    <div class="content">
        <h3>Berita dan Pengumuman</h3>
        <p>
            Pada <b>Berita Pengumuman</b>, admin dapat <b>menambah, menghapus, memperbarui</b> Berita dan Pengumuman terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>foto, deskripsi kegiatan, tanggal pelaksanaan,</b> dan <b>tempat pelaksanaan</b>.
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
        url: "{{ route('berita.create') }}", // Endpoint untuk upload file
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
