@include('backend.partials.head')
@include('backend.partials.sidebar')

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="content">
        <h3>Edit Berita & Pengumuman</h3>
        <p>
            Pada <b>Berita & Pengumuman</b>, admin dapat <b>menambah, menghapus, dan memperbaharui</b> Berita dan Pengumuman
            terkait SD Negeri 012 Babakan Ciparay dengan mencantumkan informasi berupa <b>foto, deskripsi kegiatan, tanggal
                pelaksanaan, dan tempat pelaksanaan</b>.
        </p>

        <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" 
                    value="{{ $berita->judul }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" 
                    rows="3" required>{{ $berita->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">Konten</label>
                <textarea class="form-control" id="konten" name="konten" 
                    rows="5" required>{{ $berita->konten }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">Dibuat Oleh</label>
                <input type="text" class="form-control" id="created_by" name="created_by" 
                    value="{{ $berita->created_by }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Tanggal Aktivitas</label>
                <input type="text" class="form-control" id="tanggal" name="tanggal" 
                    value="{{ $berita->tanggal }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Tempat</label>
                <input type="text" class="form-control" id="tempat" name="tempat" 
                    value="{{ $berita->tempat }}" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Foto Berita dan Pengumuman</label>
                <div class="upload-box border rounded-3 p-5 text-center" style="border-style: dashed !important;">
                    <p class="text-muted mb-0">Upload foto disini</p>
                    <input type="file" class="form-control d-none" id="foto" name="foto[]" multiple accept="image/*">
                </div>
                
                <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
                
                @if ($berita->foto)
                    <div class="mt-3">
                        <label class="form-label">Foto Saat Ini:</label>
                        <div class="d-flex flex-wrap gap-2">
                            @foreach($berita->foto as $path)
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

textarea.form-control {
    min-height: 120px;
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
    max-width: 200px;
    height: auto;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    width: 150px;
    height: 150px;
    object-fit: cover;
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
        max-width: 150px;
        width: 120px;
        height: 120px;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Konfirmasi sebelum submit
    document.querySelector('form').addEventListener('submit', function(event) {
        if (!confirm('Apakah Anda yakin ingin menyimpan perubahan ini?')) {
            event.preventDefault();
        }
    });

    // Upload box functionality
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
    });
</script>

</body>
</html>
