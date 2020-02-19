<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-secondary elevation-4">
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{asset('backend_assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Dynamic Portfolio</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{Request::is('admin/dashboard*') ? 'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.education.index') }}" class="nav-link {{Request::is('admin/education*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-book"></i>
                        <p>Education</p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{Request::is('admin/category*') ? 'menu-open':''}} {{Request::is('admin/portfolio*') ? 'menu-open':''}}" >
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>
                            Portfolio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ml-3 {{Request::is('admin/category*') ? 'show':'hide'}}" >
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}" class="nav-link {{Request::is('admin/category*') ? 'active':''}}">
                                <i class="fas fa-align-left nav-icon"></i>
                                <p>Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.portfolio.index') }}" class="nav-link {{Request::is('admin/portfolio*') ? 'active':''}}">
                                <i class="fas fa-file-code nav-icon"></i>
                                <p>Portfolio</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.setting.edit', 1) }}" class="nav-link {{Request::is('admin/setting*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-book"></i>
                        <p>Settings</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>

<div class="content-wrapper">
    <div class="content-header" style="padding: 5px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-dark">@yield('title')</h5>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb breadcrumb-sm float-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
