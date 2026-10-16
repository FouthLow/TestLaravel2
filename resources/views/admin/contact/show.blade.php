<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pesan | Admin Dashboard PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <div class="product-header-row">
                <h2>Detail Pesan Masuk</h2>
                <a href="{{ route('contacts.index') }}" class="action-link-detail" style="padding: 10px 16px; font-size: 12px; text-decoration: none;">
                    ← Kembali ke Daftar
                </a>
            </div>
        </x-slot>

        <div class="admin-card admin-show-container">
            <div style="display: grid; gap: 24px;">
                
                <!-- Info Pengirim & Waktu -->
                <div class="admin-show-header">
                    <div>
                        <span class="admin-show-label">Nama Pengirim</span>
                        <h3 class="admin-sender-name">{{ $contact->name }}</h3>
                    </div>
                    <div style="text-align: right;">
                        <span class="admin-show-label">Waktu Kirim</span>
                        <span class="admin-time-badge">{{ $contact->created_at->format('d M Y, H:i') }}</span>
                    </div>
                </div>

                <!-- Informasi Kontak -->
                <div class="admin-info-grid">
                    <div>
                        <span class="admin-show-label">Alamat Email</span>
                        <a href="mailto:{{ $contact->email }}" class="admin-email-link">{{ $contact->email }}</a>
                    </div>
                    <div>
                        <span class="admin-show-label">Nomor Telepon / WhatsApp</span>
                        <span class="admin-phone-text">{{ $contact->phone ?? 'Tidak diisi' }}</span>
                    </div>
                </div>

                <!-- Isi Pesan -->
                <div>
                    <span class="admin-show-label" style="margin-bottom: 8px;">Isi Pesan / Kebutuhan</span>
                    <div class="admin-message-box">
                        {{ $contact->message }}
                    </div>
                </div>

                <!-- Tombol Hapus -->
                <div class="admin-show-footer">
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn-delete" style="padding: 10px 18px; font-size: 12px;">
                            Hapus Pesan Ini
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </x-app-layout>
</body>
</html>