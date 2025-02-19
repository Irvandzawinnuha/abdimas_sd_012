@include('backend.partials.head')
@include('backend.partials.sidebar')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content">
        <h3>Edit Galeri Foto dan Video</h3>
        <p>
            Pada <b>Galeri Foto dan Video</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> dokumentasi
            foto dan video terkait aktivitas di SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa 
            <b>foto/video kegiatan di SD Negeri 012 Babakan Ciparay.</b>
        </p>

        <form action="{{ route('galeri.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" 
                    value="{{ $galeri->kategori }}" placeholder="Masukkan kategori" required>
                <small class="text-muted">Contoh: Acara Sekolah, Prestasi Siswa, Kegiatan Pembelajaran, dll</small>
            </div>

            <div class="mb-4">
                <label class="form-label">Created At/Tanggal Publikasi</label>
                <div class="position-relative">
                    <input type="text" class="form-control flatpickr" id="created_at" name="created_at" 
                        value="{{ $galeri->created_at->format('Y-m-d') }}" required readonly style="background-color: white;">
                    <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Created By/Dibuat Oleh</label>
                <input type="text" class="form-control" id="created_by" name="created_by" 
                    value="{{ $galeri->created_by }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Upload Foto/Video Baru</label>
                <div class="upload-box border rounded-3 p-5 text-center" style="border-style: dashed !important;">
                    <p class="text-muted mb-0">Upload foto/video disini</p>
                    <input type="file" class="form-control d-none" id="foto" name="foto[]" multiple accept="image/*,video/mp4">
                    <small class="text-muted d-block mt-2">Format yang didukung: JPG, PNG, MP4. Maksimal 10MB per file</small>
                </div>
                <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
            </div>

            @if ($galeri->foto)
                <div class="mb-4">
                    <label class="form-label">File Saat Ini:</label>
                    <div class="d-flex flex-wrap gap-2">
                        @foreach($galeri->foto as $index => $path)
                            <div class="position-relative">
                                @php
                                    $fileExtension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                                @endphp
                                @if (in_array($fileExtension, ['jpg', 'jpeg', 'png', 'gif']))
                                    <img src="{{ asset('storage/' . $path) }}" class="img-preview">
                                @elseif ($fileExtension === 'mp4')
                                    <video src="{{ asset('storage/' . $path) }}" class="img-preview" controls></video>
                                @endif
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" name="hapus_foto[]" 
                                        value="{{ $index }}" id="hapus_{{ $index }}">
                                    <label class="form-check-label small" for="hapus_{{ $index }}">
                                        Hapus file ini
                                    </label>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Perbarui</button>
            </div>
        </form>
    </div>
</div>

<style>
.main-wrapper {
    margin-left: 250px;
    min-height: 100vh;
    transition: margin-left 0.3s ease;
}

.content {
    padding: 2rem;
    max-width: 100%;
    margin: 0 auto;
}

form {
    width: 100%;
}

.content > h3,
.content > p,
.content > form {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
}

.form-label {
    font-weight: 500;
    margin-bottom: 0.5rem;
}

.form-control {
    padding: 0.75rem 1rem;
    border-radius: 0.5rem;
    width: 100%;
    background-color: white;
}

.upload-box {
    cursor: pointer;
    min-height: 200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    border: 2px dashed #dee2e6;
    border-radius: 0.5rem;
    transition: all 0.3s ease;
}

.btn-primary, .btn-secondary {
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    width: 100%;
}

.upload-box:hover {
    background-color: #f8f9fa;
    border-color: #0d6efd;
}

.img-preview {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.card {
    border-radius: 0.5rem;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    height: 100%;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
}

.card-body {
    padding: 1rem;
    background-color: white;
}

.form-check {
    margin-top: 0.5rem;
}

.form-check-input {
    cursor: pointer;
}

.form-check-label {
    cursor: pointer;
    font-size: 0.875rem;
}

@media (max-width: 991.98px) {
    .main-wrapper {
        margin-left: 0;
    }
    
    .content {
        padding: 1rem;
    }
}

@media (max-width: 576px) {
    .mb-4 {
        margin-bottom: 1rem !important;
    }
    
    .upload-box {
        min-height: 150px;
    }
    
    .btn-lg {
        padding: 0.5rem 1.5rem;
    }

    .content > h3,
    .content > p,
    .content > form {
        padding-left: 1rem;
        padding-right: 1rem;
    }
}

.flatpickr-calendar {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
.flatpickr-day.selected {
    background: #0d6efd;
    border-color: #0d6efd;
}
.flatpickr-day:hover {
    background: #e6e6e6;
}
.flatpickr-current-month {
    padding-top: 15px !important;
}
.flatpickr-monthDropdown-months {
    background: transparent;
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadBox = document.querySelector('.upload-box');
    const fileInput = document.getElementById('foto');
    const preview = document.getElementById('preview');

    uploadBox.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', function(e) {
        preview.innerHTML = '';
        
        for(let i = 0; i < this.files.length; i++) {
            const file = this.files[i];
            if (file) {
                const reader = new FileReader();
                const div = document.createElement('div');
                div.className = 'position-relative';
                
                reader.onload = function(e) {
                    if (file.type.startsWith('image/')) {
                        div.innerHTML = `
                            <img src="${e.target.result}" class="img-preview">
                            <p class="small text-muted mb-0 mt-1">${file.name}</p>
                        `;
                    } else if (file.type === 'video/mp4') {
                        div.innerHTML = `
                            <video src="${e.target.result}" class="img-preview" controls></video>
                            <p class="small text-muted mb-0 mt-1">${file.name}</p>
                        `;
                    }
                }
                reader.readAsDataURL(file);
                preview.appendChild(div);
            }
        }
        
        uploadBox.querySelector('p').textContent = 
            `${e.target.files.length} file${e.target.files.length > 1 ? 's' : ''} selected`;
    });

    // Tambahkan validasi form
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        const created_by = document.getElementById('created_by').value.trim();
        
        if (!created_by) {
            e.preventDefault();
            alert('Mohon isi nama pembuat');
            return;
        }

        if (!confirm('Apakah Anda yakin ingin menyimpan perubahan?')) {
            e.preventDefault();
        }
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

    // Otomatis tambahkan kelas aktif ke sidebar
    const sidebarLinks = document.querySelectorAll('.sidebar .nav-link');
    const currentURL = window.location.href;
    sidebarLinks.forEach(link => {
        if (link.href === currentURL) {
            link.classList.add('active');
        }
    });

    // Add this to handle the date input
    const dateInput = document.getElementById('created_at');
    const originalDate = new Date(dateInput.value);
    dateInput.value = originalDate.toLocaleDateString('en-US', {
        weekday: 'long',
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });

    flatpickr(".flatpickr", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "l, d F Y",
        defaultDate: new Date(),
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"],
                longhand: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]
            },
            months: {
                shorthand: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
                longhand: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]
            }
        }
    });
});
</script>
</body>
</html>
