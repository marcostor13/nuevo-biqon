@extends('layouts.url')

@section('title', 'Urls')

@section('content')
    

    <form id="form-url" action="" onsubmit="getURLs(this); return false;"  class="container-fluid mt-2 p-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Subir archivo</label>
            <input id="file" onchange="uploadFile();" type="file" class="form-control-file" >
            <input id="saveFile" type="hidden" name="file" value="">
            <small class="form-text text-muted">Aceptado xls, xlsx</small>
        </div>
        <div class="form-group">
            <label for="file">Seleccione el campo que contiene las urls</label>                
        </div>
        <div id="items" class="form-check form-group">

        </div>
        <div class="form-group">
            <label for="file">Seleccione los campos que quiera agregar a la url</label>                
        </div>
        <div id="itemsUrls" class="form-check form-group">

        </div>
        {{-- <div class="form-group">
            <label>Landing</label>
            <input type="text" class="form-control" name="landing" placeholder="Ingrese URL">
        </div> --}}
        <div class="form-group">
            <label for="mensaje"></label>
            <textarea class="form-control" name="mensaje" rows="3" maxlength="167" placeholder="Ingrese el mensaje"></textarea>
            <small class="form-text text-muted">Ingrese (url) donde irá la landing</small>
        </div>       
        
        <div class="form-group">
            <label>Nombre Empresa (Opcional)</label>
            <input type="text" class="form-control" name="name" placeholder="Ingrese Empresa">
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
                            $('#items').append(`<input class="form-check-input" type="checkbox" key="${key}" value="${items[key]}"><label class="form-check-label">${items[key]}</label><br>`);
                            $('#itemsUrls').append(`<input class="form-check-input" type="checkbox" key="${key}" value="${items[key]}"><label class="form-check-label">${items[key]}</label><br>`);
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
           
            
            let items = $('#items input[type="checkbox"]:checked'); 
            let it = {};
            
            for (let i = 0; i < items.length; i++) {
                let key = items[i].attributes.key.value;
                let value = items[i].value;                
                it[key] = value;
              
            } 

          //  console.log(it);

            let itemsUrls = $('#itemsUrls input[type="checkbox"]:checked'); 
            let itUrls = {};
            
            for (let i = 0; i < itemsUrls.length; i++) {
                let key = itemsUrls[i].attributes.key.value;
                let value = itemsUrls[i].value;                
                itUrls[key] = value;
              
            } 
            
            data['itemsUrls'] = itUrls;
            data['items'] = it;
            data['type'] = 'sinurls';

            console.log(data);
                        
            $('#cargando').show();
      
            $.ajax({
                url: '/getWithoutURLs',
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