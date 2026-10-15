<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Artikel | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2>Tambah Artikel Baru</h2>
        </x-slot>

        <!-- Menggunakan class product-form-container agar ukurannya sama persis dengan galeri -->
        <div class="admin-card product-form-container">
            <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group product-form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" placeholder="Masukkan judul artikel" required>
                    @error('judul') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group">
                    <label for="image">Gambar Artikel</label>
                    <input type="file" name="image" id="image" class="product-file-input" required>
                    @error('image') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group-last">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4" placeholder="Tuliskan isi atau deskripsi artikel...">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('artikels.index') }}" class="btn-secondary product-btn-cancel">Batal</a>
                    <button type="submit" class="btn-primary product-btn-submit">Simpan Artikel</button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>