@extends('layouts.app')

@section('title','Kapcsolat')
@section('body_class','is-preload no-scrolly')

@push('head')
<link rel="stylesheet" href="{{ asset('assets/css/message.css') }}">
@endpush

@section('content')
<section class="wrapper style1 fade-up">
    <div class="inner contact-inner">

        <header class="major">
            <h2>Kapcsolat</h2>
            <p>Küldj üzenetet az oldal tulajdonosának.</p>
        </header>

        <div class="contact-card">

            <form method="POST" action="{{ route('messages.store') }}" class="contact-form">
                @csrf

                <div class="field half">
                    <label for="name">Név</label>
                    <input type="text" id="name" name="name"
                        value="{{ old('name', Auth::check() ? Auth::user()->name : '') }}">
                </div>

                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email"
                        value="{{ old('email', Auth::check() ? Auth::user()->email : '') }}">

                </div>

                <div class="field">
                    <label for="subject">Tárgy</label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}">
                </div>

                <div class="field">
                    <label for="body">Üzenet</label>
                    <textarea id="body" name="body" rows="5">{{ old('body') }}</textarea>
                </div>

                <ul class="actions contact-actions">
                    <li>
                        <button type="submit" class="button primary">
                            Üzenet küldése
                        </button>
                    </li>
                    <li>
                        <a href="{{ url('/') }}" class="button">
                            Bezárás
                        </a>
                    </li>
                </ul>
            </form>

        </div>
    </div>
</section>
@endsection
