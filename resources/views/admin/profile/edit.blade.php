@extends('admin.layouts.master')
@section('title','Setting')

@push('css')

@endpush

@section('content')

<div class="container">
    <div class="row">
        @if(session()->has('message'))
            <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                    {{session('message')}}
                    <button type="button" class="close ml-4 text-danger" data-dismiss="alert">&times;</button>
                </div>
            </div>
        @endif
        <div class="col-12">
            <form action="{{route('admin.setting-profile.update',1)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">

                    <div class="card-body">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="col-lg-12 col-md-12 col-xl-12 justify-content-center">
                                    <div class="alert alert-danger text-center pr-3 pl-3 p-1 mb-1" role="alert">
                                        {{$error}}
                                        <button type="button" class="close ml-4" data-dismiss="alert">&times;</button>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Name</label>
                                    <input type="text" name="name" value="{{ $setting->name }}" class="form-control form-control-sm">
                                </div>

                                <div class="mb-1">
                                    <label class="mb-0">Title </label>
                                    <input type="text" name="title" value="{{ $setting->title }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="mb-1 col-md-9">
                                        <label class="mb-0">Profile Image 1</label>
                                        <div class="align-self-center">
                                            <input type="file" name="image1" onchange="readliveImagebrows(this);"  class="form-control form-control-sm file_input_sm">
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-self-end">
                                        @if ($setting->image1)
                                            <img id="imageBrowsLive" src="{{ asset('images/profile/'.$setting->image1) }}"  class="img-fluid profile_image_edit border">
                                        @else
                                            <img id="imageBrowsLive" src="https://high-games.com/wp-content/themes/crystalskull/img/defaults/default.jpg" class="img-fluid profile_image_edit" alt="">
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-1 col-md-9">
                                        <label class="mb-0">Profile Image 2</label>
                                        <div class="align-self-center">
                                            <input type="file" name="image2" onchange="readliveImagebrows2(this);"  class="form-control form-control-sm file_input_sm">
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-self-end">
                                        @if ($setting->image2)
                                            <img id="imageBrowsLive2" src="{{ asset('images/profile/'.$setting->image2) }}"  class="img-fluid profile_image_edit border">
                                        @else
                                            <img id="imageBrowsLive2" src="https://high-games.com/wp-content/themes/crystalskull/img/defaults/default.jpg" class="img-fluid profile_image_edit" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Age</label>
                                    <input type="text" name="age" value="{{ $setting->age }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Phone</label>
                                    <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Email</label>
                                    <input type="email" name="email" value="{{ $setting->email }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Address</label>
                                    <textarea name="address" class="form-control form-control-sm" rows="1"> {{ $setting->address }} </textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Website</label>
                                    <input type="text" name="website" value="{{ $setting->website }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Resume File </label>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input type="file" name="resume_file" class="form-control form-control-sm file_input_sm">
                                        </div>
                                        <div class="col-md-3">
                                            @if ($setting->resume_file)
                                            <a href="{{ asset('/images/profile/'.$setting->resume_file)}}" target="_blank">Show Resume</a>
                                            @else
                                            <span>Not Upload Yet</span>
                                            @endif
                                        </div>
                                    </div>                                    
                                </div>
                            </div>                           

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="mb-0">My Self</label>
                                    <textarea name="my_self" class="form-control form-control-sm" rows="3"> {{ $setting->my_self }} </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" role="group" aria-label="Basic example">
                        <a href="{{route('admin.dashboard')}}" type="button" class="btn btn-sm btn-default mr-2">Cancel</a>
                        <button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-sync-alt"></i>
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
</div>
@endsection


@push('scripts')
@endpush
