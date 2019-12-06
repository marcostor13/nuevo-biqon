@extends('layouts.landing')

@section('title', 'VTR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
      rgba(0, 0, 0),
      rgba(0, 0, 0)
    )
    }

.accesos-directo {
    /*position: relative;*/
    background-color: #262626;
    padding: 40px 30px;
}
    
</style>

<div class="oscurecer">
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start">
            <img style="max-width:65px; max-height:65px " class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR">

        </div>
    </div>
    <!--<div id="VTR" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:800px">-->
        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
              <img  class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->background}}" alt="VTR">
            <!--<img style="max-width:120px; max-height:120px " class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="VTR">-->

             <div id="cont1" class="p-5 ">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-danger text-black col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5 hide">
                <h3 class="text-black text-center">Estimado(a) <span id="name"></span></h3>

                <p class="text-black">
                    Te informamos que presentas un retraso en el pago tu cuenta 
                    <!-- por un monto total de, mas recargos por mora:
                    <b>$ </b><b id="pay"></b>-->
                    Te ofrecemos las siguientes opciones para regularizar tu deuda pendiente
                </p>
                <div class="date btn bg-danger text-black col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>
                <button onclick='window.location.href="https://vtr.com/?pagoexpress=1"; eventosLanding("Pagina de Pagos"); ' class="btn bg-danger text-black col-12 mt-4">PAGAR AHORA</button>
                
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-black col-12 mt-4">YA PAGUE</button>
                
             <!-- <button onclick='window.location.href="http://centrodeayudaonline.vtr.com/consulte-su-boleta/cobro-reposicion-servicios/"; eventosLanding("Pagina de Tarifas"); ' class="btn bg-danger text-black col-3 mt-4">TARIFAS Y PLANES</button>

                <button onclick='window.location.href="https://vtr.com/productos/lugares-de-pago"; eventosLanding("Lugares de Pago"); ' class="btn bg-danger text-black col-3 mt-4">LUGARES DE PAGO</button>

                <button onclick='window.location.href="https://vtr.com/sucursales/v"; eventosLanding("Sucursales"); ' class="btn bg-danger text-black col-3 mt-4">SUCURSALES Y TIENDAS</button>

                <button onclick='window.location.href="https://vtr.com/?login=1&authn_try_count=0&contextType=external&username=string&contextValue=%2Foam&password=sercure_string&challenge_url=https%3A%2F%2Fvtr.com%3Flogin%3D1&request_id=7587868025939220365&locale=es_ES&resource_url=https%253A%252F%252Fvtr.com%252Fmivtr%252Fpriv"; eventosLanding("Sucursal Virtual"); ' class="btn bg-danger text-black col-3 mt-4">SUCURSAL  VIRTUAL</button>

                <button onclick='window.location.href="http://centrodeayudaonline.vtr.com/contactanos/"; eventosLanding("Centro de Ayuda"); ' class="btn bg-danger text-black col-5 mt-4">CENTRO DE AYUDA VTR</button>

                <button onclick='window.location.href="https://vtr.com/productos/reclamos"; eventosLanding("Pagina de Pagos"); ' class="btn bg-danger text-black col-3 mt-4">REPORTAR ABUSO</button>

                <button onclick='window.location.href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/"; eventosLanding("Actualiza Datos"); ' class="btn bg-danger text-black col-3 mt-4">ACTUALIZA LOS DATOS</button>

                <button onclick='window.location.href="https://vtr.com/productos/privacidad"; eventosLanding("Privacidad"); ' class="btn bg-danger text-black col-5 mt-4">POLITICA DE PRIVACIDAD</button>-->

               <!-- <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56978096473&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                
                    <a onclick="eventosLanding('Llamar');" href="tel:+5625898377 "><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>

                    <a onclick="eventosLanding('Correo');" href="mailto:josesm@procollect.cl"><img width="40" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>
                </div>-->
                    <br>
                    <div>
                    
                    </div>
                
            </div>
           <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-4 hide"></h5>
                            </div>
                        </div>
                    </div>
        </div>
    <!--</div>-->
<div class="oscurecer">
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start">
          <p class="vtr-small vtr-offset-bottom-1 text-white">SERVICIOS PARA TI</p>


                    <table>
                    <tr>
                    <tdp-2 class="p-2 pl-5 pr-5"> 
                    <a href="http://centrodeayudaonline.vtr.com/consulte-su-boleta/cobro-reposicion-servicios/" class="text-white" data-scroll-link="true">
                    <i class="icon-usuario text-white"></i>Planes y Tarifas</a> </td>
                    <td>
                    <a href="https://vtr.com/productos/lugares-de-pago" class="text-white">
                    <i class="icon-pago text-white"></i>Lugares de Pago</a> </td>
                    </tr>

                    <td> 
                    <a href="https://vtr.com/sucursales/v" class="text-white">
                    <i class="icon-mail text-white"></i>Sucursales</a> </td>
                    <td> 
                    <a href="https://vtr.com/?login=1&authn_try_count=0&contextType=external&username=string&contextValue=%2Foam&password=sercure_string&challenge_url=https%3A%2F%2Fvtr.com%3Flogin%3D1&request_id=7587868025939220365&locale=es_ES&resource_url=https%253A%252F%252Fvtr.com%252Fmivtr%252Fpriv" class="text-white">
                    <i class="icon-usuario text-white"></i>Sucursal Virtual</a> </td>
                    </tr>
   
                    <tr>
                    <td>
                    <a href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-white">
                    <i class="icon-ayuda text-white"></i>Centro de ayuda online</a> </td>
                    <td> 
                    <a href="https://vtr.com/productos/reclamos" class="text-white">
                    <i class="icon-big-i text-white"></i>Reportar Abusos</a> </td>
                    </tr>
                    <tr>
                    <td>
                    <a href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-white">
                    <i class="icon-big-i text-white"></i>Actualiza Datos</a> </td>
                    <td>
                    <a href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-white">
                    <i class="icon-big-i text-white"></i>Actualiza Datos</a> </td>
                    <td>
                    </tr>
                    <tr>
                    <a href="https://vtr.com/productos/privacidad" class="text-white">
                    <i class="icon-big-i text-white"></i>Politica de Privacidad</a> </td>
                    </tr>
                    </table>
        </div></div>


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
                    $('#error').text(e.msg);
                }
            })
            .fail(function() {
                console.log( "error" );
            });

        }
        

        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

            json_datos.nombre = $('#name').text();
            json_datos.monto = $('#pay').text();

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
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["jesus.binteraction@gmail.com", "josesm@procollect.cl"];  
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