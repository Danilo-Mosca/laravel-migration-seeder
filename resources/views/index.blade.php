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
    <table>
        <div class="row">
            <tr>
                <th class="px-3">AZIENDA</th>
                <th class="px-3">STAZIONE DI PARTENZA</th>
                <th class="px-3">STAZIONE DI ARRIVO</th>
                <th class="px-3">ORARIO DI PARTENZA</th>
                <th class="px-3">ORARIO DI ARRIVO</th>
                <th class="px-3">CODICE TRENO</th>
                <th class="px-3">NUMERO CARROZZE</th>
                <th class="px-3">TRENO IN ORARIO</th>
                <th class="px-3">TRENO CANCELLATO</th>
                <th class="px-3">DATA PARTENZA</th>
            </tr>

            <tbody>

                @foreach ($trains as $train)
                    <tr>
                        <td class="px-3">{{ $train->azienda }}</td>
                        <td class="px-3">{{ $train->stazione_di_partenza }}</td>
                        <td class="px-3">{{ $train->stazione_di_arrivo }}</td>
                        <td class="px-3">{{ $train->orario_di_partenza }}</td>
                        <td class="px-3">{{ $train->orario_di_arrivo }}</td>
                        <td class="px-3"> {{ $train->codice_treno }}</td>
                        <td class="px-3">{{ $train->totale_carrozze }}</td>
                        {{-- Visualizzo "vero" o "falso" al posto dei valori di default 0 e 1: --}}
                        <td class="px-3">{{ $train->in_orario ? "Vero" : "Falso" }}</td>
                        <td class="px-3">{{ $train->cancellato ? "Vero" : "Falso" }}</td>
                        
                        {{-- Script che converte la data ricevuta in $train->data_partenza dal formato "Y-m-d" al formato "d-m-Y": --}}
                        @php
                            $dateFormatted = date_create($train->data_partenza);
                            // dd ($dateFormatted);
                        @endphp
                        <td class="px-3">{{ date_format($dateFormatted, "d/m/Y") }}</td>
                    </tr>
                @endforeach

            </tbody>
        </div>
    </table>
@endsection
