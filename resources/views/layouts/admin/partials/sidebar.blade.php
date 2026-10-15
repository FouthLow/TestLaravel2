<aside class="admin-sidebar" aria-label="Navigasi Sidebar Admin">
    <div class="sidebar-menu-group">
        <span class="sidebar-label">Menu Utama</span>
        <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'sidebar-link-active' : '' }}">
            <span>📊</span> Dashboard
        </a>
    </div>

    <div class="sidebar-menu-group">
        <span class="sidebar-label">Manajemen Konten</span>
        <a href="{{ route('products.index') }}" class="sidebar-link {{ request()->is('*products*') ? 'sidebar-link-active' : '' }}">
            <span>📦</span> Kelola Produk
        </a>
        <a href="{{ route('artikels.index') }}" class="sidebar-link {{ request()->is('*artikel*') ? 'sidebar-link-active' : '' }}">
            <span>📝</span> Kelola Artikel
        </a>
        <a href="{{ route('galeris.index') }}" class="sidebar-link {{ request()->is('*galeri*') ? 'sidebar-link-active' : '' }}">
            <span>🖼️</span> Kelola Galeri
        </a>
        <a href="{{ route('profile.edit') }}" class="sidebar-link {{ request()->routeIs('profile.*') ? 'sidebar-link-active' : '' }}">
            <span>⚙️</span> Pengaturan Akun
        </a>
    </div>

    <div class="sidebar-menu-group" style="margin-top: auto;">
        <a href="{{ url('/') }}" target="_blank" class="sidebar-link" style="color: var(--blue);">
            <span>🌐</span> Lihat Website Utama ↗
        </a>
    </div>
</aside>