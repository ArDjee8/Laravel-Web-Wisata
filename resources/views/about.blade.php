@extends('layouts.main')

@section('content')

    <!-- Hero Section -->
    <section class="About-bg text-white d-flex align-items-end">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Tentang Gunung Bromo</h1>
                    <p class="lead">Keindahan Abadi di Tengah Jawa Timur</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Penjelasannya nih brok -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ asset('images/hero-bg.jpg') }}" alt="Gunung Bromo" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Keindahan Alam yang Memesona</h2>
                    <p class="lead">
                        Gunung Bromo adalah salah satu destinasi wisata alam paling terkenal di Indonesia, terletak di Jawa Timur.
                    </p>
                    <p>
                        Gunung ini terkenal dengan pemandangan matahari terbit yang luar biasa indah dan kaldera luas yang dikelilingi
                        lautan pasir. Dengan ketinggian 2.329 mdpl, Bromo menawarkan panorama alam vulkanik yang dramatis dan menjadi
                        bagian dari Taman Nasional Bromo Tengger Semeru.
                    </p>
                    <div class="mt-4">
                        <h3 class="h5">Fakta Menarik Bromo:</h3>
                        <ul class="list-group">
                            <li class="list-group-item border-0">
                                <i class="bi bi-arrow-right-circle-fill text-success me-2"></i>
                                Ketinggian: 2.329 meter di atas permukaan laut
                            </li>
                            <li class="list-group-item border-0">
                                <i class="bi bi-arrow-right-circle-fill text-success me-2"></i>
                                Terletak di: Taman Nasional Bromo Tengger Semeru
                            </li>
                            <li class="list-group-item border-0">
                                <i class="bi bi-arrow-right-circle-fill text-success me-2"></i>
                                Aktivitas: Jeep tour, hiking, fotografi, sunrise tour
                            </li>
                            <li class="list-group-item border-0">
                                <i class="bi bi-arrow-right-circle-fill text-success me-2"></i>
                                Upacara Yadnya Kasada: Ritual tahunan Suku Tengger
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Aktivitas Wisata kalo ke bromo -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Aktivitas Wisata</h2>
                <p class="text-muted">Pengalaman Seru di Bromo</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/SunriseP.jpg') }}" class="card-img-top" alt="Sunrise">
                        <div class="card-body">
                            <h3 class="h5 card-title">Sunrise di Penanjakan</h3>
                            <p class="card-text">Menyaksikan matahari terbit dari ketinggian 2.770 mdpl dengan pemandangan spektakuler Bromo dan Semeru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/JeepPasir.jpg') }}" class="card-img-top" alt="Jeep Tour">
                        <div class="card-body">
                            <h3 class="h5 card-title">Jeep Tour Lautan Pasir</h3>
                            <p class="card-text">Petualangan menyusuri lautan pasir luas dengan jeep terbuka menuju kawah Gunung Bromo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="{{ asset('images/KawahBromo.jpg') }}" class="card-img-top" alt="Kawah">
                        <div class="card-body">
                            <h3 class="h5 card-title">Pendakian ke Kawah Bromo</h3>
                            <p class="card-text">Mendaki tangga menuju bibir kawah untuk melihat aktivitas vulkanik dan pemandangan memukau.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
