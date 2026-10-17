<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pesan Masuk | Admin Dashboard PT Solusi Koneksi Anda</title>
    <!-- Memuat file CSS utama, CSS khusus admin contact, dan JS melalui Vite -->
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="product-header-row">
                <h2>Daftar Pesan Masuk</h2>
            </div>
        </x-slot>

        <div class="admin-card">
            <!-- Notifikasi Berhasil -->
            @if(session('berhasil'))
                <div class="alert-success product-alert">
                    ✓ {{ session('berhasil') }}
                </div>
            @endif

            <!-- Tabel Daftar Pesan -->
            <div class="admin-table-wrapper">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th class="col-no">No</th>
                            <th>Pengirim</th>
                            <th>Informasi Kontak</th>
                            <th>Isi Pesan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $index => $contact)
                            <tr>
                                <td class="col-no">{{ $contacts->firstItem() ? $contacts->firstItem() + $index : $index + 1 }}</td>
                                <td class="col-name">
                                    <strong>{{ $contact->name }}</strong>
                                    <br>
                                    <span class="text-muted">{{ $contact->created_at->format('d M Y, H:i') }}</span>
                                </td>
                                <td>
                                    <div><strong>{{ $contact->email }}</strong></div>
                                    <div class="text-muted">{{ $contact->phone ?? 'Tidak ada nomor telepon' }}</div>
                                </td>
                                <td>
                                    <div class="message-preview">{{ Str::limit($contact->message, 80) }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="table-actions">
                                        <a href="{{ route('contacts.show', $contact->id) }}" class="action-link-detail">
                                            Detail
                                        </a>
                                        
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="action-btn-delete">
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="empty-row">
                                    Belum ada pesan masuk dari pengunjung saat ini.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Navigasi Pagination -->
            <div style="margin-top: 24px; display: flex; justify-content: center;">
                {{ $contacts->links() }}
            </div>
        </div>
    </x-app-layout>
</body>
</html>