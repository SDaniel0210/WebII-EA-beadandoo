@extends('layouts.app')
@section('title','6-os Lottó – Bemutatkozás')
@section('body_class','is-preload')

@push('head')
<style>
/* --- LOTTÓ KÉPEK MEGJELENÉSE --- */
.spotlights .image img {
    width: 100%;
    height: 350px;          /* egységes magasság */
    object-fit: cover;      /* szép arányos vágás */
    border-radius: 10px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.25);
}
</style>
@endpush

@section('content')

{{-- Wrapper --}}
<div id="wrapper">

  {{-- INTRO – LOTTÓ BEMUTATÁSA --}}
  <section id="intro" class="wrapper style1 fullscreen fade-up">
    <div class="inner">
      <h1>6-os Lottó Információs Központ</h1>
      <p>
        Üdvözöljük a 6-os lottó világában!  
        Itt megtalál minden fontos információt a legfrissebb nyerőszámokról, statisztikákról és sorsolási érdekességekről.
        <br><br>
        Célunk, hogy áttekinthetően és gyorsan elérje a heti sorsolási eredményeket, és jobban megértse a lottózás világát.
      </p>
      <ul class="actions">
        <li><a href="#one" class="button scrolly">Fedezd fel</a></li>
      </ul>
    </div>
  </section>

  {{-- ONE – RÉSZLETES BEMUTATÁS A LOTTÓRÓL --}}
  <section id="one" class="wrapper style2 spotlights">

    <section>
      <a href="#" class="image">
        <img src="{{ asset('images/1.png') }}" alt="Sorsolás" data-position="center center" />
      </a>
      <div class="content">
        <div class="inner">
          <h2>Hogyan működik a 6-os lottó?</h2>
          <p>
            A játékosok 45 számból választanak ki 6-ot. A sorsolás minden héten vasárnap történik.  
            A találatok száma határozza meg a nyereményt, amely akár több milliárd forint is lehet.
          </p>
        </div>
      </div>
    </section>

    <section>
      <a href="#" class="image">
        <img src="{{ asset('images/2.png') }}" alt="Statisztika" data-position="top center" />
      </a>
      <div class="content">
        <div class="inner">
          <h2>Statisztikák és gyakori számok</h2>
          <p>
            Weboldalunk interaktív diagramokkal mutatja meg a leggyakrabban kihúzott számokat,  
            a leghosszabb ideje „kihagyó” számokat, valamint a húzások történetét.
          </p>
        </div>
      </div>
    </section>

    <section>
      <a href="#" class="image">
        <img src="{{ asset('images/3.png') }}" alt="Tippek" data-position="25% 25%" />
      </a>
      <div class="content">
        <div class="inner">
          <h2>Tippek és érdekességek</h2>
          <p>
            Sokan keresnek mintázatokat, statisztikai összefüggéseket, vagy szerencseszámokat.  
            Itt elolvashatod a legérdekesebb lottó történeteket, trükköket és legendákat.
          </p>
        </div>
      </div>
    </section>

  </section>

  {{-- TWO – MIT KÍNÁL AZ OLDAL --}}
  <section id="two" class="wrapper style3 fade-up">
    <div class="inner">
      <h2>Mit találsz az oldalon?</h2>
      <p>Oldalunk célja, hogy gyorsan és átláthatóan informáljon a lottóval kapcsolatban.</p>

      <div class="features">

        <section>
          <span class="icon solid major fa-list-ol"></span>
          <h3>Legfrissebb heti számok</h3>
          <p>Folyamatosan frissítjük a vasárnapi sorsolás után a hivatalos 6-os lottó eredményeket.</p>
        </section>

        <section>
          <span class="icon solid major fa-chart-bar"></span>
          <h3>Interaktív diagramok</h3>
          <p>Nézd meg a húzások gyakoriságát, statisztikáit vagy a ritka számokat vizuálisan!</p>
        </section>

        <section>
          <span class="icon solid major fa-clock"></span>
          <h3>Korábbi sorsolások</h3>
          <p>Visszanézheted az archív eredményeket évekre visszamenőleg.</p>
        </section>

        <section>
          <span class="icon solid major fa-comments"></span>
          <h3>Üzenetküldés</h3>
          <p>Küldj visszajelzést vagy kérdést az üzemeltetőknek!</p>
        </section>

      </div>

      <ul class="actions">
        <li><a href="{{ route('database.index') }}" class="button">Lottó adatok</a></li>
      </ul>

    </div>
  </section>

  {{-- THREE – KAPCSOLAT --}}
  <section id="three" class="wrapper style1 fade-up">
    <div class="inner">
      <h2>Lépj kapcsolatba velünk</h2>
      <p>Ha kérdésed van a lottó adataival vagy az oldal használatával kapcsolatban, írj bátran!</p>

      <div class="split style1">
        <section>
          <form method="post" action="{{ route('messages.store') }}">
            @csrf
            <div class="fields">
              <div class="field half">
                <label for="name">Név</label>
                <input type="text" name="name" id="name" required />
              </div>

              <div class="field half">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required />
              </div>

              <div class="field">
                <label for="message">Üzenet</label>
                <textarea name="body" id="message" rows="5" required></textarea>
              </div>
            </div>

            <ul class="actions">
              <li><button type="submit" class="button submit">Küldés</button></li>
            </ul>
          </form>
        </section>

        <section>
          <ul class="contact">
            <li>
              <h3>Email</h3>
              <a href="mailto:info@lottoweb.hu">info@lottoweb.hu</a>
            </li>
            <li>
              <h3>Telefon</h3>
              <span>+36 30 123 4567</span>
            </li>
            <li>
              <h3>Közösségi média</h3>
              <ul class="icons">
                <li><a href="#" class="icon brands fa-facebook-f"></a></li>
                <li><a href="#" class="icon brands fa-instagram"></a></li>
                <li><a href="#" class="icon brands fa-youtube"></a></li>
              </ul>
            </li>
          </ul>
        </section>

      </div>
    </div>
  </section>

</div>

@endsection
