<table class="table table-striped align-middle">
    <thead>
        <tr>
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Data</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice Treno</th>
            <th>Numero Carrozze</th>
            <th>In Orario</th>
            <th>Cancellato</th>
        </tr>
    </thead>
    <tbody>
        @forelse($trains as $train)
        <tr>
            <td>{{ $train->company }}</td>
            <td>{{ $train->departure_station }}</td>
            <td>{{ $train->arrival_station }}</td>
            <td>{{ date('d/m/Y', strtotime($train->departure_date)) }}</td>
            <td>{{ substr($train->departure_time, 0, 5) }}</td>
            <td>{{ substr($train->arrival_time, 0, 5) }}</td>
            <td>{{ $train->train_code }}</td>
            <td>{{ $train->carriage_count }}</td>
            <td>
                <span class="badge {{ $train->on_time ? 'text-bg-success' : 'text-bg-warning' }}">{{ $train->on_time ? 'Si' : 'No' }}</span>
            </td>
            <td>
                <span class="badge {{ $train->canceled ? 'text-bg-danger' : 'text-bg-secondary' }}">{{ $train->canceled ? 'Si' : 'No' }}</span>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="10" class="text-center">Nessun treno trovato</td>
        </tr>
        @endforelse
    </tbody>
</table>
