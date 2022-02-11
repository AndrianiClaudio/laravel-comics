<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('documentTitle')</title>
  {{-- fontawesome --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  {{-- link css --}}
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  {{-- header --}}
  @include('guest.partials.header')
  {{-- content --}}
  @yield('main_content')
  @yield('sub_content')
  {{-- footer --}}
  @include('guest.partials.footer')
</body>
</html>