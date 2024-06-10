<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('beranda') }}">
            <img src="{{ asset('assets/img/Logo.png') }}" alt="" width="30" class="d-inline-block align-text-top" />
            ApprenTech
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('logowan-kerja-dan-magang') ? 'active' : '' }}" href="{{ route('lowongan') }}">Lowongan Kerja & Magang</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('frequently-asked-questions') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('webinar') ? 'active' : '' }}" href="{{ route('webinar') }}">Webinar</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
            </ul>

            <div>
                <a href="{{ url('login') }}" class="button-primary btn">Masuk</a>
                <a href="{{ url('/') }}" class="button-secundary btn">Daftar</a>
            </div>
        </div>
    </div>
</nav>
