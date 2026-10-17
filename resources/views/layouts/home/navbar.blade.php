 @vite(['resources/css/app.css', 'resources/js/app.js'])  
   
<header class="site-header">
    <div class="header-container">
    <a href="{{ url('/') }}" class="brand-logo" aria-label="PT Solusi Koneksi Anda - Beranda">
        <img src="{{ asset('storage/images/Logo.svg') }}" alt="Logo Solusi Koneksi Anda" class="brand-svg-logo">
        <span class="brand-copy">
            <span class="brand-title">Solusi Koneksi Anda</span>
            <span class="brand-subtitle">Internet · Network · Technology</span>
        </span>
    </a>

        <nav class="nav-menu" aria-label="Navigasi utama">
             <a href="{{ url('/') }}" class="nav-link">Beranda</a>
              <a href="{{ url('/produk') }}" class="nav-link">Produk & Layanan</a>
             <a href="{{ url('/artikel') }}" class="nav-link">Artikel</a>
             <a href="{{ url('/galeri') }}" class="nav-link">Galeri</a>
         </nav>

         <a href="{{ url('/contact') }}" class="btn-header">Hubungi Kami <span aria-hidden="true">↗</span></a>
    </div>
 </header>