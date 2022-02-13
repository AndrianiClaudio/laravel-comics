<footer class="footer">
  {{-- <div class="footer-main">
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
          {!! config('footer.footer-main.htmlpar') !!}
        </div>
      </div>
    </div>
  </div> --}}
  @include('guest.partials.footer.footer_main')

  @include ('guest.partials.footer.footer_bar')
</footer>