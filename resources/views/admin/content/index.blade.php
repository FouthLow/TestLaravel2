<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola & Preview Beranda | Admin PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="product-header-row">
                <h2>Kelola & Preview Beranda</h2>
            </div>
        </x-slot>

        <div class="editor-wrapper">
            <!-- SISI KIRI: Form Input Edit -->
            <div class="editor-sidebar home-preview-form-card">
                <div class="editor-sidebar-header">
                    <h2>Form Pengaturan Konten</h2>
                    <p>Ubah teks dan gambar di bawah ini, preview akan langsung memperbarui secara real-time tanpa perlu tag HTML.</p>
                </div>

                @if (session('berhasil'))
                    <div class="alert-success product-alert" style="margin-bottom: 16px; padding: 10px; background: #dcfce7; color: #15803d; border-radius: 6px; font-size: 13px;">
                        ✓ {{ session('berhasil') }}
                    </div>
                @endif

                <form action="{{ route('home-contents.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Banner Background Hero -->
                    <div class="editor-form-group">
                        <label for="input_hero_banner">Banner Background Hero</label>
                        <input type="file" name="hero_banner" id="input_hero_banner" accept="image/*" class="product-file-input">
                        @error('hero_banner') <span class="error-text">{{ $message }}</span> @enderror
                    </div>

                    <!-- Eyebrow Hero -->
                    <div class="editor-form-group">
                        <label for="input_hero_eyebrow">Eyebrow Hero</label>
                        <input type="text" name="hero_eyebrow" id="input_hero_eyebrow" value="{{ old('hero_eyebrow', $contents['hero_eyebrow'] ?? 'Koneksi untuk berkembang') }}">
                    </div>

                    <!-- Judul Hero (Baris 1 - Putih) -->
                    <div class="editor-form-group">
                        <label for="input_hero_title_main">Judul Hero (Baris 1 - Teks Utama)</label>
                        <input type="text" name="hero_title_main" id="input_hero_title_main" value="{{ old('hero_title_main', $contents['hero_title_main'] ?? 'Koneksi yang kuat.') }}" required>
                    </div>

                    <!-- Judul Hero (Baris 2 - Highlight Biru) -->
                    <div class="editor-form-group">
                        <label for="input_hero_title_highlight">Judul Hero (Baris 2 - Teks Biru)</label>
                        <input type="text" name="hero_title_highlight" id="input_hero_title_highlight" value="{{ old('hero_title_highlight', $contents['hero_title_highlight'] ?? 'Bisnis melaju.') }}">
                    </div>

                    <!-- Deskripsi Hero -->
                    <div class="editor-form-group">
                        <label for="input_hero_desc">Deskripsi Hero</label>
                        <textarea name="hero_desc" id="input_hero_desc" rows="3">{{ old('hero_desc', $contents['hero_desc'] ?? 'Infrastruktur internet dan teknologi yang dirancang untuk membantu bisnis tetap terhubung...') }}</textarea>
                    </div>

                    <!-- Judul Tentang Kami (Teks Utama) -->
                    <div class="editor-form-group">
                        <label for="input_about_title_main">Judul Tentang Kami (Teks Utama)</label>
                        <input type="text" name="about_title_main" id="input_about_title_main" value="{{ old('about_title_main', $contents['about_title_main'] ?? 'Teknologi yang bekerja untuk') }}">
                    </div>

                    <!-- Judul Tentang Kami (Teks Highlight Biru) -->
                    <div class="editor-form-group">
                        <label for="input_about_title_highlight">Judul Tentang Kami (Teks Biru)</label>
                        <input type="text" name="about_title_highlight" id="input_about_title_highlight" value="{{ old('about_title_highlight', $contents['about_title_highlight'] ?? 'kemajuan Anda.') }}">
                    </div>

                    <!-- Deskripsi Tentang Kami -->
                    <div class="editor-form-group">
                        <label for="input_about_desc">Deskripsi Tentang Kami</label>
                        <textarea name="about_desc" id="input_about_desc" rows="3">{{ old('about_desc', $contents['about_desc'] ?? 'PT Solusi Koneksi Anda berfokus pada solusi konektivitas dan infrastruktur digital...') }}</textarea>
                    </div>

                    <!-- Fitur Unggulan 1 -->
                    <div class="editor-form-group" style="margin-top: 20px; padding-top: 16px; border-top: 1px dashed #cbd5e1;">
                        <label>Fitur Unggulan 1</label>
                        <input type="text" name="feature_1_title" id="input_feature_1_title" value="{{ old('feature_1_title', $contents['feature_1_title'] ?? 'Infrastruktur andal') }}" placeholder="Judul Fitur" style="margin-bottom: 8px;">
                        <input type="text" name="feature_1_desc" id="input_feature_1_desc" value="{{ old('feature_1_desc', $contents['feature_1_desc'] ?? 'Dirancang sesuai kebutuhan operasional.') }}" placeholder="Sub Deskripsi">
                    </div>

                    <!-- Fitur Unggulan 2 -->
                    <div class="editor-form-group">
                        <label>Fitur Unggulan 2</label>
                        <input type="text" name="feature_2_title" id="input_feature_2_title" value="{{ old('feature_2_title', $contents['feature_2_title'] ?? 'Solusi fleksibel') }}" placeholder="Judul Fitur" style="margin-bottom: 8px;">
                        <input type="text" name="feature_2_desc" id="input_feature_2_desc" value="{{ old('feature_2_desc', $contents['feature_2_desc'] ?? 'Dapat disesuaikan dengan skala bisnis.') }}" placeholder="Sub Deskripsi">
                    </div>

                    <!-- Fitur Unggulan 3 -->
                    <div class="editor-form-group" style="margin-bottom: 0;">
                        <label>Fitur Unggulan 3</label>
                        <input type="text" name="feature_3_title" id="input_feature_3_title" value="{{ old('feature_3_title', $contents['feature_3_title'] ?? 'Dukungan teknis') }}" placeholder="Judul Fitur" style="margin-bottom: 8px;">
                        <input type="text" name="feature_3_desc" id="input_feature_3_desc" value="{{ old('feature_3_desc', $contents['feature_3_desc'] ?? 'Mendukung kelancaran penggunaan layanan.') }}" placeholder="Sub Deskripsi">
                    </div>

                    <div class="form-actions" style="margin-top: 24px;">
                        <button type="submit" class="btn-primary product-btn-submit" style="width: 100%;">Simpan Perubahan</button>
                    </div>
                </form>
            </div>

            <!-- SISI KANAN: Kotak Live Preview -->
            <div class="editor-preview-canvas">
                <div class="preview-bar">
                    <span>LIVE PREVIEW - HALAMAN UTAMA</span>
                    <span class="preview-badge">Real-Time</span>
                </div>

                <div class="preview-content">
                    <!-- Simulasi Hero Section -->
                    @php
                        $heroBanner = !empty($contents['hero_banner']) ? asset('storage/' . $contents['hero_banner']) : asset('storage/images/hero.jpg');
                    @endphp
                    <section class="home-hero" id="preview_hero_bg" style="background: linear-gradient(rgba(13, 40, 85, 0.85), rgba(16, 35, 63, 0.9)), url('{{ $heroBanner }}'); background-size: cover; background-position: center;">
                        <div class="home-hero-container" style="padding: 0;">
                            <div class="hero-copy" style="max-width: 100%;">
                                <span class="hero-eyebrow"><span class="eyebrow-dot"></span> <span id="preview_hero_eyebrow">{{ $contents['hero_eyebrow'] ?? 'Koneksi untuk berkembang' }}</span></span>
                                <h1 class="home-hero-title">
                                    <span id="preview_hero_title_main" style="color: #ffffff !important;">{{ $contents['hero_title_main'] ?? 'Koneksi yang kuat.' }}</span><br>
                                    <span id="preview_hero_title_highlight" style="color: #60a5fa !important;">{{ $contents['hero_title_highlight'] ?? 'Bisnis melaju.' }}</span>
                                </h1>
                                <p class="home-hero-desc" id="preview_hero_desc">{{ $contents['hero_desc'] ?? 'Infrastruktur internet dan teknologi yang dirancang untuk membantu bisnis tetap terhubung.' }}</p>
                            </div>
                        </div>
                    </section>

                    <!-- Simulasi About Section -->
                    <section class="about-section" style="border-top: 1px solid #e2e8f0;">
                        <div class="section-container about-container" style="padding: 0; display: block;">
                            <div class="about-intro" style="margin-bottom: 16px;">
                                <span class="section-eyebrow">TENTANG KAMI</span>
                                <h2 class="section-title">
                                    <span id="preview_about_title_main" style="color: #10233f !important;">{{ $contents['about_title_main'] ?? 'Teknologi yang bekerja untuk' }}</span> 
                                    <span id="preview_about_title_highlight" style="color: #2563eb !important;">{{ $contents['about_title_highlight'] ?? 'kemajuan Anda.' }}</span>
                                </h2>
                            </div>
                            <div class="about-detail">
                                <p class="section-desc" id="preview_about_desc" style="margin-bottom: 20px;">{{ $contents['about_desc'] ?? 'PT Solusi Koneksi Anda berfokus pada solusi konektivitas dan infrastruktur digital...' }}</p>
                                
                                <ul class="feature-list" style="list-style: none; padding: 0; margin: 0;">
                                    <li class="feature-item" style="display: flex; gap: 12px; margin-bottom: 12px; align-items: flex-start;">
                                        <span class="feature-check" style="color: #2563eb; font-weight: bold;">✓</span>
                                        <span>
                                            <strong id="preview_feature_1_title" style="display: block; color: #10233f; font-size: 13px;">{{ $contents['feature_1_title'] ?? 'Infrastruktur andal' }}</strong>
                                            <small id="preview_feature_1_desc" style="color: #687991; font-size: 11px;">{{ $contents['feature_1_desc'] ?? 'Dirancang sesuai kebutuhan operasional.' }}</small>
                                        </span>
                                    </li>
                                    <li class="feature-item" style="display: flex; gap: 12px; margin-bottom: 12px; align-items: flex-start;">
                                        <span class="feature-check" style="color: #2563eb; font-weight: bold;">✓</span>
                                        <span>
                                            <strong id="preview_feature_2_title" style="display: block; color: #10233f; font-size: 13px;">{{ $contents['feature_2_title'] ?? 'Solusi fleksibel' }}</strong>
                                            <small id="preview_feature_2_desc" style="color: #687991; font-size: 11px;">{{ $contents['feature_2_desc'] ?? 'Dapat disesuaikan dengan skala bisnis.' }}</small>
                                        </span>
                                    </li>
                                    <li class="feature-item" style="display: flex; gap: 12px; align-items: flex-start;">
                                        <span class="feature-check" style="color: #2563eb; font-weight: bold;">✓</span>
                                        <span>
                                            <strong id="preview_feature_3_title" style="display: block; color: #10233f; font-size: 13px;">{{ $contents['feature_3_title'] ?? 'Dukungan teknis' }}</strong>
                                            <small id="preview_feature_3_desc" style="color: #687991; font-size: 11px;">{{ $contents['feature_3_desc'] ?? 'Mendukung kelancaran penggunaan layanan.' }}</small>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>