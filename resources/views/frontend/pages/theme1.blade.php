<nav class="navbar navbar-expand-lg static-top ">
        <div class="container">
            <a class="navbar-brand p-0" href="#">
                <img src="{{ asset('images/logo/'.$setting->logo)}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="mr-4">
                        <a href="#about-me" class="text-light" data-wow-duration="1s" data-wow-delay=".1s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".2s"><i class="fa fa-info icon-round icon-round text-light"></i> ABOUT ME</small>
                        </a>
                    </li>
                    <li class="mr-4">
                        <a href="#portfolio-sec" class="text-light" data-wow-duration="1s" data-wow-delay=".5s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".6s"><i class="fa fa-briefcase icon-round text-light"></i> PORTFOLIO </small>
                        </a>
                    </li> 
                    <li class="mr-4">
                        <a href="#education-sec" class="text-light" data-wow-duration="1s" data-wow-delay=".3s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".4s"><i class="fa fa-graduation-cap icon-round text-light" aria-hidden="true"></i> EDUCATION</small>
                        </a>
                    </li>
                    <li class="mr-4">
                        <a href="#contact-me" class="text-light" data-wow-duration="1s" data-wow-delay=".7s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="far fa-paper-plane   icon-round text-light"></i> CONTACT ME</small>
                        </a>
                    </li>

                    @if (Route::has('login'))
                    @auth
                    <li class="mr-4"><a class="text-light" data-wow-duration="1s" data-wow-delay=".7s" href="{{ route('admin.dashboard') }}" >
                        <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-home icon-round text-light "></i> DASHBOARD</small>
                    </a></li>
                    <li class="mr-4"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-key icon-round text-light"></i> LOGOUT</small>
                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                    @else
                    <li class="mr-4 pointer">
                        <a  data-toggle="modal" data-target="#myModal" class="text-light" data-wow-duration="1s" data-wow-delay=".7s">
                            <small class="wow bounceIn animated font-weight-bold pointer" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-key icon-round text-light "></i> LOGIN</small>
                        </a>
                    </li>
                    @endauth 
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title text_color">Admin Login</h4>
                        <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="card card-container">
                        <img id="profile-img" class="profile-img-card" src="{{ asset('frontend_assets/img/ismail2.jpg')}}" />
                        <form class="form-signin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <span id="reauth-email" class="reauth-email"></span>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="home-sec">
        <div class="overlay">
            <div class="container">
                <div class="row pad-top-bottom">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <img src="{{ asset('images/profile/'.$setting->image1)}}" class="main-img-2 rounded-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                        <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">I'm {{ $setting->name }}</h1>
                        <h2 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
                            {{ $setting->title }}
                        </h2>
                        <a href="#about-me" class="btn custom-btn-one btn-lg wow bounceIn animated pointer" data-wow-duration="1s" data-wow-delay=".8s">MORE ABOUT ME</a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <section id="about-me">
        <div class="overlay">
            <div class="container">
                <div class="row" >
                    <div class="col-md-4 pt-3 pb-3 bg-black">
                        <div class="wow bounceIn animated">
                            <img src="{{ asset('images/profile/'.$setting->image2)}}" class="main-img-2 img-circle wow bounceIn animated animated image2" alt="" >
                            <h6 class="text_color">WHAT TO KNOW, ABOUT ME ?</h6>
                            <div class="color-strip"></div>
                            <div class="personal-information">
                                <ul>
                                    <li><span>Name : </span>{{ $setting->name }}</li>
                                    <li><span>Age : </span>{{ $setting->age }} Years</li>
                                    <li><span>Phone : </span>{{ $setting->phone }}</li>
                                    <li><span>Email : </span>{{ $setting->email }}</li>
                                    <li><span>Address : </span>{{ $setting->address }}</li>
                                </ul>
                            </div>

                            <div class="social-icon">
                                @isset ($setting->facebook)
                                    <a href="{{ $setting->facebook }}" target="_blank">
                                    <i class="fab fa-facebook-f icon-round icon-round text-light"></i>
                                </a>
                                @endisset
                                @isset ($setting->instagram)
                                    <a href="{{ $setting->instagram }}" target="_blank">
                                    <i class="fab fa-instagram icon-round icon-round text-light"></i>
                                </a>
                                @endisset
                                @isset ($setting->youtube)
                                    <a href="{{ $setting->youtube }}" target="_blank">
                                    <i class="fab fa-youtube icon-round icon-round text-light"></i>
                                @endisset
                                @isset ($setting->twitter)
                                     <a href="{{ $setting->twitter }}" target="_blank">
                                    <i class="fab fa-twitter icon-round icon-round text-light"></i>
                                @endisset
                                @isset ($setting->linkedIn)
                                    <a href="{{ $setting->linkedIn }}" target="_blank">
                                   <i class="fab fa-linkedin-in icon-round icon-round text-light"></i>
                                </a>
                                @endisset

                                @isset ($setting->skype)
                                    <a href="{{ $setting->skype }}" target="_blank">
                                   <i class="fab fa-skype icon-round icon-round text-light"></i>
                                </a>
                                @endisset
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pt-2 about_me">
                        <div class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                            <h2 class="text_color">About me</h2>
                            <p>{{ $setting->my_self }}</p>
                            <h2 class="text_color">Skills</h2>
                            @foreach($skills as $skill)
                            <div class="progress skill-bar mb-1">
                                <div class="progress-bar {{ $skill->percentage < 30 ? 'bg-danger' : '' }} {{ $skill->percentage < 40 ? 'bg-warning' : '' }} {{ $skill->percentage < 51 ? 'bg-info' : '' }} {{ $skill->percentage > 60 ? 'bg-success' : '' }}" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                    <span class="skill">{{ $skill->name }} <i class="val"> {{ $skill->percentage }} %</i></span>
                                </div>
                            </div>
                            @endforeach
                            <a href="{{asset('images/profile/'.$setting->resume_file)}}" target="_blank" class="btn btn-style-two btn-lg pointer mt-3 mb-2">DOWNLOAD RESUME (.pdf file)</a>               
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio-sec">
        <div class="container">
            <div class="">
                <h2 class="text_color">Recent Projects</h2>
            </div>

            <div>
                <button class="btn btn-primary filter-button" data-filter="all">All</button>
                @foreach($categories as $category)
                <button class="btn btn-default filter-button" data-filter="{{ $category->id }}">{{ $category->name }}</button>
                @endforeach   
            </div>
            <br/>

            <div class="row bounceIn animated" >
                @foreach($portfolios as $portfolio)
                <div class="col-md-4 filter {{ $portfolio->category_id }} wow bounceIn animated">
                    <div class="each-item">
                        <img class="port-image" src="{{ asset('images/portfolio_image/'.$portfolio->portfolio_image) }}"/>
                        <div class="cap1">
                            <p>{{  $portfolio->title }} </p>
                            {!! $portfolio->description !!}
                        </div>
                        <div class="cap2">
                            <a class="_preview" href="{{ $portfolio->link }}" target="_blank"><i class="fa fa-eye"></i>SEE PROJECT </a>
                        </div>
                    </div>
                </div> 
                @endforeach      
            </div>
        </div>
    </section>

    <section id="education-sec">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">

                        <div class="board">
                            <div class="board-inner">
                                <ul class="nav nav-tabs text-center" id="myTab">
                                    <li class="mb-2">
                                        <a href="#home" data-toggle="tab" title="PERSONAL DETAILS" class="rounded-circle bg-light p-3">
                                            <span class="">
                                                <i class="fa fa-home h4"></i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#profile" data-toggle="tab" title="EDUCATIONAL PROFILE" class="rounded-circle bg-light p-3 ">
                                            <span class="">
                                                <i class="fa fa-graduation-cap h4"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="#exp" data-toggle="tab" title="EXPERIENCE DETAILS" class="rounded-circle bg-light p-3 ">
                                            <span class="">
                                                <i class="fa fa-recycle h4"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="#location" data-toggle="tab" title="PRESENT LOCATION" class="rounded-circle bg-light p-3 ">
                                            <span class="">
                                                <i class="fas fa-map-marker-alt h4"></i>
                                            </span>
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a href="#contact" data-toggle="tab" title="CONTACT ME" class="rounded-circle bg-light p-3 ">
                                            <span class="">
                                                <i class="far fa-comments h4"></i>
                                            </span>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade in active show" id="home">

                                    <h4 class="head text-center text_color">PERSONAL DETAILS</h4>
                                    <p class="narrow text-center">
                                        <span>
                                            <i>NAME : </i>{{ $setting->name }}
                                        </span>
                                        <span>
                                            <i>AGE :</i>{{ $setting->age }} YEARS
                                        </span>
                                        <span>
                                            <i>EXPERIENCE :</i>2 + YEARS TILL DATE
                                        </span>
                                    </p>


                                </div>
                                <div class="tab-pane fade" id="profile">

                                    <h4 class="head text-center text_color">EDUCATIONAL PROFILE</h4>
                                    <p class="narrow text-center">

                                        @foreach($educations as $education)
                                        <span>
                                            <i>{{ $education->exam_name }} : </i> "{{ $education->institution_name }}" - "{{ $education->passing_year }}"
                                        </span>
                                        @endforeach <br>

                                        @foreach($scholarships as $scholarship)
                                        <span>
                                            <i>{{ $scholarship->name }} : </i> "{{ $scholarship->title }}" - "{{ $scholarship->institution }}" - "{{ $scholarship->win_year }}"
                                        </span>
                                        @endforeach
                                    </p>
                                </div>

                                <div class="tab-pane fade" id="exp">
                                    <h4 class="head text-center text_color">EXPERIENCE DETAILS</h4>
                                    <p class="narrow text-center">
                                        @if(count($experiences) > 0)
                                        @foreach($experiences as $experience)
                                        <span>
                                            <i>Work  : </i>"{{ $experience->company }}" - "{{ $experience->job_title }}" - "{{ $experience-> start_at_date }} - {{ $experience-> end_at_date == '' ? 'Current' : $experience-> end_at_date }}"
                                        </span>
                                        @endforeach
                                        @else
                                        <h2 class="text-center">
                                            <i class="bg-warning p-4"> Have No Experience </i>
                                        </h2>
                                        @endif

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="location">
                                    <h4 class="head text-center text_color">PRESENT LOCATION </h4>
                                    <p class="narrow text-center">

                                        <span>
                                            <i>Address : </i>{{ $setting->address }}
                                        </span>

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="contact">
                                    <h4 class="head text-center text_color">CONTACT ME </h4>

                                    <p class="narrow text-center">
                                        <span>
                                            <i>EMAIL : </i>{{ $setting->email }}
                                        </span>
                                        <span>
                                            <i>MOBILE : </i>{{ $setting->phone }}
                                        </span>
                                        <span>
                                            <i>SKYPE : </i>{{ $setting->skype }}
                                        </span>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client-feedback-sec">
        <div class="container">
            <div class="row pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="col-md-12 text-center">
                    <h1>CLIENT TESTIMONIALS</h1>
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            @foreach($testimonials as $testimonial)
                            <li data-target="#demo" data-slide-to="{{$loop->index}}" class="{{  $loop->index == 0? 'active':'' }}"></li>
                           @endforeach
                        </ul>
                        <div class="carousel-inner">
                            @foreach($testimonials as $testimonial)
                            <div class="carousel-item {{  $loop->index == 0? 'active':'' }}">
                                <h4>
                                    "{{ $testimonial->comment }}"
                                </h4>
                                <div class="user-img text-right">
                                    <img src="{{ asset('images/testimonial_image/'.$testimonial->image) }}" alt="" class="img-circle image-responsive rounded-circle client_image"/>
                                    <h5 class="">{{ $testimonial->client_name }}</h5>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>

    <section id="contact-me">
        <div class="overlay">
            <div class="container">
                <div class="aligh-self-center pt-5">
                    <h1>CONTACT ME</h1>
                    <div class=" move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="row">
                            <div class="col-md-6">
                                <p>I am expert in Web Design & Development, Software Development, Ecommerce Development With Raw PHP and Laravel</p>
                                <h3>MY LOCATION</h3>
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
                    </div>
                </div>
            </div>
        </section>

        <section class="p-0 footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-light">&copy; {{ $setting->footer_text }}
                            <a href="http://binarytheme.com" class="text-warning" target="_blank">{{ $setting->name }}</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="move-me">
        <a href="#navbar" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>