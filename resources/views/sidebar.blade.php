<style>
    /* Add hover effect */
    .nav-item:hover {
        transform: translateX(10px); /* Adjust the distance as needed */
    }

    /* Add transition for smooth effect */
    .nav-item {
        transition: transform 0.3s ease; /* Adjust the duration and timing function as needed */
    }
</style>

<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <img src="\img\prclogo.svg" alt="Logo" class="img-fluid" width="60px" height="60px">
        <div class="sidebar-brand-text mx-3">ACert<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    @if($userRole == 3)
        <li class="nav-item" style="{{ Request::routeIs('registration.report') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('registration.report') }}">
                <i class="fas fa-fw fa-tachometer-alt" style="{{ Request::routeIs('registration.report') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('registration.report') ? 'color: white;' : '' }}">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('certreg.dashboard') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('certreg.dashboard') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('certreg.dashboard') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('certreg.dashboard') ? 'color: white;' : '' }}">Certificate of Registration</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('accreditation.index') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('accreditation.index') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('accreditation.index') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('accreditation.index') ? 'color: white;' : '' }}">Accreditation</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('former.index') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('former.index') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('former.index') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('former.index') ? 'color: white;' : '' }}">Former Filipino</span>
            </a>
        </li>
    @elseif($userRole == 4)
        <li class="nav-item" style="{{ Request::routeIs('appearance.report') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('appearance.report') }}">
                <i class="fas fa-fw fa-tachometer-alt" style="{{ Request::routeIs('appearance.report') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('appearance.report') ? 'color: white;' : '' }}">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('fad.dashboard') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('fad.dashboard') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('fad.dashboard') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('fad.dashboard') ? 'color: white;' : '' }}">Appearance</span>
            </a>
        </li>
    @elseif($userRole == 2)
        <li class="nav-item" style="{{ Request::routeIs('legal.report') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('legal.report') }}">
                <i class="fas fa-fw fa-tachometer-alt" style="{{ Request::routeIs('legal.report') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('legal.report') ? 'color: white;' : '' }}">Dashboard</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('legal.dashboard') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('legal.dashboard') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('legal.dashboard') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('legal.dashboard') ? 'color: white;' : '' }}">Certificate of No Pending Case</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('legal.doc-surrendered') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('legal.doc-surrendered') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('legal.doc-surrendered') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('legal.doc-surrendered') ? 'color: white;' : '' }}">Certificate of Returned Documents</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('legal.finality') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('legal.finality') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('legal.finality') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('legal.finality') ? 'color: white;' : '' }}">Certificate of Finality</span>
            </a>
        </li>
        <li class="nav-item" style="{{ Request::routeIs('legal.piccor') ? 'background-color: rgba(220, 220, 220, 0.1); color: white;' : '' }}">
            <a class="nav-link" href="{{ route('legal.piccor') }}">
                <i class="fas fa-fw fa-file-alt" style="{{ Request::routeIs('legal.piccor') ? 'color: white;' : '' }}"></i>
                <span style="{{ Request::routeIs('legal.piccor') ? 'color: white;' : '' }}">Certificate of Documents Surrendered</span>
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
