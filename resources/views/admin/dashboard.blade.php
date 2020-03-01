@extends('admin.layouts.master')
@section('title','Admin Dashboard')

@section('content')
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="small-box bg-success">
                    <h4 class="small-box text-center p-1">Education</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2">{{ count($educations) }}</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap pt-3"></i>
                    </div>
                    <a href="{{ route('admin.education.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <h4 class="small-box text-center p-1">Scholarship</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2"> {{ count($scholarships) }}</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-certificate pt-3"></i>
                    </div>
                    <a href="{{ route('admin.scholarship-or-award.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-success">
                    <h4 class="small-box text-center p-1">Experience</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2"> {{ count($experiences) }}</span>
                    </div>
                    <div class="icon">
                        <i class="fas fa-bookmark pt-3"></i>
                    </div>
                    <a href="{{ route('admin.experience.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="small-box bg-warning">
                    <h4 class="small-box text-center p-1">Message</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2"> {{ count($contacts) }}</span>
                    </div>
                    <div class="icon">
                        <i class="far fa-comments pt-3"></i>
                    </div>
                    <a href="{{ route('admin.contact.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-info">
                    <h4 class="small-box text-center p-1">Skills</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2"> {{ count($skills) }}</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-puzzle-piece pt-3"></i>
                    </div>
                    <a href="{{ route('admin.skill.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-box bg-warning">
                    <h4 class="small-box text-center p-1">Portfolios</h4>
                    <div class="inner">
                        <span class="border rounded-circle p-2 h2"> {{ count($portfolios) }}</span>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-briefcase pt-3"></i>
                    </div>
                    <a href="{{ route('admin.portfolio.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>


<!--     <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/profile/'.$setting->image1)}}" alt="User profile picture">
                        </div>
                        <h3 class="profile-username text-center">{{ $setting->name }}</h3>
                        <p class="text-muted text-center">{{ $setting->title }}</p>
                    </div>
                </div>
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                        <p class="text-muted">{{ $setting->address }}</p>
                        <hr>
                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                        <p class="text-muted">
                            @foreach($skills as $skill)
                            <span class="tag tag-danger">{{ $skill->name }}</span>,
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <div class="post">
                                    <div class="user-block">
                                        <img class="img-circle img-bordered-sm" src="{{ asset('images/profile/'.$setting->image2)}}" alt="user image">
                                        <span class="username">
                                            <a href="#">{{ $setting->name }}</a>
                                        </span>
                                        <span class="description">Shared publicly - 7:30 PM today</span>
                                    </div>
                                    <p>
                                        {{ $setting->my_self }}
                                    </p>
                                    <div class="form-group row">
                                        <label class="col-sm-2">Resume</label>
                                        <div class="col-sm-10">
                                            <a href="">{{ $setting->resume_file }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</section>
@endsection