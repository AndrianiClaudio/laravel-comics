<div class="container-blue">
  <div class="container-content">
    <ul>
      @foreach (config('home_sub_content') as $item)
        <li>
          @if ($item['type'] === 'img')
            <img src="{{asset('img/'.$item['src'])}}" alt="{{ucfirst($item['item'])}}">
          @endif
          @if ($item['type'] === 'svg')
            {!! $item['svg'] !!}
          @endif
          <a href="#">{{$item['item']}}</a>
        </li>
      @endforeach
    </ul>
  </div>
</div>