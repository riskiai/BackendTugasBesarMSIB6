<nav class="d-flex flex-column justify-content-between min-vh-100 h-100"
    style="width: 20%; position: sticky; top: 0; margin-top: -70px">
    {{-- top part start --}}
    <div class="py-3" style="margin-top: 60px">
        <div class="mx-auto rounded-circle bg-secondary mb-3" style="height: 120px; width: 120px;"
            style="background-image: url('assets/img/team/team-3.jpg')">
            <img class="rounded-circle" src="{{ asset('assets/img/team/team-3.jpg') }}" alt=""
                style="height: 120px; width: 120px;">
        </div>
        <div class="text-start px-4">
            <p class="m-0 text-white fs-5">Nadhif Lazuardi</p>
            <p class="m-0 text-white">Universitas Amandemy</p>
        </div>
        <div class="my-5 ms-3">
            <a href="" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/mahasiswa') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-light fa-table-columns"></i>
                    Dashboard
                </div>
            </a>
            <a href="" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/mahasiswa/profil/edit') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-user-pen"></i>
                    Edit Profil
                </div>
            </a>
            <a href="" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/mahasiswa/lowongan-disimpan') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-solid fa-bookmark"></i>
                    Lowongan Disimpan
                </div>
            </a>
            <a href="" class="w-100 text-decoration-none text-white">
                <div class="w-100 h-100 sidebar-button ps-3 py-2 d-flex align-items-center gap-2"
                    style="border-radius: 20px 0 0 20px; {{ request()->is('dashboard/mahasiswa/bantuan') ? 'background-color: #CEDDE6; color: #074173;' : '' }}">
                    <i style="width: 20px" class="fa-regular fa-circle-question"></i>
                    Bantuan
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
