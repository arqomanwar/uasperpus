<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Argon Dashboard') }}</title>
        <!-- Favicon -->
        <link href="{{ asset('backend/argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Extra details for Live View on GitHub Pages -->

        <!-- Icons -->
        <link href="{{ asset('backend/argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="{{ asset('backend/argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="{{ asset('backend/argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">

    </head>
    <body class="{{ $class ?? '' }}">
        
            <form id="logout-form" action="#" method="POST" style="display: none;">
                @csrf
            </form>
            @auth
            @include('tambahan.backend.sidebar')
            @endauth
        
        
        <div class="main-content">
            @include('tambahan.backend.navbar')
            @yield('isi')
        </div>

     

        <script src="{{ asset('backend/argon') }}/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{ asset('backend/argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- @stack('js') -->
        
        <!-- Argon JS -->
        <script src="{{ asset('backend/argon') }}/js/argon.js?v=1.0.0"></script>
    </body>
</html>