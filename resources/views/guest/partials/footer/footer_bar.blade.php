
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
                      <img src="{{asset('img/'.$src)}}" alt="">
                    </a>
                  @endforeach
                @endif
              @endif
            </li>
          @endforeach

          {{-- <li>
            <a href="#" class="blue-color">FOLLOW US</a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('img/footer-facebook.png')}}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('img/footer-twitter.png')}}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('img/footer-youtube.png')}}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('img/footer-pinterest.png')}}" alt="">
            </a>
          </li>
          <li>
            <a href="#">
              <img src="{{asset('img/footer-periscope.png')}}" alt="">
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>