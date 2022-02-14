<div class="sub-card-container">
  <div class="container">
    <div class="container-content">
      <section>
        <h2>Talent</h2>
        <ul class="list">
          <li class="list-item">
            <span class='title-txt'>Art by:</span>
            <div class="item-txt">
            @foreach ($card['artists'] as $art)
                <a href="#">
                  {{$art}}
                  @if ($art !== last($card['artists']))
                      ,
                  @endif
                </a>
            @endforeach
            </div>
          </li>
          <li class="list-item">
            <span class='title-txt'>Written by:</span>
            <div class="item-txt">
              @foreach ($card['writers'] as $wri)
              <a href="#">
                {{$wri}}
                @if ($wri !== last($card['writers']))
                ,
                @endif
              </a>
              @endforeach
            </div>
          </li>
        </ul>
      </section>
      <section>
        <h2>Specs</h2>
        <ul class="list">
          <li class="list-item">
            <span class='title-txt'>Series:</span>
            <div class="item-txt">
              <a href="#">
                {{$card['series']}}
              </a>
            </div>
          </li>
          <li class="list-item">
            <span class='title-txt'>U.S. Price:</span>
            <div class="item-txt">
              <span>
                {{$card['price']}}
              </span>
            </div>
          </li>
          <li class="list-item">
            <span class='title-txt'>On Sale Date: </span>
            <div class="item-txt">
              <span>
                {{$card['sale_date']}}
              </span>
            </div>
          </li>
        </ul>
      </section>
    </div>
    {{-- barra icone (in unico file img gestito con css(_card.info))) --}}
    <div class="link-bar">

    </div>
  </div>
</div>