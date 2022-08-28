<html>
  <head>
    <title>@yield('title')</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>
        @yield('style')
    </style>
  </head>

  <body>
    <div id="app" class="row">
        <div class="col-2"></div>
        <div class="col-8">@yield('contents')</div>
        <div class="col-2"></div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
  </body>
</html>
