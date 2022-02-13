<div class="cards">
  <div class="container">
    <div class="container-content">
      <div class="current-series">
        <b>current-series</b>
      </div>
      <div class="container">
        @foreach ($data as $card)
        {{-- per ogni card andro a stampare una ul.card --}}
          <ul class="card">
            {{-- immagine --}}
            <li>
                <img src="{{$card['thumb']}}" alt="{{$card['title']}}" title="{{$card['title']}}">
            </li>
            {{-- titolo --}}
            <li>
              <h2 class="title">
                {{$card['series']}}
              </h2>
            </li>
          </ul>
        @endforeach
      </div>
      <button class="btn">LOAD MORE</button>
    </div>
  </div>
</div>