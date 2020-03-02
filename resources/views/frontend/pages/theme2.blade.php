<style type="text/css">
    .image2{
        height: 200px;
        width: 200px;
    }
</style>
<nav class="navbar navbar-expand-lg bg_color fixed-top" id="sideNav">
    <a class="navbar-brand" href="#page-top">
        <span class="d-block d-lg-none">Clarence Taylor</span>
        <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2 image2" src="{{ asset('images/profile/'.$setting->image1)}}" alt="">
        </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-light" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#education">Education</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#skills">Skills</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#awards">Awards/Scholarship</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
        <div class="w-100">
            <img src="{{ asset('images/profile/'.$setting->image2)}}" class="main-img-2 img-circle wow bounceIn animated animated image2" alt="" >
            <h3 class="mb-0 text_color">I'm {{ $setting->name }}</h3>
            <div class="subheading mb-5">
                {{ $setting->title }}
            </div>
            <p class="lead mb-5">{{ $setting->my_self }}</p>
            <div class="social-icons">
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
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
        <div class="w-100">
            <h2 class="mb-5 text_color">Experience</h2>
            @if(count($experiences) > 0)
                @foreach($experiences as $experience)
                    <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="resume-content">
                            <h3 class="mb-0">{{ $experience->job_title }}</h3>
                            <div class="subheading mb-3">{{ $experience->company }}</div>
                            <p>{{ $experience->job_description }}</p>
                        </div>
                        <div class="resume-date text-md-right">
                            <span class="text-primary">{{ $experience-> start_at_date }} - {{ $experience-> end_at_date == '' ? 'Current' : $experience-> end_at_date }}</span>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text text_color-center">
                    <i class="bg-warning p-4"> Have No Experience </i>
                </h2>
            @endif
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
        <div class="w-100">
            <h2 class="mb-5 text_color">Education</h2>
            @foreach($educations as $education)
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">{{ $education->institution_name }}</h3>
                        <div class="subheading mb-3">{{ $education->exam_short_code }}</div>
                        <div>{{ $education->exam_name }}</div>
                        <p>{{ $education->description}}</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">{{ $education->passing_year }}</span>
                    </div>
                </div>
            @endforeach 
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
        <div class="w-100">
            <h2 class="mb-5 text_color">Skills</h2>
            <div class="subheading mb-3">Programming Languages &amp; Tools</div>
            <ul class="fa-ul mb-0">
                @foreach($skills as $skill)
                    <li><i class="fa-li fa fa-check"></i>{{ $skill->name }}, {{ $skill->percentage }}%</li>
                @endforeach
            </ul>
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5 text_color">Scholarship or Awards</h2>
            <ul class="fa-ul mb-0">

                @foreach($scholarships as $scholarship)
                <li>
                    <i class="fa-li fa fa-trophy text-warning"></i>"{{ $scholarship->title }}" - "{{ $scholarship->institution }}" - "{{ $scholarship->win_year }}"</li>
                @endforeach
            </ul>
        </div>
    </section>
    <hr>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
        <div class="w-100">
            <h2 class="mb-5 text_color">Scholarship or Awards</h2>
            <div class="row">
                @foreach($portfolios as $portfolio)
                    <div class="col-md-4 border m-2">
                        <img class="img-fluid" src="{{ asset('images/portfolio_image/'.$portfolio->portfolio_image) }}"/>
                        <div class="cap1">
                            <p>{{  $portfolio->title }} </p>
                            {!! $portfolio->description !!}
                        </div>
                        <div class="cap2">
                            <a class="_preview" href="{{ $portfolio->link }}" target="_blank"><i class="fa fa-eye"></i>SEE DEMO </a>
                        </div>
                    </div> 
                @endforeach      
            </div>
        </div>
    </section>
</div>
