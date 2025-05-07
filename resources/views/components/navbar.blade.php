<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="bi bi-palette2"></i> SENIMANKITA
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Galeri</a>
                </li>
                @if(request()->has('username'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard', ['username' => request()->query('username')]) }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengelolaan') }}">Kelola Karya</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Seniman</a>
                    </li>
                @endif
            </ul>
            @if(request()->has('username'))
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <span class="text-muted">Halo, </span>
                        <span class="fw-bold">{{ request()->query('username') }}</span>
                    </div>
                    <a href="{{ route('profile', ['username' => request()->query('username')]) }}" 
                       class="btn btn-outline-secondary me-2 rounded-pill">
                       <i class="bi bi-person-circle"></i>
                    </a>
                    <a href="{{ route('home') }}" class="btn btn-seniman">
                        <i class="bi bi-box-arrow-right"></i>
                    </a>
                </div>
            @else
                <a href="{{ route('login') }}" class="btn btn-seniman">
                    <i class="bi bi-lock-fill"></i> Admin
                </a>
            @endif
        </div>
    </div>
</nav>