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
    <div id="home">
        <div class="container-fluid p-0">
            <div class="d-flex flex-column flex-md-row">
                <nav id="navPrincipal" class="vh-100 navbar navbar-expand-md navbar-light bg-color1 text-white shadow-sm align-items-start p-0">
                    <div id="menuLateral" class="container-fluid p-0">
                        <div class="d-flex flex-column">

                            {{-- MENU --}}
                            <div class="menu">
                                <nav>
                                    <div class="mt-3 d-flex justify-content-end">                                        
                                        <div id="iconMenu" class="barras cursor mt-4 mr-3">
                                            <div class="bg-white"></div>
                                            <div class="mt-2 bg-white"></div>
                                        </div>
                                    </div>
                                    <div title="Panel Principal" class="itemMenu cursor mt-5 tran" onclick="window.location.href='{{url('/home')}}'">					
                                        <img src="{{ url('img/biqon/icons/dash.png')}}">
                                        <span class="ml-3">Panel Principal</span>
                                    </div>
                                    <div title="Mensajes"  class="itemMenu cursor tran" onclick="window.location.href='{{url('/messages')}}'">
                                        <img src="{{ url('img/biqon/icons/sms.png')}}">
                                        <span class="ml-3">Mensajes</span>
                                    </div>
                                    <div title="Campanas"  class="itemMenu cursor tran" onclick="obtenerContenido('campanas.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/campains.png')}}">
                                        <span class="ml-3">Campañas</span>
                                    </div>
                                    <div title="Listas"  class="itemMenu cursor tran" onclick="obtenerContenido('listas.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/lists.png')}}">
                                        <span class="ml-3">Listas</span>
                                    </div>
                                    <div title="Reportes"  class="itemMenu cursor tran" onclick="obtenerContenido('reportes.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/reports.png')}}">
                                        <span class="ml-3">Reportes</span>
                                    </div>
                                    <div title="Lista Negra"  class="itemMenu cursor tran" onclick="obtenerContenido('listaNegra.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/blacklist.png')}}">
                                        <span class="ml-3">Lista Negra</span>
                                    </div>
                                    <!-- <div title="Landing"  class="cursor tran" onclick="obtenerContenido('landing.php'); return false;">
                                        <img src="img/icons/landing.png">
                                        <span class="titOpcion ml-3">Landing</span>
                                    </div> -->
                                    <?php //if($tipo == 'administrador'){ ?>
                    
                                    <div title="Usuarios"  class="itemMenu cursor tran" onclick="obtenerContenido('usuarios.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/users.png')}}">
                                        <span class="ml-3">Usuarios</span>
                                    </div>
                    
                                    <?php //} ?>
                                    <div title="Configuracion"  class="itemMenu mt-2 cursor tran mb-3" onclick="obtenerContenido('configuracion.php'); return false;">
                                        <img src="{{ url('img/biqon/icons/config.png')}}">
                                        <span class="ml-3">Configuración</span>
                                    </div>
                                    
                    
                                </nav>
                            </div>    
                            {{--END  MENU --}}
                            
                            
                            {{-- LOGOUT --}}
                            <div id="logout" class="dropdown text-center mt-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img id="imgPerfil" class="imgPerfil" src="{{ url('img/biqon/icons/profile.png') }}" alt="Perfil"> <span class="caret"></span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrfnavbarDropdown
                                    </form>
                                </div>
                            </div>
                            {{-- END LOGOUT --}}

                        </div>

                    </div>
                </nav>
        
                <main class="flex-fill">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modallabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="modalContent"  class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="actionModal" type="button" class="btn bg-color1 text-white">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/fd4c133be5.js"></script>

</body>
</html>
