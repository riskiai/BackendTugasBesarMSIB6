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
                    <a class="nav-link active" aria-current="page" href="{{ url('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('logowan-kerja-dan-magang') }}">Lowongan Kerja & Magang</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('frequently-asked-questions') }}">FAQ</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('artikel') }}">Artikel</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="{{ url('webinar') }}">Webinar</a>
                </li>
            </ul>

            <ul class="navbar-nav mx-auto">
                <li>
                    <a href="{{ url('dashboard-perusahaan') }}" class="btn btn-primary">Dashoard</a>
                </li>
            </ul>
            <div>
                @auth
                    <a href="{{ url('logout') }}" class="button-primary btn">Keluar</a>
                @endauth
                @guest
                    <a href="{{ url('login') }}" class="button-primary btn">Masuk</a>
                    <a href="{{ url('/') }}" class="button-secundary btn">Daftar</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
