<header class="header">
  <div class="header-top">
    <div class="container">
      <div class="container-content">
        <ul>
          @foreach (config('header.header_top.item') as $item)
          <li>
            <a href="#">{!! $item !!}</a>
          </li>
          @endforeach
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
            <img 
            src="{{asset('img/'.config('header.header_bottom.logo.folder'))}}" 
            alt="{{config('header.header_bottom.logo.alt')}}"
            class="{{config('header.header_bottom.logo.class')}}"
            title="Back to Home"
            >
          </a>
        </div>
        <nav class="navbar">
          <ul>
            @php
                $last = last(config('header.header_bottom.navbar.item'));
            @endphp
            @foreach (config('header.header_bottom.navbar.item') as $item)
                <li class="list-item {{$item === Route::currentRouteName() ? 'active' : ''}}">
                  <a href="{{route($item)}}">
                    {{$item}}
                  </a>

                  @if ($item === $last)
                  <i class="fa-solid fa-sort-down"></i>
                  @endif
                </li>
            @endforeach
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