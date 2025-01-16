@include('backend.partials.head')
@include('backend.partials.sidebar')
<!-- Main Content -->
<div class="content">
    <h3>Input Foto Kontribusi</h3>
    <p>
        Pada <b>Foto Kontribusi</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> foto kegiatan
        SD Negeri 012 Babakan Ciparay saat kontribusi kepada masyarakat.
    </p>

    <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data" id="createForm">
        @csrf
        <div class="mb-3">
            <label for="created_at" class="form-label">Created At/Tanggal Publikasi</label>
            <input type="date" class="form-control" id="created_at" name="created_at" required>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created By/Dibuat Oleh</label>
            <input type="text" class="form-control" id="created_by" name="created_by"
                placeholder="Masukkan pembuat (contoh: Admin)" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Kontribusi</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            <small class="text-muted">Format yang didukung: JPG, PNG. Maksimal 2MB</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.dashboard') }}#foto-kontribusi" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('createForm').addEventListener('submit', function(event) {
        const created_at = document.getElementById('created_at').value;
        const created_by = document.getElementById('created_by').value.trim();
        const foto = document.getElementById('foto').value;

        if (!created_at || !created_by || !foto) {
            event.preventDefault();
            alert('Semua kolom wajib diisi.');
        } else {
            if (!confirm('Apakah Anda yakin ingin menyimpan data ini?')) {
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
</script>
</body>

</html>
