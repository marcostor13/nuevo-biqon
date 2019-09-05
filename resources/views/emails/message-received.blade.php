<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail Binteraction</title>
</head>
<body>
    
    <h4>Datos de landing</h4><br>
    @foreach ($msg as $key=>$value)
        <span>{{ucfirst($key)}}</span> : <span>{{$value}}</span><br>
    @endforeach
</body>
</html>