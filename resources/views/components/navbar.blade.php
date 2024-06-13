<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('beranda') }}">
            <img src="{{ asset('assets/img/Logo.png') }}" alt="" width="30"
                class="d-inline-block align-text-top" />
            ApprenTech
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('beranda') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('logowan-kerja-dan-magang') ? 'active' : '' }}"
                        href="{{ route('lowongan') }}">Lowongan Kerja & Magang</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('frequently-asked-questions') ? 'active' : '' }}"
                        href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}"
                        href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('webinar') ? 'active' : '' }}"
                        href="{{ route('webinar') }}">Webinar</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}"
                        href="{{ route('about') }}">About</a>
                </li>
            </ul>

            @if (auth()->check())
                <div class="d-flex gap-3">
                    <div>
                        <a href="{{ route('mahasiswa.index') }}" class="btn-primary btn">Dashboard</a>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ auth()->user()->name }}!
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @elseif (auth('company')->check())
                <div class="d-flex gap-3">
                    <div>
                        <a href="{{ route('perusahaan.index') }}" class="btn-primary btn">Dashboard</a>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Hi, {{ auth('company')->user()->name }}!
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <div>
                    <a href="{{ url('login') }}" class="button-primary btn">Masuk</a>
                    <a href="{{ url('/') }}" class="button-secundary btn">Daftar</a>
                </div>
            @endif

        </div>
    </div>
</nav>
