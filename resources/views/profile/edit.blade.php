<x-app-layout>
    <x-slot name="header">
        <h2>Pengaturan Akun</h2>
    </x-slot>

    <div style="display: grid; gap: 24px;">
        <!-- Form Update Informasi Profil -->
        <div class="admin-card">
            <div class="profile-section-title">
                <h3>Informasi Profil</h3>
                <p>Perbarui nama akun dan alamat email Anda.</p>
            </div>
            <div style="max-width: 600px;">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        <!-- Form Update Password -->
        <div class="admin-card">
            <div class="profile-section-title">
                <h3>Ubah Password</h3>
                <p>Pastikan akun Anda menggunakan password yang panjang dan acak agar tetap aman.</p>
            </div>
            <div style="max-width: 600px;">
                @include('profile.partials.update-password-form')
            </div>
        </div>

        <!-- Form Hapus Akun -->
        <div class="admin-card" style="border-color: #ffd1d1; background: #fffcfc;">
            <div class="profile-section-title">
                <h3 style="color: #c53030;">Hapus Akun</h3>
                <p>Setelah akun dihapus, semua sumber daya dan data akan dihapus secara permanen.</p>
            </div>
            <div style="max-width: 600px;">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>