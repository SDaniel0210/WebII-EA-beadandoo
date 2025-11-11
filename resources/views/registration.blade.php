@extends('layouts.app')
@section('title', 'Regisztráció')
@section('body_class', 'is-preload')

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner" style="max-width:700px">
    <h2>Regisztráció</h2>
    @if ($errors->any())
  <div class="box" style="border:1px solid #e66;padding:12px;margin-bottom:16px">
    <ul style="margin:0 0 0 1rem">
      @foreach ($errors->all() as $e)
        <li>{{ $e }}</li>
      @endforeach
    </ul>
  </div>
@endif

    <p>Itt tudsz új felhasználót létrehozni.</p>

    <form method="POST" action="{{ route('register.store') }}">
      @csrf
      <div class="fields">
        <div class="field half">
          <label for="name">Név</label>
          <input type="text" id="name" name="name">
        </div>
        <div class="field half">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="field half">
          <label for="password">Jelszó</label>
          <input type="password" id="password" name="password">
        </div>
        <div class="field half">
          <label for="password_confirmation">Jelszó megerősítése</label>
          <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
      </div>

      <ul class="actions">
        <li><button type="submit" class="button primary">Regisztráció</button></li>
        <li><a href="{{ url('/') }}" class="button">Vissza</a></li>
      </ul>
    </form>
  </div>
</section>
@endsection
