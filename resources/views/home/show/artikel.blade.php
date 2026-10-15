<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="{{ Str::limit(strip_tags($artikel->deskripsi), 150) }}">
    <title>{{ $artikel->judul }} | PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS terpisah khusus detail artikel publik -->
    @vite(['resources/css/app.css', 'resources/css/artikel-detail.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main class="py-12">
        <article class="section-container public-article-container">
            
            <!-- Navigasi Kembali -->
            <div class="public-article-back">
                <a href="{{ url('/artikel') }}" class="public-article-back-link">
                    <span aria-hidden="true">←</span> Kembali ke Daftar Artikel
                </a>
            </div>

            <!-- Header Artikel -->
            <header class="public-article-header">
                <div class="public-article-meta">
                    <span class="public-article-badge">Wawasan & Berita</span>
                    <span>•</span>
                    <time datetime="{{ $artikel->created_at?->toIso8601String() }}">
                        {{ $artikel->created_at?->translatedFormat('d F Y') ?? $artikel->created_at?->format('d M Y') }}
                    </time>
                </div>
                <h1 class="public-article-title">
                    {{ $artikel->judul }}
                </h1>
            </header>

            <!-- Gambar Utama -->
            @if ($artikel->image)
                <div class="public-article-img-wrap">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="public-article-img" loading="lazy">
                </div>
            @endif

            <!-- Konten / Isi Artikel -->
            <div class="public-article-content">
                {!! nl2br(e($artikel->deskripsi)) !!}
            </div>

            <!-- Footer / Tombol Navigasi Bawah -->
            <footer class="public-article-footer">
                <a href="{{ url('/artikel') }}" class="btn-secondary" style="display: inline-flex; align-items: center; gap: 8px;">
                    <span aria-hidden="true">←</span> Artikel Lainnya
                </a>
                <div class="public-article-author">
                    Dipublikasikan oleh <strong>PT Solusi Koneksi Anda</strong>
                </div>
            </footer>

        </article>

    @include('layouts.home.footer')

</body>
</html>