<div class="sub-card-container">
  <div class="container">
    <div class="container-content">
      <section>
        <h2>Talent</h2>
        <ul>
          <li class="list-item">
            <label>Art by:</label>
            @foreach ($card['artists'] as $art)
                <a href="#">
                  {{$art}}
                  @if ($art !== last($card['artists']))
                      ,
                  @endif
                </a>
            @endforeach
          </li>
          <li class="list-item">
            <span>Art by:</span>
            @foreach ($card['writers'] as $wri)
                <a href="#">
                  {{$wri}}
                  @if ($wri !== last($card['writers']))
                      ,
                  @endif
                </a>
            @endforeach
          </li>
        </ul>
      </section>
      <section>
        <h2>Specs</h2>
        <ul>
          <li class="list-item">
            <span>Series:</span>
            <a href="#">
              {{$card['series']}}
            </a>
          </li>
          <li class="list-item">
            <span>U.S. Price:</span>
            <a href="#">
              {{$card['price']}}
            </a>
          </li>
          <li class="list-item">
            <span>On Sale Date: </span>
            <a href="#">
              {{$card['sale_date']}}
            </a>
          </li>
        </ul>
      </section>
    </div>
  </div>
</div>