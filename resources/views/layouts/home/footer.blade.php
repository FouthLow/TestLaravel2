@vite(['resources/css/app.css', 'resources/js/app.js'])
   
<footer id="contact" class="site-footer">
    <div class="section-container footer-container">
        <div class="footer-main">
            <a href="{{ url('/') }}" class="brand-logo footer-logo">
                 <span class="brand-icon" aria-hidden="true"><span>S</span></span>
                   <span class="brand-copy"><span class="brand-title">Solusi Koneksi Anda</span><span class="brand-subtitle">Internet · Network · Technology</span></span>
             </a>
            <p class="footer-description">Solusi konektivitas, infrastruktur jaringan, dan teknologi untuk kebutuhan bisnis yang terus berkembang.</p>
         </div>
        <div>
            <h3 class="footer-title">Navigasi</h3>
            <ul class="footer-links">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li><a href="{{ url('/produk') }}">Produk & Layanan</a></li>
                <li><a href="{{ url('/artikel') }}">Artikel & Berita</a></li>
                <li><a href="{{ url('/galeri')  }}">Galeri</a></li>
            </ul>
        </div>
        <div>
            <h3 class="footer-title">Informasi Kantor</h3>
            <p class="footer-contact-name">PT Edukasi4id</p>
                <p class="footer-address">Jl. Raya Pajajaran No. 88 F<br>Kota Bogor 16153</p>
                <a class="footer-contact-link" href="{{  url('/contact')  }}">Hubungi perusahaan <span aria-hidden="true">↗</span></a>
        </div>
    </div>
    <div class="section-container footer-bottom"><span>© {{ date('Y') }} PT Solusi Koneksi Anda.</span><span>Terhubung untuk masa depan.</span></div>
</footer>