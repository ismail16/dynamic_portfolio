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

                 <li class="nav-item">
                    <a href="{{ route('admin.portfolio.index') }}" class="nav-link {{Request::is('admin/portfolio*') ? 'active':''}}">
                        <i class="nav-icon far fa fa-book"></i>
                        <p>Portfolio</p>
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
