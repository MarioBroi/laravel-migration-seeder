@extends('layout.app')

@section('content')
    <h1>Trains</h1>
    <div class="container">
        <div class="row">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="card p-1">
                        <span class="card-title">
                            Azienda: {{ $train->azienda }}
                        </span>
                        <span class="card-text">
                            Codice Treno: {{ $train->codice_treno }}
                        </span>
                        <span class="card-text">
                            Numero carrozze: {{ $train->numero_carrozze }}
                        </span>
                        <span class="card-text">
                            Stazione Partenza: {{ $train->stazione_partenza }}
                        </span>
                        <span class="card-text">
                            Stazione Arrivo: {{ $train->stazione_arrivo }}
                        </span>
                        <span class="card-text">
                            Orario Partenza: {{ $train->orario_partenza }}
                        </span>
                        <span class="card-text">
                            Orario Arrivo: {{ $train->orario_arrivo }}
                        </span>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @empty
                <h1>No trains!</h1>
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
