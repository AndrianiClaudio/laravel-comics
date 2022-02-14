<div class="card-{{$card['id']}}">
  <div class="container">
    <div class="container-content">
      @yield('absolute')
      <div class="container">
        <h2>{{$card['title']}}</h2>
        {{$card['price']}} check avaibi...
        <p>{{$card['description']}}</p>
      </div>
    </div>
  </div>
</div>