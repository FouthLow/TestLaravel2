<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f8fbff">
    <meta name="description" content="Dokumentasi foto, kegiatan, dan portofolio proyek infrastruktur serta jaringan dari PT Solusi Koneksi Anda.">
    <title>Galeri | PT Solusi Koneksi Anda</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="site-body">

    @include('layouts.home.navbar')

    <main>
        <section class="galeri-hero">
            <div class="galeri-glow galeri-glow-one" aria-hidden="true"></div>
            <div class="galeri-glow galeri-glow-two" aria-hidden="true"></div>
            <div class="section-container galeri-hero-container">
                <div class="hero-copy">
                    <span class="section-eyebrow"><span class="eyebrow-dot"></span> Dokumentasi & Portofolio</span>
                    <h1 class="galeri-hero-title">Galeri <span>Kegiatan & Proyek</span></h1>
                    <p class="galeri-hero-desc">Dokumentasi visual dari berbagai aktivitas, instalasi infrastruktur jaringan, dan pencapaian proyek bersama mitra kami.</p>
                </div>
            </div>
            <div class="hero-bottom-line" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span></div>
        </section>

        <section class="galeri-list-section">
            <div class="section-container">
                <div class="galeri-grid">
                    @forelse($galeris as $galeri)
                        <a href="{{ route('galeri.show', $galeri->id) }}" class="galeri-card-link">
                            <article class="galeri-card">
                                <div class="galeri-card-img-wrap">
                                    @if($galeri->image)
                                        <img src="{{ asset('storage/' . $galeri->image) }}" alt="{{ $galeri->judul ?? 'Galeri PT Solusi Koneksi Anda' }}" class="galeri-card-img" loading="lazy">
                                    @else
                                        <div class="galeri-card-no-img">
                                            <span class="placeholder-symbol">SKA</span>
                                            <span>Dokumentasi Proyek</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="galeri-card-body">
                                    <h3 class="galeri-card-title">{{ $galeri->judul ?? 'Dokumentasi Galeri' }}</h3>
                                    @if(isset($galeri->deskripsi) && $galeri->deskripsi)
                                        <p class="galeri-card-desc">{{ Str::limit($galeri->deskripsi, 90) }}</p>
                                    @endif
                                </div>
                            </article>
                        </a>
                    @empty
                        <div class="article-empty galeri-empty-card" style="grid-column: 1/-1;">
                            <span class="empty-icon">✳</span>
                            <strong>Belum ada dokumentasi galeri</strong>
                            <p>Foto kegiatan dan portofolio proyek akan segera diperbarui di sini.</p>
                        </div>
                    @endforelse
                </div>

                @if(method_exists($galeris, 'links'))
                    <div class="pagination-container">
                        {{ $galeris->links() }}
                    </div>
                @endif
            </div>
        </section>

        <section class="contact-cta">
            <div class="contact-cta-glow" aria-hidden="true"></div>
            <div class="contact-cta-content">
                <span class="section-eyebrow">MULAI TERHUBUNG</span>
                <h2>Ingin melihat bagaimana kami bekerja untuk Anda?</h2>
                <p>Diskusikan kebutuhan teknologi dan infrastruktur jaringan perusahaan Anda bersama kami.</p>
                <a href="{{ url('/contact') }}" class="btn-primary btn-primary-light">Diskusikan Kebutuhan Anda <span aria-hidden="true">→</span></a>
            </div>
        </section>
    </main>

    @include('layouts.home.footer')

</body>
</html>