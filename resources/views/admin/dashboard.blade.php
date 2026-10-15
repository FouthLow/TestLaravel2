<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin | PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS utama dan CSS khusus dashboard admin -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2>Dashboard Utama</h2>
        </x-slot>

        <!-- Welcome Banner -->
        <div class="admin-welcome-card">
            <h1 class="admin-welcome-title">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}! 👋</h1>
            <p class="admin-welcome-desc">Kelola produk, galeri dokumentasi, serta publikasi artikel perusahaan dengan mudah melalui panel admin terpadu PT Solusi Koneksi Anda.</p>
        </div>

        <!-- Stats Cards Overview -->
        <div class="admin-stats-grid">
            <div class="admin-stat-card">
                <div class="admin-info-wrap">
                    <div class="admin-stat-info">
                        <span>Total Produk</span>
                        <h3>{{ \App\Models\Product::count() }}</h3>
                    </div>
                </div>
                <div class="admin-stat-icon icon-product">📦</div>
            </div>

            <div class="admin-stat-card">
                <div class="admin-info-wrap">
                    <div class="admin-stat-info">
                        <span>Total Galeri</span>
                        <h3>{{ \App\Models\Galeri::count() }}</h3>
                    </div>
                </div>
                <div class="admin-stat-icon icon-gallery">🖼️</div>
            </div>

            <div class="admin-stat-card">
                <div class="admin-info-wrap">
                    <div class="admin-stat-info">
                        <span>Total Artikel</span>
                        <h3>{{ \App\Models\Artikel::count() }}</h3>
                    </div>
                </div>
                <div class="admin-stat-icon icon-article">📰</div>
            </div>
        </div>

        <!-- Recent Sections Grid (Ringkasan Data Terbaru) -->
        <div class="admin-grid-section">
            
            <!-- Recent Produk -->
            <div class="admin-section-box">
                <div class="admin-section-header">
                    <h3 class="admin-section-title">Produk Terbaru</h3>
                    <a href="{{ route('products.index') }}" class="admin-section-link">Kelola →</a>
                </div>
                <div class="admin-mini-list">
                    @forelse(\App\Models\Product::latest()->take(4)->get() as $product)
                        <div class="admin-mini-item">
                            <div class="admin-mini-meta">
                                @if($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="admin-mini-thumb">
                                @else
                                    <div class="admin-mini-thumb-placeholder">PROD</div>
                                @endif
                                <a href="{{ route('products.show', $product->id) }}" class="admin-mini-name">{{ $product->nama }}</a>
                            </div>
                            <span class="admin-mini-date">{{ $product->created_at->format('d M Y') }}</span>
                        </div>
                    @empty
                        <div class="admin-empty-mini">Belum ada data produk.</div>
                    @endforelse
                </div>
            </div>

            <!-- Recent Artikel -->
            <div class="admin-section-box">
                <div class="admin-section-header">
                    <h3 class="admin-section-title">Artikel Terbaru</h3>
                    <a href="{{ route('artikels.index') }}" class="admin-section-link">Kelola →</a>
                </div>
                <div class="admin-mini-list">
                    @forelse(\App\Models\Artikel::latest()->take(4)->get() as $artikel)
                        <div class="admin-mini-item">
                            <div class="admin-mini-meta">
                                @if($artikel->image)
                                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="admin-mini-thumb">
                                @else
                                    <div class="admin-mini-thumb-placeholder">ART</div>
                                @endif
                                <a href="{{ route('artikels.show', $artikel->id) }}" class="admin-mini-name">{{ $artikel->judul }}</a>
                            </div>
                            <span class="admin-mini-date">{{ $artikel->created_at->format('d M Y') }}</span>
                        </div>
                    @empty
                        <div class="admin-empty-mini">Belum ada data artikel.</div>
                    @endforelse
                </div>
            </div>

        </div>

    </x-app-layout>
</body>
</html>