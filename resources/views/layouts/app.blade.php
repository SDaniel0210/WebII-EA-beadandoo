<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8" />
  <title>@yield('title','Hyperspace')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  {{-- Hyperspace CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>

  {{-- Favicon (nálad a public/images alatt van) --}}
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

  @stack('head')
</head>
<body class="@yield('body_class','is-preload')">
  @yield('content')

  {{-- Hyperspace JS --}}
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
  <script src="{{ asset('assets/js/browser.min.js') }}"></script>
  <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  @stack('scripts')
</body>
</html>
