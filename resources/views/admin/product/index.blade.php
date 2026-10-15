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
        <div class="product-header-row">
            <h2>Daftar Produk</h2>
            <a href="{{ route('products.create') }}" class="btn-primary">
                + Tambah Produk
            </a>
        </div>
    </x-slot>

    <div class="admin-card">
        @if (session('success'))
            <div class="alert-success product-alert">
                ✓ {{ session('success') }}
            </div>
        @endif

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $index => $product)
                        <tr>
                            <td class="col-no">{{ $index + 1 }}</td>
                            <td>
                                @if ($product->image)
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name ?? $product->nama }}" class="table-img">
                                @else
                                    <div class="table-img-placeholder">IMG</div>
                                @endif
                            </td>
                            <td class="col-name">{{ $product->name ?? $product->nama }}</td>
                            <td class="col-price">Rp {{ number_format($product->price ?? $product->harga, 0, ',', '.') }}</td>
                            <td class="text-center">
                                <div class="table-actions">
                                    <a href="{{ route('products.show', $product->id) }}" class="action-link-detail">Detail</a>
                                    <a href="{{ route('products.edit', $product->id) }}" class="action-link-edit">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn-delete">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="empty-row">Belum ada data produk tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
</body>
</html>