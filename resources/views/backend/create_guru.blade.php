@include('backend.partials.head')
@include('backend.partials.sidebar')

<div class="main-wrapper">
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
            <div class="mb-4">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
            </div>

            <div class="mb-4">
                <label class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukkan NIP" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Masukkan jabatan" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Foto</label>
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
/* Style yang sama dengan create.blade.php */
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
</style>

<!-- Script yang sama dengan create.blade.php -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Form validation
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

    // Upload box functionality
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
    });
</script>

</body>
</html>
