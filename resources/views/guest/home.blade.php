{{-- estendi layout base --}}
@extends('guest.layout.base')
{{-- title --}}
@section('documentTitle')
    Home
@endsection
{{-- content --}}
@section('main_content')
@section('absolute')
<div class="current-series">
  <b>current-series</b>
</div>
@endsection
  @include('guest.layout.home_content')
@endsection
@section('sub_content')
  @include('guest.layout.sub_content')
@endsection