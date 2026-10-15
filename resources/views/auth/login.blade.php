<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Masuk ke panel admin PT Solusi Koneksi Anda.">
    <title>Login Admin | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/css/auth.css', 'resources/js/app.js'])
</head>
<body class="site-body auth-body">
    <div class="auth-container">
        <div class="auth-card">
            <!-- Brand Logo Header -->
            <div class="auth-header">
                <a href="{{ url('/') }}" class="brand-logo" aria-label="PT Solusi Koneksi Anda - Beranda">
                    <span class="brand-icon" aria-hidden="true"><span>S</span></span>
                    <span class="brand-copy">
                        <span class="brand-title">Solusi Koneksi Anda</span>
                        <span class="brand-subtitle">Admin Dashboard</span>
                    </span>
                </a>
            </div>

            <div class="auth-title-wrap">
                <h1 class="auth-title">Masuk ke Dashboard</h1>
                <p class="auth-desc">Silakan masukkan akun admin Anda untuk mengelola konten.</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert-success" style="margin-bottom: 20px;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="auth-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="admin@domain.com" required autofocus autocomplete="username">
                    @if ($errors->has('email'))
                        <span class="error-text">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <label for="password">Password</label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="auth-link">Lupa password?</a>
                        @endif
                    </div>
                    <input id="password" type="password" name="password" placeholder="••••••••" required autocomplete="current-password">
                    @if ($errors->has('password'))
                        <span class="error-text">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="form-group-checkbox">
                    <label for="remember_me" class="checkbox-label">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>Ingat saya di perangkat ini</span>
                    </label>
                </div>

                <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; cursor: pointer;">
                    Log In <span aria-hidden="true">→</span>
                </button>
            </form>
        </div>
        
        <div class="auth-footer-note">
            <a href="{{ url('/') }}">← Kembali ke Beranda Utama</a>
        </div>
    </div>
</body>
</html>