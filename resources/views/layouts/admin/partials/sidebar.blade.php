<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
<aside class="admin-sidebar" aria-label="Navigasi Sidebar Admin">
    <div class="sidebar-menu-group">
        <span class="sidebar-label">Menu Utama</span>
        <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">analytics</span> Dashboard
        </a>
    </div>

    <div class="sidebar-menu-group">
        <span class="sidebar-label">Manajemen Konten</span>
        <a href="{{ route('home-contents.index') }}" class="sidebar-link {{ request()->is('*home-content*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">edit_square</span> Kelola Beranda
        </a>
        <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->is('*products*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">inventory_2</span> Kelola Produk
        </a>
        <a href="{{ route('artikels.index') }}" class="sidebar-link {{ request()->is('*artikel*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">newspaper</span> Kelola Artikel
        </a>
        <a href="{{ route('galeris.index') }}" class="sidebar-link {{ request()->is('*galeri*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">photo_library</span> Kelola Galeri
        </a>
        <a href="{{ route('contacts.index') }}" class="sidebar-link {{ request()->is('*contacts*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">mail</span> Pesan Masuk
        </a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link {{ request()->routeIs('profile.*') ? 'sidebar-link-active' : '' }}">
            <span class="material-symbols-outlined sidebar-icon">settings</span> Pengaturan Akun
        </a>
    </div>

    <div class="sidebar-menu-group" style="margin-top: auto;">
        <a href="{{ url('/') }}" target="_blank" class="sidebar-link" style="color: var(--blue);">
            <span class="material-symbols-outlined sidebar-icon">globe</span> Lihat Website Utama 
            <span class="material-symbols-outlined" style="font-size: 14px; margin-left: auto;">open_in_new</span>
        </a>
    </div>
</aside>