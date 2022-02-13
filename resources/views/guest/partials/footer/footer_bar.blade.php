
  <div class="footer-bar">
    <div class="container">
      <div class="container-content">
        <button>{!! config('footer.footer-bar.btn.text') !!}</button>
        <ul>
          @foreach (config('footer.footer-bar.list') as $i => $item)
            <li>
              @if ($i === 'text')
                <a href="#" class="blue-color">
                  {{$item}}
                </a>
              @else
                @if ($i === 'images')
                  @foreach ($item as $src)
                    <a href="#">
                      @php
                          $txt = ucfirst(explode('.',explode('-',$src)[1])[0]);
                      @endphp
                      <img src="{{asset('img/'.$src)}}" alt="{{$txt}}" title="{{$txt}}">
                    </a>
                  @endforeach
                @endif
              @endif
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>