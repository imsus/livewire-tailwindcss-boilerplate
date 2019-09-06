<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('title')
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('custom-css')
  @stack('custom-js-top')
</head>
<body>
  <div id="app">
    @yield('content')
  </div>
  <script defer src="{{ mix('js/app.js') }}"></script>
  @stack('custom-js-bottom')
  @livewireAssets
</body>
</html>
