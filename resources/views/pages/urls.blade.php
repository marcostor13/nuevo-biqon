@extends('layouts.landing')

@section('title', 'Urls')

@section('content')
    <header id="header-urls" class="bg-white p-1">
        <nav class="d-flex align-items-center justify-content-between p-4">
            <img width="180" src="{{url('img/biqon/logo/logo2.png')}}" alt="">
            <h3 class="text-color1">Generador de URLs cortas</h3>
        </nav>
    </header>

    <form id="form-url" action="" onsubmit="getURLs(this); return false;"  class="container-fluid mt-2 p-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Subir archivo</label>
            <input id="file" onchange="uploadFile();" type="file" class="form-control-file" >
            <input id="saveFile" type="hidden" name="file" value="">
            <small class="form-text text-muted">Aceptado xls, xlsx</small>
        </div>
        <div class="form-group">
            <label for="file">Seleccione los campos a enviar</label>                
        </div>
        <div id="items" class="form-check form-group">

        </div>
        <div class="form-group">
            <label>Landing</label>
            <input type="text" class="form-control" name="landing" placeholder="Ingrese URL">
        </div>
        <div class="form-group">
            <label for="mensaje"></label>
            <textarea class="form-control" name="mensaje" rows="3" maxlength="167"></textarea>
            <small class="form-text text-muted">Ingrese (url) donde irá la landing</small>
        </div>
        <div class="form-group">
            <label>Nombre Empresa (Opcional)</label>
            <input type="text" class="form-control" name="company" placeholder="Ingrese Empresa">
        </div>
        <button type="submit" class="btn btn-primary">Generar</button>
        <img id="cargando" width="40" src="img/load.gif" alt="cargando..." style="display:none">
    </form>

    <script>

        $('#navPrincipal').hide();
     
        
        let uploadFile = function(){

            let inputFile = $('#file');

            formdata = new FormData();
            if(inputFile.prop('files').length > 0){
                file =inputFile.prop('files')[0];
                formdata.append("file", file);
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/uploadFile',
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (result) {
                    result = result.split('/'); 
                    $('#saveFile').val(result[1]); 
                    console.log(result[1]);
                    getItemsExcel(result[1]); 
                }
            });
            
        }


        let getItemsExcel = function(file){
            
            let data = {
                'file' : file
            }
            $.ajax({
                url: '/getItemsExcel',
                type: "POST",
                data: data,                
                success: function (result) {

                    if(result.status == 200){
                       
                        let items = result.data;

                        for (var key in items) {
                            $('#items').append(`<input class="form-check-input" type="checkbox" key="${key}" value="${items[key]}">
                                            <label class="form-check-label">${items[key]}</label><br>`);
                        }
                      
                    }else{
                        console.log('Status : ' +result.status);
                        console.log('Message : ' +result.message);
                    }

                
                }
                    
                    
            });
        }


        let getURLs = function(form){

            var variables = $(form).serializeArray();
    
            var data = {}; 

            for (var i = 0; i<variables.length; i++) {
                data[variables[i].name] = variables[i].value;
            }   
           
            
            let items = $('input[type="checkbox"]:checked'); 
            let it = {};
            
            for (let i = 0; i < items.length; i++) {
                let key = items[i].attributes.key.value;
                let value = items[i].value;                
                it[key] = value;
              
            } 
            
            data['items'] = it;
            
            $('#cargando').show();
      
            $.ajax({
                url: '/getURLs',
                type: "POST",
                data: data,                
                success: function (result) {

                    console.log(result);
                    
                    $('#cargando').hide(); 

                    if(result.status == 200){
                        
                       
                        window.location.href="/storage/"+result.data;
                        console.log(result.data); 
                        
                    }else{
                        console.log('Status : ' +result.status);
                        console.log('Message : ' +result.message);
                    }
                }
                    
                    
            });
        }
    
    </script>


@endsection