<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XXFILMS - Landing Page</title>

    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Bootstrap Icons CSS CDN (jika menggunakan ikon bi-*) --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        /* CSS Kustom Anda - SANGAT DISARANKAN untuk memindahkan ini ke file CSS terpisah */
        body {
            background-color: #0A101C;
            color: #E0E0E0;
            font-family: 'Nunito', sans-serif;
        }

        /* Navbar Customization */
        .navbar-custom {
            background-color: #0A101C;
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid #FFC107;
        }

        .navbar-custom .navbar-brand {
            color: #FFC107;
            font-weight: 700;
            font-size: 1.8rem;
        }

        .navbar-custom .navbar-brand i {
            margin-right: 8px;
        }

        .navbar-custom .nav-link {
            color: #FFC107;
            font-weight: 500;
            margin-left: 1rem;
            margin-right: 1rem;
            text-transform: uppercase;
            font-size: 0.9rem;
        }

        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link:focus,
        .navbar-custom .nav-link.active {
            color: #FFFFFF;
        }

        .navbar-custom .navbar-toggler {
            border-color: rgba(255, 193, 7, 0.5);
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 193, 7, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* General Heading Styles */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #FFFFFF;
            font-weight: 700;
        }

        .section-title {
            font-size: 2.2rem;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .section-subtitle {
            color: #adb5bd;
            margin-bottom: 2.5rem;
            font-size: 1.1rem;
        }

        /* Custom Button Styles */
        .btn-custom-order {
            background-color: #FFC107;
            color: #0A101C;
            border-color: #FFC107;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-custom-order:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #0A101C;
        }

        .btn-custom-dark-outline {
            background-color: transparent;
            color: #FFC107;
            border: 2px solid #FFC107;
            font-weight: bold;
            padding: 0.75rem 1.5rem;
            text-transform: uppercase;
        }

        .btn-custom-dark-outline:hover {
            background-color: #FFC107;
            color: #0A101C;
        }

        /* Movie Poster Cards */
        .movie-poster-card {
            background-color: #101827;
            border: 1px solid #1f2937;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 8px;
            overflow: hidden;
        }

        .movie-poster-card img {
            width: 100%;
            aspect-ratio: 2 / 3;
            object-fit: cover;
        }

        .movie-poster-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 193, 7, 0.1);
        }

        /* Hero Section Specifics */
        #hero {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #hero h1 {
            font-size: 2.8rem;
        }

        /* Movie Showcase 2 (Oppenheimer, Meg 2) */
        .showcase-2-poster img {
            border-radius: 8px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            width: 100%;
        }

        /* Icon Bar / Quick Info */
        .icon-bar-item i {
            font-size: 2.5rem;
            color: #FFC107;
            margin-bottom: 0.75rem;
        }

        .icon-bar-item p {
            color: #FFFFFF;
            font-weight: 500;
            margin-bottom: 0;
        }

        /* Featured Movie Section (TRAH) Overlay */
        .featured-movie-poster-container {
            position: relative;
        }

        .featured-movie-poster-container .overlay-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            color: #FFC107;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        .featured-movie-poster-container .overlay-text-views {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(255, 193, 7, 0.8);
            color: #0A101C;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        /* Stats/Counter Section */
        .stats-item i {
            font-size: 2rem;
            color: #FFC107;
            margin-bottom: 0.5rem;
        }

        .stats-item .stat-number {
            font-size: 1.8rem;
            font-weight: bold;
            color: #FFFFFF;
        }

        .stats-item .stat-label {
            color: #adb5bd;
            font-size: 0.9rem;
            text-transform: uppercase;
        }

        /* Movie Carousel Section */
        .movie-carousel-wrapper {
            overflow-x: auto;
            padding-bottom: 1rem;
            white-space: nowrap;
        }

        .movie-carousel-wrapper .movie-item {
            display: inline-block;
            width: 200px;
            margin-right: 1rem;
            vertical-align: top;
            white-space: normal;
        }

        .movie-carousel-wrapper::-webkit-scrollbar {
            height: 8px;
        }

        .movie-carousel-wrapper::-webkit-scrollbar-thumb {
            background: #FFC107;
            border-radius: 4px;
        }

        .movie-carousel-wrapper::-webkit-scrollbar-track {
            background: #101827;
        }

        /* Gallery Row */
        .gallery-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 1rem;
        }

        /* CTA Banner */
        .cta-banner {
            background-color: #101827;
            padding: 3rem 0;
            border-top: 1px solid #FFC107;
            border-bottom: 1px solid #FFC107;
        }

        .cta-banner h2 {
            color: #FFC107;
            font-size: 1.5rem;
            text-transform: uppercase;
        }

        .cta-banner p {
            font-size: 1.8rem;
            font-weight: bold;
        }

        /* Footer */
        #footer-section {
            background-color: #080D16;
            padding: 3rem 0;
            color: #adb5bd;
            font-size: 0.9rem;
        }

        #footer-section .footer-logo {
            color: #FFC107;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        #footer-section .footer-logo i {
            margin-right: 8px;
        }

        #footer-section h5 {
            color: #FFC107;
            font-size: 1rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
            letter-spacing: 0.5px;
        }

        #footer-section ul {
            list-style: none;
            padding-left: 0;
        }

        #footer-section ul li a {
            color: #adb5bd;
            text-decoration: none;
            margin-bottom: 0.5rem;
            display: inline-block;
        }

        #footer-section ul li a:hover {
            color: #FFC107;
        }

        #footer-section .social-icons a {
            color: #adb5bd;
            font-size: 1.5rem;
            margin-right: 1rem;
        }

        #footer-section .social-icons a:hover {
            color: #FFC107;
        }

        #footer-section .copyright {
            border-top: 1px solid #1f2937;
            padding-top: 1.5rem;
            margin-top: 1.5rem;
            font-size: 0.8rem;
            text-align: center;
        }

        /* ... (CSS lain yang sudah ada) ... */

        /* Featured Movie Section (TRAH) - Penyesuaian Baru */
        #featured-trah .section-title {
            /* Lebih spesifik jika perlu override */
            font-size: 2rem;
            /* Sesuaikan ukurannya */
            line-height: 1.3;
            color: #FFFFFF;
            /* Pastikan warna judul putih jika belum */
        }

        #featured-trah .section-subtitle {
            font-size: 1rem;
            /* Sesuaikan ukurannya */
            color: #adb5bd;
            /* Pastikan warna subtitle jika belum */
        }

        .featured-movie-item .movie-poster-card {
            max-width: 350px;
            /* Batasi lebar maksimum poster agar tidak terlalu besar */
            margin-left: auto;
            margin-right: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            /* Efek shadow lebih nyata */
        }

        .movie-meta-info {
            color: #FFC107;
            /* Warna kuning untuk teks meta */
            font-size: 0.95rem;
            font-weight: 500;
        }

        .movie-meta-info i {
            margin-right: 5px;
            /* Jarak antara ikon dan teks */
        }


        .featured-movie-poster-container .overlay-text,
        .featured-movie-poster-container .overlay-text-views {
            position: static; // atau hapus jika tidak perlu lagi
            background-color: transparent;
        }

        */
    </style>
</head>

<body>

    {{-- 1. HEADER/NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            {{-- Mengarah ke route landing page --}}
            <a href="{{ route('landing.page') }}" class="navbar-brand sidebar-gone-hide text-center">
                <img src="{{ asset('assets/img/XXFILMS-removebg-preview.png') }}" alt="XXFILMS Logo"
                    style="height: 60px; filter: invert(1);">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavLanding"
                aria-controls="navbarNavLanding" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavLanding">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('landing.page') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- Mengarah ke daftar film yang sekarang menggunakan nama route 'films.index' (URL /films-catalog) --}}
                        <a class="nav-link" href="{{ route('films.index') }}">Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer-section">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        {{-- 2. HERO SECTION / MOVIE SHOWCASE 1 --}}
        <section id="hero" class="text-center">
            <div class="container">
                <div class="row justify-content-center pt-md-5">
                    <div class="col-lg-10 col-xl-9">
                        <h1 class="display-5 fw-bold mb-3">Ciptakan Momen Indah Bersamamu</h1>
                        <p class="lead mb-4 section-subtitle">
                            Nikmati berbagai film terbaru dengan kualitas terbaik, hanya di XXFILMS
                        </p>
                        {{-- Tombol Order mengarah ke daftar film --}}
                        <a href="{{ route('films.index') }}" class="btn btn-custom-order btn-lg mb-5">Order</a>
                    </div>
                </div>

                <div class="row gx-3 gy-4 justify-content-center">
                    @php
                        // GANTI DENGAN URL GAMBAR ASLI KAMU & JUDUL YANG SESUAI
                        $heroMovies = [
                            [
                                'title' => 'Paddington Di Peru',
                                'img_url' => asset('images/film1.webp'),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Moana 2',
                                'img_url' => asset('images/moana.webp'),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Wild Robot',
                                'img_url' => asset('images/wild.webp'),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Garfield',
                                'img_url' => asset('images/garfield.webp'),
                                'url' => route('films.index'),
                            ],
                        ];
                    @endphp
                    @foreach ($heroMovies as $movie)
                        <div class="col-6 col-md-4 col-lg-3">
                            <a href="{{ $movie['url'] }}" class="text-decoration-none">
                                <div class="movie-poster-card h-100">
                                    <img src="{{ $movie['img_url'] }}" alt="{{ $movie['title'] }}">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- 3. MOVIE SHOWCASE 2 (Now Playing / Featured) --}}
        <section id="now-playing" class="py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title">CIPTAKAN MOMEN TAK TERLUPAKAN</h2>
                    <p class="section-subtitle mb-5">DI LAYAR LEBAR KESAYANGAN</p>
                </div>
                {{-- Baris baru untuk kedua gambar, dengan pembatasan lebar jika perlu --}}
                <div class="row justify-content-center align-items-stretch g-4">
                    {{-- Kolom untuk Gambar 1 --}}
                    <div class="col-md-5 col-lg-4"> {{-- Sedikit lebih kecil dari col-md-6 untuk memberi ruang --}}
                        <a href="{{ route('films.index') }}">
                            <img src="{{ asset('images/0949aae1-52c5-487e-9ae5-37d034a1cc8d.webp') }}"
                                alt="MEG 2: THE TRENCH" class="img-fluid showcase-2-poster"
                                style="width: 100%; height: auto; object-fit: cover;">
                        </a>
                    </div>
                    {{-- Kolom untuk Gambar 2 --}}
                    <div class="col-md-5 col-lg-4"> {{-- Sedikit lebih kecil dari col-md-6 untuk memberi ruang --}}
                        <a href="{{ route('films.index') }}">
                            <img src="{{ asset('images/b4fc0f77-0926-4658-b08b-76cfc944c1d1.webp') }}"
                                alt="OPPENHEIMER" class="img-fluid showcase-2-poster"
                                style="width: 100%; height: auto; object-fit: cover;">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. ICON BAR / QUICK INFO --}}
        <section id="quick-info" class="py-4" style="background-color: #101827;">
            <div class="container">
                <div class="row text-center gy-3">
                    <div class="col-6 col-md-3 icon-bar-item">
                        <i class="bi bi-ticket-detailed-fill"></i>
                        <p>Tiket Mudah</p>
                    </div>
                    <div class="col-6 col-md-3 icon-bar-item">
                        <i class="bi bi-camera-reels-fill"></i>
                        <p>Film Terbaru</p>
                    </div>
                    <div class="col-6 col-md-3 icon-bar-item">
                        <i class="bi bi-badge-hd-fill"></i>
                        <p>Kualitas HD</p>
                    </div>
                    <div class="col-6 col-md-3 icon-bar-item">
                        <i class="bi bi-people-fill"></i>
                        <p>Komunitas Seru</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 5. FEATURED MOVIE SECTION (TRAH) --}}
        <section id="featured-trah" class="py-5">
            <div class="container">
                <div class="row align-items-center g-5"> {{-- Menambah g-5 untuk gutter/jarak lebih besar antar kolom --}}
                    <div class="col-md-6">
                        <h2 class="section-title" style="font-size: 2.2rem; line-height: 1.3;">CIPTAKAN MOMEN TAK
                            TERLUPAKAN DI LAYAR LEBAR</h2> {{-- Sesuaikan teks & style --}}
                        <p class="section-subtitle" style="font-size: 1.1rem;">Rasakan pengalaman menonton yang imersif
                            dengan kualitas audio visual terbaik. Film "TRAP" kini hadir untuk Anda.</p>
                        <a href="{{ route('films.index') }}" class="btn btn-custom-dark-outline btn-lg">ORDER
                            TIKET</a> {{-- Menambah btn-lg untuk tombol lebih besar --}}
                    </div>
                    <div class="col-md-6 text-center"> {{-- Menambah text-center untuk memusatkan konten di dalam kolom ini --}}
                        <div class="featured-movie-item">
                            <a href="{{ route('films.index') }}" class="text-decoration-none d-inline-block">
                                {{-- GANTI DENGAN URL GAMBAR ASLI KAMU --}}
                                <img src="{{ asset('images/ae803bc6-e996-493f-b0ca-436aa0fd36c5.webp') }}"
                                    alt="TRAH Poster" class="img-fluid movie-poster-card mb-3"
                                    style="max-width: 350px; margin-left: auto; margin-right: auto;">
                                {{-- Menambah max-width dan margin auto untuk poster --}}
                            </a>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="movie-meta-info me-4"> {{-- me-4 untuk margin kanan --}}
                                    <i class="bi bi-star-fill"></i> 7K+ Reviews
                                </div>
                                <div class="movie-meta-info">
                                    <i class="bi bi-eye-fill"></i> 9000 Views
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 6. STATS/COUNTER SECTION --}}
        <section id="stats" class="py-5" style="background-color: #080D16;">
            <div class="container">
                <div class="row text-center align-items-start gy-4">
                    <div class="col-6 col-md-3 stats-item">
                        <i class="bi bi-globe-americas"></i>
                        <div class="stat-number">1K+</div>
                        <div class="stat-label">DUNIA</div>
                    </div>
                    <div class="col-6 col-md-3 stats-item">
                        <i class="bi bi-film"></i>
                        <div class="stat-number">2K+</div>
                        <div class="stat-label">FILM</div>
                    </div>
                    <div class="col-6 col-md-3 stats-item">
                        <i class="bi bi-people-fill"></i>
                        <div class="stat-number">10K+</div>
                        <div class="stat-label">USER</div>
                    </div>
                    <div class="col-6 col-md-3 stats-item">
                        <i class="bi bi-building"></i> {{-- Ganti dengan ikon yang kamu mau, misal bi-briefcase-fill --}}
                        <div class="stat-number">500+</div>
                        <div class="stat-label">PARTNER</div>
                    </div>
                </div>
            </div>
        </section>

        {{-- 7. MOVIE CAROUSEL / "Film Pilihan Untukmu" --}}
        <section id="film-pilihan" class="py-5">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title">Film Pilihan Untukmu</h2>
                </div>
                <div class="movie-carousel-wrapper mt-4">
                    @php
                        // GANTI DENGAN DATA ASLI ATAU DARI DATABASE (jika dinamis)
                        $pilihanMovies = [
                            [
                                'title' => 'Home Sweet Loan',
                                'img_url' => asset(
                                    'images/mv5by2qxmwrmzdktyjm3oc00mtu2lwfhnwitzwfhytfhodg4nwuzxkeyxkfqcgc-at-v1-23f9213531bb51173639e8a3c28761b6.jpg',
                                ),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Bila esok',
                                'img_url' => asset(
                                    'images/Foto - Official Poster Bila Esok Ibu Tiada (instagram.com_cgv.id).jpg',
                                ),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Jumbo',
                                'img_url' => asset('images/images.jpeg'),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Komang',
                                'img_url' => asset('images/Poster-Komang.jpeg'),
                                'url' => route('films.index'),
                            ],
                            [
                                'title' => 'Azzamine',
                                'img_url' => asset('images/film-yang-tayang-di-bioskop-bulan-agustus-2024-14.jpeg'),
                                'url' => route('films.index'),
                            ],
                        ];
                    @endphp
                    @foreach ($pilihanMovies as $movie)
                        <div class="movie-item">
                            <a href="{{ $movie['url'] }}" class="text-decoration-none">
                                <div class="movie-poster-card h-100">
                                    <img src="{{ $movie['img_url'] }}" alt="{{ $movie['title'] }}">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- 8. MOVIE SHOWCASE 4 (AZZAMINE) --}}
        <section id="featured-azzamine" class="py-5" style="background-color: #080D16;">
            <div class="container">
                <div class="row align-items-center g-4 flex-md-row-reverse">
                    <div class="col-md-6">
                        <h2 class="section-title" style="font-size: 1.8rem;">Ciptakan momen tak terlupakan bersama
                            orang tersayang</h2>
                        <p class="section-subtitle" style="font-size: 1rem;">Film drama romantis "AZZAMINE" akan
                            membawa Anda pada perjalanan emosional yang menyentuh. Segera saksikan!</p>
                        <a href="{{ route('films.index') }}" class="btn btn-custom-order">Order Sekarang</a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('films.index') }}">
                            {{-- GANTI DENGAN URL GAMBAR ASLI KAMU --}}
                            <img src="{{ asset('images/film-yang-tayang-di-bioskop-bulan-agustus-2024-14.jpeg') }}"
                                alt="AZZAMINE Poster" class="img-fluid movie-poster-card">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- 9. GALLERY/IMAGE ROW --}}
        <section id="gallery" class="py-5">
            <div class="container">
                <div class="row g-2 justify-content-center">
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="col-6 col-sm-4 col-md-2">
                            {{-- GANTI DENGAN URL GAMBAR ASLI KAMU --}}
                            <img src="{{ asset('images/ilustrasi-bioskop_169.jpeg') }}"
                                alt="Gallery Image {{ $i }}" class="gallery-img">
                        </div>
                    @endfor
                </div>
            </div>
        </section>

        {{-- 10. CALL TO ACTION (CTA) BANNER --}}
        <section id="cta-banner" class="cta-banner text-center">
            <div class="container">
                <h2>Tunggu Apa Lagi?</h2>
                <p class="my-3">SEGERA BERLANGGANAN DAN NIKMATI RIBUAN FILM BERKUALITAS!</p>
                {{-- GANTI #URL_KONTAK_ATAU_REGISTER dengan route yang sesuai, misalnya route('register') atau route('contact') --}}
                <a href="#URL_KONTAK_ATAU_REGISTER" class="btn btn-custom-order btn-lg">Contact US</a>
            </div>
        </section>

    </main>

    {{-- 11. FOOTER --}}
    <footer id="footer-section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12 text-center text-lg-start">
                    <div class="footer-logo">
                        <i class="bi bi-play-circle-fill"></i>XXFILMS
                    </div>
                    <p class="pe-lg-3">Platform nonton film terbaik dengan koleksi terlengkap dan kualitas premium.
                        Nikmati pengalaman sinematik langsung dari rumah Anda.</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5>Tautan</h5>
                    <ul>
                        <li><a href="{{ route('landing.page') }}">Home</a></li>
                        <li><a href="{{ route('films.index') }}">Films</a></li>
                        <li><a href="#footer-section">About Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Contact Info</h5>
                    <ul class="contact-info">
                        <li><i class="bi bi-geo-alt-fill me-2"></i> Jl. Urip Raya No. 123, Makassar</li>
                        <li><i class="bi bi-telephone-fill me-2"></i> (+62) 123-4567</li>
                        <li><i class="bi bi-envelope-fill me-2"></i> info@xxfilms.com</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-start mt-4 mt-lg-0">
                    <h5>Sosial Media</h5>
                    <div class="social-icons">
                        {{-- Ganti # dengan link sosial mediamu --}}
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; Copyright {{ date('Y') }} <strong_site_bold>XXFILMS</strong_site_bold>. All Rights Reserved.
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS Bundle CDN (termasuk Popper) --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
