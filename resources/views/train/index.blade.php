@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <div class="container">
        <div class="row  g-4">
            @forelse($trains as $train)
            <div class="col">              
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"><strong>{{$train->company}}</strong></h3>
                    <p class="card-text">
                        <ul>
                            <li><strong>Stazione di arrivo: </strong>{{$train->code_train}}</li>
                            <li><strong>Stazione di partenza: </strong>{{$train->departure_station}}</li>
                            <li><strong>Stazione di arrivo: </strong>{{$train->arrival_station}}</li>
                            <li><strong>Orario di partenza: </strong>{{$train->departure_time}}</li>
                            <li><strong>Orario di arrivo: </strong>{{$train->arrival_time}}</li>
                            <li><strong>N° di carrozze: </strong>{{$train->carriage}}</li>
                            <li><strong>In orario: </strong>{{$train->in_time}}</li>
                            <li><strong>Cancellato: </strong>{{$train->deleted}}</li>

                        </ul>
                    </p>
                  </div>
                </div>              
            </div>
            @empty
            <h2>Non ci sono risultati</h2>
            @endforelse
        </div>
    </div>
  </section>
@endsection