@include('backend.partials.head')
@include('backend.partials.sidebar')

<!-- Main Content -->
<div class="content">
    <h2 class="fw-bold mb-4">Foto Kontribusi</h2>
    <p>
        Pada <b>Foto Kontribusi</b>, admin dapat <b>memuat, menghapus, dan memperbarui</b> foto kegiatan SD Negeri 012
        Babakan Ciparay saat kontribusi kepada masyarakat, dengan mencantumkan dokumentasi berupa
        <b>foto kegiatan kontribusi SD Negeri 012 Babakan Ciparay.</b>
    </p>

    <form action="{{ route('foto.update', $foto->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="created_by" class="form-label">Created By</label>
            <input type="text" class="form-control" id="created_by" name="created_by"
                value="{{ old('created_by', $foto->created_by) }}" required>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Ganti Foto (Opsional)</label>
            <input type="file" class="form-control" id="foto" name="foto">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti foto.</small>
        </div>

        <div class="mb-3">
            <label>Foto Saat Ini:</label><br>
            <img src="{{ asset('storage/' . $foto->foto) }}" alt="Foto" class="img-thumbnail" style="width: 150px;">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.dashboard') }}#foto-kontribusi" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Konfirmasi sebelum submit
    document.querySelector('form').addEventListener('submit', function(event) {
        if (!confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')) {
            event.preventDefault();
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
