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
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="AMICAR">

            <div id="cont1" align="align-items-center align-content-center">
    

<div id="cont4" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around align-content-center mt-4"> 




                        <a onclick="sendMail('Quisiera agendar'); eventosLanding('AGENDAR'); return false;">

    <center><img width="100%" src="https://imgur.com/Y3Sw6ay.jpg"></center>
</a>

                 <br>
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

            //json_datos.nombre = $('#name').text();
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
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["eduardo.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}' "inttegrados@gmail.com", ,"jesus.binteraction@gmail.com" 
                //'email': 'marcostor13@gmail.com' ,"jesus.binteraction@gmail.com" 
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
                     $('#cont2').addClass('hide');
                     $('#cont7').addClass('hide');
                     $('#cont6').addClass('hide');
                     $('#port4').addClass('hide');
                     $('#port3').addClass('hide');
                     $('#port2').addClass('hide');
                     $('#port1').addClass('hide');
                     $('#nuev5').addClass('hide');
                     $('#nuev4').addClass('hide');
                     $('#nuev3').addClass('hide');
                     $('#nuev2').addClass('hide');
                     $('#nuev1').addClass('hide');
                     $('#form').addClass('hide');
                     $('#actual').addClass('hide');
                     $('#cont3').removeClass('hide');
                     $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted.');

                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, Su compromiso de pago fue agendado');
                     eventosLanding('Solicitud de Plan');
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

      
         function Mens(){
             window.location.href = "tel:+56975890470";
        }  


     function Mens1(){
   window.location.href = "https://api.whatsapp.com/send?phone=56975890470&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


    function Mens2(){
         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
             window.location.href = "mailto:angelo.castillo@solvencia.cl ?subject=Portabilidad%20Claro&body"+body_message;
 }


  function Mens3(){
        $('#cont2').addClass('hide');
        $('#form').removeClass('hide'); 
        $('#CONT').removeClass('hide');
        $('#actual').addClass('hide');

 }

 function activa(){

  $('#cont2').addClass('hide');
  $('#cont7').removeClass('hide');
 }

  function activa1(){

  $('#cont2').addClass('hide');
  $('#cont6').removeClass('hide');
 }
//portabilidad 4 planes
 function port1(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port1').removeClass('hide');
  $('#port11').removeClass('hide');
 }
 function port2(){

  $('#cont7').addClass('hide');
   $('#form').removeClass('hide');
   $('#actual').removeClass('hide');
  $('#port2').removeClass('hide');
  $('#port22').removeClass('hide');
 }
  function port3(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port3').removeClass('hide');
  $('#port33').removeClass('hide');
 }
 function port4(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port4').removeClass('hide');
  $('#port44').removeClass('hide');
 }
//linea nueva 5 planes
 function nuev1(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev1').removeClass('hide');
   $('#nuev11').removeClass('hide');
 }
 function nuev2(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev2').removeClass('hide');
   $('#nuev22').removeClass('hide');
 }
 function nuev3(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev3').removeClass('hide');
   $('#nuev33').removeClass('hide');
 }
 function nuev4(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev4').removeClass('hide');
   $('#nuev44').removeClass('hide');
 }
 function nuev5(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev5').removeClass('hide');
   $('#nuev55').removeClass('hide');
 }


 function p0(){

    $('#cont7').addClass('hide');
    $('#cont6').addClass('hide');
    $('#form').addClass('hide');
    $('#cont2').removeClass('hide');
    $('#port4').addClass('hide');
    $('#port3').addClass('hide');
    $('#port2').addClass('hide');
    $('#port1').addClass('hide');
    $('#nuev5').addClass('hide');
    $('#nuev4').addClass('hide');
    $('#nuev3').addClass('hide');
    $('#nuev2').addClass('hide');
    $('#nuev1').addClass('hide');
    $('#port44').addClass('hide');
    $('#port33').addClass('hide');
    $('#port22').addClass('hide');
    $('#port11').addClass('hide');
    $('#nuev55').addClass('hide');
    $('#nuev44').addClass('hide');
    $('#nuev33').addClass('hide');
    $('#nuev22').addClass('hide');
    $('#nuev11').addClass('hide');
    $('#actual').addClass('hide');
    $('#cont3').addClass('hide');
    $('#CONT').addClass('hide');
 }



    </script>
    

@endsection