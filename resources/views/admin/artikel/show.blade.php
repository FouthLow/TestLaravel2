<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Artikel | Admin PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="artikel-detail-header">
                <h2>Detail Artikel</h2>
                <a href="{{ route('artikels.index') }}" class="btn-back">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span>Kembali ke Daftar Artikel</span>
                </a>
            </div>
        </x-slot>

        <div class="admin-card product-form-container artikel-detail-card">
            @if ($artikel->image)
                <div class="artikel-image-wrapper">
                    <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="product-detail-img">
                </div>
            @else
                <div class="product-detail-placeholder">
                    <span class="material-symbols-outlined">image</span>
                    <p>Tidak Ada Gambar</p>
                </div>
            @endif

            <div class="artikel-detail-content">
                <div class="detail-field-group">
                    <span class="field-label">Judul Artikel</span>
                    <h1 class="artikel-title-text">{{ $artikel->judul }}</h1>
                </div>

                <div class="detail-field-group">
                    <span class="field-label">Deskripsi / Isi Artikel</span>
                    <div class="artikel-body-text">
                        {{ $artikel->deskripsi ?? 'Tidak ada deskripsi.' }}
                    </div>
                </div>
            </div>

            <div class="artikel-detail-footer">
                <a href="{{ route('artikels.index') }}" class="btn-back">
                    <span class="material-symbols-outlined">arrow_back</span>
                    <span>Kembali ke Daftar Artikel</span>
                </a>
            </div>
        </div>
    </x-app-layout>
</body>
</html>