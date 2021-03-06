<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-delicious"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ALumni <sup>10</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->segment(1) == ('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="\dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA MASTER
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::segment(1) == ('alumni') ? 'active' : '' }}">
        <a class="nav-link" href="\alumni">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Alumni</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="\user">
            <i class="fas fa-fw fa-table"></i>
            <span>Data User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Informasi
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="\laporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item {{Request::segment(1) == ('agenda') ? 'active' : ''}}">
        <a class="nav-link" href="\agenda">
            <i class="fas fa-fw fa-table"></i>
            <span>Agenda</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        DATA ADMIN
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="\profil">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Edit Profil</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="\pesan">
            <i class="fas fa-fw fa-table"></i>
            <span>Pesan</span></a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        KELUAR
    </div>



    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="\logout">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Logout</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>