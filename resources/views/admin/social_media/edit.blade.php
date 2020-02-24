@extends('admin.layouts.master')
@section('title','Social Media Setting')

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
                                <input type="text" name="linkedIn" value="{{ $setting->skype }}" class="form-control form-control-sm">
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
    /*.form-group{
        margin-bottom: 5px;
    }*/
</style>
@endsection


@push('scripts')

@endpush
