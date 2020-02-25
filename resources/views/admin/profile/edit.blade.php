@extends('admin.layouts.master')
@section('title','Setting')

@push('css')

@endpush

@section('content')
<style type="text/css">
    .profile_image_edit{
        height:50px;
        width: 100px;
    }
    .file_input_sm{
        font-size: 11px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">

                    <div class="card-body">
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
                                        <label class="mb-0">Profile Image</label>
                                        <div class="align-self-center">
                                            <input type="file" name="image1" onchange="readliveImagebrows(this);"  class="form-control form-control-sm file_input_sm">
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-self-end">
                                        @if ($setting->image1)
                                            <img id="imageBrowsLive" src="{{ asset('images/profile_image/'.$setting->image1) }}"  class="img-fluid profile_image_edit border">
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
                                            <img id="imageBrowsLive2" src="{{ asset('images/profile_image/'.$setting->image2) }}"  class="img-fluid profile_image_edit border">
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
                                    <input type="file" name="resume_file" class="form-control form-control-sm file_input_sm">
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
