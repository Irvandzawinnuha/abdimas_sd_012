<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Ekstrakurikuler</title>
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

        .dropzone {
        width: 100%;
        height: 200px;
        border: 2px dashed #ddd;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        cursor: pointer;
        position: relative;
        transition: background-color 0.3s ease;
        }

        .dropzone:hover {
            background-color: #e9ecef;
        }

        .dropzone p {
            font-size: 16px;
            color: #888;
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
            <h2>Kegiatan Ekstrakurikuler</h2>
            <p>
                Pada <b>Kegiatan Ekstrakurikuler,</b> menambah, menghapus, dan memperbaharui<b> dokumentasi ekstrakurikuler di SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>oto kegiatan ekstrakurikuler di SD Negeri 012 Babakan Ciparay.</b>
            </p>
            
            <form action="{{ route('kegiatan-ekstrakurikuler.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Created At/Tanggal Publikasi</label>
                    <input type="date" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" required>
        
                    <div class="mb-3">
                        <label for="created_by" class="form-label">Created By/Dibuat Oleh</label>
                        <input type="text" class="form-control" id="dibuat_oleh" name="dibuat_oleh" placeholder="Masukkan pembuat (Contoh: Admin)" required>
                    </div>


                <div class="mb-3">
                    <label for="fileUpload" class="form-label">Foto Kontribusi</label>
                    <div id="dropzone" class="dropzone">
                        <p>Upload foto di sini</p>
                        <input type="file" id="fileUpload" name="file" class="form-control" accept="image/*" hidden>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('kegiatan-ekstrakurikuler.store') }}" class="btn btn-secondary">Batal</a>
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


<script>
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('fileUpload');

    dropzone.addEventListener('click', () => {
        fileInput.click();
    });

    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.style.backgroundColor = '#e9ecef';
    });

    dropzone.addEventListener('dragleave', () => {
        dropzone.style.backgroundColor = '#f8f9fa';
    });

    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.style.backgroundColor = '#f8f9fa';
        const files = e.dataTransfer.files;

        if (files.length > 0) {
            fileInput.files = files;
            dropzone.querySelector('p').textContent = `File "${files[0].name}" siap diupload.`;
        }
    });

    fileInput.addEventListener('change', () => {
        if (fileInput.files.length > 0) {
            dropzone.querySelector('p').textContent = `File "${fileInput.files[0].name}" siap diupload.`;
        }
    });
</script>

</body>
</html>
