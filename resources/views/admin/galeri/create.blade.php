<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Galeri | Admin PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2>Tambah Galeri Baru</h2>
        </x-slot>

        <div class="admin-card product-form-container">
            <form action="{{ route('galeris.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group product-form-group">
                    <label for="judul">Judul Galeri</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul') }}" placeholder="Masukkan judul galeri" required>
                    @error('judul') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group">
                    <label for="image">Gambar Galeri</label>
                    <input type="file" name="image" id="image" class="product-file-input" required>
                    @error('image') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group-last">
                    <label for="deksripsi">Deskripsi</label>
                    <textarea name="deksripsi" id="deksripsi" rows="4" placeholder="Tuliskan deskripsi galeri...">{{ old('deksripsi') }}</textarea>
                    @error('deksripsi') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('galeris.index') }}" class="btn-secondary product-btn-cancel">Batal</a>
                    <button type="submit" class="btn-primary product-btn-submit">Simpan Galeri</button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>