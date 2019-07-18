@extends('layouts.app')

@section('title', 'Urls')

@section('sidebar')
    @parent
@endsection

@section('content')
    <header class="bg-dark p-4">
        <nav>
            <h5 class="text-white">Biqon - Creación de URL</h5>
        </nav>
    </header>

    <form action="" onsubmit="getURLs(this); return false;"  class="container mt-5 bg-light" enctype="multipart/form-data">
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
            <label for="exampleInputPassword1">Landing</label>
            <input type="text" class="form-control" name="landing" placeholder="Ingrese URL">
        </div>
        <div class="form-group">
            <label for="mensaje"></label>
            <textarea class="form-control" name="mensaje" rows="3" maxlength="167"></textarea>
            <small class="form-text text-muted">Ingrese (url) donde irá la landing</small>
        </div>
        <button type="submit" class="btn btn-primary">Generar</button>
    </form>

    <script>
       
        
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
          
      
            $.ajax({
                url: '/getURLs',
                type: "POST",
                data: data,                
                success: function (result) {
                    
                    console.log(result);

                    if(result.status == 200){
                       
                        window.location.href="/storage/"+result.data;
                        console.log(result.status); 
                        
                    }else{
                        console.log('Status : ' +result.status);
                        console.log('Message : ' +result.message);
                    }
                }
                    
                    
            });
        }
    
    </script>


@endsection