<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Artikel | Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="artikel-header-row">
                <h2>Daftar Artikel</h2>
                <a href="{{ route('artikels.create') }}" class="btn-primary">
                    + Tambah Artikel
                </a>
            </div>
        </x-slot>

        <div class="admin-card">
            @if (session('success'))
                <div class="alert-success artikel-alert">
                    ✓ {{ session('success') }}
                </div>
            @endif

            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul Artikel</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($artikels as $index => $artikel)
                            <tr>
                                <td class="col-no">{{ $index + 1 }}</td>
                                <td>
                                    @if ($artikel->image)
                                        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->judul }}" class="table-img">
                                    @else
                                        <div class="table-img-placeholder">IMG</div>
                                    @endif
                                </td>
                                <td class="col-name">{{ $artikel->judul }}</td>
                                <td class="col-price">{{ Str::limit($artikel->deskripsi, 50) ?? '-' }}</td>
                                <td class="text-center">
                                    <div class="table-actions">
                                        <a href="{{ route('artikels.show', $artikel->id) }}" class="action-link-detail">Detail</a>
                                        <a href="{{ route('artikels.edit', $artikel->id) }}" class="action-link-edit">Edit</a>
                                        <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus artikel ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn-delete">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="empty-row">Belum ada data artikel tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </x-app-layout>
</body>
</html>