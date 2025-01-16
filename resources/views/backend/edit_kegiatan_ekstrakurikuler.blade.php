@include('backend.partials.head')
@include('backend.partials.sidebar')

<!-- Main Content -->
<div class="content">
    <h3>Edit Kegiatan Ekstrakurikuler</h3>
    <p>
        Pada <b>Kegiatan Ekstrakurikuler</b>, admin dapat memperbarui informasi berupa <b>tanggal publikasi</b>,
        <b>dibuat oleh</b>, dan <b>foto kontribusi</b>.
    </p>

    <form id="editForm" action="{{ route('kegiatan-ekstrakurikuler.update', $kegiatan->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi</label>
            <input type="date" class="form-control" id="created_at" name="created_at"
                value="{{ $kegiatan->created_at }}" required aria-label="Tanggal Publikasi">
        </div>
        <div class="mb-3">
            <label for="dibuat_oleh" class="form-label">Dibuat Oleh</label>
            <input type="text" class="form-control" id="CreatedBy" name="CreatedBy"
                value="{{ $kegiatan->CreatedBy }}" placeholder="Masukkan nama pembuat" required
                aria-label="Dibuat Oleh">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Foto Kontribusi</label>
            <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
            @if ($kegiatan->foto_kontribusi)
                <img src="{{ asset('storage/' . $kegiatan->foto_kontribusi) }}" alt="Foto Kegiatan" width="100"
                    class="mt-2">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('backend.dashboard') }}#kegiatan-ekstrakurikuler" class="btn btn-secondary">Batal</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Konfirmasi sebelum submit
    document.getElementById('editForm').addEventListener('submit', function(event) {
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
