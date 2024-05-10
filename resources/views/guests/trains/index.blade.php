@extends('layout.app')

@section('content')
    <div class="container">
        <h1 class="py-4">Trains schedule:</h1>
        <div class="row row-cols-3 row-cols-lg-4 py-3 g-4">
            @forelse ($trains as $train)
                <div class="col my-5">
                    <div class="card p-1">
                        <span class="card-title p-1">
                            Azienda: {{ $train->azienda }}
                        </span>
                        <span class="card-text p-1">
                            Codice Treno: {{ $train->codice_treno }}
                        </span>
                        <span class="card-text p-1">
                            Numero carrozze: {{ $train->numero_carrozze }}
                        </span>
                        <span class="card-text p-1">
                            Stazione Partenza: {{ $train->stazione_partenza }}
                        </span>
                        <span class="card-text p-1">
                            Stazione Arrivo: {{ $train->stazione_arrivo }}
                        </span>
                        <span class="card-text p-1">
                            Orario Partenza: {{ $train->orario_partenza }}
                        </span>
                        <span class="card-text p-1">
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
