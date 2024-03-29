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
   <!-- <div id="AmiCar" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="AmiCar">
           

          
              <!--<div class="card">

                        <div class="card-body">-->
                        <!--<h3 class="text-grey text-center">El mercado automotriz esta muy dinámico y tenemos</h3><h3 class="text-danger text-center"> ofertas imperdibles para nuestros clientes!</h3>-->
                    
                        

                      <br>
                   <div>
                    	<label>Fecha:</label>
    					  <input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php // echo date("Y-m-d", $enddate) ?>"/>
                        
                    </div>
                   
                  
 <br>
                     <button onclick="sendMail('Solicito ser Contactado'); ;eventosLanding('Solicitud Informacion'); return false;" class="btn bg-warning text-grey col-12 mt-2"><h4>AGENDAR CITA</h4></button>


                    <!--   </div>
                       </div>-->
              
                    <!--- <center><img src="https://i.imgur.com/XoY9abS.png" style="max-width: 100%"></center>-->
             </div>


        </div>

            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                                

                            </div>
                        </div>

                   <!-- </div>
                     <img style="max-width: 100%" class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/b4XygqX.png" alt="AMICAR">-->


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
                   // 'Nombre': getUrlParameter('nombre'),
                    'ID': getUrlParameter('id'),
                    'Nombre': getUrlParameter('nombre'),
                    'Telefono': getUrlParameter('telefono'),
                    'Nombre del local': getUrlParameter('data1'),
                    //'Periodo': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Nombre del local': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
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