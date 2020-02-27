<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="icon" href="{{ asset('frontend_assets/img/smile.jpg')}}" type="image/png">
    <link rel="icon" href="{{ asset('frontend_assets/img/Social/Smile.png')}}" type="image/png">
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Ismail Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="{{ asset('frontend_assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/animate.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/prettyPhoto.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/styleSwitcher.css')}}" rel="stylesheet" />
    <link href="{{ asset('frontend_assets/css/style.css')}}" rel="stylesheet" />

    <link href="{{ asset('frontend_assets/css/themes/pink.css')}}" id="mainCSS" rel="stylesheet" />
    <!-- <link href="{{ asset('frontend_assets/css/themes/green.css')}}" id="mainCSS" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('frontend_assets/css/themes/brown.css')}}" id="mainCSS" rel="stylesheet" /> -->
    <!-- <link href="{{ asset('frontend_assets/css/themes/blue.css')}}" id="mainCSS" rel="stylesheet" /> -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
</head>
<body>
    <nav class="navbar navbar-expand-lg static-top ">
        <div class="container">
            <a class="navbar-brand p-0" href="#">
                <img src="{{ asset('frontend_assets/img/smile.jpg')}}" width="120px" height="60px" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="mr-4">
                        <a href="#skill-sec" class="text-light" data-wow-duration="1s" data-wow-delay=".1s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".2s"><i class="fa fa-info icon-round icon-round text-light"></i> ABOUT ME</small>
                        </a>
                    </li>
                    <li class="mr-4">
                        <a href="#portfolio-sec" class="text-light" data-wow-duration="1s" data-wow-delay=".5s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".6s"><i class="fa fa-briefcase icon-round text-light"></i> PORTFOLIO </small>
                        </a>
                    </li> 
                    <li class="mr-4">
                        <a href="#testimonial-main" class="text-light" data-wow-duration="1s" data-wow-delay=".3s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".4s"><i class="fa fa-graduation-cap icon-round text-light" aria-hidden="true"></i> EDUCATION</small>
                        </a>
                    </li>
                    <li class="mr-4">
                        <a href="#hire-sec" class="text-light" data-wow-duration="1s" data-wow-delay=".7s">
                            <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-paper-plane-o icon-round text-light"></i> HIRE ME</small>
                        </a>
                    </li>

                    @if (Route::has('login'))
                    @auth

                    <li class="mr-4"><a class="text-light" data-wow-duration="1s" data-wow-delay=".7s" href="{{ route('admin.dashboard') }}" >

                        <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-home icon-round text-light "></i> Dashboard</small>
                    </a></li>

                    <li class="mr-4"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                        <small class="wow bounceIn animated font-weight-bold" data-wow-duration="1s" data-wow-delay=".8s"><i class="fa fa-key icon-round text-light"></i> Logout</small>
                    </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
                            <div id="remember" class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                        </form>

                        <a href="#" class="forgot-password text_color">
                            Forgot the password?
                        </a>
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
                    <a href="#skill-sec" class="btn custom-btn-one btn-lg wow bounceIn animated pointer" data-wow-duration="1s" data-wow-delay=".8s">MORE ABOUT ME</a>
                </div>

            </div>

        </div>
    </div>
</div>

<section id="skill-sec">
    <div class="overlay">
        <div class="container">
            <div class="row pad-top-bottom move-me" style="background-color: #000; color: #fff; opacity: .96;">
                <div class="col-lg-4 col-md-4 col-sm-4 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                    <img src="{{ asset('frontend_assets/img/ismail2.jpg')}}" class="main-img-2 img-circle wow bounceIn animated animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: bounceIn;" height="200px" width="200px">

                    <h6 class="text_color">WHAT TO KNOW, ABOUT ME ?</h6>
                    <div class="color-strip"></div>
                    <div class="personal-information">
                        <ul style="margin-left: -35px;">
                            <li><span>Name : </span>{{ $setting->name }}</li>
                            <li><span>Age : </span>{{ $setting->age }} Years</li>
                            <li><span>Phone : </span>{{ $setting->phone }}</li>
                            <li><span>Email : </span>{{ $setting->email }}</li>
                            <li><span>Address : </span>{{ $setting->address }}</li>
                        </ul>
                    </div>

                    <div class="social-icon">
                        <a href="https://www.facebook.com/sheikh.smile" target="_blank">
                            <img src="{{ asset('frontend_assets/img/Social/facebook.png')}}" alt="" width="50px" />
                        </a>
                        <a href="https://www.linkedin.com/in/ismail-hossain-7b8453139/" target="_blank">
                            <img src="{{ asset('frontend_assets/img/Social/linkind.png')}}" width="50px"  alt=""  style="border-radius: 30px;" />
                        </a>
                        <a href="https://twitter.com/ismail__hossain" target="_blank">
                            <img src="{{ asset('frontend_assets/img/Social/twitter.png')}}" alt="" width="50px"  />
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                    <h3 class="text_color">About me</h3>
                    <p>{{ $setting->my_self }}</p>
                    <h2 class="text_color">Skills</h2>
                    @foreach($skills as $skill)
                    <div class="progress skill-bar mb-1">
                        <div class="progress-bar {{ $skill->percentage < 30 ? 'bg-danger' : '' }} {{ $skill->percentage < 40 ? 'bg-warning' : '' }} {{ $skill->percentage < 51 ? 'bg-info' : '' }} {{ $skill->percentage > 60 ? 'bg-success' : '' }}" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100">
                            <span class="skill">{{ $skill->name }} <i class="val"> {{ $skill->percentage }} %</i></span>
                        </div>
                    </div>
                    @endforeach
                    <a href="{{asset('images/profile/'.$setting->resume_file)}}" target="_blank" class="btn btn-style-two btn-lg pointer mt-3">DOWNLOAD RESUME (.pdf file)</a>               
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SKILL SECTION END-->

<section id="portfolio-sec" style="background-color: #c0cad4;">
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
            <div class="col-md-4 filter {{ $portfolio->category_id }} wow bounceIn animated"  style="margin-top: 5px;">
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

            <!-- <div class="col-md-4 filter laravel wow bounceIn animated" style="margin-top: 5px;">
                <div class="each-item">
                    <img class="port-image" src="{{ asset('frontend_assets/img/portfolio/small/2.png')}}"/>
                    <div class="cap1">
                        <p>Title: Ecommerce</br> Background: html5, css3, bootstrap, js, Jquery, json, php, mysql</br>
                        Framework: Laravel</p>
                    </div>
                    <div class="cap2">
                        <a class="_preview" href="http://ismail-hossain.com/LaravelE-commerce" target="_blank"><i class="fa fa-eye"></i>SEE PROJECT </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 filter webapp wow bounceIn animated" style="margin-top: 5px;">
                <div class="each-item">
                    <img class="port-image" src="{{ asset('frontend_assets/img/portfolio/small/4.png')}}"/>
                    <div class="cap1">
                        <p>Shopify App</br> Background: Shopify Polaris, html5, css3, bootstrap, js, Jquery, json, php, mysql </br>
                        Framework: MVC (Based)</p>
                    </div>
                    <div class="cap2">
                        <a class="_preview" href="https://apps.shopify.com/rocket-upsell-1" target="_blank"><i class="fa fa-eye"></i>SEE APP </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 filter laravel wow bounceIn animated" style="margin-top: 5px;">
                <div class="each-item">
                    <img class="port-image" src="{{ asset('frontend_assets/img/portfolio/small/5.png')}}"/>
                    <div class="cap1">
                        <p>Title: Ecommerce</br> Background: html5, css3, bootstrap, js, Jquery, Ajax, json, php, mysql</br>
                        Framework: Laravel 5.7</p>
                    </div>
                    <div class="cap2">
                        <a class="_preview" href="http://ismail-hossain.com/LaravelE-commerce5.7/" target="_blank"><i class="fa fa-eye"></i>SEE PROJECT </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


<section id="testimonial-main">
    <div class="_overlay" style="background: rgba(0, 0, 0, 0.80); min-height: 570px; padding-top: 60px;">
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
                                            <i class="fa fa-map-marker h4"></i>
                                        </span>
                                    </a>
                                </li>

                                <li class="mb-2">
                                    <a href="#contact" data-toggle="tab" title="CONTACT ME" class="rounded-circle bg-light p-3 ">
                                        <span class="">
                                            <i class="fa fa-comments-o h4"></i>
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
            <div class="row pad-top  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="alert alert-info text-center">


                        <!-- <h4 class="media-heading"><strong>5 USD</strong> / HOUR</h4> -->
                        <p class="text_color">
                            BASIC
                        </p>
                        <a href="#hire-sec" class="btn btn-info">BUY PLAN NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="alert alert-success text-center">


                        <!-- <h4 class="media-heading"><strong>1000 USD</strong> / MONTH</h4> -->
                        <p class="text_color">
                            PREMIUM
                        </p>
                        <a href="#hire-sec" class="btn btn-success ">BUY PLAN NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="alert alert-info text-center">


                        <!-- <h4 class="media-heading"><strong>10000 USD</strong> / YEAR</h4> -->
                        <p class="text_color">
                            UNLIMITED
                        </p>
                        <a href="#hire-sec" class="btn btn-info">BUY PLAN NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL SECTION END-->

<section id="resume-sec" style="background-color: #c0cad4;">
    <div class="container">
        <div class="row pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
            <div class="col-md-12 text-center">
                <h1>CLIENT TESTIMONIALS</h1>

                <div id="demo" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <h4>
                                "Great cooperation and understanding!Great cooperation and understanding!Great cooperation and understanding!"
                            </h4>
                            <div class="user-img pull-right">
                                <img src="{{ asset('frontend_assets/img/user2.png')}}" alt="" class="img-circle image-responsive" />
                                <h5 class="">Lorem Dolor</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <h4>
                                "Great cooperation and understanding!Great cooperation and understanding!Great cooperation and understanding!"
                            </h4>
                            <div class="user-img pull-right">
                                <img src="{{ asset('frontend_assets/img/user2.png')}}" alt="" class="img-circle image-responsive" />
                                <h5 class="">Lorem Dolor</h5>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <h4>
                                "Great cooperation and understanding!Great cooperation and understanding!Great cooperation and understanding!"
                            </h4>
                            <div class="user-img pull-right">
                                <img src="{{ asset('frontend_assets/img/user2.png')}}" alt="" class="img-circle image-responsive" />
                                <h5 class="">Lorem Dolor</h5>
                            </div>
                        </div>

                    </div>

                </div>


            </div>

        </div>
    </div> 
</section>


<section id="hire-sec">
    <div class="overlay">
        <div class="container aligh-self-center">
            <h1>HIRE ME</h1>
            <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="col-md-6">

                    <p>I am expert in Web Design & Development, Software Development, Ecommerce Development With Raw PHP and Laravel</p>

                    <h3>MY LOCATION</h3>
                    <p><i>ADDRESS :</i> {{ $setting->address }}</p>
                </div>
                <div class="col-sm-6">
                    <form method="POST" action="{{ route('contact.post' )}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" required="required" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn custom-btn-one ">CONTACT ME </button>
                        </div>

                    </form>
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
<!-- HIRE SECTION END-->

<div class="move-me">
    <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="{{ asset('frontend_assets/js/jquery.easing.min.js')}}"></script>
<!--  WOW ANIMATION SCRIPTS -->
<script src="{{ asset('frontend_assets/js/wow.min.js')}}"></script>
<!-- EASY PIE CHART SCRIPTS -->
<script src="{{ asset('frontend_assets/js/jquery.easypiechart.min.js')}}"></script>
<!-- PRETTY PHOTO SCRIPTS -->
<script src="{{ asset('frontend_assets/js/jquery.prettyPhoto.js')}}"></script>
<!--  STYLE SWITCHER SCRIPTS -->
<script src="{{ asset('frontend_assets/js/styleSwitcher.js')}}"></script>
<!--  CUSTOM SCRIPTS -->
<script src="{{ asset('frontend_assets/js/custom.js')}}"></script>

</body>
</html>
