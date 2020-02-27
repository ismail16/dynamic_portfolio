@extends('admin.layouts.master')
@section('title','Create New Experience')

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
                <form method="POST" action="{{route('admin.experience.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Company Name <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="company" required class="form-control form-control-sm w-100" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Job Title <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="job_title" required class="form-control form-control-sm w-100" placeholder="Job Title">
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Start At Job <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="date" name="start_at_date" required class="form-control form-control-sm w-100" placeholder="Start At Job">
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">End At Job <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="date" name="end_at_date" class="form-control form-control-sm w-100" placeholder="End At Job">
                                </div>
                            </div>

                            <div class="col-md-12 pb-1">
                                <label class="control-label mb-0">Job Description</label>
                                <div class="">
                                    <textarea name="job_description" class="form-control form-control-sm w-100"></textarea> 
                                </div>
                            </div>

                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Status</label>
                                <div class="row">
                                    <div class="col-md-3 pl-4">
                                        <input type="radio" name="status" value="1" required class="form-check-input" id="active">
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="status" value="0" class="form-check-input" id="deactive">
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.experience.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Certificates</a>

                        <div class="float-right">
                            <a href="{{route('admin.experience.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
                            <button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Create New</button>
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
