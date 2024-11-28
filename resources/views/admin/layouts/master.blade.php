@php $setting = App\Models\Setting::orderBy('id','desc')->first() @endphp
@include('admin.partials.header')
@include('admin.partials.navbar')
@include('admin.partials.sidebar')
@yield('content')
@include('admin.partials.footer')
