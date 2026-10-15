<header class="site-header admin-header">
    <div class="header-container admin-header-container">
        <a href="{{ route('dashboard') }}" class="brand-logo" aria-label="Dashboard Admin">
            <span class="brand-icon" aria-hidden="true"><span>S</span></span>
            <span class="brand-copy">
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