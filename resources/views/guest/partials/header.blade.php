<header class="header">
  <div class="header-top">
    <div class="main-container">
      <span>dc power visa</span>
      <select name="additional-sites-select" id="additional-sites-select">
        <option value="additional-sites-option-0">ADDITIONAL DC SITES</option>
      </select>
    </div>
  </div>
  <div class="header-bottom">
    <div class="main-container">
      {{-- logo --}}
      <a href="{{route('home')}}">
        <img src="{{asset('img/dc-logo.png')}}" alt="Logo DC" class="logo">
      </a>
      <div class="navbar">
        {{-- menu di navigazione --}}
        <nav>
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
        <div class="input-search">
          <input type="text" name="input-search" id="input-search" placeholder="Search">
          <i class="fas fa-search absolute-lens"></i>
        </div>
      </div>
    </div>
  </div>
</header>