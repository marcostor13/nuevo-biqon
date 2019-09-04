<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Binteraction</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        

    </head>
    <body>
        
        <div id="index" class="flex-center position-ref full-height">
            
            @if (Route::has('login'))
                <div id="" class="d-flex justify-content-between align-items-center p-3 bg-color1" >
                    <img onclick="window.location.href='{{ url('/') }}'" width="200" class="cursor" src="img/biqon/logo/logo1.png" alt="">
                    <div class="">
                        @auth
                            <a class="text-white mr-5" href="{{ url('/home') }}">Inicio</a>
                        @else
                            <a class="text-white mr-5" href="{{ route('login') }}">Ingreso</a>

                            @if (Route::has('register'))
                                {{-- <a class="ml-4 btn1 p-3" href="{{ route('register') }}">Registrarse</a> --}}
                            @endif
                        @endauth

                    </div>
                </div>
            @endif

            <div class="content mt-5 pt-5">
                
                <div id="section1" class="row pl-5">
                    <div class="col-6 pl-5">
                        <p class="col-10 tit1 mt-4">EN CONSTRUCCIÓN</p>
                        <p class="col-10 tit2">MUY PRONTO MÁS NOVEDADES</p>
                        {{-- <p class="col-10 tit2 tit3">SMS LANDING PAGE</p>
                        <p class="col-10 tit2">WHATSAPP</p>
                        <p class="col-10 tit3">Potencia tu negocio, llega a mas personas y obtén mejores resultados</p> --}}
                    </div>

                    <div class="col-6">
                        <div id="divSlide" ></div>
                    </div>

                </div>

            </div>

            

        </div>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
        <script src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/v1.0.0/dist/jR3DCarousel.min.js"></script>

        <script>
            var slides = [
                {src: 'img/imgPrincipal1.png'},
                {src: 'img/imgPrincipal2.png'},
                {src: 'img/imgPrincipal3.png'},

            ];

            $('#divSlide').jR3DCarousel({
                width : 330,        
                height: 560,    
                slides: slides,
                animationDuration: 500,
                animationInterval: 4000,
                controls: false,
                animationCurve: 'ease-in-out',
                navigation: '',
                animation: 'slide'
            });
        
        </script>
    </body>
</html>
