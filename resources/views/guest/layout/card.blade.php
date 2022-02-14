<div class="card-{{$card['id']}}">
  <div class="container">
    <div class="container-content">
      @yield('absolute')
      <div class="container">
        <h1 class="title">{{$card['title']}}</h1>
        <div class="price-available">
          <div class="price">
            <label for="price-value">U.S. Price: 
            <span class="price-value" id="price-value">{{$card['price']}}</span></label>
            <span>AVAILABLE</span>
          </div>
          <div class="availability">
            <span>Check Availability</span>
            <i class="fa-solid fa-sort-down"></i>
          </div>
        </div>
        <p class="description">{{$card['description']}}</p>
      </div>
      <div class="adv">
        <span class="title">advertisement</span>
        <img src="{{asset('img/adv.jpg')}}" alt="advertisement">
      </div>
    </div>
  </div>
</div>