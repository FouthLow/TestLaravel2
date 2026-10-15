<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Hubungi PT Solusi Koneksi Anda untuk konsultasi layanan internet, infrastruktur jaringan, dan solusi teknologi bisnis.">
    <title>Hubungi Kami | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css', 'resources/css/contact.css', 'resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="contact-hero">
            <div class="contact-hero-glow contact-glow-one" aria-hidden="true"></div>
            <div class="contact-hero-glow contact-glow-two" aria-hidden="true"></div>
            <div class="section-container contact-hero-container">
                <div class="hero-copy">
                    <span class="section-eyebrow"><span class="eyebrow-dot"></span> Layanan & Dukungan</span>
                    <h1 class="contact-hero-title">Mari Terhubung dengan <span>Tim Kami</span></h1>
                    <p class="contact-hero-desc">Punya pertanyaan seputar layanan internet, infrastruktur jaringan, atau kerja sama bisnis? Kirimkan pesan atau kunjungi kantor kami.</p>
                </div>
            </div>
            <div class="hero-bottom-line" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        </section>

        <section class="contact-main-section" id="contact">
            <div class="section-container">
                <div class="contact-grid">
                    <!-- Informasi Kontak & Alamat -->
                    <div class="contact-info-card">
                        <span class="section-eyebrow">INFORMASI KANTOR</span>
                        <h2 class="contact-section-title">Kantor Pusat</h2>
                        <p class="contact-desc">Silakan hubungi atau kunjungi kantor kami untuk konsultasi langsung mengenai solusi teknologi dan kebutuhan bisnis Anda.</p>
                        
                        <div class="contact-details-list">
                            <div class="contact-detail-item">
                                <div class="contact-icon-wrap">🏢</div>
                                <div>
                                    <strong>PT Edukasi4id / PT Solusi Koneksi Anda</strong>
                                    <p>Jl. Raya Pajajaran No. 88 F<br>Kota Bogor 16153, Jawa Barat</p>
                                </div>
                            </div>
                            <div class="contact-detail-item">
                                <div class="contact-icon-wrap">📞</div>
                                <div>
                                    <strong>Telepon / WhatsApp</strong>
                                    <p>+62 8xx-xxxx-xxxx</p>
                                </div>
                            </div>
                            <div class="contact-detail-item">
                                <div class="contact-icon-wrap">✉️</div>
                                <div>
                                    <strong>Email Resmi</strong>
                                    <p>info@solusikoneksianda.co.id</p>
                                </div>
                            </div>
                        </div>

                        <!-- Peta / Map Embed -->
                        <div class="contact-map-wrap">
                            <iframe 
                                title="Lokasi PT Solusi Koneksi Anda"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3541818274197!2d106.8123!3d-6.5971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzUnsetIntOSi4zIj4!5e0!3m2!1sid!2sid!4v1600000000000!5m2!1sid!2sid" 
                                width="100%" 
                                height="180" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>

                    <!-- Formulir Pesan (Statis) -->
                    <div class="contact-form-card">
                        <span class="section-eyebrow">KIRIM PESAN</span>
                        <h2 class="contact-section-title">Diskusikan Kebutuhan Anda</h2>
                        <p class="contact-desc">Isi formulir di bawah ini dan tim kami akan segera merespons pesan Anda.</p>

                        <!-- Simulasi Alert Berhasil (opsional, bisa dihapus atau di-comment jika belum dipakai) -->
                        <!-- 
                        <div class="alert-success">
                            ✓ Pesan Anda berhasil dikirim! Terima kasih telah menghubungi kami.
                        </div> 
                        -->

                        <form action="javascript:void(0);" method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" id="email" name="email" placeholder="nama@domain.com" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Nomor Telepon / WhatsApp</label>
                                <input type="text" id="phone" name="phone" placeholder="08xxxxxxxxxx">
                            </div>

                            <div class="form-group">
                                <label for="message">Pesan / Kebutuhan</label>
                                <textarea id="message" name="message" rows="4" placeholder="Tuliskan detail kebutuhan atau pertanyaan Anda..." required></textarea>
                            </div>

                            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; cursor: pointer;">
                                Kirim Pesan Sekarang <span aria-hidden="true">→</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.home.footer')
    
</body>
</html>