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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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
                        @if($path == 'urls')
                            <li onclick="window.location.href='{{url('/dashboard')}}'" class="cursor h5 text-color1">DASHBOARD</li>
                            <li onclick="window.location.href='{{url('/urls')}}'"class="cursor font-weight-bold active h5 text-color1 ml-4">CON URLS</li>
                            <li onclick="window.location.href='{{url('/sinurls')}}'" class="cursor h5 text-color1 ml-4">SIN URLS</li>
                        @elseif($path == 'sinurls')
                            <li onclick="window.location.href='{{url('/dashboard')}}'" class="cursor h5 text-color1">DASHBOARD</li>
                            <li onclick="window.location.href='{{url('/urls')}}'"class="h5 cursor text-color1 ml-4">CON URLS</li>
                            <li onclick="window.location.href='{{url('/sinurls')}}'" class="cursor font-weight-bold active h5 text-color1 ml-4">SIN URLS</li>
                        @elseif($path == 'dashboard')
                            <li onclick="window.location.href='{{url('/dashboard')}}'" class="cursor font-weight-bold active h5 text-color1">DASHBOARD</li>
                            <li onclick="window.location.href='{{url('/urls')}}'"class="cursor h5 text-color1 ml-4">CON URLS</li>
                            <li onclick="window.location.href='{{url('/sinurls')}}'" class="cursor h5 text-color1 ml-4">SIN URLS</li>
                        @endif
                    </ul>
                </div>
                <div class="d-flex align-items-start">
                    <h2 class="text-secondary">Bienvenido: {{ Auth::user()->name }}</h2>
                    <a class="btn  ml-5 bg-color2 text-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
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