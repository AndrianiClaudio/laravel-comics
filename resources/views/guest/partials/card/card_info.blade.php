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
    <div class="abs-top">
      <a href="#">COMIC BOOK</a>
    </div>
    <div class="abs-bottom">
      <a href="#">VIEW GALLERY</a>
    </div>
  </div>
@endsection
  @include('guest.layout.card')
@endsection
@section('sub_content')
  @include('guest.layout.card_sub')
@endsection