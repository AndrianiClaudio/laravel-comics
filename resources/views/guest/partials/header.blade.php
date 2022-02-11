<header class="header">
  <div class="header-top">
    <div class="main-container">
      dc power visa
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
            <li>
              <a href="{{route('characters')}}">
                Characters
              </a>
            </li>
            <li>
              <a href="{{route('comics')}}">
                comics
              </a>
            </li>
            <li>
              <a href="{{route('movies')}}">
                movies
              </a>
            </li>
            <li>
              <a href="{{route('tv')}}">
                tv
              </a>
            </li>
            <li>
              <a href="{{route('collectibles')}}">
                collectibles
              </a>
            </li>
            <li>
              <a href="{{route('fans')}}">
                fans
              </a>
            </li>
            <li>
              <a href="{{route('news')}}">
                news
              </a>
            </li>
            <li>
              <a href="{{route('shop')}}">
                shop
              </a>
            </li>
          </ul>
        </nav>
        {{-- input search --}}
        <input type="text" name="input-search" id="input-search" placeholder="Search">
      </div>
    </div>
  </div>
</header>