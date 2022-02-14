<div class="cards">
  <div class="container">
    <div class="container-content">
      @yield('absolute');
      <div class="container">
        @foreach ($data as $card)
        {{-- per ogni card andro a stampare una ul.card --}}
          <ul class="card">
            {{-- immagine --}}
            <li>
              <a href="{{route('card',$card['id'])}}">
                <img src="{{$card['thumb']}}" alt="{{$card['title']}}" title="{{$card['title']}}">
                {{-- titolo --}}
                <h2 class="title">
                  {{$card['series']}}
                </h2>
              </a>
            </li>
          </ul>
        @endforeach
      </div>
      <button class="btn">LOAD MORE</button>
    </div>
  </div>
</div>