<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @if (Route::has('login'))
                <div id="" class="d-flex justify-content-between align-items-center p-3 bg-color1" >
                    <img onclick="window.location.href='{{ url('/') }}'" class="cursor" width="200" class="" src="img/biqon/logo/logo1.png" alt="">
                    <div class="">
                        @auth
                            <a class="text-white mr-5" href="{{ url('/dashboard') }}">Inicio</a>
                        @else
                            <a class="text-white mr-5" href="{{ route('login') }}">Ingreso</a>

                            @if (Route::has('register'))
                                {{-- <a class="ml-4 btn1 p-3" href="{{ route('register') }}">Registrarse</a> --}}
                            @endif
                        @endauth

                    </div>
                </div>
            @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
