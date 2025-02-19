@include('backend.partials.head')
@include('backend.partials.sidebar')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content">
        <h3>Tambah Galeri Foto dan Video</h3>
        <p>
            Pada <b>Galeri Foto dan Video</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> dokumentasi
            foto dan video terkait aktivitas di SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa 
            <b>foto/video kegiatan di SD Negeri 012 Babakan Ciparay.</b>
        </p>

        <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" 
                    placeholder="Masukkan kategori (Contoh: Acara Sekolah)" required>
                <small class="text-muted">Contoh: Acara Sekolah, Prestasi Siswa, Kegiatan Pembelajaran, dll</small>
            </div>

            <div class="mb-4">
                <label class="form-label">Created At/Tanggal Publikasi</label>
                <div class="position-relative">
                    <input type="text" class="form-control flatpickr" id="created_at" name="created_at" 
                        placeholder="Pilih tanggal" required readonly style="background-color: white;">
                    <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Created By/Dibuat Oleh</label>
                <input type="text" class="form-control" id="created_by" name="created_by"
                    placeholder="Masukkan nama pembuat" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Upload Foto/Video</label>
                <div class="upload-box border rounded-3 p-5 text-center" style="border-style: dashed !important;">
                    <p class="text-muted mb-0">Upload foto/video disini</p>
                    <input type="file" class="form-control d-none" id="foto" name="foto[]" multiple accept="image/*,video/mp4" required>
                    <small class="text-muted d-block mt-2">Format yang didukung: JPG, PNG, MP4. Maksimal 10MB per file</small>
                </div>
                <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Tambah</button>
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

.btn-primary {
    padding: 0.75rem 2rem;
    border-radius: 0.5rem;
    width: 100%;
}

.upload-box:hover {
    background-color: #f8f9fa;
}

.img-preview {
    width: 150px;
    height: 150px;
    object-fit: cover;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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

.form-select {
    padding: 0.75rem 1rem;
    border-radius: 0.5rem;
    width: 100%;
    background-color: white;
    cursor: pointer;
}

.form-select:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
