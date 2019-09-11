<html>
    <head>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KTN7MWQ');</script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge"> 
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        

        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/black-tie/jquery-ui.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        {{-- highcharts --}}

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>


        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tail.select@latest/css/tail.select-default.css">
        <script src="https://cdn.jsdelivr.net/npm/tail.select@latest/js/tail.select-full.min.js"></script>


        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">


  

    </head>
    <body>    
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTN7MWQ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        

        <header id="header-urls" class="bg-white p-1">

            <nav class="d-flex align-items-center justify-content-between p-4">
                <div class="d-flex justify-content-center align-items-end">
                    <img width="180" src="{{url('img/biqon/logo/logo2.png')}}" alt="">
                    <ul class="d-flex align-items-end justify-content-center mb-0">                        
                            <li onclick="window.location.href='{{url('/dashboard')}}'" class="cursor {{ ($path == 'dashboard')?'font-weight-bold active':'' }} h5 text-color1">DASHBOARD</li>
                            <li onclick="window.location.href='{{url('/urls')}}'" class="cursor {{ ($path == 'urls')?'font-weight-bold active':'' }}  h5 text-color1 ml-4">CON URLS</li>
                            <li onclick="window.location.href='{{url('/sinurls')}}'" class="cursor {{ ($path == 'sinurls')?'font-weight-bold active':'' }} h5 text-color1 ml-4">SIN URLS</li>
                            <li onclick="window.location.href='{{url('/uploads')}}'" class="cursor {{ ($path == 'uploads')?'font-weight-bold active':'' }} h5 text-color1 ml-4">CARGAR DATOS</li> 
                           
                            @if($role == 1)
                                <li onclick="window.location.href='{{url('/newLanding')}}'" class="cursor {{ ($path == 'newLanding')?'font-weight-bold active':'' }} h5 text-color1 ml-4">CREAR LANDING</li> 
                            @endif    
                    </ul>
                </div>
                <div class="d-flex align-items-start">
                    <h2 class="text-secondary">Bienvenido {{ Auth::user()->name }}</h2>
                    <a class="btn  ml-5 bg-color2 text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </nav>
            
        </header>

        <div class="container-fluid p-0 m-0">
            @yield('content')
        </div>
    </body>
</html>