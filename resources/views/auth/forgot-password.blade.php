<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password | Sistem Kalibrasi & Pengujian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Poppins', sans-serif; background: #e6fcf5; }
        .bg-tosca { background-color: #20c997 !important; }
        .text-tosca { color: #20c997 !important; }
        .btn-tosca { background-color: #20c997 !important; border-color: #20c997 !important; color: #fff !important; }
        .btn-tosca:hover { background-color: #17a589 !important; border-color: #17a589 !important; color: #fff !important; }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="mb-3 fw-bold text-tosca text-center">Lupa Password</h3>
                        <p class="mb-4 text-center text-secondary" style="font-size:1rem;">
                            Masukkan email Anda untuk mendapatkan link reset password <b>Sistem Kalibrasi & Pengujian</b>
                        </p>
                        @if (session('status'))
                            <div class="alert alert-success mb-3">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-tosca w-100 fw-bold mb-3">
                                <i class="bi bi-envelope-arrow-up me-1"></i> Kirim Link Reset Password
                            </button>
                            <div class="text-center">
                                <a href="{{ route('login') }}" class="text-tosca small">Kembali ke Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
