<html>
    <head>
        <title>Biqon - @yield('title')</title>
        <link rel="stylesheet" href="css/app.css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container-fluid p-0">
            @yield('content')
        </div>

        <script src="js/app.js"></script>
    </body>
</html>