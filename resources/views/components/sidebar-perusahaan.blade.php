<nav class="d-flex flex-column justify-content-between min-vh-100 h-100"
    style="width: 20%; position: sticky; top: 0; margin-top: -70px">
    {{-- top part start --}}
    <div class="py-3" style="margin-top: 60px">
        <div class="mx-auto rounded-circle bg-secondary mb-3" style="height: 120px; width: 120px;"
            style="background-image: url('assets/img/team/team-3.jpg')">
            @auth('company')
                <img src="{{ auth()->guard('company')->user()->foto_profil ? asset('storage/photo-profile/' . auth()->guard('company')->user()->foto_profil) : asset('assets/img/team/team-1.jpg') }}"
                    alt="Profil Picture" class="img-fluid rounded-circle h-100 w-100 object-fit-cover">
            @else
                <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="Profil Picture"
                    class="img-fluid rounded-circle h-100 w-100 object-fit-cover">
            @endauth
        </div>
        <div class="text-start px-4">
            <p class="m-0 text-white fs-5">{{ auth()->guard('company')->user()->pic_name }}</p>
            <p class="m-0 text-white">{{ auth()->guard('company')->user()->name }}</p>
        </div>
        <div class="my-5 ms-3">
            <a href="{{ route('perusahaan.index') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-light fa-table-columns"></i>
                    Dashboard
                </div>
            </a>
            <a href="{{ route('perusahaan.profil') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan/profil/edit') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-user-pen"></i>
                    Edit Profil
                </div>
            </a>
            <a href="{{ route('perusahaan.magang') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan/lowongan/magang') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-suitcase"></i>
                    Lowongan Magang
                </div>
            </a>
            <a href="{{ route('perusahaan.kerja') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan/lowongan/kerja') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-briefcase"></i>
                    Lowongan Kerja
                </div>
            </a>
            <a href="{{ route('perusahaan.webinar') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan/webinar') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-desktop"></i>
                    Webinar Perusahaan
                </div>
            </a>
            <a href="{{ route('perusahaan.lamaran') }}" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/perusahaan/lamaran') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-newspaper"></i>
                    Informasi Pendaftar
                </div>
            </a>
        </div>
    </div>
    {{-- top part end --}}

    {{-- bottom part start --}}
    <div class="text-white ms-4 ps-1 py-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                Keluar</button>
        </form>
    </div>
    {{-- bottom part end --}}
</nav>
