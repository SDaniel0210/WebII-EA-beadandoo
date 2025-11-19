@extends('layouts.app')

@section('title','Üzenetek')
@section('body_class','is-preload no-scrolly messages-page')

@push('head')
  <link rel="stylesheet" href="{{ asset('assets/css/messages.css') }}">
@endpush

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner users-inner">

    <header class="major users-header">
      <div>
        <h2>Üzenetek</h2>
        <p>Az elküldött üzeneteid listája fordított időrendben.</p>
      </div>
    </header>

    <div class="users-card">
      @if($messages->isEmpty())
        <p>Még nem küldtél üzenetet.</p>
      @else
        <div class="table-wrapper">
          <table class="users-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Név</th>
                <th>Email</th>
                <th>Tárgy</th>
                <th>Üzenet</th>
                <th>Küldve</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($messages as $msg)
                <tr>
                  <td>{{ $msg->id }}</td>
                  <td>{{ $msg->name }}</td>
                  <td>{{ $msg->email }}</td>
                  <td>{{ $msg->subject }}</td>
                  <td>{{ $msg->body }}</td>
                  <td>{{ \Carbon\Carbon::parse($msg->created_at)->format('Y-m-d H:i') }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>

  </div>
</section>
@endsection
