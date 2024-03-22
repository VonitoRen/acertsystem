<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="\img\prclogo.svg" alt="Logo" class="img-fluid" width="60px" height="60px">
        <div class="sidebar-brand-text mx-3">PRC CERTIFICATE<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if($userRole == 3)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('certreg.dashboard') }}">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>COR</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('accreditation.index') }}">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>ACCREDITATION</span>
            </a>
        </li>
    @elseif($userRole == 4)
        <li class="nav-item">
            <a class="nav-link" href="{{ route('fad.dashboard') }}">
                <i class="fas fa-fw fa-file-alt"></i>
                <span>APPEARANCE</span>
            </a>
        </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
