{{-- estendi layout base --}}
@extends('guest.layout.base')
{{-- title --}}
@section('documentTitle')
    Card
@endsection
{{-- content --}}
@section('main_content')
@section('absolute')
<div class="container">
  <div class="container-content">
    <div class="current-series">
      <b>current-series</b>
    </div>
  </div>
</div>
@endsection
  @include('guest.layout.card')
@endsection
@section('sub_content')

  {{-- @include('guest.layout.sub_content') --}}
@endsection