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
    <ul class="nav nav-tabs">
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
    <div class="tab-content">
        <!-- Foto Kontribusi Tab -->
        <div class="tab-pane fade show active" id="foto-kontribusi">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Foto Kontribusi</h4>
                <a href="{{ route('foto.create') }}" class="btn btn-outline-primary rounded-pill px-4">
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
                            <th>Foto</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataFoto as $foto)
                            <tr>
                                <td data-label="No">{{ $loop->iteration }}</td>
                                <td data-label="Tanggal">{{ $foto->created_at->format('d/m/Y') }}</td>
                                <td data-label="Dibuat Oleh">{{ $foto->created_by }}</td>
                                <td data-label="Foto">
                                    <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto" class="img-thumbnail">
                                </td>
                                <td data-label="Hapus">
                                    <form action="{{ route('foto.destroy', $foto->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-circle">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td data-label="Edit">
                                    <a href="{{ route('foto.edit', $foto->id) }}"
                                        class="btn btn-primary rounded-circle">
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
                <h4>Profile Guru</h4>
                <a href="{{ route('profile.guru.create') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Tambah +
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
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
                                <td>{{ $loop->iteration + ($dataGuru->currentPage() - 1) * $dataGuru->perPage() }}</td>
                                <td>{{ $guru->nama }}</td>
                                <td>{{ $guru->nip }}</td>
                                <td>{{ $guru->jabatan }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $guru->foto) }}" alt="Foto Guru"
                                        class="img-thumbnail">
                                </td>
                                <td>
                                    <form action="{{ route('profile.guru.destroy', $guru->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-circle">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('profile.guru.edit', $guru->id) }}"
                                        class="btn btn-primary rounded-circle">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-3">
                {{ $dataGuru->links() }}
            </div>
        </div>

        <!-- Berita dan Pengumuman Tab -->
        <div class="tab-pane fade" id="berita-pengumuman">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4>Berita dan Pengumuman</h4>
                <a href="{{ route('berita.create') }}" class="btn btn-outline-primary rounded-pill px-4">
                    Tambah +
                </a>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>konten</th>
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
                                    <img src="{{ asset('storage/' . $berita->foto) }}" alt="Foto Berita"
                                        class="img-thumbnail" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('berita.destroy', $berita->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-circle">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('berita.edit', $berita->id) }}"
                                        class="btn btn-primary rounded-circle">
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
                <h4>Kegiatan Ekstrakurikuler</h4>
                <a href="{{ route('kegiatan-ekstrakurikuler.create') }}"
                    class="btn btn-outline-primary rounded-pill px-4">
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
                            <th>Gambar</th>
                            <th>Hapus</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataEkskul as $ekskul)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td data-label="Tanggal">{{ $ekskul->created_at->format('d/m/Y') }}</td>
                                <td data-label="Dibuat Oleh">{{ $ekskul->CreatedBy }}</td>
                
                                <td>
                                    <img src="{{ asset('storage/' . $ekskul->foto_kontribusi) }}" alt="Foto Ekstrakurikuler"
                                        class="img-thumbnail" width="100">
                                </td>
                                <td>
                                    <form action="{{ route('kegiatan-ekstrakurikuler.destroy', $ekskul->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-circle">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('kegiatan-ekstrakurikuler.edit', $ekskul->id) }}"
                                        class="btn btn-primary rounded-circle">
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
                            <th>Gambar</th>
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

                                <td>
                                    <img src="{{ asset('storage/' . $galeri->foto) }}" alt="Foto Galeri"
                                        class="img-thumbnail" width="100">
                                </td>

                                <td>
                                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger rounded-circle">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>

                                <td>
                                    <a href="{{ route('galeri.edit',  $galeri->id) }}"
                                        class="btn btn-primary rounded-circle">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



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
