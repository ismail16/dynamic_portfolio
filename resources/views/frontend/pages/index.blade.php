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
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="{{ asset('frontend_assets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
    <link href="{{ asset('frontend_assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- ANIMATE  CSS -->
    <link href="{{ asset('frontend_assets/css/animate.css')}}" rel="stylesheet" />
    <!-- PRETTY PHOTO  CSS -->
    <link href="{{ asset('frontend_assets/css/prettyPhoto.css')}}" rel="stylesheet" />
    <!--  STYLE SWITCHER CSS -->
    <link href="{{ asset('frontend_assets/css/styleSwitcher.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('frontend_assets/css/style.css')}}" rel="stylesheet" />
    <!--PINK STYLE VERSION IS BY DEFAULT, USE ANY ONE STYLESHEET FROM FOUR STYLESHEETS (pink,green,blue and brown) HERE-->
    <link href="{{ asset('frontend_assets/css/themes/pink.css')}}" id="mainCSS" rel="stylesheet" />
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
    <!-- portfolio -->
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="{{ asset('frontend_assets/img/smile.jpg')}}" width="120px" height="60px">
                <!-- <a class="navbar-brand" href="#">Ismail Hossain</a> -->
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right move-me">

                    <li>
                        <a style="display: inline-flex;" href="#skill-sec" class="pad-top-bottom move-me" data-wow-duration="1s" data-wow-delay=".1s">
                            <i class="fa fa-info icon-round icon-round"></i>
                            <h6 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">ABOUT ME</h6>
                        </a>
                    </li>

                    <li>
                        <a style="display: inline-flex;" href="#portfolio-sec" class="pad-top-bottom move-me" data-wow-duration="1s" data-wow-delay=".5s">
                            <i class="fa fa-briefcase icon-round"></i>
                            <h6 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">PORTFOLIO </h6>
                        </a>
                    </li> 

                    <li>
                        <a style="display: inline-flex;" href="#testimonial-main" class="pad-top-bottom move-me" data-wow-duration="1s" data-wow-delay=".3s">
                            <i class="fa fa-graduation-cap icon-round" aria-hidden="true"></i>
                            <!-- <i class="fa fa-briefcase icon-round"></i> -->
                            <h6 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">EDUCATION</h6>
                        </a>
                    </li>

                    <li>
                        <a style="display: inline-flex;" href="#hire-sec" class="pad-top-bottom move-me" data-wow-duration="1s" data-wow-delay=".7s">
                            <i class="fa fa-paper-plane-o icon-round"></i>
                            <h6 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">HIRE ME</h6>
                        </a>
                    </li>

                    <li>
                        <a style="display: inline-flex;"  data-toggle="modal" data-target="#myModal" class="pad-top-bottom move-me" data-wow-duration="1s" data-wow-delay=".7s">
                            <i class="fa fa-key icon-round"></i>
                            <h6 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">LOGIN</h6>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Admin Login</h4>
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

            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div>
    </div>
</div>
</div>
</div>

    <!-- <div class="switcher" style="left:-50px;">
        <a id="switch-panel" class="hide-panel">
            <i class="fa fa-desktop"></i>
        </a>
        <p style="font-size:10px">choose</p>
        <ul class="colors-list">
            <li><a title="Pink" id="pink" class="pink" ></a></li>
            <li><a title="Green" id="green" class="green" ></a></li>
            <li><a title="Blue" id="blue" class="blue" ></a></li>
            <li><a title="Brown" id="brown" class="brown" ></a></li>
        </ul>
    </div>	 -->

    <div id="home-sec">
        <div class="overlay">
            <div class="container">
                <div class="row pad-top-bottom  move-me">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <img src="{{ asset('frontend_assets/img/ismail1.jpg')}}" class="main-img-2 img-circle wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s" alt="" />
                        <h1 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">I'm Ismail Hossain</h1>
                        <h2 class="wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".6s">Software Engineer With 2+ Years Experience</h2>
                        <a href="#skill-sec" class="btn custom-btn-one btn-lg wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".8s">MORE ABOUT ME</a>
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

                        <h6>WHAT TO KNOW, ABOUT ME ?</h6>
                        <div class="color-strip"></div>
                        <div class="personal-information">
                            <ul style="margin-left: -35px;">
                              <li><span>Name : </span>Ismail Hossain</li>
                              <li><span>Age : </span>24 Years</li>
                              <li><span>Phone : </span>8801686254438</li>
                              <li><span>Email : </span>ismail32@gmail.com</li>
                              <li><span>Address : </span>Dhaka,Bangladesh</li>
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
                  
                  <h3>About me</h3>
                  <p>I am professional in Web Design and Development, software development and ICT where has a challenging position and which is rapidly expanding and offers excellent advancement.</p>

                  <h2>Skills</h2>
                  <div class="progress skill-bar ">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <span class="skill">HTML <i class="val">100%</i></span>
                    </div>
                </div>
                
                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" >
                        <span class="skill">CSS<i class="val">90%</i></span>
                    </div>
                </div>
                
                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90">
                        <span class="skill">JavaScript<i class="val">90%</i></span>
                    </div>
                </div>

                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                        <span class="skill">jQuery<i class="val">80%</i></span>
                    </div>
                </div>  

                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                        <span class="skill">AngularJS<i class="val">60%</i></span>
                    </div>
                </div>

                <div class="progress skill-bar ">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90">
                        <span class="skill">PHP <i class="val">90%</i></span>
                    </div>
                </div>

                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" >
                        <span class="skill">Laravel<i class="val">80%</i></span>
                    </div>
                </div>
                
                <div class="progress skill-bar">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="60">
                        <span class="skill">Photoshop<i class="val">60%</i></span>
                    </div>
                </div>  
                <a href="assets/Ismail-CV.pdf" class="btn btn-style-two btn-lg" download>DOWNLOAD RESUME (.pdf file)</a>               
            </div>
        </div>
    </div>
</div>
</section>
<!-- SKILL SECTION END-->

<section id="portfolio-sec" style="background-color: #c0cad4;">
    <div class="container">
        <div class="">
            <h2>Recent Projects</h2>
        </div>
        
        <div>
            <button class="btn btn-primary filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="php">PHP</button>
            <button class="btn btn-default filter-button" data-filter="laravel">Laravel</button>
            <button class="btn btn-default filter-button" data-filter="webapp">WEB APP</button>
        </div>
        <br/>

        <div class="row bounceIn animated" >
            <div class="col-md-4 filter php wow bounceIn animated"  style="margin-top: 5px;">
                <div class="each-item">
                    <img class="port-image" src="{{ asset('frontend_assets/img/portfolio/small/1.png')}}"/>
                    <div class="cap1">
                        <p>Giant Group BD </br> Background: html5, css3, bootstrap, js, Jquery, json, php, mysql </br>
                        Framework: MVC (Based)</p>
                    </div>
                    <div class="cap2">
                        <a class="_preview" href="http://giantbd.com/" target="_blank"><i class="fa fa-eye"></i>SEE PROJECT </a>
                    </div>
                </div>
            </div>         
            
            <div class="col-md-4 filter laravel wow bounceIn animated" style="margin-top: 5px;">
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
            </div>
        </div>
    </div>
</section>


<section id="testimonial-main">
    <div class="_overlay" style="background: rgba(0, 0, 0, 0.80); min-height: 570px; padding-top: 60px;">
        <div class="container">
            <div class="row  move-me">
                <div class="col-lg-12 col-md-12 col-sm-12 wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">

                    <div class="board">
                        <div class="board-inner">
                            <ul class="nav nav-tabs" id="myTab">
                                <li class="active">
                                    <a href="#home" data-toggle="tab" title="PERSONAL DETAILS">
                                        <span class="round-tabs one">
                                            <i class="fa fa-home"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile" data-toggle="tab" title="EDUCATIONAL PROFILE">
                                        <span class="round-tabs two">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#exp" data-toggle="tab" title="EXPERIENCE DETAILS">
                                        <span class="round-tabs three">
                                            <i class="fa fa-recycle"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#location" data-toggle="tab" title="PRESENT LOCATION">
                                        <span class="round-tabs four">
                                            <i class="fa fa-paper-plane-o"></i>
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#contact" data-toggle="tab" title="CONTACT ME">
                                        <span class="round-tabs five">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                    </a>
                                </li>

                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="home">

                                <h4 class="head text-center">PERSONAL DETAILS</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <i>NAME : </i>Ismail Hossain
                                    </span>
                                    <span>
                                        <i>AGE :</i>24 YEARS
                                    </span>
                                    <span>
                                        <i>EXPERIENCE :</i>2 + YEARS TILL DATE
                                    </span>
                                </p>


                            </div>
                            <div class="tab-pane fade" id="profile">

                                <h4 class="head text-center">EDUCATIONAL PROFILE</h4>
                                <p class="narrow text-center">
                                    <span>
                                        <i>B.S.C(CSE) : </i> "City University" - "2016"
                                    </span>
                                    <span>
                                        <i>H.S.C  :</i> "Khalilor Rahman collage" - "2012"
                                    </span>
                                    <span>
                                        <i>Dakhil  :</i> "Goraki Harunia Dakhil Madrasah" - "2009"
                                    </span><br>
                                    <span>
                                        <i>Scholarship(SEIP) : </i> "Creative IT" - "Web design & development" - "3 month  2016"
                                    </span>
                                    <span>
                                        <i>Scholarship(LICT) : </i> "Belancer Web Development(PHP & Laravel)" - "3 month  2016"
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="exp">
                                <h4 class="head text-center">EXPERIENCE DETAILS</h4>
                                <p class="narrow text-center">
                                    
                                    <span>
                                        <i>Work  : </i>"Hektor Technology (Pvt.) Limited" - "Software Engineer" - "January/18 - Current"
                                    </span>
                                    <span>
                                        <i>Internship : </i>"Roselancer" - "Software Engineer(trainee)" - "March 2017 to September 2017"
                                    </span>

                                </p>
                            </div>
                            <div class="tab-pane fade" id="location">
                                <h4 class="head text-center">PRESENT LOCATION </h4>
                                <p class="narrow text-center">
                                   
                                    <span>
                                        <i>LOCALITY : </i>Holding No: 72-Porbo-Rajabazar
                                    </span>
                                    <span>
                                        <i>Area : </i> Panthapath, Dhaka- 1215
                                    </span>
                                    <span>
                                        <i>COUNTRY : </i>Bangladesh
                                    </span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="contact">
                                <h4 class="head text-center">CONTACT ME </h4>

                                <p class="narrow text-center">
                                    <span>
                                        <i>EMAIL : </i>ismail32cse@gmail.com
                                    </span>
                                    <span>
                                        <i>MOBILE : </i>8801686254438
                                    </span>
                                    <span>
                                        <i>SKYPE : </i>ismail.hossain2484
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
                        <p>
                            BASIC
                        </p>
                        <a href="#hire-sec" class="btn btn-info">BUY PLAN NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="alert alert-success text-center">


                        <!-- <h4 class="media-heading"><strong>1000 USD</strong> / MONTH</h4> -->
                        <p>
                            PREMIUM
                        </p>
                        <a href="#hire-sec" class="btn btn-success ">BUY PLAN NOW</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="alert alert-info text-center">


                        <!-- <h4 class="media-heading"><strong>10000 USD</strong> / YEAR</h4> -->
                        <p>
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
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <h1>CLIENT TESTIMONIALS</h1>

                <div id="testimonials" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class=""></li>
                        <li data-target="#testimonials" data-slide-to="1" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">

                                    <h4><i class="fa fa-quote-left"></i>Great cooperation and understanding!<i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="{{ asset('frontend_assets/img/user2.png')}}" alt="" class="img-circle image-responsive" />
                                    </div>
                                    <h5 class="pull-right">Lorem Dolor</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i>Good people, that are easy to communicate with, and does a try to meet your requirements the best way possible.<i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="{{ asset('frontend_assets/img/user.gif')}}" alt="" class="img-circle image-responsive" />
                                    </div>
                                    <h5 class="pull-right">Faucibus luctus</h5>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container center">
                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i>Sed ultricies, libero ut adipiscing fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class="fa fa-quote-right"></i></h4>
                                    <div class="user-img pull-right">
                                        <img src="{{ asset('frontend_assets/img/user2.png')}}" alt="" class="img-circle image-responsive" />
                                    </div>
                                    <h5 class="pull-right">Sed ultricies</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> 
</section>
<!-- RESUME SECTION END-->


<section id="hire-sec">
    <div class="overlay">
        <div class="container">
            <div class="row text-center pad-top-bottom wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <h1>HIRE ME</h1>
                    <p>I am expert in Web Design & Development, Software Development, Ecommerce Development With Raw PHP and Laravel</p>
                    <br />
                </div>

            </div>
            <div class="row  move-me wow bounceIn animated" data-wow-duration="1s" data-wow-delay=".4s">
                <div class="col-lg-6  col-md-6  col-sm-6">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Your Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Your Email" />
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" style="min-height: 100px;" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <a href="#hire-sec" class="btn custom-btn-one ">CONTACT ME</a>
                        </div>

                    </form>
                </div>
                <div class="col-lg-4 col-lg-offset-1  col-md-4  col-md-offset-1 col-sm-4 col-sm-offset-1" id="footer-sec">
                    <h3><strong>MY LOCATION </strong></h3>
                    <p><i>ADDRESS :</i> Holding No: 72-Porbo-Rajabazar Panthapath, Dhaka- 1215 Bangladesh</p>
                    <p>&copy; 2018 All Rights Reserved 
                        <br />
                        <a href="http://binarytheme.com" style="color:#fff;font-size:11px;" target="_blank">Design by : Ismail Hossain</a> </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- HIRE SECTION END-->

    <div class="move-me">
        <a href="#home-sec" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- SCROLL TO TOP SECTION END-->
    <!--  JQUERY CORE SCRIPTS -->
    <script src="{{ asset('frontend_assets/js/jquery-1.10.2.js')}}"></script>
    <!--  BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('frontend_assets/js/bootstrap.js')}}"></script>
    <!--  SCROLL SCRIPTS -->
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
