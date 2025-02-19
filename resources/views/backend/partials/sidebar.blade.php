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
        <div class="logo-container text-center mb-4">
            <img src="{{ asset('logo_sd.png') }}" alt="Logo SD Negeri 012" class="mb-2" style="width: 60px;">
            <h6 class="text-center">SD NEGERI 012 BABAKAN CIPARAY</h6>
        </div>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('backend.dashboard') }}" class="nav-link {{ Request::is('backend/dashboard') ? 'active' : '' }}">
                    <i class="bi bi-house-door"></i> Dashboard
                </a>
            </li>
        </ul>

        <div class="section-title mt-3 mb-2">PROFIL SEKOLAH</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('foto.create') }}" class="nav-link {{ Request::is('backend/foto-kontribusi/create') ? 'active' : '' }}">
                    <i class="bi bi-camera"></i> Foto Kontribusi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('profile.guru.create') }}" class="nav-link {{ Request::is('backend/profile-guru/create') ? 'active' : '' }}">
                    <i class="bi bi-person"></i> Profile Guru
                </a>
            </li>
        </ul>

        <div class="section-title mt-3 mb-2">INFORMASI</div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('berita.create') }}" class="nav-link {{ Request::is('backend/berita/create') ? 'active' : '' }}">
                    <i class="bi bi-newspaper"></i> Berita dan Pengumuman
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kegiatan-ekstrakurikuler.create') }}" class="nav-link {{ Request::is('kegiatan-ekstrakurikuler/create') ? 'active' : '' }}">
                    <i class="bi bi-activity"></i> Kegiatan Ekstrakurikuler
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('galeri.create') }}" class="nav-link {{ Request::is('backend/galeri/create') ? 'active' : '' }}">
                    <i class="bi bi-images"></i> Galeri Foto dan Video
                </a>
            </li>
        </ul>

        <div class="nav flex-column mt-auto mb-3">
            <a href="{{ route('backend.logout') }}" class="nav-link">
                <i class="bi bi-box-arrow-right"></i> Log Out
            </a>
        </div>
    </div>
</div>

<style>
.sidebar {
    background: #fff;
    width: 250px;
    min-height: 100vh;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
}

.logo-container {
    padding: 15px 0;
}

.logo-container img {
    width: 60px;
    height: auto;
}

.logo-container h6 {
    margin-top: 10px;
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.section-title {
    font-size: 12px;
    font-weight: 600;
    color: #666;
    padding-left: 10px;
}

.nav-link {
    color: #666;
    padding: 8px 10px;
    border-radius: 12px;
    margin: 2px 0;
    font-size: 14px;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    background: #f8f9fa;
    border: 1px solid transparent;
}

.nav-link i {
    margin-right: 10px;
    font-size: 18px;
    transition: all 0.3s;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 8px;
    background: #f0f2f5;
}

/* Active state */
.nav-link.active {
    background: #4361ee;
    color: #ffffff;
    font-weight: 500;
}

.nav-link.active i {
    color: #ffffff;
    background: #4361ee;
    border: 1px solid #ffffff;
}

/* Hover state */
.nav-link:hover {
    background: #4361ee;
    color: #ffffff;
}

.nav-link:hover i {
    color: #ffffff;
    background: #4361ee;
    border: 1px solid #ffffff;
}

/* Logout link */
.nav-link[href*="logout"] {
    color: #4361ee;
    background: #f8f9fa;
}

.nav-link[href*="logout"] i {
    background: #eef0f7;
    color: #4361ee;
}

.nav-link[href*="logout"]:hover {
    background: #eef0f7;
}

.nav-link[href*="logout"]:hover i {
    color: #ffffff;
    background: #4361ee;
}

/* Mobile responsive */
@media (max-width: 768px) {
    .sidebar {
        position: fixed;
        left: -250px;
        z-index: 1000;
        transition: 0.3s;
    }

    .sidebar.active {
        left: 0;
    }

    .sidebar-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        z-index: 999;
    }

    .sidebar-overlay.active {
        display: block;
    }
}
</style>
