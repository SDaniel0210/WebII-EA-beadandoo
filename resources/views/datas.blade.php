@extends('layouts.app')

@section('title','Adatbázis – Hatoslottó')
@section('body_class', 'is-preload no-scrolly')

@push('head')
  <link rel="stylesheet" href="{{ asset('assets/css/database.css') }}">
@endpush


@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner data-inner">
    <header class="major">
      <h2>Adatbázis</h2>
      <p>A hatoslottó húzások összefoglaló táblázata az adatbázis három táblája alapján.</p>
    </header>

    <div class="data-card">
      <div class="table-wrapper">
        <table class="data-table">
          <thead>
            <tr>
              <th>Év</th>
              <th>Hét</th>
              <th>Kihúzott számok</th>
              <th>6 találatos</th>
              <th>5 találatos</th>
              <th>4 találatos</th>
            </tr>
          </thead>
          <tbody>
          @foreach($draws as $draw)
            @php
              $ny6 = $draw->nyeremenyek->firstWhere('talalat', 6);
              $ny5 = $draw->nyeremenyek->firstWhere('talalat', 5);
              $ny4 = $draw->nyeremenyek->firstWhere('talalat', 4);
            @endphp
            <tr>
              <td>{{ $draw->ev }}</td>
              <td>{{ $draw->het }}</td>
              <td class="numbers">
                {{ $draw->szamok_lista }}
              </td>
              <td>
                @if($ny6)
                  {{ $ny6->darab }} db<br>
                  <span class="amount">{{ number_format($ny6->ertek, 0, ',', ' ') }} Ft</span>
                @else
                  –
                @endif
              </td>
              <td>
                @if($ny5)
                  {{ $ny5->darab }} db<br>
                  <span class="amount">{{ number_format($ny5->ertek, 0, ',', ' ') }} Ft</span>
                @else
                  –
                @endif
              </td>
              <td>
                @if($ny4)
                  {{ $ny4->darab }} db<br>
                  <span class="amount">{{ number_format($ny4->ertek, 0, ',', ' ') }} Ft</span>
                @else
                  –
                @endif
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>

      <div class="pager">
        {{ $draws->links() }}
      </div>
    </div>
  </div>
</section>
@endsection
