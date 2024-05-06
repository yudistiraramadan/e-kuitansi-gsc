<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('dashboard/img/avatars/gsc.png') }}" class="avatar img-fluid rounded me-1"
                        alt="Charles Hall" /> <span class="text-dark">Bendahara</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="{{ route('dashboard') }}"><i class="align-middle me-1"
                            data-feather="sliders"></i> Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('daftarKuitansi') }}"><i class="align-middle me-1"
                            data-feather="file-text"></i>
                        Kuitansi</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('daftarKuitansi') }}"><i class="align-middle me-1"
                            data-feather="file"></i>
                        Kuitansi Kosong</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
