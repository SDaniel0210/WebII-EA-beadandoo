@extends('layouts.app')
@section('title', 'Regisztráció')
@section('body_class', 'is-preload no-scrolly')

@push('head')
<link rel="stylesheet" href="{{ asset('assets/css/message.css') }}">

<style>
/* ---- A HYPERSPACE SABLON ELREJTI A CHECKBOX-okat → EZZEL KIJAVÍTJUK ---- */
input[type="checkbox"] {
    display: inline-block !important;
    opacity: 1 !important;
    appearance: checkbox !important;
    -webkit-appearance: checkbox !important;
    width: 18px !important;
    height: 18px !important;
    margin-right: 8px;
    cursor: pointer;
}

.checkbox-label {
    display: flex;
    align-items: center;
    font-size: 1.1rem;
    margin-top: 10px;
}
</style>
@endpush

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner contact-inner">

    <header class="major">
      <h2>Regisztráció</h2>
      <p>Itt tudsz új felhasználót létrehozni.</p>
    </header>

    <div class="contact-card">

      <form method="POST"
            action="{{ route('register.store') }}"
            class="contact-form">
        @csrf

        <div class="fields">

          <div class="field half">
            <label for="name">Név</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
          </div>

          <div class="field half">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
          </div>

          <div class="field half">
            <label for="password">Jelszó</label>
            <input type="password" id="password" name="password">
          </div>

          <div class="field half">
            <label for="password_confirmation">Jelszó megerősítése</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
          </div>

          {{-- ADMIN CHECKBOX --}}
          <div class="field">
            <label class="checkbox-label">
              <input type="checkbox" name="make_admin" value="1">
              <strong>Admin felhasználó létrehozása</strong>
            </label>
          </div>

        </div>

        <ul class="actions contact-actions">
          <li>
            <button type="submit" class="button primary">
              Regisztráció
            </button>
          </li>
          <li>
            <a href="{{ url('/') }}" class="button">Vissza</a>
          </li>
        </ul>

      </form>
    </div>

  </div>
</section>
@endsection
