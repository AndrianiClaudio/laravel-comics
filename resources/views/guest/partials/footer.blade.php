<footer class="footer">
  <div class="footer-main">
    <div class="container">
      <div class="container-content">
        {{-- colonna dc comics/shop --}}
        <div class="col">
          {{-- sezione dc comics --}}
          <section>
            <h2>DC COMICS</h2>
            <ul>
              <li>
                <a href="{{route('characters')}}">
                  Characters
                </a>
              </li>
              <li>
                <a href="{{route('comics')}}">
                  Comics
                </a>
              </li>
              <li>
                <a href="{{route('movies')}}">
                  Movies
                </a>
              </li>
              <li>
                <a href="{{route('tv')}}">
                  TV
                </a>
              </li>
              <li>
                <a href="{{route('games')}}">
                  Games
                </a>
              </li>
              <li>
                <a href="{{route('videos')}}">
                  Videos
                </a>
              </li>
              <li>
                <a href="{{route('news')}}">
                  News
                </a>
              </li>
            </ul>
          </section>
          {{-- sezione shop --}}
          <section>
            <h2>SHOP</h2>
            <ul>
              <li>
                <a href="#">Shop DC</a>
              </li>
              <li>
                <a href="#">Shop DC Collectibles</a>
              </li>
            </ul>
          </section>
        </div>
        {{-- colonna dc --}}
        <div class="col">
          <section>
            <h2>DC</h2>
            <ul>
              <li>
                <a href="#">Terms Of Use</a>
              </li>
              <li>
                <a href="#">Privacy policy (New)</a>
              </li>
              <li>
                <a href="#">Ad Choices</a>
              </li>
              <li>
                <a href="#">Advertising</a>
              </li>
              <li>
                <a href="#">Jobs</a>
              </li>
              <li>
                <a href="#">Subscriptions</a>
              </li>
              <li>
                <a href="#">Talent Workshops</a>
              </li>
              <li>
                <a href="#">CPSC Certificates</a>
              </li>
              <li>
                <a href="#">Ratings</a>
              </li>
              <li>
                <a href="#">Shop Help</a>
              </li>
              <li>
                <a href="#">Contact us</a>
              </li>
            </ul>
          </section>
        </div>
        {{-- colonna sites --}}
        <div class="col">
          <section>
            <h2>SITES</h2>
            <ul>
              <li>
                <a href="#">DC</a>
              </li>
              <li>
                <a href="#">MAD Magazine</a>
              </li>
              <li>
                <a href="#">DC Kids</a>
              </li>
              <li>
                <a href="#">DC Universe</a>
              </li>
              <li>
                <a href="#">DC Power Visa</a>
              </li>
            </ul>
          </section>
        </div>
        <div class="container">
          <p>All Site Content TM and &COPY; 2020 DC Entertainment&comma; unless otherwhise <span class="blue-color">noted here</span>. All rights reserved.</p>
          <span class="blue-color">Cookie Settings</span>
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