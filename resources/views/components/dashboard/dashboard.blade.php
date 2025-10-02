<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Client | Sistem Kalibrasi & Pengujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #f8f9fa; }
        .bg-tosca { background-color: #20c997 !important; }
        .text-tosca { color: #20c997 !important; }
        .sidebar { min-height: 100vh; }
        .sidebar .nav-link.active { background: #20c997; color: #fff !important; }
        .sidebar .nav-link { color: #222; }
        .card-stat { border-left: 5px solid #20c997; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-white sidebar shadow-sm">
                <div class="position-sticky pt-3">
                    <h5 class="text-tosca fw-bold px-3 mb-4 mt-2">Menu Client</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('dashboard') }}">
                                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kalibrasi.index') }}">
                                <i class="bi bi-clipboard-check me-2"></i> Permohonan Saya
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('kalibrasi.create') }}">
                                <i class="bi bi-plus-circle me-2"></i> Ajukan Kalibrasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="bi bi-person-circle me-2"></i> Profil
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mb-4">
                    <h2 class="fw-bold text-tosca">Dashboard Client</h2>
                    <div>
                        <span class="me-3 text-secondary">Halo, {{ Auth::user()->name ?? 'User' }}</span>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Statistik Dinamis -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card card-stat shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-clipboard-data text-tosca" style="font-size:2rem;"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 fw-bold">
                                            {{ $totalKalibrasi ?? 0 }}
                                        </h5>
                                        <small class="text-muted">Total Permohonan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-stat shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-check-circle text-tosca" style="font-size:2rem;"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 fw-bold">
                                            {{ $totalSelesai ?? 0 }}
                                        </h5>
                                        <small class="text-muted">Selesai</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-stat shadow-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="me-3">
                                        <i class="bi bi-clock-history text-tosca" style="font-size:2rem;"></i>
                                    </div>
                                    <div>
                                        <h5 class="mb-0 fw-bold">
                                            {{ $totalProses ?? 0 }}
                                        </h5>
                                        <small class="text-muted">Proses Berjalan</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tabel Permohonan Kalibrasi User -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-tosca text-white fw-bold">
                        Permohonan Kalibrasi Terbaru
                        <a href="{{ route('kalibrasi.create') }}" class="btn btn-light btn-sm float-end text-tosca fw-bold">
                            <i class="bi bi-plus-circle me-1"></i> Ajukan Baru
                        </a>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Alat</th>
                                        <th>Merk</th>
                                        <th>No. Seri</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($kalibrasis as $i => $kalibrasi)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $kalibrasi->nama_alat }}</td>
                                            <td>{{ $kalibrasi->merk }}</td>
                                            <td>{{ $kalibrasi->serial_number }}</td>
                                            <td>{{ $kalibrasi->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                @if($kalibrasi->status == 'selesai')
                                                    <span class="badge bg-success">Selesai</span>
                                                @elseif($kalibrasi->status == 'proses')
                                                    <span class="badge bg-warning text-dark">Proses</span>
                                                @else
                                                    <span class="badge bg-secondary">Menunggu</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('kalibrasi.show', $kalibrasi->id) }}" class="btn btn-sm btn-tosca">
                                                    <i class="bi bi-eye"></i> Detail
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-secondary">Belum ada permohonan kalibrasi.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="pt-3 mt-4 text-center small text-muted">
                    &copy; {{ date('Y') }} PT. Adi Multi Kalibrasi. Sistem Kalibrasi & Pengujian.
                </footer>
            </main>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>