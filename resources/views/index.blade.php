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
    <h2>Homepage</h2>
@endsection
