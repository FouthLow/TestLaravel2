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
        <div class="galeri-header-row">
            <h2>Daftar Galeri</h2>
            <a href="{{ route('galeris.create') }}" class="btn-primary">
                + Tambah Galeri
            </a>
        </div>
    </x-slot>

    <div class="admin-card">
        @if (session('success'))
            <div class="alert-success galeri-alert">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul Galeri</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($galeris as $index => $galeri)
                        <tr>
                            <td class="col-no">{{ $index + 1 }}</td>
                            <td>
                                @if ($galeri->image)
                                    <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->judul }}" class="table-img">
                                @else
                                    <div class="table-img-placeholder">IMG</div>
                                @endif
                            </td>
                            <td class="col-name">{{ $galeri->judul }}</td>
                            <td class="col-price">{{ Str::limit($galeri->deksripsi, 50) ?? '-' }}</td>
                            <td class="text-center">
                                <div class="table-actions">
                                    <a href="{{ route('galeris.show', $galeri->id) }}" class="action-link-detail">Detail</a>
                                    <a href="{{ route('galeris.edit', $galeri->id) }}" class="action-link-edit">Edit</a>
                                    <form action="{{ route('galeris.destroy', $galeri->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus galeri ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn-delete">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="empty-row">Belum ada data galeri tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
</body>
</html>