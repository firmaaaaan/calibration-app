<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kalibrasi & Pengujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-tosca { background-color: #20c997 !important; }
        .text-tosca { color: #20c997 !important; }
        .btn-tosca { background-color: #20c997 !important; border-color: #20c997 !important; color: #fff !important; }
        .btn-tosca:hover { background-color: #17a589 !important; border-color: #17a589 !important; color: #fff !important; }
        .card {
            border: none !important;
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075); /* keep shadow if needed */
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg" style="background: #20c997;">
        <div class="container">
            <div class="d-flex w-100 justify-content-end align-items-center">
                <ul class="navbar-nav ms-auto align-items-center gap-3" style="font-family:'Poppins',sans-serif;font-weight:500;">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#" style="position:relative;">
                            Home
                            <span style="display:block;width:40px;height:3px;background:#fff;position:absolute;left:0;bottom:-6px;border-radius:2px;"></span>
                        </a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Layanan Kami</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Karir</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Legalitas</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Blog</a></li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" style="font-size:1.2rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#" class="btn" style="background:#fff;color:#20c997;font-weight:600;border-radius:2rem;padding:0.5rem 2rem;">Login</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="#" class="btn" style="background:#2196f3;color:#fff;font-weight:600;border-radius:2rem;padding:0.5rem 2rem;">Registrasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5" style="background:#20c997; min-height: 480px; position: relative; overflow: hidden;">
        <div class="container" style="position: relative; z-index: 2;">
            <div class="row align-items-center">
                <div class="col-md-7 text-white">
                    <h1 class="fw-bold mb-3" style="font-size:2.8rem;">
                        UPT Laboratorium Terpadu
                    </h1>
                    <p class="mb-4" style="font-size:1.25rem;">
                        PT. Adi Multi Kalibrasi adalah mitra terpercaya Anda dalam kalibrasi alat kesehatan, dengan standar mutu SNI ISO/IEC 17025:2017.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="#" class="btn btn-primary px-4 py-2" style="background:#2196f3;border:none;font-weight:500;">Kontak Kami</a>
                        <a href="#" class="btn btn-link text-white" style="text-decoration:underline;font-weight:500;">Layanan Kami</a>
                    </div>
                </div>
                <div class="col-md-5 d-flex justify-content-center mt-4 mt-md-0">
                    <div style="width:320px;height:320px;background:#14395a;border-radius:50%;overflow:hidden;display:flex;align-items:center;justify-content:center;box-shadow:0 8px 32px rgba(32,201,151,0.15);">
                        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80" alt="Kalibrasi" style="width:100%;height:100%;object-fit:cover;">
                    </div>
                </div>
            </div>
        </div>
        <div style="position:absolute;left:0;bottom:0;width:100%;height:180px;background:radial-gradient(ellipse at left 60%,rgba(32,201,151,0.08) 0,transparent 70%);z-index:1;"></div>
        <div style="position:absolute;right:0;top:0;width:60vw;height:100%;background:radial-gradient(circle at 80% 20%,rgba(32,201,151,0.07) 0,transparent 70%);z-index:1;"></div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#20c997" class="bi bi-tools" viewBox="0 0 16 16">
                                    <path d="M1 0a1 1 0 0 1 1 1v2.293l2.146-2.147a.5.5 0 0 1 .708.708L2.707 4H5a1 1 0 0 1 1 1v2.293l2.146-2.147a.5.5 0 0 1 .708.708L6.707 8H9a1 1 0 0 1 1 1v2.293l2.146-2.147a.5.5 0 0 1 .708.708L10.707 12H13a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1z"/>
                                </svg>
                            </div>
                            <h5 class="card-title">Kalibrasi Alat</h5>
                            <p class="card-text">Proses kalibrasi alat ukur dengan standar nasional dan internasional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#20c997" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0zm14.854 4.146a.5.5 0 0 1 0 .708l-4.5 4.5a.5.5 0 0 1-.708 0L7 6.707l-3.146 3.147a.5.5 0 0 1-.708-.708l3.5-3.5a.5.5 0 0 1 .708 0L10 7.293l4.146-4.147a.5.5 0 0 1 .708 0z"/>
                                </svg>
                            </div>
                            <h5 class="card-title">Pengujian Akurat</h5>
                            <p class="card-text">Pengujian alat untuk memastikan keakuratan dan keandalan hasil pengukuran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <div class="mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#20c997" class="bi bi-file-earmark-bar-graph" viewBox="0 0 16 16">
                                    <path d="M8 12V9h1v3H8zm2-1V7h1v4h-1zm-4 2V8h1v5H6z"/>
                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3-.5a.5.5 0 0 1-.5-.5V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V5h-2.5A1.5 1.5 0 0 1 11 4z"/>
                                </svg>
                            </div>
                            <h5 class="card-title">Laporan Otomatis</h5>
                            <p class="card-text">Dapatkan laporan kalibrasi dan pengujian secara otomatis dan mudah diakses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Price List Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Daftar Harga Layanan</h2>
            <div class="row justify-content-center">
                <!-- Kalibrasi Alat Card -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Kalibrasi Alat</h5>
                            <p class="card-text">Kalibrasi alat ukur sesuai standar SNI/ISO</p>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Sertifikat resmi</li>
                                <li>✔️ Proses cepat & akurat</li>
                                <li>✔️ Teknisi berpengalaman</li>
                            </ul>
                            <div class="fw-bold text-tosca mb-2">Rp 500.000</div>
                        </div>
                    </div>
                </div>
                <!-- Pengujian Akurat Card -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Pengujian Akurat</h5>
                            <p class="card-text">Pengujian alat untuk memastikan keakuratan</p>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Hasil terjamin</li>
                                <li>✔️ Standar nasional & internasional</li>
                                <li>✔️ Laporan detail</li>
                            </ul>
                            <div class="fw-bold text-tosca mb-2">Rp 300.000</div>
                        </div>
                    </div>
                </div>
                <!-- Laporan Otomatis Card -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Laporan Otomatis</h5>
                            <p class="card-text">Pembuatan dan pengiriman laporan digital</p>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Akses mudah & cepat</li>
                                <li>✔️ Format digital & cetak</li>
                                <li>✔️ Notifikasi otomatis</li>
                            </ul>
                            <div class="fw-bold text-tosca mb-2">Rp 100.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Prosedur Layanan Kalibrasi Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-2">Prosedur Layanan Kalibrasi</h2>
            <div class="text-center mb-4" style="color:#2196f3;font-size:0.95rem;">
                Langkah Terstruktur untuk Hasil yang Terstandar
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">01</div>
                        <div class="fw-semibold mb-1">Permohonan Layanan</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Pihak terkait menyampaikan surat permohonan dan/atau order yang akan dikalibrasi atau diuji.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">02</div>
                        <div class="fw-semibold mb-1">Pengiriman Dokumen</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Dokumen dikirim ke PT. AMK melalui <a href="https://wa.me/6281234567890" class="text-tosca text-decoration-underline" target="_blank">WhatsApp/Email</a> atau email.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">03</div>
                        <div class="fw-semibold mb-1">Kaji Ulang Permintaan</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Tim kami akan melakukan peninjauan administrasi dan teknis atas permintaan layanan yang diajukan.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">04</div>
                        <div class="fw-semibold mb-1">Penawaran Harga</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Kami menyusun dan mengirimkan penawaran harga/quotation untuk kalibrasi atau pengujian.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-warning mb-2" style="font-size:1.5rem;">05</div>
                        <div class="fw-semibold mb-1">Persetujuan Layanan</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Klien menyetujui penawaran yang diajukan dan menandatangani kesepakatan untuk pelaksanaan.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-warning mb-2" style="font-size:1.5rem;">06</div>
                        <div class="fw-semibold mb-1">Penjadwalan Kegiatan</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Tim kami menjadwalkan pelaksanaan kalibrasi atau pengujian sesuai waktu yang disepakati.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">07</div>
                        <div class="fw-semibold mb-1">Pelaksanaan Kalibrasi/Uji</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Tim teknisi melakukan layanan kalibrasi atau pengujian di lokasi atau laboratorium.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-tosca mb-2" style="font-size:1.5rem;">08</div>
                        <div class="fw-semibold mb-1">Penerbitan Sertifikat</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Sertifikat kalibrasi atau uji diterbitkan sesuai hasil & prosedur, lalu siap untuk pelaporan.
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 bg-white h-100 shadow-sm rounded-3">
                        <div class="fw-bold text-warning mb-2" style="font-size:1.5rem;">09</div>
                        <div class="fw-semibold mb-1">Penyelesaian & Penyerahan</div>
                        <div class="text-secondary" style="font-size:0.97rem;">
                            Menyelesaikan administrasi, dan sertifikat serta dokumen diserahkan sebagai dokumen sah.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Testimoni Klien</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Client 1" class="rounded-circle" width="80" height="80">
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-3" style="font-size:1.1rem;">"Pelayanan sangat profesional dan hasil kalibrasi sangat memuaskan. Proses cepat dan laporan mudah diakses."</p>
                                <footer class="blockquote-footer">Budi Santoso, <cite title="Perusahaan A">Perusahaan A</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client 2" class="rounded-circle" width="80" height="80">
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-3" style="font-size:1.1rem;">"Teknisi ramah dan sangat membantu. Sertifikat diterima tepat waktu dan sesuai standar."</p>
                                <footer class="blockquote-footer">Siti Rahmawati, <cite title="Rumah Sakit B">Rumah Sakit B</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Client 3" class="rounded-circle" width="80" height="80">
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-3" style="font-size:1.1rem;">"Sangat direkomendasikan untuk kebutuhan kalibrasi alat kesehatan. Layanan responsif dan harga bersaing."</p>
                                <footer class="blockquote-footer">Andi Wijaya, <cite title="Klinik C">Klinik C</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color:#20c997;border-radius:50%;"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color:#20c997;border-radius:50%;"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
        </div>
    </section>
    
    <footer class="bg-tosca text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; {{ date('Y') }} Sistem Kalibrasi & Pengujian. All rights reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-underline me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-underline">Kontak</a>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>