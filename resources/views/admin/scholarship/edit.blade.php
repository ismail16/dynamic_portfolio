@extends('admin.layouts.master')
@section('title','Create Edit Scholarship')

@push('css')

@endpush

@section('content')
<section class="content">
    <div class="row">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
        <div class="col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endforeach
        @endif
        <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{route('admin.scholarship-or-award.update',$scholarship->id )}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Scholarship/Award Name <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="name" value="{{ $scholarship->name }}" required class="form-control form-control-sm w-100" placeholder="Scholarship/Award Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Scholarship/Award Title <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="title" value="{{ $scholarship->title }}" required class="form-control form-control-sm w-100" placeholder="Scholarship/Award Title">
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Institution Name <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="institution" value="{{ $scholarship->institution }}" required class="form-control form-control-sm w-100" placeholder="Institution Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Wining Year <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="win_year" value="{{ $scholarship->win_year }}" required class="form-control form-control-sm w-100" placeholder="Passing Year">
                                </div>
                            </div>

                            <div class="col-md-12 pb-1">
                                <label class="control-label mb-0">Description</label>
                                <div class="">
                                    <textarea name="description" class="form-control form-control-sm w-100">{{ $scholarship->description }}</textarea> 
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Certificate Image/PDF</label>
                                 <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" name="certificate" class="form-control form-control-sm w-100">
                                    </div>
                                    <div class="col-md-4">
                                        @if ($scholarship->certificate)
                                            <a href="{{ asset('images/scholarship_image/'.$scholarship->certificate)}}" target="_blank">Show Resume</a>
                                            @else
                                            <span>Not Upload Yet</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Status</label>
                                <div class="row">
                                    <div class="col-md-3 pl-4">
                                        <input type="radio" name="status" value="1" {{$scholarship->status == 1 ? 'checked':''}} required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="status" value="0" {{$scholarship->status == 0 ? 'checked':''}} class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.scholarship-or-award.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Certificates</a>

                        <div class="float-right">
                            <a href="{{route('admin.scholarship-or-award.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
                            <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-sync-alt"></i> Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection


@push('scripts')

@endpush
