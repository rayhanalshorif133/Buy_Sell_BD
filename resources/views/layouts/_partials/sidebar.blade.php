<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            @php
            $headerTitle = App\Models\HeaderAndFooter::first();
            $headerTitle = $headerTitle ? $headerTitle->project_title : env('APP_NAME');
            @endphp
            <span>{{ ucfirst($headerTitle) }}</span>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    {{Auth::user()->name}}
                </a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="{{route('user.dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">Users</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New User</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.header.index')}}"
                    class="nav-link @if (request()->is('user/header-footer*')) active @endif">
                    <i class="nav-icon fas fa-header"></i>
                    <p>
                        Header & Footer
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.slider.index')}}"
                    class="nav-link @if (request()->is('user/slider*')) active @endif">
                    <i class="nav-icon fas fa-code"></i>
                    <p>
                        Slider
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.what-we-do.index')}}"
                    class="nav-link @if (request()->is('user/color*')) active @endif">
                    <i class="nav-icon fa fa-question"></i>
                    <p>
                        What We Do?
                    </p>
                </a>
            </li>
                <li class="nav-item">
                    <a href="{{ route('user.about.index')}}"
                        class="nav-link @if (request()->is('user/about*')) active @endif">
                        <i class="nav-icon fas fa-user-circle"></i>
                        <p>
                            About
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.service.index')}}"
                        class="nav-link @if (request()->is('user/service*')) active @endif">
                        <i class="nav-icon fa-solid fa-gears"></i>
                        <p>
                            Service
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.contact.index')}}"
                        class="nav-link @if (request()->is('user/contact*')) active @endif">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Contact
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.color.index')}}"
                        class="nav-link @if (request()->is('user/color*')) active @endif">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Color
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
