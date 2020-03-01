<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('index')}}" class="nav-link btn-default" target="_blank">Website</a>
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
            <a href="{{ route('admin.dashboard') }}" class="_dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="{{ asset('images/profile/'.$setting->image1)}}" class="user-image img-circle user_small_image_admin" alt="User Image">
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">
                     <img src="{{ asset('images/profile/'.$setting->image1)}}" class="img-circle user_image_admin" alt="User Image">
                     <h4>{{ $setting->name }}</h4>
                    <p>
                       Admin 
                    </p>
                </span>
                <div class="dropdown-divider"></div>
                <div class="container">
                    <div class="row">
                        <div class="d-flex justify-content-start w-50">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                        </div>
                        <div class="d-flex justify-content-end w-50">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
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
