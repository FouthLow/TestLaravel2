<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="{{ Str::limit(strip_tags($artikel->deskripsi), 150) }}">
    <title>{{ $artikel->judul }} | PT Solusi Koneksi Anda</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    @vite(['resources/css/app.css', 'resources/css/artikel-detail.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main class="public-article-full-wrapper">
        
        <!-- Hero & Title Section -->
        <header class="public-article-hero">
            <div class="article-hero-container">
                <div class="public-article-back">
                    <a href="{{ url('/artikel') }}" class="btn-article-back">
                        <span class="material-symbols-outlined">arrow_back</span>
                        <span>Kembali ke Daftar Artikel</span>
                    </a>
                </div>

                <div class="public-article-meta">
                    <span class="public-article-badge">Wawasan & Berita</span>
                    <span class="meta-dot">•</span>
                    <time datetime="{{ $artikel->created_at?->toIso8601String() }}">
                        {{ $artikel->created_at?->translatedFormat('d F Y') ?? $artikel->created_at?->format('d M Y') }}
                    </time>
                </div>

                <h1 class="public-article-title">
                    {{ $artikel->judul }}
                </h1>
            </div>
        </header>

        <!-- Main Content Area -->
        <div class="article-body-container">
            
            <!-- Gambar Utama Full-Width Display -->
            @if ($artikel->image)
                <div class="public-article-img-wrap">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="public-article-img" loading="lazy">
                </div>
            @endif

            <!-- Konten / Isi Artikel -->
            <div class="public-article-content">
                {!! nl2br(e($artikel->deskripsi)) !!}
            </div>

            <!-- Footer Artikel -->
            <footer class="public-article-footer">
                <a href="{{ url('/artikel') }}" class="btn-article-back">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span>Artikel Lainnya</span>
                </a>
                <div class="public-article-author">
                    Dipublikasikan oleh <strong>PT Solusi Koneksi Anda</strong>
                </div>
            </footer>

        </div>

    </main>

    @include('layouts.home.footer')

</body>
</html>