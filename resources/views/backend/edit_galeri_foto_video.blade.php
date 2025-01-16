@include('backend.partials.head')
@include('backend.partials.sidebar')

<!-- Main Content -->
<div class="content">
    <h3>Galeri Foto dan Video</h3>
    <p>
        Pada <b>Galeri Foto dan Video,</b> admin dapat <b>menambah, menghapus, dan memperbaharui</b> dokumentasi foto dan video terkait aktivitas di SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b> foto/video kegiatan di SD Negeri 012 Babakan Ciparay.</b>
    </p>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" id="created_at" name="created_at" value="{{ $galeri->created_at }}" required>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" id="created_by" name="created_by" value="{{ $galeri->created_by }}">
        </div>
        <div class="mb-3">
            <label for="media" class="form-label">Foto/Video</label>
            <input type="file" class="form-control" id="media" name="media" accept="image/*,video/*">
            @if ($galeri->media)
                @if (Str::endsWith($galeri->media, ['.jpg','.jpeg','.png','.gif']))
                    <img src="{{ asset('storage/' . $galeri->media) }}" alt="Foto" class="img-thumbnail mt-2" style="max-width: 200px;">
                @else
                    <video width="320" height="240" controls class="mt-2">
                        <source src="{{ asset('storage/' . $galeri->media) }}" type="video/mp4">
                        Browser Anda tidak mendukung tag video.
                    </video>
                @endif
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
        <a href="{{ route('backend.dashboard') }}#galeri" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Validasi Form sebelum Submit
    document.getElementById('editForm').addEventListener('submit', function(event) {
        const judul = document.getElementById('judul').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        const tanggal = document.getElementById('tanggal').value;
        const created_by = document.getElementById('created_by').value.trim();

        if (!judul || !deskripsi || !tanggal || !created_by) {
            event.preventDefault();
            alert('Semua kolom wajib diisi.');
        } else {
            if (!confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')) {
                event.preventDefault();
            }
        }
    });

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

    // Otomatis tambahkan kelas aktif ke sidebar
    const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
    const currentURL = window.location.href;
    sidebarLinks.forEach(link => {
        if (link.href === currentURL) {
            link.classList.add('active');
        }
    });
</script>
