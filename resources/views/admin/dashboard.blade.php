@extends('admin.layouts.master')
@section('title','Admin Dashboard')

@section('content')
<section class="content">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="small-box bg-primary">
                    <p class="small-box text-center">Education</p>
                    <div class="inner">
                        <p>Total - {{ count($educations) }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="small-box bg-info">
                    <p class="small-box text-center">Scholarship</p>
                    <div class="inner">
                        <p>Total - {{ count($scholarships) }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-certificate"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="small-box bg-success">
                    <p class="small-box text-center">Experience</p>
                    <div class="inner">
                        <p>Total - {{ count($experiences) }}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-bookmark"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
            <div class="col-md-2">
                <div class="small-box bg-warning">
                    <p class="small-box text-center">Message</p>
                    <div class="inner">
                        <p>Total - {{ count($contacts) }}</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-comments"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="small-box bg-info">
                    <p class="small-box text-center">Skills</p>
                    <div class="inner">
                        <p>Total - {{ count($skills) }}</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-puzzle-piece"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <div class="small-box bg-warning">
                    <p class="small-box text-center">Portfolios</p>
                    <div class="inner">
                        <p>Total - {{ count($portfolios) }}</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-briefcase"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">

        <div class="row">
            <!-- {{ $setting}} -->
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
                                            <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
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
    </div>
</section>
@endsection