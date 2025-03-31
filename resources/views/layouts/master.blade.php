<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font di Google Font utilizzato: -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

    <title>@yield('title')</title>

    <!-- Styles: istruzione che permette a Laravel di cercare le risorse per Bootstrap ed SCSS: -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    {{-- includo il partial dell'header --}}
    @include('partials.header')


    <div class="container">
        {{-- contenuto personalizzato delle pagine --}}
        @yield('content')
    </div>


    {{-- includo il partial del footer --}}
    @include('partials.footer')

</body>

</html>
