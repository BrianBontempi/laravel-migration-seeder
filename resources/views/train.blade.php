@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1>Info treni</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
                <th>In Orario</th>
                <th>Cancellato</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trains as $train)
            <tr>
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->carriage_count }}</td>
                <td>{{ $train->on_time ? 'Si' : 'No' }}</td>
                <td>{{ $train->canceled ? 'Si' : 'No' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
