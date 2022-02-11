{{-- estendi layout base --}}
@extends('guest.layout.base')
{{-- title --}}
@section('documentTitle')
    Home
@endsection
{{-- content --}}
@section('main_content')
  <div class="cards">
    <div class="container">
      @foreach ($data as $card)
      {{-- per ogni card andro a stampare una ul.card --}}
        <ul class="card">
          {{-- immagine --}}
          <li>
              <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
          </li>
          {{-- titolo --}}
          <li>
            <h2 class="title">
              {{$card['series']}}
            </h2>
          </li>
        </ul>
      @endforeach
      <button class="btn">LOAD MORE</button>
    </div>
  </div>
@endsection
@section('sub_content')
    <div class="container-blue">
      DIGITAL ....
    </div>
@endsection