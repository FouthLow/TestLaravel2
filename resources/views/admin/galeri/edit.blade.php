<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Galeri | Admin PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2>Edit Galeri</h2>
        </x-slot>

        <div class="admin-card product-form-container">
            <form action="{{ route('galeris.update', $galeri->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group product-form-group">
                    <label for="judul">Judul Galeri</label>
                    <input type="text" name="judul" id="judul" value="{{ old('judul', $galeri->judul) }}" required>
                    @error('judul') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group">
                    <label for="image">Gambar Galeri</label>
                    @if ($galeri->image)
                        <div class="product-preview-wrap">
                            <img src="{{ asset('storage/' . $galeri->image) }}" alt="Preview" class="table-img">
                        </div>
                    @endif
                    <input type="file" name="image" id="image" class="product-file-input">
                    @error('image') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-group product-form-group-last">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="4">{{ old('deskrispi', $galeri->deskripsi) }}</textarea>
                    @error('deskripsi') <span class="error-text">{{ $message }}</span> @enderror
                </div>

                <div class="form-actions">
                    <a href="{{ route('galeris.index') }}" class="btn-secondary product-btn-cancel">Batal</a>
                    <button type="submit" class="btn-primary product-btn-submit">Perbarui Galeri</button>
                </div>
            </form>
        </div>
    </x-app-layout>
</body>
</html>