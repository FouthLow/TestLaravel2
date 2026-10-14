<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="PT Solusi Koneksi Anda menyediakan solusi internet, infrastruktur jaringan, dan integrasi teknologi untuk kebutuhan bisnis.">
    <title>Beranda | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="home-hero">
            <div class="hero-glow hero-glow-one" aria-hidden="true"></div>
            <div class="hero-glow hero-glow-two" aria-hidden="true"></div>
            <div class="hero-grid-pattern" aria-hidden="true"></div>
            <div class="home-hero-container">
                <div class="hero-copy">
                    <span class="hero-eyebrow"><span class="eyebrow-dot"></span> Koneksi untuk berkembang</span>
                    <h1 class="home-hero-title">Koneksi yang kuat.<br><span>Bisnis melaju.</span></h1>
                    <p class="home-hero-desc">Infrastruktur internet dan teknologi yang dirancang untuk membantu bisnis tetap terhubung, produktif, dan siap menghadapi masa depan digital.</p>
                    <div class="hero-btn-wrapper">
                        <a href="{{ route('products.index') }}" class="btn-primary">Jelajahi Layanan <span aria-hidden="true">→</span></a>
                        <a href="#about" class="btn-secondary">Kenali Perusahaan</a>
                    </div>
                    <div class="hero-trust-note"><span class="trust-check">✓</span> Solusi teknologi untuk kebutuhan bisnis dan industri</div>
                </div>

                <div class="hero-visual" aria-label="Ilustrasi abstrak jaringan digital">
                    <div class="orbit orbit-outer"></div>
                    <div class="orbit orbit-middle"></div>
                    <div class="orbit orbit-inner"></div>
                    <div class="network-line network-line-one"></div>
                    <div class="network-line network-line-two"></div>
                    <div class="network-line network-line-three"></div>
                    <div class="network-node node-one"></div>
                    <div class="network-node node-two"></div>
                    <div class="network-node node-three"></div>
                    <div class="network-node node-four"></div>
                    <div class="network-core"><span class="core-signal signal-one"></span><span class="core-signal signal-two"></span><span class="core-signal signal-three"></span><span class="core-center"><span>SKA</span></span></div>
                    <div class="visual-label visual-label-top"><span class="label-pulse"></span> NETWORK ONLINE</div>
                    <div class="visual-label visual-label-bottom"><span class="label-icon">↗</span><span><strong>Connected</strong><small>Built for business</small></span></div>
                </div>
            </div>
            <div class="hero-bottom-line" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        </section>

        <section class="about-section" id="about">
            <div class="section-container about-container">
                <div class="about-intro">
                    <span class="section-eyebrow">TENTANG KAMI</span>
                    <h2 class="section-title">Teknologi yang bekerja untuk <span>kemajuan Anda.</span></h2>
                </div>
                <div class="about-detail">
                    <p class="section-desc">PT Solusi Koneksi Anda berfokus pada solusi konektivitas dan infrastruktur digital untuk mendukung kebutuhan bisnis yang terus berkembang. Kami menghubungkan jaringan, perangkat, dan sistem agar dapat bekerja secara lebih terpadu.</p>
                    <ul class="feature-list">
                        <li class="feature-item"><span class="feature-check">✓</span><span><strong>Infrastruktur andal</strong><small>Dirancang sesuai kebutuhan operasional.</small></span></li>
                        <li class="feature-item"><span class="feature-check">✓</span><span><strong>Solusi fleksibel</strong><small>Dapat disesuaikan dengan skala bisnis.</small></span></li>
                        <li class="feature-item"><span class="feature-check">✓</span><span><strong>Dukungan teknis</strong><small>Mendukung kelancaran penggunaan layanan.</small></span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="services-section" id="services">
            <div class="section-container">
                <div class="section-heading-row">
                    <div>
                        <span class="section-eyebrow">SOLUSI KAMI</span>
                        <h2 class="section-title">Koneksi untuk setiap kebutuhan.</h2>
                        <p class="section-desc section-desc-narrow">Dari jaringan internet hingga integrasi perangkat, temukan dukungan teknologi untuk operasional yang lebih terhubung.</p>
                    </div>
                    <a href="{{ route('products.index') }}" class="text-link">Lihat semua produk <span aria-hidden="true">↗</span></a>
                </div>

                <div class="services-grid">
                    <article class="service-card service-card-featured">
                        <div class="service-card-top"><span class="service-icon"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 9.5a13.1 13.1 0 0 1 18 0M6.5 13a8 8 0 0 1 11 0M10 16.5a3 3 0 0 1 4 0M12 20h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></span><span class="service-number">01</span></div>
                        <h3>Internet Bisnis & Dedicated Line</h3>
                        <p>Konektivitas berkecepatan tinggi untuk mendukung aktivitas bisnis dan kebutuhan jaringan yang konsisten.</p>
                        <a href="{{ route('products.index') }}" class="service-arrow" aria-label="Lihat layanan internet bisnis">↗</a>
                    </article>
                    <article class="service-card">
                        <div class="service-card-top"><span class="service-icon"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="4" y="4" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.8"/><rect x="14" y="14" width="6" height="6" rx="1.5" stroke="currentColor" stroke-width="1.8"/><path d="M10 7h4a2 2 0 0 1 2 2v5M7 10v4a2 2 0 0 0 2 2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></span><span class="service-number">02</span></div>
                        <h3>Infrastruktur Jaringan</h3>
                        <p>Perencanaan dan dukungan infrastruktur jaringan untuk konektivitas perangkat dan sistem.</p>
                        <a href="{{ route('products.index') }}" class="service-arrow" aria-label="Lihat produk infrastruktur jaringan">↗</a>
                    </article>
                    <article class="service-card">
                        <div class="service-card-top"><span class="service-icon"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="7" y="7" width="10" height="10" rx="2" stroke="currentColor" stroke-width="1.8"/><path d="M9 1.8v3M15 1.8v3M9 19.2v3M15 19.2v3M1.8 9h3M1.8 15h3M19.2 9h3M19.2 15h3M10 10h4v4h-4z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></span><span class="service-number">03</span></div>
                        <h3>Smart IoT & Integrasi Perangkat</h3>
                        <p>Integrasi router, gateway, sensor, dan perangkat pendukung untuk kebutuhan yang lebih cerdas.</p>
                        <a href="{{ route('products.index') }}" class="service-arrow" aria-label="Lihat layanan IoT">↗</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="article-section" id="articles">
            <div class="section-container">
                <div class="section-heading-row article-header">
                    <div>
                        <span class="section-eyebrow">WAWASAN & INFORMASI</span>
                        <h2 class="section-title">Ide baru, koneksi lebih luas.</h2>
                        <p class="section-desc section-desc-narrow">Ikuti informasi dan artikel terbaru seputar perusahaan dan teknologi.</p>
                    </div>
                    <a href="{{ route('artikels.index') }}" class="text-link">Semua artikel <span aria-hidden="true">↗</span></a>
                </div>

                <div class="article-grid">
                    @forelse($artikels as $artikel)
                        <article class="article-card">
                            <a href="{{ route('artikels.show', $artikel->id) }}" class="article-card-img-wrap" aria-label="Baca {{ $artikel->title }}">
                                @if($artikel->image)
                                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}" class="article-card-img" loading="lazy">
                                @else
                                    <div class="article-card-no-img"><span class="placeholder-symbol">SKA</span><span>Informasi Perusahaan</span></div>
                                @endif
                            </a>
                            <div class="article-card-body">
                                <span class="article-card-date">{{ $artikel->created_at?->format('d M Y') ?? 'Update Terbaru' }}</span>
                                <h3 class="article-card-title"><a href="{{ route('artikels.show', $artikel->id) }}">{{ $artikel->title }}</a></h3>
                                <p class="article-card-desc">{{ Str::limit($artikel->content, 110) }}</p>
                                <div class="article-card-footer"><a href="{{ route('artikels.show', $artikel->id) }}" class="article-read-more">Baca artikel <span aria-hidden="true">→</span></a></div>
                            </div>
                        </article>
                    @empty
                        <div class="article-empty"><span class="empty-icon">✳</span><strong>Belum ada artikel terbaru</strong><p>Informasi dan berita perusahaan akan ditampilkan di sini.</p></div>
                    @endforelse
                </div>
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
