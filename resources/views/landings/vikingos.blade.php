@extends('layouts.landing')

@section('title', 'AMICAR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+15 days", $startdate);
?>
<style>
.opaco{
    display: none !important; 
}
 .input-min-width-95p {min-width:95%;}
   .input-min-width-95p {min-height:5%;}
</style>
 
        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
           <!-- <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="AMICAR">
--->
            <div id="cont1" align="align-items-center align-content-center">

<div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-2 pl-3 ">
      
 <div class="card">     
         <div class="card-body">


                        <a onclick="sendMail('QUIERO TENER LA PROMOCION'); eventosLanding('AGENDAR'); return false;">


    <center><img width="100%" src="https://imgur.com/GrsMejz.jpg"></center>
</a>

               <!-- <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://wa.me/56930132218"><img width="60" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>-->
                   
             <!--   <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://api.whatsapp.com/send?phone=56988078022&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://i.imgur.com/zwRWdi8.png"></a>

                <a class="ml-4" onclick="eventosLanding('gmail');" href="mailto:renovaciones@amicar.cl"><img width="50" src="https://imgur.com/W74gEi5.png"></a>
                   --->
                    
                </div>
            </div>

        </div>
    </div>

              <!--  <div class="videoWrapper">        
                    <iframe width="400" height="320" src="{{asset('/files/videoami.mp4')}}" frameborder="0" autoplay allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>-->

                <!--<div class="card">     
                <div class="card-body">

                    <h5 class="text-black text-center"> <strong> Desea agendar su visita</strong> </h5>

                        <div class="date btn bg-warning text-black col-12 mt-4">
                    <span>AGENDAR</span>
                    <input id="date1"  type="date" class="btn-date text-primary input-min-width-95p" style="border: none;" min="<?php //echo date('Y-m-d') ?>" max="<?php //echo date("Y-m-d", $enddate) ?>"/>
                     </div>

                       </div>
                   </div>-->
                  <!--  <label align="text-center" class=" col-10 col-md-12 mt-1">Fortaleza - V3</label><br>
                 <img style="max-width: 60%" class="img-fluid col-3 col-md-3 mt-2" src="https://i.imgur.com/eX2Gb1D.png" alt="simple"><a onclick="sendMail('Solicito ser Contactado por el modelo Fortaleza - V3');eventosLanding('Solicitud Informacion'); return false;" class="btn bg-warning text-black  col-3 mt-1">Contactar</a>
                 <br>  
                  <label align="text-center" class=" col-10 col-md-12 mt-1">Fortaleza - X25</label><br>
                <img  style="max-width: 60%" class="img-fluid col-3 col-md-3 mt-2" src="https://i.imgur.com/HYQVajl.png" alt="simple"><a onclick="sendMail('Solicito ser Contactado por el modelo Fortaleza - X25');eventosLanding('Solicitud Informacion'); return false;" class="btn bg-warning text-black  col-3 mt-1">Contactar</a>
                <br>  
                    <label align="text-center" class=" col-10 col-md-12 mt-1">Fortaleza - KUV 100</label><br>
                <img style="max-width: 60%" class="img-fluid col-3 col-md-3 mt-2" src="https://i.imgur.com/Qmh7ADw.png" alt="simple"><a onclick="sendMail('Solicito ser Contactado por el modelo Fortaleza - KUV 100');eventosLanding('Solicitud Informacion'); return false;" class="btn bg-warning text-black  col-3 mt-1">Contactar</a>-->

               
            
            <!--<div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56978789305&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56978789305"><img width="60" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:carla.torres@amicar.cl?subject=Landing%20Video%20Amicar"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>--->
        </div>


        <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-black text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>

   </div> 
     <script>
   //EVENT 1

         $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });

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
                    $('#error').text(e.msg);
                }
            })
            .fail(function() {
                console.log( "error" );
            });

        }
        

        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

           // json_datos.nombre = $('#name').text();
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
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'comercial': getUrlParameter('data1'),
                     'modelo': getUrlParameter('data2'),
                     'correo': getUrlParameter('data3'),

                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'comercial': getUrlParameter('data1'),
                     'modelo': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["ericksolanocl@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'marcostor13@gmail.com'
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
                    $('#message').text('Muchas Gracias. Su solicitud fue enviada a nuestra área. A la brevedad nos pondremos en contacto');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, Su compromiso de pago fue agendado');
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