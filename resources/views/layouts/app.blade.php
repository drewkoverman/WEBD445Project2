<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link href="{{ elixir('css/framework.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
    <link href="{{ elixir('css/custom.css') }}" rel="stylesheet">
  </head>
  <body>
    @yield('content')

    <script src="{{ elixir('js/app.js') }}"></script>
  </body>
</html>
