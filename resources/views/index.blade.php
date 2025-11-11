@extends('layouts.app')
@section('title','Lottószámok oldal')
@section('body_class','is-preload')

@section('content')
  {{-- Sidebar --}}

  {{-- Wrapper --}}
  <div id="wrapper">

    {{-- Intro --}}
    <section id="intro" class="wrapper style1 fullscreen fade-up">
      <div class="inner">
        <h1>Hatoslottó</h1>
        <p>Heti nyerőszámok:
          <a href="https://html5up.net" target="_blank" rel="noopener">HTML5 UP</a><br />
        </p>
      </div>
    </section>

    {{-- One --}}
    <section id="one" class="wrapper style2 spotlights">
      <section>
        <a href="#" class="image">
          <img src="{{ asset('images/pic01.jpg') }}" alt="" data-position="center center" />
        </a>
        <div class="content">
          <div class="inner">
            <h2>Sed ipsum dolor</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
            <ul class="actions">
              <li><a href="#" class="button">Learn more</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section>
        <a href="#" class="image">
          <img src="{{ asset('images/pic02.jpg') }}" alt="" data-position="top center" />
        </a>
        <div class="content">
          <div class="inner">
            <h2>Feugiat consequat</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
            <ul class="actions">
              <li><a href="#" class="button">Learn more</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section>
        <a href="#" class="image">
          <img src="{{ asset('images/pic03.jpg') }}" alt="" data-position="25% 25%" />
        </a>
        <div class="content">
          <div class="inner">
            <h2>Ultricies aliquam</h2>
            <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus.</p>
            <ul class="actions">
              <li><a href="#" class="button">Learn more</a></li>
            </ul>
          </div>
        </div>
      </section>
    </section>

    {{-- Two --}}
    <section id="two" class="wrapper style3 fade-up">
      <div class="inner">
        <h2>What we do</h2>
        <p>Phasellus convallis elit id ullamcorper pulvinar. Duis aliquam turpis mauris, eu ultricies erat malesuada quis. Aliquam dapibus…</p>

        <div class="features">
          <section><span class="icon solid major fa-code"></span><h3>Lorem ipsum amet</h3><p>…</p></section>
          <section><span class="icon solid major fa-lock"></span><h3>Aliquam sed nullam</h3><p>…</p></section>
          <section><span class="icon solid major fa-cog"></span><h3>Sed erat ullam corper</h3><p>…</p></section>
          <section><span class="icon solid major fa-desktop"></span><h3>Veroeros quis lorem</h3><p>…</p></section>
          <section><span class="icon solid major fa-link"></span><h3>Urna quis bibendum</h3><p>…</p></section>
          <section><span class="icon major fa-gem"></span><h3>Aliquam urna dapibus</h3><p>…</p></section>
        </div>

        <ul class="actions">
          <li><a href="#" class="button">Learn more</a></li>
        </ul>
      </div>
    </section>

    {{-- Three --}}
    <section id="three" class="wrapper style1 fade-up">
      <div class="inner">
        <h2>Get in touch</h2>
        <p>Phasellus convallis elit id ullamcorper pulvinar…</p>

        <div class="split style1">
          <section>
            <form method="post" action="#">
              <div class="fields">
                <div class="field half">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                  <label for="message">Message</label>
                  <textarea name="message" id="message" rows="5"></textarea>
                </div>
              </div>
              <ul class="actions">
                <li><a href="#" class="button submit">Send Message</a></li>
              </ul>
            </form>
          </section>
          <section>
            <ul class="contact">
              <li><h3>Address</h3><span>12345 Somewhere Road #654<br/>Nashville, TN…</span></li>
              <li><h3>Email</h3><a href="#">user@untitled.tld</a></li>
              <li><h3>Phone</h3><span>(000) 000-0000</span></li>
              <li>
                <h3>Social</h3>
                <ul class="icons">
                  <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                  <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                  <li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
                  <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                  <li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
                </ul>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </section>

  </div>

  {{-- Footer --}}
  <footer id="footer" class="wrapper style1-alt">
    <div class="inner">
      <ul class="menu">
        <li>&copy; Untitled. All rights reserved.</li>
        <li>Design: <a href="https://html5up.net" target="_blank" rel="noopener">HTML5 UP</a></li>
      </ul>
    </div>
  </footer>
@endsection
