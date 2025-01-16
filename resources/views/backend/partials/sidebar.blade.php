<!-- Hamburger Menu -->
<div class="hamburger-menu">
    <span></span>
    <span></span>
    <span></span>
</div>

<!-- Overlay untuk mobile -->
<div class="sidebar-overlay"></div>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar d-flex flex-column">
        <div class="logo-container">
            <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012">
            <h4>SD NEGERI 012<br>BABAKAN CIPARAY</h4>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </li>
        </ul>

        <div class="section-title">PROFIL SEKOLAH</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#foto-kontribusi" class="nav-link {{ Request::is('foto-kontribusi') ? 'active' : '' }}">
                    <i class="bi bi-image"></i> Foto Kontribusi
                </a>
            </li>
            <li class="nav-item">
                <a href="#profile-guru" class="nav-link {{ Request::is('profile-guru') ? 'active' : '' }}">
                    <i class="bi bi-person"></i> Profile Guru
                </a>
            </li>
        </ul>

        <div class="section-title">INFORMASI</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#berita-pengumuman" class="nav-link {{ Request::is('berita-pengumuman') ? 'active' : '' }}">
                    <i class="bi bi-megaphone"></i> Berita dan Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a href="#kegiatan-ekstrakurikuler"
                    class="nav-link {{ Request::is('kegiatan-ekstrakurikuler') ? 'active' : '' }}">
                    <i class="bi bi-people"></i> Kegiatan Ekstrakurikuler
                </a>
            </li>
            <li class="nav-item">
                <a href="#galeri-foto" class="nav-link {{ Request::is('galeri-foto') ? 'active' : '' }}">
                    <i class="bi bi-images"></i> Galeri Foto dan Video
                </a>
            </li>
        </ul>

        <div class="nav flex-column mt-auto">
            <a href="{{ route('backend.logout') }}" class="nav-link text-primary">
                <i class="bi bi-box-arrow-right"></i> Log Out
            </a>
        </div>
    </div>
</div>
