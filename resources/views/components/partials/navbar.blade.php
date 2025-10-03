<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm mb-4">
    <div class="container-fluid">
        <h2 class="fw-bold m-0 text-tosca">Dashboard Client</h2>

        <div class="d-flex align-items-center ms-auto">
            <span class="me-3 text-secondary">Halo, {{ Auth::user()->name ?? 'User' }}</span>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>
</nav>