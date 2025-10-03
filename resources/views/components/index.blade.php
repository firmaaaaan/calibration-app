<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kalibrasi & Pengujian | PT. Adi Multi Kalibrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .bg-tosca { background-color: #20c997 !important; }
        .text-tosca { color: #20c997 !important; }
        .btn-tosca { background-color: #20c997 !important; border-color: #20c997 !important; color: #fff !important; }
        .btn-tosca:hover { background-color: #17a589 !important; border-color: #17a589 !important; color: #fff !important; }
        .card { border: none !important; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075); }
        .price-badge { background: #ff8c29; color: #fff; font-weight: 600; border-radius: 1rem; padding: 0.25rem 1rem; font-size: 1rem; }
        .feature-icon { width: 48px; height: 48px; background: #e6fcf5; color: #20c997; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; margin-bottom: 1rem; }
        .faq-question { cursor: pointer; }
    </style>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-tosca navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">Kalibrasi & Pengujian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-3">
                    <li class="nav-item"><a class="nav-link text-white active" href="#"><i class="bi bi-house-door me-1"></i>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="bi bi-stars me-1"></i>Fitur</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="bi bi-briefcase me-1"></i>Layanan</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="bi bi-chat-dots me-1"></i>Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#"><i class="bi bi-question-circle me-1"></i>FAQ</a></li>
                    <li class="nav-item ms-2">
                        <a href="{{ route('register') }}" class="btn" style="background:#ff8c29;color:#fff;font-weight:600;border-radius:2rem;padding:0.5rem 2rem;">
                            <i class="bi bi-send-check me-1"></i>Ajukan Kalibrasi
                        </a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="{{ route('login') }}" class="btn btn-light text-tosca fw-bold" style="border-radius:2rem;padding:0.5rem 1.5rem;">
                            <i class="bi bi-box-arrow-in-right me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-5 bg-tosca text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h1 class="fw-bold mb-3" style="font-size:2.5rem;">Sistem Kalibrasi &amp; Pengujian Terintegrasi</h1>
                    <p class="mb-4" style="font-size:1.2rem;">
                        Solusi digital untuk pengelolaan proses kalibrasi dan pengujian alat ukur secara efisien, akurat, dan sesuai standar SNI ISO/IEC 17025:2017. Cocok untuk laboratorium, rumah sakit, dan industri!
                    </p>
                    <a href="{{ route('register') }}" class="btn btn-light btn-lg text-tosca fw-bold px-4">Ajukan Kalibrasi</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="https://img.freepik.com/free-vector/medical-equipment-calibration-concept-illustration_114360-2581.jpg" alt="Kalibrasi & Pengujian" class="img-fluid" style="max-height:320px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Price Table -->
    <section class="py-5 bg-white" id="harga">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Paket Layanan Kalibrasi</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-tosca">
                        <div class="card-body text-center">
                            <div class="price-badge mb-2">Basic</div>
                            <div class="display-5 fw-bold mb-2">Rp 250.000<span class="fs-6">/alat</span></div>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Sertifikat Kalibrasi</li>
                                <li>✔️ Laporan Hasil Uji</li>
                                <li>✔️ Standar Nasional</li>
                                <li>✔️ Estimasi 3 Hari Kerja</li>
                            </ul>
                            <a href="#" class="btn btn-tosca w-100">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-tosca">
                        <div class="card-body text-center">
                            <div class="price-badge mb-2" style="background:#20c997;">Premium</div>
                            <div class="display-5 fw-bold mb-2">Rp 400.000<span class="fs-6">/alat</span></div>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Semua Fitur Basic</li>
                                <li>✔️ Penjemputan & Pengantaran</li>
                                <li>✔️ Konsultasi Teknis</li>
                                <li>✔️ Estimasi 1 Hari Kerja</li>
                            </ul>
                            <a href="#" class="btn btn-tosca w-100">Pilih Paket</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-tosca">
                        <div class="card-body text-center">
                            <div class="price-badge mb-2" style="background:#2196f3;">Enterprise</div>
                            <div class="display-5 fw-bold mb-2">Custom</div>
                            <ul class="list-unstyled mb-3">
                                <li>✔️ Layanan On-site</li>
                                <li>✔️ Jadwal Fleksibel</li>
                                <li>✔️ Support Prioritas</li>
                                <li>✔️ Konsultasi & Training</li>
                            </ul>
                            <a href="#" class="btn btn-tosca w-100">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="py-5 bg-light" id="fitur">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold">Keunggulan Sistem Kami</h2>
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="feature-icon mx-auto mb-2"><i class="bi bi-clipboard-data"></i></div>
                    <h6 class="fw-bold">Data Terintegrasi</h6>
                    <p class="text-secondary">Semua proses kalibrasi & pengujian tercatat rapi dan mudah diakses.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon mx-auto mb-2"><i class="bi bi-shield-check"></i></div>
                    <h6 class="fw-bold">Akurat & Terstandar</h6>
                    <p class="text-secondary">Mengikuti standar SNI ISO/IEC 17025:2017 untuk hasil terpercaya.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon mx-auto mb-2"><i class="bi bi-clock-history"></i></div>
                    <h6 class="fw-bold">Proses Cepat</h6>
                    <p class="text-secondary">Estimasi pengerjaan singkat, hasil bisa dipantau secara online.</p>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-icon mx-auto mb-2"><i class="bi bi-people"></i></div>
                    <h6 class="fw-bold">Tim Profesional</h6>
                    <p class="text-secondary">Teknisi berpengalaman & siap konsultasi kebutuhan Anda.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-5 bg-white" id="testimoni">
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
                                <p class="mb-3" style="font-size:1.1rem;">"Proses kalibrasi cepat dan hasil pengujian sangat detail. Sertifikat langsung dikirim digital."</p>
                                <footer class="blockquote-footer">Budi Santoso, <cite title="Laboratorium Kimia">Laboratorium Kimia</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Client 2" class="rounded-circle" width="80" height="80">
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-3" style="font-size:1.1rem;">"Teknisi ramah, konsultasi mudah, dan hasil pengujian alat kesehatan sangat memuaskan."</p>
                                <footer class="blockquote-footer">Siti Rahmawati, <cite title="Rumah Sakit Sehat">Rumah Sakit Sehat</cite></footer>
                            </blockquote>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Client 3" class="rounded-circle" width="80" height="80">
                            </div>
                            <blockquote class="blockquote text-center">
                                <p class="mb-3" style="font-size:1.1rem;">"Sistemnya mudah digunakan, laporan kalibrasi bisa diakses online kapan saja."</p>
                                <footer class="blockquote-footer">Andi Wijaya, <cite title="Industri Manufaktur">Industri Manufaktur</cite></footer>
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

    <!-- FAQ Section -->
    <section class="py-5 bg-light" id="faq">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Pertanyaan Umum (FAQ)</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
                            Apakah sertifikat kalibrasi diakui secara nasional?
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Ya, sertifikat kalibrasi dan pengujian kami mengikuti standar SNI ISO/IEC 17025:2017 dan diakui secara nasional.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                            Berapa lama proses kalibrasi dan pengujian?
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Estimasi waktu pengerjaan mulai dari 1 hingga 3 hari kerja, tergantung jenis alat dan layanan yang dipilih.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                            Apakah bisa konsultasi kebutuhan kalibrasi?
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Tentu, tim kami siap membantu konsultasi kebutuhan kalibrasi dan pengujian alat Anda tanpa biaya tambahan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                            Bagaimana cara pemesanan layanan?
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda dapat mengajukan permintaan melalui website, email, atau menghubungi tim kami secara langsung.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-tosca text-white py-4 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    &copy; {{ date('Y') }} PT. Adi Multi Kalibrasi. Sistem Kalibrasi & Pengujian.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="text-white text-decoration-underline me-3">Kebijakan Privasi</a>
                    <a href="#" class="text-white text-decoration-underline">Kontak</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>