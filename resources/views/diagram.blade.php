@extends('layouts.app')

@section('title','Diagram')
@section('body_class','is-preload no-scrolly')

@section('content')
<section class="wrapper style1 fade-up">
  <div class="inner">

    <header class="major">
      <h2>Napi üzenetek száma</h2>
      <p>A diagram az adatbázis alapján készült.</p>
    </header>

    <canvas id="myChart"></canvas>

  </div>
</section>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('myChart').getContext('2d');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: @json($labels),
        datasets: [{
            label: 'Üzenetek száma',
            data: @json($values),
            borderWidth: 1,
            backgroundColor: 'rgba(0, 138, 141, 0.6)',
            borderColor: '#008a8d',
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endpush
