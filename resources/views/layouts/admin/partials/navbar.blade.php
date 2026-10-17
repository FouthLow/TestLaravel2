<header class="site-header admin-header">
    <div class="header-container admin-header-container">
        <a href="{{ route('dashboard') }}" class="brand-logo" aria-label="Dashboard Admin">
        <img src="{{ asset('storage/images/Logo.svg') }}" alt="Logo Solusi Koneksi Anda" class="brand-svg-logo">            <span class="brand-copy">
                <span class="brand-title">Solusi Koneksi Anda</span>
                <span class="brand-subtitle">Admin Panel</span>
            </span>
        </a>

        <div class="admin-header-right">
            <span class="admin-user-name">Halo, {{ Auth::user()->name ?? 'Admin' }}</span>
            <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                @csrf
                <button type="submit" class="btn-logout" title="Keluar">Logout ↗</button>
            </form>
        </div>
    </div>
</header>