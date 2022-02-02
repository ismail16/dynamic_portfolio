@extends('admin.layouts.master')
@section('title','All Contact')

@push('css')

@endpush

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
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">#SL</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Message</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $contact->name }}</td>
                                    <td class="text-center">{{ $contact->email }}</td>
                                    <td class="text-center w-50">{{ $contact->message }}</td>
                                    <td class="text-center">
                                        @if($contact->status == 0)
                                            <a href="{{route('admin.contact.show', $contact->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-eye"></i>
                                            </a>
                                        @else
                                            <a href="{{route('admin.contact.show', $contact->id)}}" class="btn btn-xs btn-success"><i class="fa fa-eye"></i>
                                            </a>
                                        @endif
                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
                                           data-content="{{$loop->index+1}}"><i
                                                    class="fa fa-trash"></i></a>
                                        <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.contact.destroy', $contact->id)}}"
                                              method="post" class="delete hidden"
                                              data-content="{{$contact->id}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
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
