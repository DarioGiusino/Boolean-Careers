{{-- extends main layout --}}
@extends('layouts.main')

{{-- chaging theme to dark --}}
@section('theme')
  data-bs-theme="dark"
@endsection

{{-- changing title --}}
@section('title', 'Home')

{{-- main content / train table --}}
@section('content')
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Azienda</th>
        <th scope="col">Stazione di partenza</th>
        <th scope="col">Stazione di arrivo</th>
        <th scope="col">Orario di partenza</th>
        <th scope="col">Oraio di arrivo</th>
        <th scope="col">Codice Treno</th>
        <th scope="col">Numero Carrozze</th>
        <th scope="col">In orario</th>
        <th scope="col">Cancellato</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($trains as $train)
        <tr>
          <th scope="row">{{ $train['id'] }}</th>
          <td>{{ $train['company'] }}</td>
          <td>{{ $train['departure_station'] }}</td>
          <td>{{ $train['arrival_station'] }}</td>
          <td>{{ $train['departure_time'] }}</td>
          <td>{{ $train['arrival_time'] }}</td>
          <td>{{ $train['train_code'] }}</td>
          <td>{{ $train['carriages_number'] }}</td>
          <td>{{ $train['in_time'] ? 'Si' : 'No' }}</td>
          <td>{{ $train['is_cancelled'] ? 'Si' : 'No' }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
