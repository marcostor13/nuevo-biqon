@extends('layouts.url')

@section('title', 'Urls')

@section('content')
    
    <form id="form-client" action="" onsubmit="create(this.id, 'newClient'); return false;"  class="container-fluid mt-2 p-5" enctype="multipart/form-data">

        <div class="form-group">
            <label class="h4 text-color1">Crear Cliente</label>            
        </div>

        <div class="form-group">
            <label>Nombre Representante</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre" required>
        </div>
        <div class="form-group">
            <label>Empresa</label>
            <input type="text" class="form-control" name="company" placeholder="Ingrese la empresa" required>
        </div>
        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" class="form-control" name="phone" placeholder="Ingrese el teléfono" required>
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" name="email" placeholder="Ingrese Correo" required>
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="text" class="form-control" name="password" placeholder="Ingrese Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>

        <div class='response mt-2 text-color2'></div>
    </form>

    <form id="form-landing" action="" onsubmit="create(this.id, 'newLanding'); return false;"  class="container-fluid mt-2 p-5" enctype="multipart/form-data">

        <div class="form-group">
            <label class="h4 text-color1">Crear Landing</label>            
        </div>

        <div class="form-group">
            <label>Nombre de la landing</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese Nombre" required>
        </div>
        <div class="form-group">
            <label>Correo</label>
            <input type="email" class="form-control" name="email" placeholder="Ingrese Correo" required>
        </div>
        <div class="form-group">
            <label>URL logo</label>
            <input type="text" class="form-control" name="logo" placeholder="Ingrese la url del logo" required>
        </div>
        <div class="form-group">
            <label>URL background</label>
            <input type="text" class="form-control" name="background" placeholder="Ingrese la url del background" required>
        </div>
        <div class="form-group">
            <label for="client">Cliente</label>
            <select class="form-control" name="client_id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>                   
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        
        <div class='response mt-2 text-color2'></div>
    </form>

    <script>

        let create = function(idform, type){
            
            var variables = $('#'+idform).serializeArray();        
            var data = {}; 

            for (var i = 0; i<variables.length; i++) {
                data[variables[i].name] = variables[i].value;
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            

            $.post( "/"+type, data, function() {
                $('#'+idform+" .response").html(`<img id="cargando" width="40" src="img/load.gif" alt="cargando..." style="display:none">`);
            })
            .done(function(e) {
                console.log(e);
                console.log(e.msg);
                $('#'+idform+" .response").html(e.msg);
                $('#'+idform).trigger("reset");
                
            })
            .fail(function(e) {
                console.log(e);
                if(e.status == 500){
                    $('#'+idform+" .response").html('Correo Duplicado, ingrese otro');
                }
            });

        }
        
    
    </script>


@endsection