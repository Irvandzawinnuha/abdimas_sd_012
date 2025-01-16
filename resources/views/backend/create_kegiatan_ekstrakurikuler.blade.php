@include('backend.partials.head')
@include('backend.partials.sidebar')
<!-- Main Content -->
<div class="content">
    <h3>Tambah Kegiatan Ekstrakurikuler</h3>
    <p>
        Pada <b>Kegiatan Ekstrakurikuler</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> kegiatan ekstrakurikuler
        terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>foto, nama kegiatan, deskripsi kegiatan, dan jadwal kegiatan</b>.
    </p>

    <form action="{{ route('kegiatan-ekstrakurikuler.store') }}" method="POST" enctype="multipart/form-data" id="createForm">
        @csrf
        <div class="mb-3">
            <label for="created_at" class="form-label">Created At/Tanggal Publikasi</label>
            <input type="date" class="form-control" id="created_at" name="created_at" required>
        </div>
        <div class="mb-3">
            <label for="created_by" class="form-label">Created By/Dibuat Oleh</label>
            <input type="text" class="form-control" id="Created By" name="CreatedBy"
                placeholder="Masukkan pembuat (Contoh: Admin)" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto Kegiatan</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            <small class="text-muted">Format yang didukung: JPG, PNG. Maksimal 2MB</small>
        </div>
        <div class="mb-3">
            <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                placeholder="Masukkan nama kegiatan ekstrakurikuler" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                placeholder="Masukkan deskripsi kegiatan" required></textarea>
        </div>
        <div class="mb-3">
            <label for="jadwal" class="form-label">Jadwal Kegiatan</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal"
                placeholder="Masukkan jadwal kegiatan (contoh: Setiap Jumat, 15:00-17:00)" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.dashboard') }}#kegiatan-ekstrakurikuler" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('createForm').addEventListener('submit', function(event) {
        const created_at = document.getElementById('created_at').value;
        const created_by = document.getElementById('created_by').value.trim();
        const foto = document.getElementById('foto').value;
        const nama_kegiatan = document.getElementById('nama_kegiatan').value.trim();
        const deskripsi = document.getElementById('deskripsi').value.trim();
        const jadwal = document.getElementById('jadwal').value.trim();

        if (!created_at || !created_by || !foto || !nama_kegiatan || !deskripsi || !jadwal) {
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
