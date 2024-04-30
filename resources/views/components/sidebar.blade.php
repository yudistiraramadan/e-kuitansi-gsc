<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">E-Kuitansi</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main Features
            </li>

            <li class="sidebar-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="sidebar-link" href="/">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li
                class="sidebar-item {{ request()->is('daftar-kuitansi', 'tambah-kuitansi', 'edit-kuitansi') ? 'active' : '' }}">
                <a class="sidebar-link" href="/daftar-kuitansi">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Kuitansi</span>
                </a>
            </li>


            <li class="sidebar-header">
                Logs & Reporting
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-buttons.html">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                </a>
            </li>
    </div>
</nav>
