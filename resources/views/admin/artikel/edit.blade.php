<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Artikel | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2>Edit Artikel</h2>
        </x-slot>

        <!-- Menggunakan class product-form-container agar ukurannya sama persis dengan galeri -->
        <div class="admin-card product-form-container">
            <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group product-form-group">
                    <label for="judul">Judul Artikel</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $artikel->judul) }}" required>
                    @error('judul') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group">
                    <label for="image">Gambar Artikel</label>
                    @if ($artikel->image)
                        <div class="product-preview-wrap">
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="Preview" class="table-img">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" class="product-file-input">
                    @error('image') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group-last">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi', $artikel->deskripsi) }}</textarea>
                    @error('deskripsi') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('artikels.index') }}" class="btn-secondary product-btn-cancel">Batal</a>
                    <button type="submit" class="btn-primary product-btn-submit">Perbarui Artikel</button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>