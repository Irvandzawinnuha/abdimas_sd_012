<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #2C2C2C;
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
            color: #333333;
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
            color: #333333;
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
        .logout-link {
            margin-top: auto;
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }
        .logout-link a {
            color: #6C63FF;
            font-size: 14px;
            text-decoration: none;
        }
        .logout-link a:hover {
            text-decoration: underline;
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
            color: #2C2C2C;
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
            background-color: #004080;
        }

      /* Desain tabel lebih estetik */
    .table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 15px;
    }

    .table th {
        font-size: 14px;
        font-weight: 600;
        color: #333333;
        padding: 15px;
        text-align: center;
        border-bottom: none;
    }

    .table td {
        font-size: 14px;
        font-weight: 400;
        padding: 15px;
        text-align: center;
        border: none;
    }

    .table img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Tombol Hapus & Edit */
    .btn-danger {
        background-color: #FF6B6B;
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #005599;
        border: none;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        opacity: 0.9;
    }

    </style>
</head>
<body>

    <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
    <!-- Bagian logo dan menu -->
    <div class="logo-container">
        <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
        <h4>SD NEGERI 012 BABAKAN CIPARAY</h4>
    </div>
    <ul class="nav flex-column">
        <li class="nav-item">
        
            <a data-bs-target="#foto-kontribusi" href="#foto-kontribusi" class="nav-link"><i class="bi bi-house-door"></i> Dashboard</a>
        </li>
    </ul>
    <div class="section-title">Profil Sekolah</div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="bi bi-image"></i> Foto Kontribusi</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"><i class="bi bi-person"></i> Profile Guru</a>
        </li>
    </ul>
    <div class="section-title">Informasi</div>


<!-- conect admin to dashboard landing page front end-->
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
    
    <!-- Bagian log out -->
    <div class="logout-link">
        <a href="#">
            <i class="bi bi-box-arrow-right"></i> Log Out
        </a>
    </div>
</div>




        <!-- Main Content -->
        <div class="content">
            <h2>Dashboard</h2>
            <br>
            <p>Pada halaman Dashboard, admin sekolah dapat menambah, menghapus, atau mengupdate beberapa fitur seperti <b>Foto Kontribusi, Profile Guru, Berita dan Pengumuman, Kegiatan Ekstrakurikuler, dan Galeri Foto dan Video.</b></p>
            <br>

            <!-- Tabs -->
            <ul class="nav nav-tabs mb-4">
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#foto-kontribusi">Foto Kontribusi</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-guru">Profile Guru</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#berita-pengumuman">Berita dan Pengumuman</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kegiatan-ekstrakurikuler">Kegiatan Ekstrakurikuler</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#galeri-foto">Galeri Foto dan Video</button>
                </li>
            </ul>


<!-- Tab Contents -->
<div class="tab-content">
    <div class="tab-pane " id="foto-kontribusi">
        <br>

        <!-- Header Foto Kontribusi -->
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
            <h4 style="margin: 0;">Foto Kontribusi</h4>
            <!-- Tombol Tambah -->
            <a href="{{ route('foto.create') }}" class="btn btn-outline-primary" style="border-radius: 50px; padding: 10px 20px;">
                Tambah +
            </a>
        </div>

        <!-- Tabel Foto Kontribusi -->
        <table class="table text-center" style="border-collapse: separate; border-spacing: 0 10px;">
            <thead>
                <tr style="background-color: #F8F9FA;">
                    <th style="border: none;">No</th>
                    <th style="border: none;">Created At</th>
                    <th style="border: none;">Created By</th>
                    <th style="border: none;">Foto</th>
                    <th style="border: none;">Hapus</th>
                    <th style="border: none;">Edit</th>
                </tr>
            </thead>
            
            <tbody>
    @foreach ($dataFoto as $foto)
    <tr style="background-color: #FFFFFF; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
        <td style="border: none; vertical-align: middle;">{{ $loop->iteration }}</td>
        <td style="border: none; vertical-align: middle;">{{ $foto->created_at->format('d/m/Y') }}</td>
        <td style="border: none; vertical-align: middle;">{{ $foto->created_by }}</td>
        <td style="border: none;">
            <div style="display: flex; justify-content: center;">
                <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto" style="border-radius: 10px; width: 100px; height: 100px; object-fit: cover;">
            </div>
        </td>
        <td style="border: none; vertical-align: middle;">
            <form action="{{ route('foto.destroy', $foto->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" style="border-radius: 50%; width: 40px; height: 40px;">
                    <i class="bi bi-trash"></i>
                </button>
            </form>
        </td>
        <td style="border: none; vertical-align: middle;">
            <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-primary" style="border-radius: 50%; width: 40px; height: 40px;">
                <i class="bi bi-pencil"></i>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>

        </table>
    </div>



<!-- Profile Guru -->
    <div class="tab-pane fade" id="profile-guru">
    <br>
    <!-- Header Profile Guru -->
    <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
        <h4 style="margin: 0;">Profile Guru</h4>
        <!-- Tombol Tambah -->
        <a href="{{ route('profile.guru.create') }}" class="btn btn-outline-primary" style="border-radius: 50px; padding: 10px 20px;">
            Tambah +
        </a>
    </div>
    <!-- Tabel Profile Guru -->
    <div class="table-responsive">
    <table class="table text-center" style="border-collapse: separate; border-spacing: 0 10px;">
        <thead>
            <tr style="background-color: #F8F9FA;">
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Jabatan</th>
                <th>Foto</th>
                <th>Hapus</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataGuru as $guru)
            <tr>
                <td>{{ $loop->iteration + ($dataGuru->currentPage() - 1) * $dataGuru->perPage() }}</td>
                <td>{{ $guru->nama }}</td>
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->jabatan }}</td>

                <td>
                <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru" style="width: 100px; height: 100px; object-fit: cover; border-radius: 10px;">
                </td>

                <td>
                    <form action="{{ route('profile.guru.destroy', $guru->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('profile.guru.edit', $guru->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

<!-- Pagination -->
<div class="d-flex justify-content-center mt-3">
    {{ $dataGuru->links() }}
</div>


    <!--berita-pengumuman -->
    <div class="tab-pane fade" id="berita-pengumuman">
        
        <br>
        <!-- Header berita-pengumuman -->
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
            <h4 style="margin: 0;">berita pengumuman</h4>
            <!-- Tombol Tambah -->
            <a href="{{ route('berita.create') }}" class="btn btn-outline-primary" style="border-radius: 50px; padding: 10px 20px;">
                Tambah +
            </a>
        </div>
        <!-- Tabel berita-pengumuman -->
        <table class="table text-center" style="border-collapse: separate; border-spacing: 0 10px;">
            <thead>
                <tr style="background-color: #F8F9FA;">
                    <th style="border: none;">No</th>
                    <th style="border: none;">Nama</th>

                    <th style="border: none;">Created At</th>
                    <th style="border: none;">Created By</th>
                    <th style="border: none;">Foto</th>
                    <th style="border: none;">Hapus</th>
                    <th style="border: none;">Edit</th>
                </tr>
            </thead>

            <tbody>
                    @foreach ($berita_pengumuman as $berita)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $berita->judul }}</td>
                            <td>{{ $berita->tanggal }}</td>
                            <td>{{ $berita->created_by }}</td>
                            <td>
                                @if ($berita->foto)
                                    <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto" style="width: 100px; height: 100px; object-fit: cover;">
                                @else
                                    <span>Tidak Ada Foto</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>











    <div class="tab-pane fade" id="kegiatan-ekstrakurikuler">
        <br>
        <!-- Header berita-pengumuman -->
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
            <h4 style="margin: 0;">kegiatan ekstrakurikuler</h4>
            <!-- Tombol Tambah -->
            <a href="{{ route('kegiatan-ekstrakurikuler.create') }}" class="btn btn-outline-primary" style="border-radius: 50px; padding: 10px 20px;">
                Tambah +
            </a>
        </div>

        <!-- Tabel berita-pengumuman -->
        <table class="table text-center" style="border-collapse: separate; border-spacing: 0 10px;">
            <thead>
                <tr style="background-color: #F8F9FA;">
                    <th style="border: none;">No</th>

                    <th style="border: none;">Created At/Tanggal Publikasi</th>
                    <th style="border: none;">Created By/Dibuat Oleh</th>
                    <th style="border: none;">Foto Kontribusi</th>
                    <th style="border: none;">Hapus</th>
                    <th style="border: none;">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataFoto as $foto)
                <tr style="background-color: #FFFFFF; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <td style="border: none; vertical-align: middle;">{{ $loop->iteration }}</td>
                    <td style="border: none; vertical-align: middle;">{{ $foto->created_at->format('d/m/Y') }}</td>
                    <td style="border: none; vertical-align: middle;">{{ $foto->created_by }}</td>
                    <td style="border: none;">
                        <div style="display: flex; justify-content: center;">
                        <img src="{{ asset('storage/' . $foto->foto) }}"alt="Foto" style="border-radius: 10px; width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    </td>

                    <!-- Tombol Hapus -->
                    <td style="border: none; vertical-align: middle;">
                        <form action="{{ route('foto.destroy', $foto->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="border-radius: 50%; width: 40px; height: 40px;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                    <!-- Tombol Edit -->
                    <td style="border: none; vertical-align: middle;">
                        <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-primary" style="border-radius: 50%; width: 40px; height: 40px; background-color: #005599;">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>






    
    <div class="tab-pane fade" id="galeri-foto">
        <br>
        <!-- Header berita-pengumuman -->
        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 20px;">
            <h4 style="margin: 0;">galeri foto dan video</h4>
            <!-- Tombol Tambah -->
            <a href="{{ route('foto.create') }}" class="btn btn-outline-primary" style="border-radius: 50px; padding: 10px 20px;">
                Tambah +
            </a>
        </div>

        <!-- Tabel berita-pengumuman -->
        <table class="table text-center" style="border-collapse: separate; border-spacing: 0 10px;">
            <thead>
                <tr style="background-color: #F8F9FA;">
                    <th style="border: none;">No</th>
                    <th style="border: none;">Created At</th>
                    <th style="border: none;">Created By</th>
                    <th style="border: none;">Foto</th>
                    <th style="border: none;">Hapus</th>
                    <th style="border: none;">Edit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataFoto as $foto)
                <tr style="background-color: #FFFFFF; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                    <td style="border: none; vertical-align: middle;">{{ $loop->iteration }}</td>
                    <td style="border: none; vertical-align: middle;">{{ $foto->created_at->format('d/m/Y') }}</td>
                    <td style="border: none; vertical-align: middle;">{{ $foto->created_by }}</td>
                    <td style="border: none;">
                        <div style="display: flex; justify-content: center;">
                        <img src="{{ asset('storage/' . $foto->foto) }}"alt="Foto" style="border-radius: 10px; width: 100px; height: 100px; object-fit: cover;">
                        </div>
                    </td>

                    <!-- Tombol Hapus -->
                    <td style="border: none; vertical-align: middle;">
                        <form action="{{ route('foto.destroy', $foto->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" style="border-radius: 50%; width: 40px; height: 40px;">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                    <!-- Tombol Edit -->
                    <td style="border: none; vertical-align: middle;">
                        <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-primary" style="border-radius: 50%; width: 40px; height: 40px; background-color: #005599;">
                            <i class="bi bi-pencil"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


            </div>
        </div>
    </div>



    <script>
    // Script untuk memastikan tab aktif saat reload
    const tabLinks = document.querySelectorAll('.nav-tabs .nav-link');
    tabLinks.forEach(link => {
        link.addEventListener('click', () => {
            localStorage.setItem('activeTab', link.getAttribute('data-bs-target'));
        });
    });

    const activeTab = localStorage.getItem('activeTab');
    if (activeTab) {
        document.querySelector(`.nav-tabs .nav-link[data-bs-target="${activeTab}"]`).classList.add('active');
        document.querySelector(activeTab).classList.add('show', 'active');
    }

    // Konfirmasi sebelum menghapus data
    document.querySelectorAll('.btn-danger').forEach(button => {
        button.addEventListener('click', function (e) {
            const confirmDelete = confirm('Apakah Anda yakin ingin menghapus data ini?');
            if (!confirmDelete) {
                e.preventDefault();
            }
        });
    });
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
