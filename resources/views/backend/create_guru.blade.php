@include('backend.partials.head')
@include('backend.partials.sidebar')
<!-- Main Content -->
<div class="content">
    <h3>Input Profile Pendidik dan Tenaga Kependidikan</h3>
    <p>
        Pada <b>Profile Pendidik dan Tenaga Kependidikan,</b> admin dapat <b>menambah, menghapus, dan memperbaharui</b> foto kegiatan
        SD Negeri 012 Babakan Ciparay saat kontribusi kepada masyarakat, dengan mencantumkan dokumentasi
        berupa <b>foto, nama, nip, dan dan status/jabatan Pendidik dan Tenaga Kependidikan.</b>
    </p>

    <form action="{{ route('profile.guru.store') }}" method="POST" enctype="multipart/form-data" id="createForm">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
        </div>
        <div class="mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" required>
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*" required>
            <small class="text-muted">Format yang didukung: JPG, PNG. Maksimal 2MB</small>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.dashboard') }}#profile-guru" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('createForm').addEventListener('submit', function(event) {
        const nama = document.getElementById('nama').value.trim();
        const nip = document.getElementById('nip').value.trim();
        const jabatan = document.getElementById('jabatan').value.trim();
        const foto = document.getElementById('foto').value;

        if (!nama || !nip || !jabatan || !foto) {
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
