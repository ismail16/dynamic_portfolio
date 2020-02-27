<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('index')}}" class="nav-link">Home</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">
                    {{ App\Models\Contact::orderBy('id', 'desc')->where('status', 0)->count() }}
                </span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="{{ route('admin.dashboard') }}" class="_dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" class="user-image img-circle" alt="User Image" width="30" style="margin: 5px 20px 0px 10px;">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                     <img src="{{asset('backend_assets/dist/img/user2-160x160.jpg')}}" width="100" class="img-circle" alt="User Image">
                    <p>
                        Admin
                        <small>Member since Nov. 2018</small>
                    </p>
                </span>
                <div class="dropdown-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-start" style="width: 50%">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="d-flex justify-content-end" style="width: 50%">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="_display: none;">
                                @csrf
                                <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>
</nav>
