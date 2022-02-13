<div class="footer-main">
  <div class="container">
    {{-- columns --}}
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
      {{-- paragraph --}}
      <div class="container">
        {!! config('footer.footer-main.htmlpar') !!}
      </div>
    </div>
  </div>
</div>