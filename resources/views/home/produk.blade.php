<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Jelajahi berbagai produk, layanan internet, dan solusi infrastruktur jaringan terbaik dari PT Solusi Koneksi Anda untuk mendukung bisnis Anda.">
    <title>Produk & Layanan | PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS terpisah -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <div class="produk-grid">
                    @forelse($products as $product)
                        <article class="produk-item-card">
                            <div>
                                <!-- Area Gambar Produk di atas -->
                                <a href="{{ url('/produk/' . $product->id) }}" class="produk-card-img-link">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="produk-card-img">
                                    @else
                                        <div class="produk-card-no-img">
                                            <span style="font-size: 24px;">📦</span>
                                            <span>PT Solusi Koneksi Anda</span>
                                        </div>
                                    @endif
                                </a>

                                <div class="produk-card-body">
                                    <span class="produk-card-category">Layanan Resmi</span>
                                    
                                    <h3 class="produk-card-title">
                                        <a href="{{ url('/produk/' . $product->id) }}" style="color: inherit; text-decoration: none;">
                                            {{ $product->nama }}
                                        </a>
                                    </h3>
                                    
                                    @if(isset($product->harga))
                                        <div class="produk-card-price">
                                            Rp {{ number_format($product->harga, 0, ',', '.') }}
                                        </div>
                                    @endif

                                    <p class="produk-card-desc">{{ Str::limit($product->deskripsi, 100) }}</p>
                                </div>
                            </div>

                            <!-- Tombol Aksi di Bawah Card -->
                            <div class="produk-card-footer">
                                <a href="{{ url('/produk/' . $product->id) }}" class="btn-produk-detail">
                                    Lihat Penawaran <span aria-hidden="true">→</span>
                                </a>
                            </div>
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