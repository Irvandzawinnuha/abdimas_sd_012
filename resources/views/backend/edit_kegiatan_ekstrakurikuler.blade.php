@include('backend.partials.head')
@include('backend.partials.sidebar')

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content">
        <h3>Edit Kegiatan Ekstrakurikuler</h3>
        <p>
            Pada <b>Kegiatan Ekstrakurikuler</b>, admin dapat memperbarui informasi berupa <b>tanggal publikasi</b>,
            <b>dibuat oleh</b>, dan <b>foto kontribusi</b>.
        </p>

        <form action="{{ route('kegiatan-ekstrakurikuler.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                    value="{{ $kegiatan->nama_kegiatan }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Tanggal Publikasi</label>
                <div class="position-relative">
                    <input type="text" class="form-control flatpickr" id="created_at" name="created_at" 
                        value="{{ $kegiatan->created_at->format('Y-m-d') }}" required readonly style="background-color: white;">
                    <span class="position-absolute end-0 top-50 translate-middle-y pe-3">
                        <i class="fas fa-chevron-down"></i>
                    </span>
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label">Dibuat Oleh</label>
                <input type="text" class="form-control" id="CreatedBy" name="CreatedBy"
                    value="{{ $kegiatan->CreatedBy }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Foto Kegiatan</label>
                <div class="upload-box border rounded-3 p-5 text-center" style="border-style: dashed !important;">
                    <p class="text-muted mb-0">Upload foto disini</p>
                    <input type="file" class="form-control d-none" id="foto" name="foto[]" multiple accept="image/*">
                </div>
                
                <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
                
                @if ($kegiatan->foto_kontribusi)
                    <div class="mt-3">
                        <label class="form-label">Foto Saat Ini:</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($kegiatan->foto_kontribusi as $path)
                                <div class="position-relative">
                                    <img src="{{ asset('storage/' . $path) }}" alt="Foto" class="img-preview">
                                    <input type="hidden" name="existing_photos[]" value="{{ $path }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Simpan Perubahan</button>
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
    align-items: center;
    justify-content: center;
    width: 100%;
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

    .img-preview {
        width: 120px;
        height: 120px;
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">

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

    fileInput.addEventListener('change', (e) => {
        preview.innerHTML = '';
        
        for(let i = 0; i < e.target.files.length; i++) {
            const file = e.target.files[i];
            if (file) {
                const reader = new FileReader();
                const div = document.createElement('div');
                div.className = 'position-relative';
                
                reader.onload = function(e) {
                    div.innerHTML = `
                        <img src="${e.target.result}" class="img-preview">
                        <p class="small text-muted mb-0 mt-1">${file.name}</p>
                    `;
                }
                reader.readAsDataURL(file);
                preview.appendChild(div);
            }
        }
        
        uploadBox.querySelector('p').textContent = 
            `${e.target.files.length} file${e.target.files.length > 1 ? 's' : ''} selected`;
    });

    // Hamburger menu functionality
    const hamburger = document.querySelector('.hamburger-menu');
    const mainWrapper = document.querySelector('.main-wrapper');
    const sidebar = document.querySelector('.sidebar');
    const overlay = document.querySelector('.sidebar-overlay');

    if (hamburger && sidebar && overlay) {
        hamburger.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');

            const spans = this.querySelectorAll('span');
            spans[0].style.transform = sidebar.classList.contains('active') ?
                'rotate(45deg) translate(5px, 5px)' : '';
            spans[1].style.opacity = sidebar.classList.contains('active') ? '0' : '1';
            spans[2].style.transform = sidebar.classList.contains('active') ?
                'rotate(-45deg) translate(7px, -7px)' : '';
        });

        overlay.addEventListener('click', function() {
            sidebar.classList.remove('active');
            overlay.classList.remove('active');

            const spans = hamburger.querySelectorAll('span');
            spans[0].style.transform = '';
            spans[1].style.opacity = '1';
            spans[2].style.transform = '';
        });

        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) &&
                !hamburger.contains(event.target) &&
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
                overlay.classList.remove('active');

                const spans = hamburger.querySelectorAll('span');
                spans[0].style.transform = '';
                spans[1].style.opacity = '1';
                spans[2].style.transform = '';
            }
        });
    }

    if (hamburger && mainWrapper) {
        hamburger.addEventListener('click', function() {
            if (window.innerWidth > 991.98) {
                mainWrapper.style.marginLeft = 
                    mainWrapper.style.marginLeft === '0px' ? '250px' : '0px';
            }
        });
    }

    window.addEventListener('resize', function() {
        if (window.innerWidth > 991.98) {
            mainWrapper.style.marginLeft = 
                sidebar.classList.contains('active') ? '0px' : '250px';
        } else {
            mainWrapper.style.marginLeft = '0px';
        }
    });

    flatpickr(".flatpickr", {
        dateFormat: "Y-m-d",
        altInput: true,
        altFormat: "l, d F Y",
        defaultDate: "{{ $kegiatan->created_at->format('Y-m-d') }}",
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
