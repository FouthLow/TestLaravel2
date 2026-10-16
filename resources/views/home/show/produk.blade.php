<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="{{ Str::limit(strip_tags($product->deskripsi), 150) }}">
    <title>{{ $product->nama }} | PT Solusi Koneksi Anda</title>
    <!-- Vite memuat CSS global, CSS khusus detail produk, dan JS -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="product-detail-section">
            <div class="section-container">
                
                <!-- Tombol Navigasi Kembali -->
                <div class="product-back-nav">
                    <a href="{{ url('/produk') }}" class="btn-back-link">
                        <span aria-hidden="true">←</span> Kembali ke Katalog Produk & Layanan
                    </a>
                </div>

                <!-- Card Utama Penawaran Produk -->
                <div class="product-showcase-card">
                    
                    <!-- Kolom Gambar Visual -->
                    <div class="product-visual-col">
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="product-featured-img">
                        @else
                            <div class="product-no-img-box">
                                <span class="product-placeholder-icon">🌐</span>
                                <span>Solusi & Layanan SKA</span>
                            </div>
                        @endif
                    </div>

                    <!-- Kolom Rincian & Penawaran -->
                    <div class="product-info-col">
                        <div>
                            <span class="product-badge">Layanan & Produk Resmi</span>
                            <h1 class="product-main-title">{{ $product->nama }}</h1>
                            
                            @if(isset($product->harga))
                                <div class="product-price-box">
                                    <div class="product-price-label">Estimasi / Harga Investasi</div>
                                    <div class="product-price-value">
                                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                                    </div>
                                </div>
                            @endif

                            <div class="product-specs-wrapper">
                                <div class="product-specs-title">Deskripsi & Cakupan Layanan</div>
                                <div class="product-specs-content">
                                    {{ $product->deskripsi }}
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Aksi / Pemesanan -->
                        <div class="product-cta-actions">
                            <a href="{{ url('/contact') }}" class="btn-order-primary">
                                Konsultasikan & Pesan Layanan <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section>

    @include('layouts.home.footer')

</body>
</html>