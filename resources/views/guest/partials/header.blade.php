<header class="header">
  <div class="header-top">
    <div class="container">
      <div class="container-content">
        <ul>
          <li>
            <a href="#">DC POWER<span class="sup-text">SM</span> VISA&reg;</a>
          </li>
          <li>
            <a href="#">ADDITIONAL DC SITES <i class="fa-solid fa-sort-down"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="header-bottom">
    <div class="container">
      <div class="container-content">
        {{-- logo --}}
        <div class="logo">
          <a href="{{route('home')}}">
            <img src="{{asset('img/dc-logo.png')}}" alt="Logo DC" class="logo">
          </a>
        </div>
        {{-- menu di navigazione --}}
        <nav class="navbar">
          <ul>
            <li class="{{'characters' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('characters')}}">
                Characters
              </a>
            </li>
            <li  class="{{'comics' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('comics')}}">
                comics
              </a>
            </li>
            <li  class="{{'movies' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('movies')}}">
                movies
              </a>
            </li>
            <li class="{{'tv' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('tv')}}">
                tv
              </a>
            </li>
            <li class="{{'games' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('games')}}">
                games
              </a>
            </li>
            <li class="{{'collectibles' === route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('collectibles')}}">
                collectibles
              </a>
            </li>
            <li class="{{'fans' === Route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('fans')}}">
                fans
              </a>
            </li>
            <li class="{{'news' === route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('news')}}">
                news
              </a>
            </li>
            <li class="{{'shop' === route::currentRouteName() ? 'active' : ''}}">
              <a href="{{route('shop')}}">
                shop
              </a>
            </li>
          </ul>
        </nav>
        {{-- input search --}}
        <div class="relative-input-search">
          <input type="text" class="input-search" name="input-search" id="input-search" placeholder="Search">
          <i class="fas fa-search absolute-lens"></i>
        </div>
      </div>
      </div>
    </div>
  </div>
</header>