<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Apprentech</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            {{-- <li class="dropdown active">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="index-0.html">General Dashboardd</a></li>
            <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
          </ul>
        </li> --}}
            <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                    <i class="fas fa-fire"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">Data Website Apprentech</li>
            <li
                class="dropdown {{ request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.penggunamhs.index') || request()->routeIs('admin.penggunamhs.create') || request()->routeIs('admin.penggunamhs.edit') || request()->routeIs('admin.pengguna.create') || request()->routeIs('admin.pengguna.edit') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-users"></i> <span>Data Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li
                        class="{{ request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create') || request()->routeIs('admin.pengguna.edit') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.pengguna.index') }}">Pengguna Perusahaan</a>
                    </li>
                    <li
                        class="{{ request()->routeIs('admin.penggunamhs.index') || request()->routeIs('admin.penggunamhs.create') || request()->routeIs('admin.penggunamhs.edit') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.penggunamhs.index') }}">Pengguna Mahasiswa</a>
                    </li>
                </ul>
            </li>
            <li
                class="dropdown {{ request()->routeIs('admin.webinarapprentech.index') || request()->routeIs('admin.webinarperusahaan.index') || request()->routeIs('admin.webinarapprentech.create') || request()->routeIs('admin.webinarperusahaan.create') || request()->routeIs('admin.webinarapprentech.edit') || request()->routeIs('admin.webinarperusahaan.edit') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-chalkboard-teacher"></i> <span>Data Webinar</span></a>
                <ul class="dropdown-menu">
                    <li
                        class="{{ request()->routeIs('admin.webinarapprentech.index') || request()->routeIs('admin.webinarapprentech.create') || request()->routeIs('admin.webinarapprentech.edit') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.webinarapprentech.index') }}">Webinar Apprentech</a>
                    </li>
                    <li
                        class="{{ request()->routeIs('admin.webinarperusahaan.index') || request()->routeIs('admin.webinarperusahaan.create') || request()->routeIs('admin.webinarperusahaan.edit') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admin.webinarperusahaan.index') }}">Webinar Perusahaan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="nav-link" class="{{ request()->routeIs('admin.artikel.index') ? 'active' : '' }}"
                    href="{{ route('admin.artikel.index') }}">
                    <i class="fas fa-file-alt"></i>
                    <span>Artikel</span>
                </a>
            </li>



            <li class="menu-header">Data Mitra Perusahaan</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-briefcase"></i> <span>Data Lowongan</span></a>
            </li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-clipboard-list"></i> <span>Data
                        Pendaftar</span></a></li>

            <li class="menu-header">Data Mahasiswa</li>
            <li><a class="nav-link" href="blank.html"><i class="fas fa-briefcase"></i> <span>Melihat Data Pendaftar
                        Mahasiswa</span></a></li>

        </ul>


    </aside>
</div>
