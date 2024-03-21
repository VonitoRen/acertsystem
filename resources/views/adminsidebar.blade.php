<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="\img\prclogo.svg" alt="Logo" class="img-fluid" width="60px" height="60px">
        <div class="sidebar-brand-text mx-3">PRC ADMIN<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-user-graduate"></i>
            <span>Professions</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/signatories') ? 'active' : '' }}" href="{{ route('admin.signatories') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Signatories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/users') ? 'active' : '' }}" href="{{ route('admin.users') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
