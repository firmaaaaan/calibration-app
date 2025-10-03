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
            @include('components.partials.sidebar')

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-md-4 py-4">

                @include('components.partials.navbar')
                @yield('content')

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