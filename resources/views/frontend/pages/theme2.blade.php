<style type="text/css">
    .image2{
        height: 200px;
        width: 200px;
    }
</style>
<nav class="navbar navbar-expand-lg theme_bg_color fixed-top" id="sideNav">
    <a class="navbar-brand" href="#page-top">
        <span class="d-block d-lg-none font_color">{{ $setting->name }}</span>
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image2" src="{{ asset('images/profile/'.$setting->image1)}}" alt="">
        </span>
    </a>
    <button class="navbar-toggler border" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-align-justify"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link font_color" href="#about" id="about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="#experience" id="experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="#education" id="education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="#skill" id="skill">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="#award" id="award">Awards/Scholarship</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="#portfolio" id="portfolio">Portfolio</a>
            </li>

            <li class="nav-item">
                <a class="nav-link font_color" href="#contact-me" id="contact-me">Contact Me</a>
            </li>

            @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a class="nav-link font_color" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font_color" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            @else
            <li class="nav-item">
                <a class="nav-link font_color" data-toggle="modal" data-target="#myModal">Login</a>
            </li>
            @endauth 
            @endif
        </ul>
    </div>
</nav>

<div class="container">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title theme_color">Admin Login</h5>
                    <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                </div>
                <div class="card card-container">
                    <div class="text-center mt-2">
                        <img id="profile-img" class="profile-img-login rounded-circle" src="{{ asset('frontend_assets/img/ismail2.jpg')}}"/>
                    </div>
                    <form class="form-signin p-4 form-group" method="POST" action="{{ route('login') }}">
                        @csrf
                        <span id="reauth-email" class="reauth-email"></span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                        <input id="password" type="password" class="mt-2 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                        <button class="btn btn-sm btn-primary btn-block mt-4" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <section class="p-5 bg_color" id="abouts">
        <img src="{{ asset('images/profile/'.$setting->image2)}}" class="image2" alt="" >
        <h3 class="mb-0 theme_color">I'm {{ $setting->name }}</h3>
        <div class="subheading mb-4">
            {{ $setting->title }}
        </div>
        <p class="lead mb-5">{{ $setting->my_self }}</p>
        <div class="social-icons">
            @isset ($setting->facebook)
            <a href="{{ $setting->facebook }}" target="_blank" class="theme_bg_color">
                <i class="fab fa-facebook-f icon-round icon-round font_color"></i>
            </a>
            @endisset
            @isset ($setting->instagram)
                <a href="{{ $setting->instagram }}" target="_blank" class="theme_bg_color"> 
                    <i class="fab fa-instagram icon-round icon-round font_color"></i>
                </a>
            @endisset
            @isset ($setting->youtube)
                <a href="{{ $setting->youtube }}" target="_blank" class="theme_bg_color">
                    <i class="fab fa-youtube icon-round icon-round font_color"></i>
                </a>
            @endisset
            @isset ($setting->twitter)
                <a href="{{ $setting->twitter }}" target="_blank" class="theme_bg_color">
                    <i class="fab fa-twitter icon-round icon-round font_color"></i>
                </a>
            @endisset
            @isset ($setting->linkedIn)
                <a href="{{ $setting->linkedIn }}" target="_blank" class="theme_bg_color">
                    <i class="fab fa-linkedin-in icon-round icon-round font_color"></i>
                </a>
            @endisset
            @isset ($setting->skype)
                <a href="{{ $setting->skype }}" target="_blank" class="theme_bg_color">
                    <i class="fab fa-skype icon-round icon-round font_color"></i>
                </a>
            @endisset
        </div>
    </section><hr>

    <section class="p-5 bg_color" id="experiences">
        <h3 class="mb-3 theme_color">Experience</h3>
        @if(count($experiences) > 0)
            @foreach($experiences as $experience)
                <div class="mb-2 bg-light p-4 border-bottom">
                    <div class="row">
                        <div class="col-md-9">
                            <h5 class="">{{ $experience->job_title }}</h5>
                            <div class="subheading mb-3">{{ $experience->company }}</div>
                        </div>
                        <div class="col-md-3">
                            <div class="text-md-right">
                                <span class="text-primary">
                                    {{ $experience-> start_at_date }} - 
                                    {{ $experience-> end_at_date == '' ? 'Current' : $experience-> end_at_date }}
                                </span>
                            </div>
                        </div>
                        <div class="col-md-12 text-justify">
                            <p>{{ $experience->job_description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="text theme_color-center">
                <i class="bg-warning p-4"> Have No Experience </i>
            </h3>
        @endif
    </section><hr>

    <section class="p-5 bg_color" id="educations">
        <h3 class="mb-3 theme_color">Education</h3>
        @foreach($educations as $education)
        <div class="mb-2 bg-light p-4 border-bottom">
            <div class="row">
                <div class="col-md-9">
                    <div class="resume-content">
                        <h5 class="mb-0">{{ $education->institution_name }}</h5>
                        <div class="subheading mb-3">
                            {{ $education->exam_short_code }} - {{ $education->exam_name }}
                        </div>
                        <p>{{ $education->description}}</p>
                    </div>
                </div>

                <div class="col-md-3 text-md-right">
                    <span class="text-primary">{{ $education->passing_year }}</span>
                    <img src="{{ asset('images/certificate_image/'.$education->certificate_image)}}" class="img-fluid">
                </div>
            </div>
        </div>
        @endforeach 
    </section><hr>

    <section class="p-5 bg_color" id="skills">
        <div class="w-100">
            <h3 class="mb-3 theme_color">Skills</h3>
            <div class="mb-2 bg-light p-4 border-bottom">

                <ul class="fa-ul mb-0">
                    @foreach($skills as $skill)
                    <div class="progress skill-bar mb-1">
                        <div class="progress-bar {{ $skill->percentage < 30 ? 'bg-danger' : '' }} {{ $skill->percentage < 40 ? 'bg-warning' : '' }} {{ $skill->percentage < 51 ? 'bg-info' : '' }} {{ $skill->percentage > 60 ? 'bg-success' : '' }}" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill"> {{ $skill->name }} <i class="val"> {{ $skill->percentage }} %</i></span>
                        </div>
                    </div>
                    <!-- <li><i class="fa-li fa fa-check"></i>{{ $skill->name }}, {{ $skill->percentage }}%</li> -->
                    @endforeach
                </ul>
            </div>
        </div>
    </section><hr>

    <section class="p-5 bg_color" id="awards">
        <h3 class="mb-3 theme_color">Scholarship or Awards</h3>
        <div class="mb-2 bg-light p-4 border-bottom">
            <ul class="fa-ul mb-0">
                @foreach($scholarships as $scholarship)
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>
                    "{{ $scholarship->title }}" - 
                    "{{ $scholarship->institution }}" - 
                    "{{ $scholarship->win_year }}"
                </li>
                @endforeach
            </ul>
        </div>
    </section><hr>

    <section class="p-5 bg_color" id="portfolios">
        <h3 class="mb-3 theme_color">Portfolio</h3>
        <div class="row">
            @foreach($portfolios as $portfolio)
            <div class="col-md-6">
                <div class="mb-2 bg-light p-4 border-bottom">
                    <div class="">
                        <h5 class="mb-0">{{  $portfolio->title }}</h5>
                        {!! $portfolio->description !!}
                    </div>
                    <div>
                        <img src="{{ asset('images/portfolio_image/'.$portfolio->portfolio_image) }}" class="img-fluid">
                    </div>
                    <div class="mt-2">
                        <a href="{{ $portfolio->link }}" target="_blank">
                            <i class="fa fa-eye"></i>SEE DEMO 
                        </a>
                    </div>
                </div>
            </div>
            @endforeach      
        </div>
    </section><hr>

    <section class="p-5 bg_color" id="contacts">
        <h3 class="mb-3 theme_color">CONTACT ME</h3>
        <div class="row">
            <div class="col-md-6">
                <p class="text-justify">{{ $setting->my_self }}</p>
                <h5 class="theme_color">MY LOCATION</h5>
                <p><i>ADDRESS :</i> {{ $setting->address }}</p>
            </div>
            <div class="col-sm-6">
                <form id="contact_form">
                    @csrf
                    <div class="form-group">
                        <input type="text" id="contact_name" class="form-control" required="required" placeholder="Your Name" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_email" class="form-control" required="required" placeholder="Your Email" />
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" required="required" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn custom-btn-one" onclick="contact_form_post()">CONTACT ME </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="p-0 footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="font_color pt-3">&copy; {{ $setting->footer_text }}
                        <a href="http://binarytheme.com" class="text-warning" target="_blank">{{ $setting->name }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
