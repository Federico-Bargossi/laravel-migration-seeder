<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Treni in Partenza</title>
</head>
<body>
    <h1>Treni in partenza da oggi</h1>

    @foreach ($trains as $train)
        <div style="margin-bottom: 20px;">
            <h2>{{ $train->company }} - Codice: {{ $train->train_code }}</h2>
            <p>Da: {{ $train->departure_station }} verso {{ $train->arrival_station }}</p>
            <p>Partenza: {{ $train->departure_time }} | Arrivo: {{ $train->arrival_time }}</p>
            <p>Carrozze: {{ $train->wagons }}</p>
            <p>
                Stato: 
                @if ($train->is_on_time)
                    In orario
                @else
                    In ritardo
                @endif
            </p>
        </div>
    @endforeach

</body>
</html>
