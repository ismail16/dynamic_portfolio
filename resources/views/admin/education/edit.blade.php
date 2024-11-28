@extends('admin.layouts.master')
@section('title','Create New Certificates')

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
                <form method="POST" action="{{route('admin.education.update', $education->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Exam Name</label>
                                <div class="">
                                    <input type="text" name="exam_name" value="{{ $education->exam_name }}" required class="form-control form-control-sm w-100" placeholder="Exam Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Exam Short Code</label>
                                <div class="">
                                    <input type="text" name="exam_short_code" value="{{ $education->exam_short_code }}" required class="form-control form-control-sm w-100" placeholder="Exam Short Code">
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Institution Name</label>
                                <div class="">
                                    <input type="text" name="institution_name" value="{{ $education->institution_name }}" required class="form-control form-control-sm w-100" placeholder="Institution Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Passing Year</label>
                                <div class="">
                                    <input type="text" name="passing_year" value="{{ $education->passing_year }}" required class="form-control form-control-sm w-100" placeholder="Passing Year">
                                </div>
                            </div>

                            <div class="col-md-12 pb-1">
                                <label class="control-label mb-0">Description</label>
                                <div class="">
                                    <textarea name="description" class="form-control form-control-sm w-100">{{ $education->description }}</textarea> 
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Certificate Image</label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input type="file" name="certificate_image" class="form-control form-control-sm w-100">
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('images/certificate_image/'.$education->certificate_image)}}" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Status</label>
                                <div class="row">
                                    <div class="col-md-3 pl-4">
                                        <input type="radio" name="status" value="1" {{$education->status == 1 ? 'checked':''}} required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="status" value="0" {{$education->status == 0 ? 'checked':''}} class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.education.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Certificates</a>

                        <div class="float-right">
                            <a href="{{route('admin.education.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
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
