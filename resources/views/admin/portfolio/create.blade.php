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
                <form method="POST" action="{{route('admin.education.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Title <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="title" required class="form-control form-control-sm w-100" placeholder="Exam Short Code">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Category <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="category_id" required class="form-control form-control-sm w-100" placeholder="Exam Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Portfolio Image</label>
                                <div class="row">
                                    <img src="https://high-games.com/wp-content/themes/crystalskull/img/defaults/default.jpg" class="img-fluid col-md-4" alt="" style="width: 100px; height:100px; ">
                                    <input type="file" name="portfolio_image" class="form-control form-control-sm w-100  col-md-8">
                                </div>
                            </div>



                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Link <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="link" required class="form-control form-control-sm w-100" placeholder="Exam Short Code">
                                </div>

                                <label class="control-label mb-0">Status <span class="text-danger">*</span></label>
                                <div class="">
                                    <select name="status" class="form-control form-control-sm">
                                        <option value="">option</option>
                                        <option value="">option</option>
                                        <option value="">option</option>
                                        <option value="">option</option>
                                        
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12 pb-1">
                                <label class="control-label mb-0">Description</label>
                                <div class="">
                                    <textarea name="description" class="form-control form-control-sm w-100"></textarea> 
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.education.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Certificates</a>

                        <div class="float-right">
                            <a href="{{route('admin.education.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
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
