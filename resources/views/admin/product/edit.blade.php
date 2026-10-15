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
        <h2>Edit Produk</h2>
    </x-slot>

    <div class="admin-card product-form-container">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group product-form-group">
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $product->nama) }}" required>
                @error('nama') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group product-form-group">
                <label for="harga">Harga (Rp)</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}" required>
                @error('harga') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group product-form-group">
                <label for="image">Gambar Produk</label>
                @if ($product->image)
                    <div class="product-preview-wrap">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Preview" class="table-img">
                    </div>
                @endif
                <input type="file" name="image" id="image" class="product-file-input">
                @error('image') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-group product-form-group-last">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $product->deskripsi) }}</textarea>
                @error('deskripsi') <span class="error-text">{{ $message }}</span> @enderror
            </div>

            <div class="form-actions">
                <a href="{{ route('products.index') }}" class="btn-secondary product-btn-cancel">Batal</a>
                <button type="submit" class="btn-primary product-btn-submit">Perbarui Produk</button>
            </div>
        </form>
    </div>
</x-app-layout>
</html>