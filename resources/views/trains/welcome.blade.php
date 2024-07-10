@extends('layouts.app')
@section('main')
    <h1>
        Trainpage
    </h1>
    <h3>
        Scheda Tecnica Treni
    </h3>
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Nome Azienda:
                            {{ $train->company }}
                        </h5>
                        <p class="card-text">
                            Stazione di partenza:
                            {{ $train->departure_station }}
                        </p>
                        <p class="card-text">
                            Stazione di arrivo:
                            {{ $train->arrival_station }}
                        </p>
                        <p class="card-text">
                            Oraio di partenza:
                            {{ $train->departure_time }}
                        </p>
                        <p class="card-text">
                            Orario di arrivo:
                            {{ $train->arrival_time }}
                        </p>
                        <p class="card-text">
                            Codice Treno:
                            {{ $train->train_code }}
                        </p>
                        <p class="card-text">
                            Numero Carrozze:
                            {{ $train->cars_number }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
