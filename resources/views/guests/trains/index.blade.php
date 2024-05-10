@extends('layout.app')

@section('content')
    <h1>Trains</h1>
    <div class="container">
        <div class="row">


            @forelse ($trains as $train)
                <div class="col">
                    <div class="card">
                        Azienda: {{ $train->azienda }}
                        Stazione Partenza: {{ $train->stazione_partenza }}
                        Stazione Arrivo: {{ $train->stazione_arrivo }}
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
