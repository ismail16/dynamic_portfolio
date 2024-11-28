@extends('admin.layouts.master')
@section('title','Social Media Setting')

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
            <form action="{{route('admin.setting-social-media.update',1)}}" method="post" enctype="multipart/form-data">
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
                        <h6 class="text-info text-center">If Not Applicale Any social medial just Blank it and update</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Facebook Link</label>
                                    <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Instagram Link</label>
                                    <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Youtube Link</label>
                                    <input type="text" name="youtube" value="{{ $setting->youtube }}" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Twitter Link</label>
                                    <input type="text" name="twitter" value="{{ $setting->twitter }}" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">LinkedIn Link</label>
                                    <input type="text" name="linkedIn" value="{{ $setting->linkedIn }}" class="form-control form-control-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-1">
                                    <label class="mb-0">Skype Link</label>
                                    <input type="text" name="skype" value="{{ $setting->skype }}" class="form-control form-control-sm">
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
