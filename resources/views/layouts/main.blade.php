<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wisata Gunung Bromo - Pesona Alam Jawa Timur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        .navbar {
            background: linear-gradient(135deg, #1a5d1a 0%, #0d3b0d 100%);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url("{{ asset('images/hero-bg.jpg') }}") center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        .about-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url("{{ asset('images/TentangGunungBromo.jpg') }}") center/cover;
            height: 60vh;
        }

        .contact-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                        url("{{ asset('images/contact.jpg') }}") center/cover;
            height: 50vh;
        }

        .feature-card {
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(to right, #1a5d1a, #8bc34a);
            border-radius: 2px;
        }
    </style>
</head>
<body>
    <!-- Navbarrr -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <i class="bi bi-mountain me-2"></i>
                <strong>Bromo Adventure</strong>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link {{ Request::is('about') ? 'active fw-bold' : '' }}">Tentang Bromo</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link {{ Request::is('contact') ? 'active fw-bold' : '' }}">Kontak</a>
                    </li>
                </ul>
                <a href="#paket" class="btn btn-warning btn-sm ms-lg-3">Pesan Wisata</a>
            </div>
        </div>
    </nav>

    <!-- ISI UTAMA -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-success text-white py-3">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="mb-2 mb-md-0">
                    &copy; {{ date('Y') }} Bromo Adventure. All rights reserved.
                </div>
                <div class="d-flex">
                    <a href="/" class="text-white mx-2"><i class="bi bi-house-door"></i></a>
                    <a href="/about" class="text-white mx-2"><i class="bi bi-info-circle"></i></a>
                    <a href="/contact" class="text-white mx-2"><i class="bi bi-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
