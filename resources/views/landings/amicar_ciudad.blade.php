@extends('layouts.landing')

@section('title', 'AmiCar')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+15 days", $startdate);
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style>
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
}
     
.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  border: 0;
  font-weight: 400;
}
.card[class*=border] {
  border: 1px solid #9e9e9e;
  box-shadow: none;
}
.card .card-body h1, .card .card-body h2, .card .card-body h3, .card .card-body h4, .card .card-body h5, .card .card-body h6 {
  font-weight: 400;
}
.card .card-body .card-title a {
  transition: 0.2s ease-in-out;
}
.card .card-body .card-title a:hover {
  transition: 0.2s ease-in-out;
}
.card .card-body .card-text {
  color: #747373;
  font-size: 0.9rem;
  font-weight: 400;
}
.card .md-form label {
  font-weight: 300;
}

.oscurecer {
  background-image: 
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    )
    }

      /* ocultar controles de input date */ 
     input[type="date"]::-webkit-inner-spin-button,
                  ::-webkit-calendar-picker-indicator,
                  ::-webkit-datetime-edit{
        display: none;
    }
    
   
    /* mostrar el calendario al hacer click */
    input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: transparent;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }
   
    /* mostrar la fecha seleccionada al estar en hover */
   .input-min-width-95p {min-width:95%;}
   .input-min-width-95p {min-height:5%;}
    }


</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <div id="AmiCar" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain;" >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <!--<img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="AmiCar">-->

            <div id="cont1" class="p-5 ">
               <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                               
              <!--<div class="card">
                        <div class="card-body">
                        <h3 class="text-grey text-center"> Nos pondremos en contacto, indícanos la ciudad donde te encuentras.</h3>
                    
                        
                    <div>
              
                        
                    </div>
                   
                   <div>
      <select class="form-control" id="ciudad" required>
    <option value="" data-select2-id="4">Selecciona una Ciudad</option>
 <option value="Santiago" data-select2-id="1">  Santiago  </option>
 <option value="Valparaiso" data-select2-id="2">  Valparaíso  </option>
 <option value="Concepcion" data-select2-id="3">  Concepción  </option>
 <option value="La Serena" data-select2-id="4">  La Serena </option>
 <option value="Antofagasta" data-select2-id="5">  Antofagasta </option>
 <option value="Temuco" data-select2-id="6">  Temuco  </option>
 <option value="Iquique" data-select2-id="7">  Iquique </option>
 <option value="Rancagua" data-select2-id="8">  Rancagua  </option>
 <option value="Puerto Montt" data-select2-id="9">  Puerto Montt  </option>
 <option value="Talca" data-select2-id="10">  Talca </option>
 <option value="Arica" data-select2-id="11">  Arica </option>
 <option value="Chillan" data-select2-id="12">  Chillán </option>
 <option value="Calama" data-select2-id="13">  Calama  </option>
 <option value="Copiapo" data-select2-id="14">  Copiapó </option>
 <option value="Valdivia" data-select2-id="15">  Valdivia  </option>
 <option value="Quillota" data-select2-id="16">  Quillota  </option>
 <option value="Osorno" data-select2-id="17">  Osorno  </option>
 <option value="Los Angeles" data-select2-id="18">  Los Ángeles </option>
 <option value="Curico" data-select2-id="19">  Curicó  </option>
 <option value="Punta Arenas" data-select2-id="20">  Punta Arenas  </option>
 <option value="San Antonio" data-select2-id="21">  San Antonio </option>
 <option value="Ovalle" data-select2-id="22">  Ovalle  </option>
 <option value="Linares" data-select2-id="23">  Linares </option>
 <option value="Melipilla" data-select2-id="24">  Melipilla </option>
 <option value="Buin" data-select2-id="25">  Buin  </option>
 <option value="San Felipe" data-select2-id="26">  San Felipe  </option>
 <option value="San Fernando" data-select2-id="27">  San Fernando  </option>
 <option value="Coyhaique" data-select2-id="28">Coyhaique </option>



                   </select>
                  </div>

                  <div class="text-center">
                    <hr>
                    <button class="btn bg-warning text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>

                       </div>
                       </div>
                       <br>

             </div>-->
        </div>

            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                                

                            </div>
                        </div>
                        <br>
                   <br>
                     <br>
                     <br>
                     <br>
                   <br>
                   <br>
                   <br>
                    </div>

        </div>
    </div>

     <script>
   //EVENT 1
        $( function() {
    $( "#datepicker" ).datepicker();
  } );  
         $(function(){
            events({    
                'name': 'Visita',
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(getAllUrlParameter())
            });
        }); 

         function event1(){
    
            let dataSend = {
                'fourRut': $('#rut').val(),
                'phone': getUrlParameter('telefono'),
                'landing_id': {!! $landing->id !!},
            } 
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post( "/validateRut", dataSend,function() {
                console.log(dataSend);
            })
            .done(function(e) {
                console.log(e);
                e = JSON.parse(e); 

                if(e.code == 200){
                    $('#cont1').addClass('hide');
                    $('#name').text(e.data.nombre);
                    $('#pay').text(e.data.monto);
                    $('#cont2').removeClass('hide');
                    $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });
                }else{
                    $('#cont1').addClass('hide');
                     $('#cont5').removeClass('hide');
                    $('#error').text("Validación incorrecta, recuerde visitar nuestra pagina web  o dirigirse a nuestra sucursal.");
                }
            })
            .fail(function() {
                console.log( "error" );
            });

        }
        

        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

            json_datos.nombre = getUrlParameter('nombre');
            json_datos.rut = getUrlParameter('rut');
            json_datos.telefono = getUrlParameter('Telefono');
            json_datos.fecha = $('#date1').val();
           // json_datos.monto = $('#pay').text();

            events({    
                'name': name,
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(json_datos)
            });
        }

     

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Nombre': getUrlParameter('nombre'),
                    'ID': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Marca': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
                    'Ciudad': $('#ciudad').val(), 
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    'ID': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Marca': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
                     'Ciudad': $('#ciudad').val(), 
                    'landing': '{!! $landing->name !!}'
                } 
            }

              var correo = ["carla.torres@amicar.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
               // 'email': '{!! $landing->email !!}'
                //'email': "carla.torres@amicar.cl jesus.binteraction@gmail.com" 
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.post( "/sendMail", dataSend,function() {
                console.log(dataSend);
                if(msg !== false){
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, Su visita fue agendada.  Nos pondremos en contacto con usted en los próximos días');
                     eventosLanding('Agendo Visita');
                }
            })
            .done(function(e) {
                console.log(e);
            })
            .fail(function() {
                console.log( "error" );
            });

        }

        let events = function(data){     

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.post( "/events", data, function() {
                
            })
            .done(function(e) {
                console.log(e);
                console.log(e.msg);
             
            })
            .fail(function(e) {
                console.log(e);               
            });

        }

        let getUrlParameter = function(sParam) {
            var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

            for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0].toLowerCase() === sParam.toLowerCase()) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
            }
        };

        let getAllUrlParameter = function() {
            var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

            let obj = {}; 

            for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            obj[sParameterName[0].toLowerCase()] = sParameterName[1];            
            }

            return obj;  
        };
       
    
    </script>
    

@endsection