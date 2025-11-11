<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="utf-8" />
  <title>@yield('title','Hyperspace')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  {{-- Hyperspace CSS --}}
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}"> 
  <noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
  <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>

  @stack('head')
</head>
<body class="@yield('body_class','is-preload')">

  {{-- BAL OLDALI SIDEBAR minden oldalon --}}
  <section id="sidebar">
    <div class="inner">
      <div class="auth">
        <a href="#" class="button small outline">Bejelentkezés</a>
        <a href="{{ route('register') }}" class="button small primary">Regisztráció</a>  
      </div>

      <nav>
        <ul>
          <li><a href="{{ url('/') }}#intro">Bemutatkozás</a></li>
          <li><a href="{{ url('/') }}#one">Lottók</a></li>
          <li><a href="{{ url('/') }}#two">Diagramm</a></li>
          <li><a href="{{ url('/') }}#three">Adatbázis</a></li>
          <li><a href="{{ url('/') }}#four">Kapcsolat</a></li>
          <li><a href="{{ url('/') }}#five">Admin menü</a></li> 
        </ul>
      </nav>

      <div class="status">
        <span class="muted">Bejelentkezve mint: Vendég</span>
      </div>
    </div>
  </section>


  {{-- JOBB OLDALI TARTALOM --}}
<div id="wrapper">
  <div id="flash-host">
    @include('partials.alerts')
  </div>

  @yield('content')
</div>


  {{-- Footer --}}
  <footer id="footer" class="wrapper style1-alt">
    <div class="inner">
      <ul class="menu">
        <li>&copy; Hyperspace Laravel. Minden jog fenntartva.</li>
        <li>Design: <a href="https://html5up.net" target="_blank" rel="noopener">HTML5 UP</a></li>
      </ul>
    </div>
  </footer>

  {{-- Hyperspace JS --}}
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
  <script src="{{ asset('assets/js/browser.min.js') }}"></script>
  <script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script>
(function () {
  const sb = document.getElementById('sidebar');
  if (!sb) return;
  function place() {
    const w = sb.getBoundingClientRect().width || 320;
    document.documentElement.style.setProperty('--sbw', w + 'px');
  }
  place();
  window.addEventListener('resize', place);
})();

// 3 mp után finoman tűnjön el (ha van toast)
setTimeout(() => {
  const el = document.querySelector('#flash-host .alert');
  if (el) {
    el.classList.add('is-hiding');
    setTimeout(() => el.remove(), 400);
  }
}, 3000);
</script>

  @stack('scripts')
</body>
</html>
