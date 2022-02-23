@extends('layout.base')

@section('content')
    @foreach ($train as $item)
        <div>
                
        </div>
        <ul>
            <li>stazione di partenza:{{$item->stazione_di_partenza}}</li>
            <li>stazione di arrivo:{{$item->stazione_di_arrivo}}</li>
            <li>codice treno:{{$item->codice_treno}}</li>
            <li>orario di partenza:{{$item->orario_di_partenza}}</li>
            <li>orario d'arrivo:{{$item->orario_di_arrivo}}</li>
        </ul>

    @endforeach
@endsection