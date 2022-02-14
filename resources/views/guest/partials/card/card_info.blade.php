{{-- estendi layout base --}}
@extends('guest.layout.base')
{{-- title --}}
@section('documentTitle')
    Card
@endsection
{{-- content --}}
@section('main_content')
@section('absolute')
  <div class="current-series">
    <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
  </div>
@endsection
  @include('guest.layout.card')
@endsection
@section('sub_content')

  {{-- @include('guest.layout.sub_content') --}}
@endsection