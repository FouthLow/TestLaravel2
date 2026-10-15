<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Kumpulan artikel dan wawasan terbaru seputar teknologi, infrastruktur jaringan, dan solusi bisnis dari PT Solusi Koneksi Anda.">
    <title>Artikel & Wawasan | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="artikel-hero">
            <div class="artikel-glow artikel-glow-one" aria-hidden="true"></div>
            <div class="artikel-glow artikel-glow-two" aria-hidden="true"></div>
            <div class="section-container artikel-hero-container">
                <div class="hero-copy">
                    <span class="section-eyebrow"><span class="eyebrow-dot"></span> Wawasan & Informasi</span>
                    <h1 class="artikel-hero-title">Artikel & <span>Berita Terbaru</span></h1>
                    <p class="artikel-hero-desc">Ikuti perkembangan, tips teknologi, dan pembaruan informasi seputar solusi digital dan infrastruktur bisnis.</p>
                </div>
            </div>
            <div class="hero-bottom-line" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        </section>

        <section class="artikel-list-section">
            <div class="section-container">
                <div class="article-grid">
                    @forelse($artikels as $artikel)
                        <article class="article-card">
                            <!-- Menghubungkan ke rute show publik /artikel/{id} -->
                            <a href="{{ url('/artikel/' . $artikel->id) }}" class="article-card-img-wrap" aria-label="Baca {{ $artikel->judul }}">
                                @if($artikel->image)
                                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="article-card-img" loading="lazy">
                                @else
                                    <div class="article-card-no-img"><span class="placeholder-symbol">SKA</span><span>Informasi Perusahaan</span></div>
                                @endif
                            </a>
                            <div class="article-card-body">
                                <span class="article-card-date">{{ $artikel->created_at?->format('d M Y') ?? 'Update Terbaru' }}</span>
                                <h3 class="article-card-title">
                                    <a href="{{ url('/artikel/' . $artikel->id) }}">{{ $artikel->judul }}</a>
                                </h3>
                                <!-- Menggunakan kolom deskripsi -->
                                <p class="article-card-desc">{{ Str::limit($artikel->deskripsi, 110) }}</p>
                                <div class="article-card-footer">
                                    <a href="{{ url('/artikel/' . $artikel->id) }}" class="article-read-more">Baca artikel <span aria-hidden="true">→</span></a>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="article-empty"><span class="empty-icon">✳</span><strong>Belum ada artikel terbaru</strong><p>Informasi dan berita perusahaan akan ditampilkan di sini.</p></div>
                    @endforelse
                </div>

                @if(method_exists($artikels, 'links'))
                    <div class="pagination-container">
                        {{ $artikels->links() }}
                    </div>
                @endif
            </div>
        </section>

        <section class="contact-cta">
            <div class="contact-cta-glow" aria-hidden="true"></div>
            <div class="contact-cta-content">
                <span class="section-eyebrow">MULAI TERHUBUNG</span>
                <h2>Siap membangun koneksi yang lebih baik?</h2>
                <p>Temukan solusi jaringan yang sesuai dengan kebutuhan bisnis Anda.</p>
                <a href="#contact" class="btn-primary btn-primary-light">Diskusikan Kebutuhan Anda <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>

    @include('layouts.home.footer')
    
</body>
</html>