@extends('layouts.url')

@section('title', 'Urls')

@section('content')
    

    <form id="form-url" action="" onsubmit="uploadData(); return false;"  class="container-fluid mt-2 p-5" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">Subir archivo</label>
            <input id="file" type="file" class="form-control-file" >
            <input id="saveFile" type="hidden" name="file" value="">
            <small class="form-text text-muted">Aceptado xls, xlsx</small>
        </div>
    
        <button type="submit" class="btn btn-primary">Cargar</button>
        <img id="cargando" width="40" src="img/load.gif" alt="cargando..." style="display:none">        
        <br><br>
        <span id="response"></span>
    </form>


    {{-- <div class="row">

        <div class="form-group">
            <select onchange="getTables()" id="database" class="form-control">
                <option value="binterac_baserut">binterac_baserut</option>
            </select>
            <select id="table"></select>
        </div>
        
    </div> --}}

    <script>

        $('#navPrincipal').hide();    
        
        let uploadData = function(){

            if( $('#file').val() == ''){
                $('#response').text('Debe subir un archivo').addClass('text-danger');
                return false; 
            }

            let inputFile = $('#file');

            formdata = new FormData();
            if(inputFile.prop('files').length > 0){
                file =inputFile.prop('files')[0];
                formdata.append("file", file);
                formdata.append("pathname", window.location.href);
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 

            $.ajax({
                url: '/uploadDataBigQuery',
                type: "POST",
                data: formdata,
                processData: false,
                contentType: false,
                success: function (e) {
                    console.log(e);
                    
                    if(e.code == 200){
                        $('#response').text(e.msg).removeClass('text-danger');
                    }else{
                        $('#response').text(e.msg).addClass('text-danger');
                    }
                }
            });
            
        }


        // let getTables = function(){

           
        //     let database = $('#database').val();

        //     let data = {
        //        'database': database,            
        //    }           

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     }); 

        //     $.post("/getQueryBigquery", data, function () {
        //         console.log(data);
        //     })
        //     .done(function (e) {
        //         console.log(e);

        //     })
        //     .fail(function () {
        //         console.log("error");
        //     });
            
        // }



       
    
    </script>


@endsection