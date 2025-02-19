@include('backend.partials.head')
@include('backend.partials.sidebar')

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content">
        <h3>Kegiatan Ekstrakurikuler</h3>
        <p>
            Pada <b>Kegiatan Ekstrakurikuler</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> dokumentasi ekstrakurikuler di SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>foto kegiatan ekstrakurikuler di SD Negeri 012 Babakan Ciparay</b>.
        </p>

        <form action="{{ route('foto.store') }}" method="POST" enctype="multipart/form-data" id="createForm">
            @csrf
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
                    placeholder="Masukkan pembuat (Contoh: Admin)" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Foto Kontribusi</label>
                <div class="upload-box border rounded-3 p-5 text-center" style="border-style: dashed !important;">
                    <p class="text-muted mb-0">Upload foto disini</p>
                    <input type="file" class="form-control d-none" id="foto" name="foto" accept="image/*" required>
                </div>
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

@media (max-width: 991.98px) {
    .main-wrapper {
        margin-left: 0;
    }
    
    .content {
        padding: 1rem;
    }
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
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/themes/airbnb.css">
<style>
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

    document.addEventListener('DOMContentLoaded', function() {
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
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const uploadBox = document.querySelector('.upload-box');
    const fileInput = document.getElementById('foto');

    uploadBox.addEventListener('click', () => {
        fileInput.click();
    });

    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            const fileName = e.target.files[0].name;
            uploadBox.querySelector('p').textContent = fileName;
        }
    });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
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
