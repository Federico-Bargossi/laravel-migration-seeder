
@extends('layout.master')

@section('content')
<div class="container mt-5 d-flex flex-column align-items-center">
    <h1 class="mb-4 text-center">Treni in partenza da oggi</h1>

    @forelse ($trains as $train)
        <div class="card mb-3 shadow-sm w-100" style="max-width: 600px;">
            <div class="card-body text-center">
                <h5 class="card-title">{{ $train->azienda }} - Codice: {{ $train->codice_treno }}</h5>
                <p class="card-text">
                    <strong>Da:</strong> {{ $train->stazione_partenza }}<br>
                    <strong>A:</strong> {{ $train->stazione_arrivo }}<br>
                    <strong>Partenza:</strong> {{ \Carbon\Carbon::parse($train->orario_partenza)->format('d/m/Y H:i') }}<br>
                    <strong>Arrivo:</strong> {{ \Carbon\Carbon::parse($train->orario_arrivo)->format('d/m/Y H:i') }}<br>
                    <strong>Carrozze:</strong> {{ $train->totale_carrozze }}
                </p>
                <p class="mb-0">
                    <strong>Stato:</strong>
                    @if ($train->cancellato)
                        <span class="badge bg-danger">Cancellato</span>
                    @elseif (!$train->in_orario)
                        <span class="badge bg-warning text-dark">In ritardo</span>
                    @else
                        <span class="badge bg-success">In orario</span>
                    @endif
                </p>
            </div>
        </div>
    @empty
        <p class="text-muted text-center">Nessun treno in partenza da oggi.</p>
    @endforelse
</div>
@endsection
