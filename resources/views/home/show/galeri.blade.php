<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="{{ $galeri->title ?? 'Detail Dokumentasi Galeri' }} - PT Solusi Koneksi Anda">
    <title>{{ $galeri->title ?? 'Detail Galeri' }} | PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS utama, CSS khusus detail galeri, dan JS melalui Vite -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="galeri-show-hero">
            <div class="section-container galeri-show-container">
                <div class="back-link-wrap">
                    <a href="{{ url('/galeri') }}" class="btn-back-galeri">
                        ← Kembali ke Galeri
                    </a>
                </div>
            </div>
        </section>

        <section class="galeri-detail-section">
            <div class="section-container">
                <article class="galeri-detail-card">
                    
                    <!-- Area Foto Galeri -->
                    <div class="galeri-detail-img-wrap">
                        @if($galeri->image)
                            <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->title ?? 'Dokumentasi Galeri' }}" class="galeri-detail-img">
                        @else
                            <div class="galeri-detail-no-img">
                                <span style="font-size: 32px;">📷</span>
                                <span>PT Solusi Koneksi Anda</span>
                            </div>
                        @endif
                    </div>

                    <!-- Informasi & Deskripsi -->
                    <div class="galeri-detail-body">
                        <div class="galeri-detail-meta">
                            <span>Dokumentasi Resmi</span>
                            <span>•</span>
                            <span>{{ $galeri->created_at ? $galeri->created_at->format('d M Y') : '' }}</span>
                        </div>

                        <h1 class="galeri-detail-title">
                            {{ $galeri->judul ?? 'Dokumentasi Proyek & Kegiatan' }}
                        </h1>

                        <div class="galeri-detail-content">
                            {{ $galeri->deskripsi ?? 'Tidak ada deskripsi tambahan untuk dokumentasi galeri ini.' }}
                        </div>
                    </div>

                </article>
            </div>
        </section>

        <section class="contact-cta">
            <div class="contact-cta-glow" aria-hidden="true"></div>
            <div class="contact-cta-content">
                <span class="section-eyebrow">MULAI TERHUBUNG</span>
                <h2>Ingin berkonsultasi mengenai proyek infrastruktur Anda?</h2>
                <p>Diskusikan kebutuhan jaringan dan teknologi perusahaan Anda bersama tim ahli kami.</p>
                <a href="{{ url('/contact') }}" class="btn-primary btn-primary-light">Diskusikan Kebutuhan Anda <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>

    @include('layouts.home.footer')
    
</body>
</html>