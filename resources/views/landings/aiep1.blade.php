@extends('layouts.landing')

@section('title', 'AIEP')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+2 days", $startdate);
$enddate1=strtotime("+5 days", $startdate);

//$name = $_GET["NOMBRE"];
//$name=$_GET['NOMBRE'];
//$Nom_Asistente=$_GET["DATA1"];
//$fecha_contrato $_GET["DATA5"];
//$num_cuota=$_GET["DATA2"];
//$producto="PRODUCTO";
//$entidad="ENTIDAD";
//$monto=$_GET["MONTO"];

?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">


.oscurecer {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#6BBDA1), to(#4378AC));
  background-image: linear-gradient(180deg, #6BBDA1 0%, #4378AC 100%);
  width: 100%;
}
@keyframes hideFrame{
    0% { margin-top: 0 }
    100% { margin-top: -100vh } 
}
@keyframes showFrame{
    0% { margin-top: 200vh }
    100% { margin-top: 0 } 
}

.hideClass{
    animation-name: hideFrame;
    animation-duration: 1s;
}

.showClass{
    animation-name: showFrame;
    animation-duration: 1s; 
}


    
</style>

<!-- HEAD -->
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
 
 <div class="oscurecer p-5">
        <div id="head" class="p-1 pl-1 pr-1 "> <a href="#"> <img class="img-fluid col-2 col-md-2" src="{{$landing->logo}}" alt="AIEP"></a>
        </div>
 </div>

    <div id="cont1" class="p-5">
        <div class="p-5 ">
    <h5 class="center"> Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña) ##NOMBRE## ?</h5>
            <a class="btn bg-success text-white col-5 mt-4" onclick="url(1)">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" onclick="url(2)">SI</a>
        </div>
</div>

<div id="cont2" class="p-5 hide">
        <div class="p-5 ">
            <h5 class="center">AIEP le informa que la mensualidad de <b> ##CARRERA## </b> vence el día <b> ##FECHA_VENCE## </b> por un monto de <b> ##MONTO## </b>.<br>
            <br><br>¿Podrá pagar en la fecha indicada?</h5>
        </div>
        <div class="p-5 ">
            <a class="btn bg-success text-white col-5 mt-4" href="#">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" href="#">SI</a>
        </div>
</div>

<div id="cont3" class="p-5 hide">
    <div class="p-5 ">
            <p>Muchas gracias. Le recordamos que puede pagar en </p><br>
            <p>
                <a class="btnLink" href="https://bit.ly/3btocnI">Zumpago</a>
                <a class="btnLink" href="https://portalpago.aiep.cl/">Portal de pago AIEP</a>
                <a class="btnLink" href="https://www.sencillito.com/">Sencillito</a>
                <a class="btnLink" href="https://www.servipag.cl/">Servipag</a>
                <a class="btnLink" href="https://www.unired.cl/">Unired</a>
            </p><br>
            <p>Además del pago presencial en ServiFácil, Sencillito, Unired, ServiEstado y CajaVecina</p>
    </div>
</div>

<div id="cont4" class="p-5 hide">
         <div class="p-5 ">
            <p class="center">¿Nos podría indicar una fecha de pago?</p>
        </div>
        <div id="datepicker"></div><br>
        <a class="btn bg-success text-white col-12 mt-4" >Continuar</a>
</div>

<div id="cont5" class="p-5 hide">
   <div class="p-5 ">
            <p class="center">Muchas gracias por su tiempo y disculpe las molestias</p>
    </div>
</div>

<div id="cont6" class="p-5 hide">
    <div class="p-5 ">
            <p>Seleccionó el día <b> ##FECHAPAGO##</b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
    </div>
</div>

<div id="cont7" class="p-5 hide">
    <div class="p-5 ">
            <p>
                De acuerdo a nuestros registros, desde el día <b> ##FECHA##</b> se encuentra(n) <b> ##NCUOTAS##</b> cuotas(s) pendiente(s) de su <b>> ##CARRERA##</b>
                por un valor de <b> ##MONTO##</b>. ¿Cuando puede efectuar el Pago?
            </p>
        </div>
        <div id="datepicker" ng-init="initializeCalendar()"></div>
        <a class="btn bg-success text-white col-12 mt-4" onclick="url(3)" >Seleccionar fecha</a>
        <a class="btn bg-success text-white col-12 mt-4" onclick="url(4)">No puedo</a>
    </div>
</div>


<div id="cont8" class="p-5 hide">
    <div class="p-5 ">
            <p class="center">Conoce Ud a <b><span class="cap">##NOMBRE##</span></b>?</p>
    </div>
    <div class="twoButtonsWrapper">
            <a class="btn bg-success text-white col-12 mt-4"  href="#" >SI</a>
            <a class="btn bg-success text-white col-12 mt-4"  href="#" >NO</a>
    </div>
</div>

<div id="cont9" class="p-5 hide">
    <div class="p-5 ">
            <p class="center">Por favor indicar el motivo de su atraso</p>
        </div>
        <ul>
            <li > Cesante</li>
            <li > Problema económico</li>
            <li > Problema de salud</li>
            <li > Crédito</li>
            <li > Reclamo</li>
            <li > Ya pagó</li>
            <li > No tengo cupón</li>
            <li > Siniestro</li>
            <li > Olvido</li>
            <li > Otra</li>
        </ul>
        <textarea placeholder="Ingresa tu motivo de no pago (máximo 200 caracteres)" maxlength="200"></textarea>
        <a class="btn bg-success text-white col-12 mt-4"  href="#">Continuar</a>
</div>


<div id="cont10" class="p-5 hide">
    <div class="p-5 ">
            <p class="center">Sería tan amable de entregarme alguno de estos datos de contacto?</p>
        </div>
        <form name="contactForm" novalidate="">
            <label>Teléfono <span ng-if="contactForm.phone.$invalid">Error</span></label>
            <input type="text" name="phone" id="phone" ng-model="contact.phone" placeholder="+569" inputmode="tel" maxlength="12">
            <label>Email <span class="labelError" ng-if="contactForm.email.$invalid">(email inválido)</span></label>
            <input type="email" name="email" id="email" ng-model="contact.email" placeholder="Ingrese correo electrónico" inputmode="email" maxlength="50">

            <a class="btn bg-success text-white col-12 mt-4"  href="#" oneclick="checkContactData()">Enviar</a>
        </form>
</div>

<div id="cont11" class="p-5 hide">
    <div class="p-5 ">
            <p>Gracias por la información de contacto, le agradecemos su ayuda</p>
    </div>
</div>

<div id="cont12" class="p-5 hide">
    <div class="p-5 ">
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. A la brevedad nos pondremos en contacto con Ud. Para resolver su reclamo.</p>
            <p >Entendemos, verificaremos la información. Disculpe las molestias y gracias por su tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., para conocer en detalle la situación en que se encuentra y poder entregarle las mejores alternativas de solución . Gracias por su atención y tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., gracias por su atención.</p>
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
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Marca': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Marca': getUrlParameter('data1'),
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
       
    
function url(idButton) {

 switch(idButton) {
 case 1:
          $('#cont1').addClass('hideClass').promise().done(function(){
              $('#cont1').addClass('hide')
          });
          $('#cont8').removeClass('hide').promise().done(function(){
              $('#cont8').addClass('showClass')
          });
    break;

 case 2:
           $('#cont1').addClass('hideClass').promise().done(function(){
              $('#cont1').addClass('hide')
          });
          $('#cont7').removeClass('hide').promise().done(function(){
              $('#cont7').addClass('showClass')
          });

    break;

 case 3:
          $('#cont7').addClass('hideClass').promise().done(function(){
              $('#cont7').addClass('hide')
          });
          $('#cont4').removeClass('hide').promise().done(function(){
              $('#cont4').addClass('showClass')
          });

    break;
 case 4:

          $('#cont7').addClass('hideClass').promise().done(function(){
              $('#cont7').addClass('hide')
          });
          $('#cont9').removeClass('hide').promise().done(function(){
              $('#cont9').addClass('showClass')
          });

    break;
    case 5:

          $('#cont1').addClass('hideClass').promise().done(function(){
              $('#cont1').addClass('hide')
          });
          $('#name').text(geturlParameter('nombre'));
          $('#usrbad').removeClass('hide').promise().done(function(){              
              $('#usrbad').addClass('showClass')
          });


    break;
     case 6:

          $('#usrbad').addClass('hideClass').promise().done(function(){
              $('#usrbad').addClass('hide')
          });
          $('#name').text(geturlParameter('nombre'));
          $('#equiv1').removeClass('hide').promise().done(function(){
              $('#equiv1').addClass('showClass')
          });


    break;
     case 7:

          $('#equiv1').addClass('hideClass').promise().done(function(){
              $('#equiv1').addClass('hide')
          });
          $('#equiv10').addClass('hideClass').promise().done(function(){
              $('#equiv10').addClass('hide')
          });
          $('#name').text(geturlParameter('nombre'));
          $('#equiv2').removeClass('hide').promise().done(function(){
              $('#equiv2').addClass('showClass')
          });
    break;
default:
          alert("OPCION INVALIDA.")
        }

   }
    </script>
    

@endsection