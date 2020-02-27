@extends('admin.layouts.master')
@section('title','Payment Confirmation')

@push('css')

@endpush

@section('content')
<div class="container" id="printarea">
    <div class="row">
      <div class="col-12" style="padding: 0px 50px">
              <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="">Name </label>
                                <p>{{ $contact->name }}</p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label class="">Email </label>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="">Message</label>
                                <p>{{$contact->message}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer" role="group" aria-label="Basic example">
                    <a href="{{route('admin.contact.index')}}" type="button" class="btn btn-default mr-2">Cancel</a>
                </div>
            </div>
        </div>
</div>

</div>
</div>
@endsection


@push('scripts')

@endpush
