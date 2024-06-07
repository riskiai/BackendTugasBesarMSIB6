
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
        <li class="dropdown {{ request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.penggunamhs.index') || request()->routeIs('admin.penggunamhs.create') || request()->routeIs('admin.penggunamhs.edit') || request()->routeIs('admin.pengguna.create') || request()->routeIs('admin.pengguna.edit') ? 'active' : '' }}">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-users"></i> <span>Data Pengguna</span>
            </a>
            <ul class="dropdown-menu">
                <li class="{{ request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.pengguna.create') || request()->routeIs('admin.pengguna.edit') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.pengguna.index') }}">Pengguna Perusahaan</a>
                </li>
                <li class="{{ request()->routeIs('admin.penggunamhs.index') || request()->routeIs('admin.penggunamhs.create') || request()->routeIs('admin.penggunamhs.edit') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('admin.penggunamhs.index') }}">Pengguna Mahasiswa</a>
                </li>
            </ul>
        </li>
        <li class="dropdown {{ request()->routeIs('admin.webinarapprentech.index') || request()->routeIs('admin.webinarperusahaan.index') || request()->routeIs('admin.webinarapprentech.create') || request()->routeIs('admin.webinarperusahaan.create') || request()->routeIs('admin.webinarapprentech.edit') || request()->routeIs('admin.webinarperusahaan.edit') ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chalkboard-teacher"></i> <span>Data Webinar</span></a>
          <ul class="dropdown-menu">
            <li class="{{ request()->routeIs('admin.webinarapprentech.index') || request()->routeIs('admin.webinarapprentech.create') || request()->routeIs('admin.webinarapprentech.edit')  ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.webinarapprentech.index')  }}">Webinar Apprentech</a>
            </li>
            <li class="{{ request()->routeIs('admin.webinarperusahaan.index') || request()->routeIs('admin.webinarperusahaan.create') || request()->routeIs('admin.webinarperusahaan.edit') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('admin.webinarperusahaan.index') }}">Webinar Perusahaan</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-comments"></i> <span>Data Testimoni</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="layout-default.html">Testimoni Perusahaan</a></li>
            <li><a class="nav-link" href="layout-transparent.html">Testimoni Mahasiswa</a></li>
          </ul>
        </li>
        <li class="dropdown {{ request()->routeIs('admin.pengguna.index') || request()->routeIs('admin.penggunamhs.index')  ? 'active' : '' }}">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
              <i class="fas fa-info-circle"></i> <span>Tentang Apprentech</span>
          </a>
          <ul class="dropdown-menu">
              <li class="{{ request()->routeIs('admin.pengguna.index') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('admin.pengguna.index') }}">Deskripsi Apprentech</a>
              </li>
              <li class="{{ request()->routeIs('admin.penggunamhs.index') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.penggunamhs.index') }}">Visi Misi Apprentech</a>
              </li>
          </ul>
      </li>
        {{-- <li><a class="nav-link" href="blank.html"><i class=""></i> <span>Tentang Apprentech</span></a></li> --}}
        <li><a class="nav-link" href="blank.html"><i class="fas fa-question-circle"></i> <span>Faq</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-file-alt"></i> <span>Artikel</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-handshake"></i> <span>Mitra</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-tasks"></i> <span>Tahapan Pendaftaran</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-user-tie"></i> <span>Pendiri Apprentech</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-cog"></i> <span>Settings</span></a></li>

        <li class="menu-header">Data Mitra Perusahaan</li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-briefcase"></i> <span>Melihat Pekerjaan</span></a></li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-clipboard-list"></i> <span>Melihat Pendaftar</span></a></li>

        <li class="menu-header">Data Mahasiswa</li>
        <li><a class="nav-link" href="blank.html"><i class="fas fa-briefcase"></i> <span>Melihat Data Pendaftar Mahasiswa</span></a></li>
    
      </ul>

       
    </aside>
  </div>
