@extends('layouts.landing')

@section('title', 'Hites')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
.opaco{
    display: none !important; 
}
</style>

    <!--<div id="Hites" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 40%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="Hites">


             <div id="cont1" class="p-5 ">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
        </div>
            <div id="cont2"  class="p-4 hide"><!--hide-->
                   <h3 class="text-black text-center"> <strong> <span id="name"></span> </strong></h3>
                    <h3 class="text-black text-center"> <strong> Con Hites, ahora es mas Fácil Pagar tu cuenta </strong> </h3>
                

               <p class="text-black">
                    Te informamos que presentas un retraso en el pago tus cuotas por un monto total de, mas recargos por mora:
                    <b>$ </b><b id="pay">$ 500</b>
                    Te ofrecemos las siguientes opciones para regularizar tu deuda pendiente
                </p>

                 <div class="date btn bg-primary text-white col-12 mt-4">
                    <img width="30" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Google_Calendar_icon.svg/512px-Google_Calendar_icon.svg.png"> 
 <span>AGENDAR COMPROMISO DE PAGO</span> <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>

                <button onclick='window.location.href="https://pagofacil.hites.com/"; eventosLanding("Pagina de Pagos");' class="btn bg-primary text-white col-12 mt-4"> <img width="30" src="https://image.flaticon.com/icons/png/512/712/712742.png"> PAGAR ONLINE</button>

                <button onclick='Mas(); eventosLanding("Pagina de Pagos");' class="btn bg-primary text-white col-12 mt-4"> <img width="30" src="https://www.pngkey.com/png/full/961-9610665_icono-cuentas-por-pagar-icono-cuentas-por-pagar.png">  VER CANALES DE PAGO</button>

                <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-primary text-white col-12 mt-2"> <img width="30" src="https://img.icons8.com/wired/64/FFFFFF/phonelink-ring.png"> LLÁMANOS</a>

                <button onclick="eventosLanding('Correo'); Mens2();" class="btn bg-primary text-white col-12 mt-2"> <img width="30" src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png"> ESCRÍBENOS</button>

                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-4"> <img width="30" src="https://upload.wikimedia.org/wikipedia/commons/b/b0/Light_green_check.svg"> YA PAGUE</button>
            </div>
            
<!--<img width="30" src="https://image.flaticon.com/icons/png/512/712/712742.png">
<img width="30" src="https://www.pngkey.com/png/full/961-9610665_icono-cuentas-por-pagar-icono-cuentas-por-pagar.png">
  -->      </div>

        <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-black text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>
            <!--<div class=" tagline w3-center w3-animate-top black-text">Binteraction.com</div>-->
        
    <!--</div>-->
            <div id="cont6" class="p-2 pl-3 pr-3 hide">
                     <div class="text-black col-md-12">
                    <!--<h5 class="text-grey text-center"> ENERGIA - CARGADORES</h5> -->      
                <div>
                    <label>SENCILLITO</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://web.costaneranorte.cl/wp-content/uploads/2019/08/logo_sencillitocom_new2.png" alt="sencillito">
                 </div> 
                    <button  onclick="eventosLanding('SENCILLITO'); Mens6();" class="btn bg-primary text-white col-12 mt-2">Confirmar</button>

                    <div>
                    <label>MULTICAJA</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://www.multicaja.cl/image/layout_set_logo?img_id=68720&t=1588213540367" alt="multicaja">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button  onclick="eventosLanding('MULTICAJA'); Mens5();" class="btn bg-primary text-white col-12 mt-2">Confirmar</button>

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
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                    // 'Direccion': getUrlParameter('data1'),
                    // 'Comuna': getUrlParameter('data2')    
                    'landing': '{!! $landing->name !!}'            
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                   //  'Direccion': getUrlParameter('data1'),
                    // 'Comuna': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["jesus.binteraction@gmail.com"];
           // 'email': '{!! $landing->email !!}'
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

        function Mas(){
   // var id_adm; 
        // id_adm= getUrlParameter('data1'); //1234;
           $('#cont2').addClass('hide');
            $('#cont6').removeClass('hide');
           // swal({
           //  title: `Para Comunicarse, seleccione la opcion 2`,
             //text: "Expandir la Pantalla",
           //  type: "success",
           //  timer: 5000
       // }, 
       // function(){
       // })


        } 
      
         function Mens(){
   
             window.location.href = "tel:60055060000";
        } 

    function Mens6(){
   
             window.location.href = "https://www.multicaja.cl/";
        } 

    function Mens5(){
   
             window.location.href = "www.sencillito.com";
        } 



      function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut');

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "%0A%20Estimado%20Cliente,%0A%20favor%20env%C3%ADe%20su%20consulta%20relacionada%20al%20pago%20de%20su%20cuenta.%20%0A%20Saludos%20cordiales%20%0A%20%0A%20Atte.%20Hites";

   window.location.href = "mailto:jesus.binteraction@gmail.com?subject=Pago%20de%20Cuenta%20&body= "+body_message;

 }


    </script>
    

@endsection