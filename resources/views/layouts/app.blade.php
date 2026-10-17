<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Dashboard Admin PT Solusi Koneksi Anda">
    <title>Dashboard Admin | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="site-body admin-body">

    <!-- Admin Header / Navbar -->
    @include('layouts.admin.partials.navbar')

    <div class="admin-wrapper">
        <!-- Admin Sidebar -->
        @include('layouts.admin.partials.sidebar')

        <!-- Main Content Area -->
        <main class="admin-main">
            <div class="admin-content-container">
                @slot('header')
                @endslot

                @if(isset($header))
                    <div class="admin-page-header">
                        {{ $header }}
                    </div>
                @endif

                {{ $slot }}
            </div>
        </main>
    </div>

</body>
</html>