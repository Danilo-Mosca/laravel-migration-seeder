{{-- indico che questa pagina utilizzerà il layout master --}}
@extends('layouts.master')


{{-- Sezione title --}}
@section('title')
    Tabellone Treni
@endsection
{{-- Equivalente alla versione con sintassi breve (con il passaggio degli argomenti direttamente nella section): --}}
@section('title', 'Tabellone Treni')


{{-- Contenuto personalizzato per ogni pagina: --}}
@section('content')
    <ol>
        @foreach ($trains as $train)
            <li>
                {{ $train->azienda }}
                {{ $train->stazione_di_partenza }}
                {{ $train->stazione_di_arrivo }}
                {{ $train->orario_di_partenza }}
                {{ $train->orario_di_arrivo }}
                {{ $train->codice_treno }}
                {{ $train->totale_carrozze }}
                {{ $train->in_orario }}
                {{ $train->cancellato }}
                {{ $train->data_partenza }}
            </li>
        @endforeach
    </ol>
@endsection
