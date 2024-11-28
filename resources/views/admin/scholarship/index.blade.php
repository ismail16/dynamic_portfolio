@extends('admin.layouts.master')
@section('title','All scholarship')


@section('content')
    <section class="content">
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
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="{{ route('admin.scholarship-or-award.create') }}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i
                                class="fa fa-plus"></i> Add New</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Scholarship/Award Name</th>
                                    <th>Scholarship/Award Title</th>
                                    <th>Institution</th>
                                    <th>Certificate</th>
                                    <th>Year of Win</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($scholarships as $scholarship)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $scholarship->name }}</td>
                                    <td>{{ $scholarship->title }}</td>
                                    <td>{{ $scholarship->institution }}</td>
                                    <td>
                                        <img src="{{ asset('images/scholarship_image/'.$scholarship->certificate) }}" class="img-fluid table_image" alt="">
                                    </td>
                                    <td>{{ $scholarship->win_year }}</td>
                                    <td>
                                        @if($scholarship->status == 0)
                                            <span class="badge bg-yellow">Inactive</span>
                                            @else
                                            <span class="badge bg-green">Actived</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.scholarship-or-award.edit', $scholarship->id)}}"
                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
                                           data-content="{{$loop->index+1}}"><i
                                                    class="fa fa-trash"></i></a>

                                        <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.scholarship-or-award.destroy', $scholarship->id)}}"
                                              method="post" class="delete hidden"
                                              data-content="{{$scholarship->id}}">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
   
@endpush
