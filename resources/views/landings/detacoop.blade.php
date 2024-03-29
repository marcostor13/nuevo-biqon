@extends('layouts.landing')

@section('title', 'Detacoop')

@section('content')


<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">
    
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
   .red {
      color: "#f29100;"}
</style>

     <!-- <div id="CMPAbogados" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:200px">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0" style="background:#00335f;">
             <img style="max-width:420px; max-height:200px" class="img-fluid col-md-3 mt-2" src="https://detacoop.cl/wp-content/uploads/2018/01/logo-simple-2.png" alt="Detacoop">
               <br>
             <div>
               <img  style="max-width:300px; max-height:300px" src="https://www.detacoop.cl/wp-content/uploads/2020/09/SLIDER-PORTABILIDAD-FINANCIERA-CUAD.jpg">
  
             </div>
             
             <div id="cont1" class="p-5 hide">
                <h4 class="text-black text-center">Por Tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-success text-white col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5">
              <center><h3 class="text-white ">
                    Te entregamos estos consejos</h3></center>
               <!-- <h3 class="text-black text-center">Estimado(a) <span id="name"></span></h3>-->

            

                    <br>
                    <h3 class="text-warning"> Destino de los recursos:</h3>

                    <h4 class="text-white"align="text-center"> 
                    La normativa que regula los retiros, no obliga a los afiliados a destinar los recursos a un determinado fin.</h4>
                    <br>


                 <strong><h3 class="text-warning">Las opciones son múltiples:</h3></strong>
<table class="default">

  <tr>
    <td>
                  <img style="max-width:80px; max-height:80px" src="https://i.imgur.com/NHPSHhx.png"></td>
<td>
                  
                   <h5 class="text-warning"> Hazte Socio</h5> 
                    <h6 class="text-white"> Tu dinero está seguro con nosotros porque contamos con GARANTÍA DEL ESTADO y somos supervisados por la Comisión para el Mercado Financiero (CMF), ex SBIF. </h6></td>
                  </tr>
                </table>
                    <br>


                 <strong><h3 class="text-white">Te recomendamos ahorrar los fondos para tu futuro:</h3></strong>

     <table class="default">

  <tr>
    <td>

           

                    <img style="max-width:80px; max-height:80px"src="https://i.imgur.com/ypGHAER.jpg"> </td>
                    <td>
                          
                    <h5 class="text-warning">DEPÓSITOS A PLAZO</h5>

                    <h6 class="text-white">Debajo del colchón su dinero no aumenta. Gane con Detacoop un interés preferencial y vea cómo su dinero crece.</h6>
                  </td>
                  </tr>
                </table>

                 <table class="default">

  <tr>
    <td>


                  <img style="max-width:80px; max-height:80px" src="https://i.imgur.com/LJHVhzd.png"> </td>
           <td>    
                    <h5 class="text-warning">CUENTA DE AHORRO</h5>

                    <h6 class="text-white">Con solo tres mil pesos puedes partir con tu ahorro. Evita que sus hijos pierdan oportunidades mañana puede pasar por una decisión hoy. No hay nada como la casa propia y cumplir sus sueños es un esfuerzo diario.</h6></td>   
                     </tr>
                </table>

                <div class="mt-2 text-center" style="background:#006fb6;"> 
<h6 class="text-warning text-center">Selecciona alguna de estas opciones para comunicarte con un ejecutivo quien podrá asesorarle y resolver su consulta</h6> 
                     <div class="d-flex justify-content-around align-content-center text-center"> 
      
                    <!-- <span class="text-white  text-center">Mi Cuenta<br>
                     <a class="ml-2" onclick="eventosLanding('Cuenta');" href="https://solvencia.cl/pagadeudas/"><img width="60" src="https://image.freepik.com/foto-gratis/lupa_172429-232.jpg"></a></span>-->
                         <span class="text-white  text-center">Telefono<br>
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56966886629&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png"></a></span>
                       <span class="text-white text-center">Teléfono Central<br>
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:966886629"><img width="50" src="https://image.freepik.com/vector-gratis/mano-humana-sosteniendo-telefono-movil_74855-6532.jpg"></a></span>
                       <span class="text-white  text-center">Correo<br>
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:ecalderonm@detacoop.cl"><img width="50" src="https://image.freepik.com/psd-gratis/monitor-escritorio-3d-correo_23-2148938933.jpg"></a></span>
                   <!-- <span class="text-white  text-center">Pago en Linea<br>
                     <a class="ml-2" onclick="eventosLanding('Pago en Linea');" href="https://www.oriencoop.cl/express/"><img width="50" src="https://img.freepik.com/free-vector/plain-credit-card-concept-illustration_114360-199.jpg?size=338&ext=jpg"></a></span>-->
                <br><br>

                  </div>
          

                <br>


                    <!--  <div class="bg-danger"><img src=""> <font color="black"><a onclick="eventosLanding('Facebook');" href="https://www.facebook.com/coopeuch/"><img width="40" height="40" src="https://i.imgur.com/nh5Bh5C.png"></a><a onclick="eventosLanding('Twitter');" href="https://twitter.com/COOPEUCH"><img width="28" height="28" src="https://i.imgur.com/ITWWhIz.png"></a><a onclick="eventosLanding('Instagram');" href="https://www.instagram.com/coopeuch/"><img  width="43" height="43" src="https://i.imgur.com/u9D7nV9.png"></a> <a style="color: white;"  href="https://www.coopeuch.cl">coopeuch.cl</a>               <a style="color: white; text-align: left;"   href="tel:+6002001200">600 200 1200</a></font></div>-->

                 
                   <!-- <button onclick="Mens1(); eventosLanding('Pago Transferencia');" class="btn bg-success text-white col-12 mt-2">PAGAR AHORA </button>
                

                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-success text-white col-12 mt-2">YA PAGUE</button>

                 <button class="btn bg-success text-white col-12 mt-2" onclick="sendMail('El cliente solicito que contactarse');eventosLanding('Contactarse');">QUIERO QUE ME CONTACTEN</button>
            
                
                 <button onclick="Mens2(); eventosLanding('Llamar');" class="btn bg-success text-white col-12 mt-2">LLAMAR A EJECUTIVO </button>   

                 <button onclick="Mens3(); eventosLanding('whatsapp');" class="btn bg-success text-white col-12 mt-2">WHATSAPP EJECUTIVO </button> -->

             </div>
                           <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>
        </div>

     <script>
   //EVENT 1

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
                   // $('#pay').text(e.data.monto);
                    $('#cont2').removeClass('hide');
                    $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });
                }else{
                        $('#cont1').addClass('hide');
                     $('#cont5').removeClass('hide');
                    $('#error').text("Validación incorrecta, Por favor Comuniquese Aquí.");
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
                    'Nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                   'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["ecalderonm@detacoop.cl"];  

            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'arojas@zonasursa.cl', "arojas@zonasursa.cl"
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
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, Su compromiso de pago fue agendado');
                      eventosLanding('Compromiso de Pago');

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


           function Mens1(){
      
 /*  window.location.href = "https://ww3.servipag.com/pagoenlinea/portal/desktop/public/todas/!ut/p/b1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNgs0CLZ0MHQ38zQPcDBx9gs1CzAK9Df0DTYAKIvEo8DanTL-HEXH6DXAARwNC-r30o9Jz8pOAXg3Xj8KrGOQXvApAjgUrwOMaP4_83FT9gtzQ0IjKYE9dR0VFADNEynw!/dl4/d5/L2dBISEvZ0FBIS9nQSEh/?idServicio=34&idBiller=843?TELEFONO=985296912&ID=79849235&URL=https://ww3.servipag.com/pagoenlinea/portal/desktop/public/todas/!ut/p/b1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNgs0CLZ0MHQ38zQPcDBx9gs1CzAK9Df0DTYAKIvEo8DanTL-HEXH6DXAARwNC-r30o9Jz8pOAXg3Xj8KrGOQXvApAjgUrwOMaP4_83FT9gtzQ0IjKYE9dR0VFADNEynw!/dl4/d5/L2dBISEvZ0FBIS9nQSEh/?idServicio=34&idBiller=843";*/

     window.location.href = "https://tanner.cl/formas-de-pago/";


        } 

    function Mens3(){

        window.location.href = "https://api.whatsapp.com/send?phone=+56993217839&text=Hola,%20tengo%20una%20consulta";
    
        } 

           function Mens2(){

        window.location.href ="tel:800207070";
    
        } 
    </script>
    

@endsection