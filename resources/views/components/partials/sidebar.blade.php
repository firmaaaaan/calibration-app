<nav class="col-md-2 d-none d-md-block bg-white sidebar shadow-sm">
    <div class="position-sticky pt-3">
        <h5 class="text-tosca fw-bold px-3 mb-4 mt-2">Menu Client</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('kalibrasi.index') ? 'active' : '' }}" href="{{ route('kalibrasi.index') }}">
                    <i class="bi bi-clipboard-check me-2"></i> Permohonan Saya
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('kalibrasi.create') ? 'active' : '' }}" href="{{ route('kalibrasi.create') }}">
                    <i class="bi bi-plus-circle me-2"></i> Ajukan Kalibrasi
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                    <i class="bi bi-person-circle me-2"></i> Profil
                </a>
            </li>
        </ul>
    </div>
</nav>
