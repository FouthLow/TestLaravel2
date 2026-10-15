<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
    <x-slot name="header">
        <h2>Detail Produk</h2>
    </x-slot>

    <div class="admin-card product-form-container">
        @if ($product->image)
            <div style="margin-bottom: 24px; text-align: center;">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama }}" class="product-detail-img">
            </div>
        @else
            <div style="margin-bottom: 24px;" class="product-detail-placeholder">
                Tidak Ada Gambar
            </div>
        @endif

        <div style="display: grid; gap: 16px;">
            <div>
                <span style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #8c9bb0; letter-spacing: 0.1em;">Nama Produk</span>
                <p style="margin: 4px 0 0; font-size: 16px; font-weight: 800; color: #10233f;">{{ $product->nama }}</p>
            </div>

            <div>
                <span style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #8c9bb0; letter-spacing: 0.1em;">Harga</span>
                <p style="margin: 4px 0 0; font-size: 15px; font-weight: 750; color: var(--blue);">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
            </div>

            <div>
                <span style="font-size: 10px; font-weight: 800; text-transform: uppercase; color: #8c9bb0; letter-spacing: 0.1em;">Deskripsi</span>
                <p style="margin: 4px 0 0; font-size: 13px; color: #687991; line-height: 1.7;">{{ $product->deskripsi ?? 'Tidak ada deskripsi.' }}</p>
            </div>
        </div>

        <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid #edf2f8;">
            <a href="{{ route('products.index') }}" class="btn-secondary" style="display: inline-flex; align-items: center;">
                ← Kembali ke Daftar Produk
            </a>
        </div>
    </div>
</x-app-layout>
</body>
</html>