@include('backend.partials.head')
@include('backend.partials.sidebar')

<!-- Main Content -->
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
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('backend.dashboard') }}#berita-pengumuman" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Hamburger menu functionality
    document.addEventListener('DOMContentLoaded', function() {
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

    // Validasi Form sebelum Submit
    document.getElementById('editForm').addEventListener('submit', function(event) {
        const judul = document.getElementById('judul').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        const tanggal = document.getElementById('tanggal').value;
        const created_by = document.getElementById('created_by').value.trim();
        const tempat = document.getElementById('tempat').value.trim();

        if (!judul || !deskripsi || !tanggal || !created_by || !tempat) {
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
