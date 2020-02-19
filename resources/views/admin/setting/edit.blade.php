@extends('admin.layouts.master')
@section('title','Setting')

@push('css')

@endpush

@section('content')
<div class="container">
    <div class="row">
      <div class="col-12">
          <form action="{{route('admin.setting.update',$setting->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Name </label>
                                <input type="text" name="name" value="{{ $setting->name }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">image </label>
                                <input type="file" name="image" class="form-control form-control-sm col-md-3">
                                <img class="col-md-3" src="{{ asset('images/profile_image/'.$setting->image) }}" alt="" style="height: 40px; width: 40px;">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">logo </label>
                                <input type="file" name="logo" class="form-control form-control-sm col-md-3">
                                <img class="col-md-3" src="{{ asset('images/logo/'.$setting->logo) }}" alt="" style="height: 40px; width: 40px;">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">resume_file </label>
                                <input type="file" name="resume_file" class="form-control form-control-sm col-md-3">
                                <img class="col-md-3" src="{{ asset('resume_file/'.$setting->resume_file) }}" alt="" style="height: 40px; width: 40px;">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">title </label>
                                <input type="text" name="title" value="{{ $setting->title }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">my_self</label>
                                <input type="text" name="my_self" value="{{ $setting->my_self }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Phone</label>
                                <input type="text" name="phone" value="{{ $setting->phone }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Age</label>
                                <input type="text" name="age" value="{{ $setting->age }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Email</label>
                                <input type="email" name="email" value="{{ $setting->email }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Website</label>
                                <input type="text" name="website" value="{{ $setting->website }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Address</label>
                                <input type="text" name="address" value="{{ $setting->address }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Footer Text</label>
                                <input type="text" name="footer_text" value="{{ $setting->footer_text }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Facebook Link</label>
                                <input type="text" name="facebook" value="{{ $setting->facebook }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Instagram Link</label>
                                <input type="text" name="instagram" value="{{ $setting->instagram }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Youtube Link</label>
                                <input type="text" name="youtube" value="{{ $setting->youtube }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Twitter Link</label>
                                <input type="text" name="twitter" value="{{ $setting->twitter }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">LinkedIn Link</label>
                                <input type="text" name="linkedIn" value="{{ $setting->linkedIn }}" class="form-control form-control-sm col-md-8">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group row border m-1">
                                <label class="col-form-label col-md-3">Skype Link</label>
                                <input type="text" name="linkedIn" value="{{ $setting->skype }}" class="form-control form-control-sm col-md-8">
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
<style>
    .form-group{
        margin-bottom: 5px;
    }
</style>
@endsection


@push('scripts')

@endpush
