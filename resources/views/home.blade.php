@extends('layouts.main')

@section('content')

    <!-- hero sectionnnnnn -->
    <section class="hero-bg text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h1 class="display-4 fw-bold mb-3">Pesona Eksotis Gunung Bromo</h1>
                    <p class="lead mb-4">Nikmati pengalaman tak terlupakan menyaksikan matahari terbit di atas lautan pasir dan kawah mistis</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#paket" class="btn btn-warning btn-lg px-4 py-2">Pesan Sekarang</a>
                        <a href="/about" class="btn btn-outline-light btn-lg px-4 py-2">Eksplor Bromo</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bromo Baguss banget cokk -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Kenapa Memilih Bromo?</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-wrapper bg-light-green rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-sunrise display-4 text-success"></i>
                            </div>
                            <h3 class="h5 mb-3">Sunrise Spektakuler</h3>
                            <p class="mb-0">Menyaksikan matahari terbit dari Penanjakan dengan pemandangan emas yang menakjubkan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-wrapper bg-light-green rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-geo-alt display-4 text-success"></i>
                            </div>
                            <h3 class="h5 mb-3">Petualangan Jeep</h3>
                            <p class="mb-0">Jelajahi lautan pasir dan lereng gunung dengan tour jeep yang seru dan menantang</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card feature-card h-100 border-0 shadow">
                        <div class="card-body text-center p-4">
                            <div class="icon-wrapper bg-light-green rounded-circle p-3 mb-3 mx-auto">
                                <i class="bi bi-camera display-4 text-success"></i>
                            </div>
                            <h3 class="h5 mb-3">Spot Foto Terbaik</h3>
                            <p class="mb-0">Dapatkan foto instagramable di spot-spot terbaik dengan pemandangan Bromo yang ikonik</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foto foto keren dari wisatawan bromo -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Galeri Bromo</h2>
                <p class="text-muted">Moment Terbaik Para Wisatawan</p>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <img src="{{ asset('images/Moment-1.jpg') }}" alt="Bromo 1" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Moment-2.jpg') }}" alt="Bromo 2" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/Moment-3.PNG ') }}" alt="Bromo 3" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- nih menu dari web bromonya -->
    <section id="paket" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Paket Wisata Bromo</h2>
                <p class="text-muted">Pilih paket terbaik untuk pengalaman Bromomu</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-success border-2">
                        <div class="card-header bg-success text-white text-center py-3">
                            <h3 class="h5 mb-0">Paket Silver</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Jeep Tour 4-6 Orang</li>
                                <li class="list-group-item">Melihat Sunrise</li>
                                <li class="list-group-item">Lautan Pasir Bromo</li>
                                <li class="list-group-item">Air Mineral & Snack</li>
                                <li class="list-group-item fw-bold">Rp 350.000/orang</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-success w-100">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-warning border-2">
                        <div class="card-header bg-warning text-dark text-center py-3">
                            <h3 class="h5 mb-0">Paket Gold</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Jeep Tour 4 Orang</li>
                                <li class="list-group-item">Sunrise & Kawah Bromo</li>
                                <li class="list-group-item">Bukit Teletubbies</li>
                                <li class="list-group-item">Makan Pagi & Dokumentasi</li>
                                <li class="list-group-item fw-bold">Rp 550.000/orang</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-warning w-100">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-primary border-2">
                        <div class="card-header bg-primary text-white text-center py-3">
                            <h3 class="h5 mb-0">Paket Platinum</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Private Jeep Tour</li>
                                <li class="list-group-item">Semua Destinasi Premium</li>
                                <li class="list-group-item">Guide Profesional</li>
                                <li class="list-group-item">Makan & Dokumentasi Pro</li>
                                <li class="list-group-item fw-bold">Rp 850.000/orang</li>
                            </ul>
                        </div>
                        <div class="card-footer bg-white border-0">
                            <button class="btn btn-primary w-100">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
