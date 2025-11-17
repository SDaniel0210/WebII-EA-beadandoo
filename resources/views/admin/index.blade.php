@extends('layouts.app')
@section('title','Admin felület')
@section('body_class','is-preload no-scrolly')

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner">
    <header class="major">
      <h2>Admin felület</h2>
      <p>Itt az adminisztrátor kezelheti a rendszer adatait.</p>
    </header>

    <ul>
      <li><a href="{{ route('users.index') }}">Felhasználók kezelése</a></li>
      <li><a href="{{ route('messages.index') }}">Üzenetek megtekintése</a></li>
      <li><a href="{{ route('database.index') }}">Lottó adatok kezelése</a></li>
    </ul>
  </div>
</section>
@endsection
