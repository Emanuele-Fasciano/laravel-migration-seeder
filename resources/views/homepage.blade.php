@extends('layouts.app')

@section('title', "Treni:")

@section('content')
<div class="container">
    <div class="row row-cols-3 gy-4">
        @forelse ($trains as $train)
        <div class="col">
            <div class="card @if ($train->cancellato) cancelled @endif h-100">
                <div class="card-body">
                    <h5 class="card-title">Compagnia: {{$train->azienda}}</h5>
                    <h5 class="card-title">Tratta: {{$train->stazione_di_partenza}}-{{$train->stazione_di_arrivo}}</h5>
                    <h6 class="card-title">Codice treno: {{$train->codice_treno}}</h6>
                    <h6 class="card-title">Numero carrozze: {{$train->numero_carrozze}}</h6>
                    <h6 class="card-title">Partenza: {{$train->orario_di_partenza}}</h6>
                    <h6 class="card-title">Arrivo: {{$train->orario_di_arrivo}}</h6>
                    @if(!$train->cancellato)
                        @if($train->in_orario)
                            <h4 class="card-title">In orario</h4>
                        @else
                            <h4 class="card-title">In ritardo</h4>
                        @endif
                    @else
                    <h4 class="text-center text-danger fs-1">CANCELLATO</h4>
                    @endif
                </div>
            </div>
        </div>
        @empty
        <h1>nessun treno disponibile</h1>
        @endforelse
    </div>
</div>  
@endsection
    
