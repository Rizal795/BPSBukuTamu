<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="./assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">{{ Auth::user()->name }}</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{ route('home') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Home</span>
                </a>
            </li>
            <li class="heading">Data Struktur Organisasi</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-bookmark"></i>
                    <span class="nav-label">Struktur Organisasi</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ route('devisi') }}"><i class="sidebar-item-icon fa fa-solid fa-sitemap"></i>Devisi</a>
                    </li>
                    <li>
                        <a href="{{ route('jabatan') }}"><i class="sidebar-item-icon fa fa-solid fa-star"></i>Jabatan</a>
                    </li>
                </ul>
            </li>
            <li class="heading">Data Pegawai</li>
            <li>
                <a href="{{ route('pegawai') }}"><i class="sidebar-item-icon fa fa-solid fa-users"></i>
                    <span class="nav-label">Pegawai</span>
                </a>
            </li>
            <li class="heading">Data Tamu</li>
            <li>
                <a href="{{ route('admintamu') }}"><i class="sidebar-item-icon fa fa-regular fa-user-plus"></i>
                    <span class="nav-label">Tamu</span>
                </a>
            </li>
            <li class="heading">Pengaturan</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-solid fa-sliders"></i>
                    <span class="nav-label">Pengaturan</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{ route('user') }}"><i class="sidebar-item-icon fa a-solid fa-user"></i>User</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>