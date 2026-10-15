<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Jelajahi berbagai produk, layanan internet, dan solusi infrastruktur jaringan terbaik dari PT Solusi Koneksi Anda untuk mendukung bisnis Anda.">
    <title>Produk & Layanan | PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS terpisah -->
    @vite(['resources/css/app.css', 'resources/css/produk.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="produk-hero">
            <div class="produk-glow produk-glow-one" aria-hidden="true"></div>
            <div class="produk-glow produk-glow-two" aria-hidden="true"></div>
            <div class="section-container produk-hero-container">
                <div class="hero-copy">
                    <span class="section-eyebrow"><span class="eyebrow-dot"></span> Solusi & Penawaran</span>
                    <h1 class="produk-hero-title">Produk & <span>Layanan Unggulan</span></h1>
                    <p class="produk-hero-desc">Solusi konektivitas, infrastruktur jaringan, dan integrasi perangkat berstandar tinggi yang dirancang khusus untuk mengoptimalkan operasional bisnis Anda.</p>
                </div>
            </div>
            <div class="hero-bottom-line" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        </section>

        <section class="produk-list-section">
            <div class="section-container">
                <div class="services-grid">
                    @forelse($products as $product)
                        <article class="service-card produk-card">
                            <div>
                                <div class="produk-card-top">
                                    @if($product->image)
                                        <div class="produk-card-img-wrapper">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="produk-card-img">
                                        </div>
                                    @else
                                        <span class="service-icon">
                                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 9.5a13.1 13.1 0 0 1 18 0M6.5 13a8 8 0 0 1 11 0M10 16.5a3 3 0 0 1 4 0M12 20h.01" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
                                        </span>
                                    @endif
                                    <span class="service-number">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                                
                                <h3 class="produk-card-title">{{ $product->nama }}</h3>
                                
                                @if(isset($product->harga))
                                    <div class="produk-card-price">
                                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                                    </div>
                                @endif

                                <p class="produk-card-desc">{{ Str::limit($product->deskripsi, 110) }}</p>
                            </div>

                            <a href="{{ url('/contact') }}" class="service-arrow" aria-label="Pesan atau konsultasikan layanan ini">↗</a>
                        </article>
                    @empty
                        <div class="article-empty produk-empty-card">
                            <span class="empty-icon">✳</span>
                            <strong>Belum ada produk atau layanan tersedia</strong>
                            <p>Silakan periksa kembali nanti atau hubungi kami untuk informasi lebih lanjut.</p>
                        </div>
                    @endforelse
                </div>

                @if(method_exists($products, 'links'))
                    <div class="pagination-container">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </section>

        <section class="contact-cta">
            <div class="contact-cta-glow" aria-hidden="true"></div>
            <div class="contact-cta-content">
                <span class="section-eyebrow">MULAI TERHUBUNG</span>
                <h2>Butuh solusi yang disesuaikan dengan skala bisnis Anda?</h2>
                <p>Konsultasikan kebutuhan infrastruktur dan jaringan perusahaan Anda bersama tim ahli kami.</p>
                <a href="{{ url('/contact') }}" class="btn-primary btn-primary-light">Diskusikan Kebutuhan Anda <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>

    @include('layouts.home.footer')
    
</body>
</html>