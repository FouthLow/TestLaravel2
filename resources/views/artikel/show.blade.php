<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detail Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if ($product->image)
                        <div class="mb-6 flex justify-center">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="max-h-96 rounded-lg shadow-md border border-gray-200 object-cover">
                        </div>
                    @else
                        <div class="mb-6 flex justify-center">
                            <div class="h-64 w-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                <span class="text-sm text-gray-400">Tidak Ada Gambar</span>
                            </div>
                        </div>
                    @endif

                    <div class="mb-4">
                        <span class="block text-xs font-semibold text-gray-500 uppercase">Nama Produk</span>
                        <p class="text-lg font-medium text-gray-900">{{ $product->name }}</p>
                    </div>

                    <div class="mb-4">
                        <span class="block text-xs font-semibold text-gray-500 uppercase">Harga</span>
                        <p class="text-lg font-medium text-gray-900">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                    </div>

                    <div class="mb-4">
                        <span class="block text-xs font-semibold text-gray-500 uppercase">Deskripsi</span>
                        <p class="text-sm text-gray-700">{{ $product->description ?? 'Tidak ada deskripsi.' }}</p>
                    </div>

                    <div class="flex items-center justify-start mt-6">
                        <a href="{{ route('products.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Kembali
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
</html>