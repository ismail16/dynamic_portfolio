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
            <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
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
                                    <label class="mb-0">Theme</label>
                                    <select name="theme_number" class="form-control form-control-sm">
                                        <option value="theme1"  {{ $setting->theme_number == 'theme1'? 'selected':'' }}>Theme 1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Theme Color </label>
                                    <select name="theme_color" class="form-control form-control-sm">
                                        <option value="pink" {{ $setting->theme_color == 'pink'? 'selected':'' }}>Pink</option>
                                        <option value="brown" {{ $setting->theme_color == 'brown' ? 'selected':'' }}>Brown</option>
                                        <option value="green" {{ $setting->theme_color == 'green' ? 'selected':'' }}>Green</option>
                                        <option value="blue" {{ $setting->theme_color == 'blue' ? 'selected':'' }}>Blue</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Footer Text</label>
                                    <input type="text" name="footer_text" value="{{ $setting->footer_text }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row">
                                    <div class="mb-1 col-md-9">
                                        <label class="mb-0">Logo</label>
                                        <div class="align-self-center">
                                            <input type="file" name="logo" onchange="readliveImagebrows(this);"  class="form-control form-control-sm file_input_sm">
                                        </div>
                                    </div>
                                    <div class="col-md-3 align-self-end">
                                        @if ($setting->logo)
                                        <img id="imageBrowsLive" src="{{ asset('images/logo/'.$setting->logo)}}"  class="img-fluid profile_image_edit">
                                        @else
                                        <img id="imageBrowsLive" src="https://high-games.com/wp-content/themes/crystalskull/img/defaults/default.jpg" class="img-fluid profile_image_edit" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="mb-0">Meta Title</label>
                                    <input type="text" name="meta_title" value="{{ $setting->meta_title }}" class="form-control form-control-sm">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-1">
                                    <label class="mb-0">Meta Description</label>
                                    <textarea name="meta_description" class="form-control form-control-sm">{{ $setting->meta_description }}</textarea>
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
