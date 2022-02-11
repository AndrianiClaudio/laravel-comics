{{-- estendi layout base --}}
@extends('guest.layout.base')
{{-- title --}}
@section('documentTitle')
    Home
@endsection
{{-- content --}}
@section('content')
  @foreach ($data as $card)
    <div class="cards">
    {{-- per ogni card andro a stampare una ul.card --}}
      <ul>
        {{-- immagine --}}
        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
        {{-- titolo --}}
        <li><h2 class="title">{{$card['series']}}</h2></li>
      </ul>
    </div>
  @endforeach
@endsection
