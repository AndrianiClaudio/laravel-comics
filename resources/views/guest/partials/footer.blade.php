<footer class="footer">
  <div class="footer-main">
    <div class="container">
      <div class="container-content">
        @foreach (config('footer.footer-main.cols') as $cols)
            <div class="col">
              @foreach ($cols as $i => $c)
              <section>
                <h2>{{str_replace('_',' ',$i)}}</h2>
                <ul>
                  @foreach($c as $item)
                  <li>
                    <a href="#">{{ucfirst($item)}}</a>
                  </li>
                  @endforeach
                </ul>
              </section>
              @endforeach
            </div>
        @endforeach


        <div class="container">
          <p>All Site Content TM and &COPY; 2020 DC Entertainment&comma; unless otherwhise <a class="blue-color">noted here</a>. All rights reserved.</p>
          <a class="blue-color">Cookie Settings</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bar">
    <div class="container">
      <div class="container-content">
        <button>SIGN-UP NOW!</button>
        <ul>
          <li>
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
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>