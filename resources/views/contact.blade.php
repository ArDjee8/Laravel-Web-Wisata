@extends('layouts.main')

@section('content')

    <!-- Hero Section -->
    <section class="contact-bg text-white d-flex align-items-end">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold">Hubungi Kami</h1>
                    <p class="lead">Kami siap membantu perjalanan Bromo Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- hubungin admin ya kalo ada kendala -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="section-title mb-4">Kontak Informasi</h2>
                    <p class="lead mb-4">Hubungi kami untuk informasi lebih lanjut atau pemesanan paket wisata.</p>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-envelope text-success fs-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h5">Email</h3>
                                    <p class="mb-0">info@bromowisata.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-telephone text-success fs-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h5">Telepon/WhatsApp</h3>
                                    <p class="mb-0">+62 812-3456-7890</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="bi bi-geo-alt text-success fs-1"></i>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h3 class="h5">Alamat Kantor</h3>
                                    <p class="mb-0">Jl. Raya Bromo No. 123, Probolinggo, Jawa Timur, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h2 class="section-title mb-4">Kirim Pesan</h2>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Masukkan email Anda">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nomor Telepon</label>
                                    <input type="tel" class="form-control" placeholder="Masukkan nomor telepon">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pesan</label>
                                    <textarea class="form-control" rows="5" placeholder="Tulis pesan Anda..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-success w-100 py-2">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map dari google maps -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">Lokasi Kami</h2>
            </div>
            <div class="ratio ratio-21x9 rounded shadow">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126453.62843612524!2d112.893271!3d-7.9424939999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd637aaab794a41%3A0xada40d36ecd2a5dd!2sMount%20Bromo!5e0!3m2!1sen!2sid!4v1647421216813!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
