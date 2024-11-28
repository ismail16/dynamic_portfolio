@extends('admin.layouts.master')
@section('title','Create Edit Testimonial')

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
                <form method="POST" action="{{route('admin.testimonial.update', $testimonial->id )}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Client Name <span class="text-danger">*</span></label>
                                <div class="">
                                    <input type="text" name="client_name" value="{{ $testimonial->client_name }}" required class="form-control form-control-sm w-100" placeholder="Client Name">
                                </div>
                            </div>
                            <div class="col-md-6 pb-1">
                                <div class="row">
                                    <div class="mb-1 col-md-8">
                                        <label class="mb-0">Image</label>
                                        <div class="align-self-center">
                                            <input type="file" name="image" onchange="readliveImagebrows(this);"  class="form-control form-control-sm file_input_sm">
                                        </div>
                                    </div>
                                    <div class="col-md-4 align-self-end">
                                         @if ($testimonial->image)
                                            <img id="imageBrowsLive" src="{{ asset('images/testimonial_image/'.$testimonial->image) }}"  class="img-fluid profile_image_edit border">
                                        @else
                                            <img id="imageBrowsLive" src="https://high-games.com/wp-content/themes/crystalskull/img/defaults/default.jpg" class="img-fluid profile_image_edit" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 pb-1">
                                <label class="control-label mb-0">Comment</label>
                                <div class="">
                                    <textarea name="comment" rows="5" class="form-control form-control-sm w-100">{{ $testimonial->comment }}</textarea> 
                                </div>
                            </div>

                            <div class="col-md-4 pb-1">
                                <label class="control-label mb-0">Status</label>
                                <div class="row">
                                    <div class="col-md-3 pl-4">
                                        <input type="radio" name="status" value="1" required class="form-check-input" {{ $testimonial->status == 1? 'checked':'' }}>
                                        <label class="form-check-label text-success font-weight-bold" for="active">Active</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="radio" name="status" value="0" class="form-check-input" {{ $testimonial->status == 0? 'checked':'' }}>
                                        <label class="form-check-label text-danger font-weight-bold" for="deactive">Deactive</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('admin.testimonial.index')}}" class="btn btn-sm btn-info"> <i class="fa fa-list"></i> Certificates</a>

                        <div class="float-right">
                            <a href="{{route('admin.testimonial.index')}}" class="btn btn-sm btn-secondary mr-2"> Cancel</a>
                                <button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-sync-alt"></i>
                            Update
                        </button>
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
