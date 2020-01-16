@extends('layouts.landing')

@section('title', 'Prueba de Eventos')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+7 days", $startdate);
?>


<style>
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
    
}
</style>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css-->
<link rel="stylesheet"type="text/css"href="static/css/index.css">

</head>


    <div id="mundocredito" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-2" src="{{$landing->logo}}" alt="mundocredito">

            <div id="cont1" class="p-5 ">
                
                <!-- BOTON PAGAR-->
                <button type="button" class="btn btn-primary btn-lg btn-block" onclick='window.location.href="https://www.webpay.cl/portalpagodirecto/pages/index.jsf" '>PAGAR</button> 
                
                <!-- CALENDARIO-->
                <div class="date btn bg-primary text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="2019-12-20"/>
                </div>
                <br>
                <br>
                  
                 <!-- YA PAGUE-->
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-4">YA PAGUE</button>
                 
                 <!-- CONTACTO-->
                 <button type="button" class="btn btn-primary btn-lg btn-block" onclick='window.location.href="https://api.whatsapp.com/send?phone=56979201461&text=contactado%20por%20whatsapp%20xd" '>CONTACTO</button> 
                 
                <!-- ENVIAR CORREO-->
                  <button type="button" class="btn btn-primary btn-lg btn-block" onclick='window.location.href="mailto:maicol.binteraction@gmail.com" '>Enviar Correo</button> 



                <!--<h3 class="text-white text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>-->
                <!--<input id="rut" type="number" class="form-control mt-4 text-center text-blue input" autofocus>-->
                
            </div>

            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>

            <div id="cont2" class="p-5 hide">
                <h3 class="text-black text-center">Estimado <span id="name"></span></h3>

                <p class="text-black">
                   Te informamos que presentas un retraso en el pago de cuotas de tu crédito automotriz.
                    
                    Te ofrecemos las siguientes opciones para regularizar tu deuda pendiente.
                </p>
                <div class="date btn bg-primary text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="2019-12-20"/>
                </div>
                <button onclick='window.location.href="http://www.mundocrdito.cl/pagos.html"; eventosLanding("Pagina de Pagos");' class="btn bg-primary text-white col-12 mt-4">PAGAR AHORA</button>

                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-4">YA PAGUE</button>
                
                <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56967599344&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/79/dc/31/79dc31280371b8ffbe56ec656418e122.png"></a>
                    <a onclick="eventosLanding('Llamar');" href="tel:+566599344"><img width="40" src="https://purtascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                    <a onclick="eventosLanding('Correo');" href="mailto:mndocredito@prainabogados.cl?subject=Landing%20Mundo%20Credito"><img width="40" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>
                </div>       
            </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                 <div class="card">     
                     <div class="card-body">
                         <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                     </div>
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

            json_datos.nombre = $('#name').text();
            
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
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                     'ejecutivo': getUrlParameter('data1'),
                   'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                   // 'monto': getUrlParameter('monto'),
                    'rut': getUrlParameter('rut'),
                    'phone': getUrlParameter('telefono'),
                     'ejecutivo': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["luis.binteraction@gmail.com"];
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

      
        
    
    </script>
    

@endsection