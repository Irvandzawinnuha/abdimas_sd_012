@include('backend.partials.head')
@include('backend.partials.sidebar')

<!-- Main Content -->
<div class="content">
    <h2>Dashboard</h2>
    <p>Pada halaman Dashboard, admin sekolah dapat menambah, menghapus, atau mengupdate beberapa fitur seperti
        <b>Foto Kontribusi, Profile Guru, Berita dan Pengumuman, Kegiatan Ekstrakurikuler, dan Galeri Foto dan
            Video.</b>
    </p>

    <!-- Tabs -->
    <ul class="nav nav-tabs custom-tabs">
        <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#foto-kontribusi">Foto Kontribusi</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-guru">Profile Guru</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#berita-pengumuman">Berita dan
                Pengumuman</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kegiatan-ekstrakurikuler">Kegiatan
                Ekstrakurikuler</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#galeri-foto">Galeri Foto dan Video</button>
        </li>
    </ul>

    <!-- Tab Contents -->
    <div class="tab-content mt-4">
        <!-- Foto Kontribusi Tab -->
        <div class="tab-pane fade show active" id="foto-kontribusi">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="table-title">Tabel Foto Kontribusi</h3>
                <a href="{{ route('foto.create') }}" class="btn btn-add">
                    Tambah <i class="bi bi-plus"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Foto</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataFoto as $foto)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $foto->created_at->format('d/m/Y') }}</td>
                                <td>{{ $foto->created_by }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto" class="table-img">
                                </td>
                                <td>
                                    <form action="{{ route('foto.destroy', $foto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Profile Guru Tab -->
        <div class="tab-pane fade" id="profile-guru">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="table-title">Tabel Profile Guru</h3>
                <a href="{{ route('profile.guru.create') }}" class="btn btn-add">
                    Tambah <i class="bi bi-plus"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
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
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->jabatan }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru" class="table-img">
                                </td>
                                <td>
                                    <form action="{{ route('profile.guru.destroy', $guru->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('profile.guru.edit', $guru->id) }}" class="btn btn-edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Berita dan Pengumuman Tab -->
        <div class="tab-pane fade" id="berita-pengumuman">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="table-title">Tabel Berita dan Pengumuman</h3>
                <a href="{{ route('berita.create') }}" class="btn btn-add">
                    Tambah <i class="bi bi-plus"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Konten</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita_pengumuman as $berita)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $berita->judul }}</td>
                                <td>{{ $berita->konten }}</td>
                                <td>{{ Str::limit($berita->deskripsi, 100) }}</td>
                                <td>
                                    @if ($berita->foto && is_array($berita->foto) && count($berita->foto) > 0)
                                        <div class="galeri-grid">
                                            @foreach($berita->foto as $index => $path)
                                                @if($index < 4) {{-- Hanya tampilkan maksimal 4 gambar --}}
                                                    <div class="galeri-item">
                                                        <img src="{{ asset('storage/' . $path) }}" alt="Foto" class="img-fluid">
                                                        @if($index === 3 && count($berita->foto) > 4)
                                                            <div class="overlay">
                                                                <span>+{{ count($berita->foto) - 4 }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('berita.edit', $berita->id) }}" class="btn btn-edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Kegiatan Ekstrakurikuler Tab -->
        <div class="tab-pane fade" id="kegiatan-ekstrakurikuler">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="table-title">Tabel Kegiatan Ekstrakurikuler</h3>
                <a href="{{ route('kegiatan-ekstrakurikuler.create') }}" class="btn btn-add">
                    Tambah <i class="bi bi-plus"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table custom-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>Nama Kegiatan</th>
                            <th>Gambar</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataEkskul as $ekskul)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $ekskul->created_at->format('d/m/Y') }}</td>
                                <td>{{ $ekskul->CreatedBy }}</td>
                                <td>{{ $ekskul->nama_kegiatan }}</td>
                                <td>
                                    @if ($ekskul->foto_kontribusi && is_array($ekskul->foto_kontribusi) && count($ekskul->foto_kontribusi) > 0)
                                        <div class="galeri-grid">
                                            @foreach($ekskul->foto_kontribusi as $index => $path)
                                                @if($index < 4) {{-- Hanya tampilkan maksimal 4 gambar --}}
                                                    <div class="galeri-item">
                                                        <img src="{{ asset('storage/' . $path) }}" alt="Foto" class="img-fluid">
                                                        @if($index === 3 && count($ekskul->foto_kontribusi) > 4)
                                                            <div class="overlay">
                                                                <span>+{{ count($ekskul->foto_kontribusi) - 4 }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @else
                                        <span class="text-muted">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('kegiatan-ekstrakurikuler.destroy', $ekskul->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('kegiatan-ekstrakurikuler.edit', $ekskul->id) }}" class="btn btn-edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Galeri Foto dan Video Tab -->
        <div class="tab-pane fade" id="galeri-foto">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Galeri Foto dan Video</h4>
                <a href="{{ route('create_foto_video') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Tambah +
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Created At</th>
                            <th>Created By</th>
                            <th>kategori</th>
                            <th>Media</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataGaleri as $galeri)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td data-label="Tanggal">{{ $galeri->created_at->format('d/m/Y') }}</td>
                                <td data-label="Dibuat Oleh">{{ $galeri->created_by }}</td>
                                <td data-label="Kategori">{{ $galeri->kategori }}</td>
                                <td>
                                    @if ($galeri->foto && is_array($galeri->foto) && count($galeri->foto) > 0)
                                        <div class="galeri-grid">
                                            @foreach($galeri->foto as $index => $path)
                                                @if($index < 4) {{-- Hanya tampilkan maksimal 4 gambar --}}
                                                    @php
                                                        $fileExtension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                                                    @endphp
                                                    
                                                    <div class="galeri-item">
                                                        @if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
                                                            <img src="{{ asset('storage/' . $path) }}" alt="Foto" 
                                                                class="img-thumbnail">
                                                        @elseif ($fileExtension === 'mp4')
                                                            <video controls>
                                                                <source src="{{ asset('storage/' . $path) }}" type="video/mp4">
                                                            </video>
                                                        @endif
                                                        
                                                        @if($index === 3 && count($galeri->foto) > 4)
                                                            <div class="overlay">
                                                                <span>+{{ count($galeri->foto) - 4 }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                </td>

                                <td>
                                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>

                                <td>
                                    <a href="{{ route('galeri.edit',  $galeri->id) }}"
                                        class="btn btn-edit">
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

<style>
/* Custom Tabs */
.custom-tabs {
    border-bottom: none;
    gap: 10px;
}

.custom-tabs .nav-link {
    border: none;
    color: #666;
    padding: 10px 20px;
    border-radius: 0;
    position: relative;
}

.custom-tabs .nav-link.active {
    color: #4361ee;
    background: none;
    font-weight: 500;
}

.custom-tabs .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    height: 2px;
    background: #4361ee;
}

/* Table Styles */
.table-responsive {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
}

.custom-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
}

.custom-table th {
    background: white;
    color: #333;
    font-weight: 500;
    padding: 15px;
    border-bottom: 2px solid #dee2e6;
}

.custom-table td {
    padding: 15px;
    vertical-align: middle;
    border-bottom: 1px solid #dee2e6;
}

.table-img {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
}

.btn-delete, .btn-edit {
    width: 35px;
    height: 35px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
}

.btn-delete {
    background: #fee2e2;
    color: #ef4444;
}

.btn-edit {
    background: #e0e7ff;
    color: #4361ee;
}

.btn-delete:hover {
    background: #fecaca;
}

.btn-edit:hover {
    background: #c7d2fe;
}

.table-title {
    font-size: 24px;
    font-weight: 500;
    margin: 0;
}

.btn-add {
    background: white;
    color: #333;
    border: 1px solid #dee2e6;
    border-radius: 20px;
    padding: 8px 20px;
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn-add:hover {
    background: #f8f9fa;
}

/* Content Container */
.content {
    padding: 30px;
    background: #f8fafc;
    min-height: 100vh;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Script untuk memastikan tab aktif saat reload
    document.addEventListener('DOMContentLoaded', function() {
        const activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            const tab = document.querySelector(`[data-bs-target="${activeTab}"]`);
            if (tab) {
                tab.click();
            }
        }

        // Menyimpan tab aktif ke localStorage
        document.querySelectorAll('[data-bs-toggle="tab"]').forEach(tab => {
            tab.addEventListener('shown.bs.tab', function(e) {
                localStorage.setItem('activeTab', e.target.getAttribute('data-bs-target'));
            });
        });

        // Konfirmasi hapus
        document.querySelectorAll('.btn-danger').forEach(button => {
            button.addEventListener('click', function(e) {
                if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    e.preventDefault();
                }
            });
        });

        // Hamburger menu functionality
        const hamburger = document.querySelector('.hamburger-menu');
        const sidebar = document.querySelector('.sidebar');
        const overlay = document.querySelector('.sidebar-overlay');

        if (hamburger && sidebar && overlay) {
            hamburger.addEventListener('click', function() {
                sidebar.classList.toggle('active');
                overlay.classList.toggle('active');

                // Animasi hamburger
                const spans = this.querySelectorAll('span');
                spans[0].style.transform = sidebar.classList.contains('active') ?
                    'rotate(45deg) translate(5px, 5px)' : '';
                spans[1].style.opacity = sidebar.classList.contains('active') ? '0' : '1';
                spans[2].style.transform = sidebar.classList.contains('active') ?
                    'rotate(-45deg) translate(7px, -7px)' : '';
            });

            // Tutup sidebar ketika overlay diklik
            overlay.addEventListener('click', function() {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');

                // Reset hamburger animation
                const spans = hamburger.querySelectorAll('span');
                spans[0].style.transform = '';
                spans[1].style.opacity = '1';
                spans[2].style.transform = '';
            });

            // Tutup sidebar ketika klik di luar
            document.addEventListener('click', function(event) {
                if (!sidebar.contains(event.target) &&
                    !hamburger.contains(event.target) &&
                    sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                    overlay.classList.remove('active');

                    // Reset hamburger animation
                    const spans = hamburger.querySelectorAll('span');
                    spans[0].style.transform = '';
                    spans[1].style.opacity = '1';
                    spans[2].style.transform = '';
                }
            });
        }
    });
</script>
</body>

</html>
