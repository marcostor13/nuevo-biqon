@extends('layouts.landing')

@section('title', 'VTR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
  text: #747373;
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
    background-text: #262626;
    padding: 40px 30px;
}
 .fas {
  font-family: 'Font Awesome 5 Free';
  font-weight: 900; 
  background-text: #262626
}  

    
</style>

<div class="oscurecer p-3">
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start">
            <img style="max-width:55px; max-height:55px " class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR">

        </div></div>
    <div id="VTR" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; ">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <!--<img style="max-width:120px; max-height:120px " class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="VTR">-->

             <div id="cont1" class="p-5 ">
                <br><br><br>
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5 hide">
                <div class="text-white col-md-10">
                <h6 class="text-white text-center">Estimado(a) <span id="name"></span></h6>
                </div>
            <br><br>
                <p class="text-black">
                    Te informamos que presentas un retraso en el pago tu cuenta 
                    Te ofrecemos las siguientes opciones para regularizar tu deuda pendiente
                </p>
                <div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>
                <button onclick='url(); eventosLanding("Pagina de Pagos"); ' class="btn bg-danger text-white col-12 mt-4">PAGAR AHORA</button>

                 <button onclick='url2(); eventosLanding("Ver Boleta"); ' class="btn bg-danger text-white col-12 mt-4">Ver Boleta</button>
                
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-white col-12 mt-4">YA PAGUE</button>
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
    </div>
<div class="oscurecer">
<div class="accesos-directo text-center">
                    <p class="vtr-small text-white text-center">SERVICIOS PARA TI</p>

                    <ul>
                    <li>
                    <a onclick="eventosLanding('Planes');" href="http://centrodeayudaonline.vtr.com/consulte-su-boleta/cobro-reposicion-servicios/" class="text-white text-center" >
                    <i class="fas fa-mobile-alt text-danger"></i>   Planes y Tarifas</a></li>
                    <li>
                    <a  onclick="eventosLanding('Lugares de Pago');" href="https://vtr.com/productos/lugares-de-pago" class="text-white text-center">
                    <i class="fas fa-map-marked-alt text-danger"></i>   Lugares de Pago</a></li>
                    <li>
                    <a onclick="eventosLanding('Sucursales');"href="https://vtr.com/sucursales/v" class="text-white text-center">
                    <i class="fas fa-globe text-danger"></i>   Sucursales</a></li>
                    <li>
                    <a onclick="eventosLanding('Sucursal Virtual');" href="https://vtr.com/?login=1&authn_try_count=0&contextType=external&username=string&contextValue=%2Foam&password=sercure_string&challenge_url=https%3A%2F%2Fvtr.com%3Flogin%3D1&request_id=7587868025939220365&locale=es_ES&resource_url=https%253A%252F%252Fvtr.com%252Fmivtr%252Fpriv" class="text-white">
                    <i class="fas fa-user text-danger"></i>   Sucursal Virtual</a></li>
                    <li>
                    <a onclick="eventosLanding('Centro de ayuda');" href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-white">
                    <i class="fas fa-question text-danger"></i>   Centro de ayuda online</a></li>
                    <li>
                    <a onclick="eventosLanding('Reportar Abusos');"href="https://vtr.com/productos/reclamos" class="text-white">
                    <i class="fas fa-exclamation-circle text-danger"></i>   Reportar Abusos</a></li>
                    <li>
                    <a onclick="eventosLanding('Actualiza Datos');"href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-white">
                    <i class="fas fa-user text-danger"></i>   Actualiza Datos</a></li>
                    <li>
                    <a onclick="eventosLanding('Privacidad');" href="https://vtr.com/productos/privacidad" class="text-white">
                    <i class="fas fa-user-shield text-danger"></i>   Politica de Privacidad</a></li>
                    </ul>
                    </div>
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


         function url(){
    var rut; 
         rut= getUrlParameter('rut'); //1234  "76114143-0";
          console.log(rut);
            swal({
            // title: `el cododigo es: ${rut}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://vtr.com/miregistro/paymentExpress.jsp?_dyncharset=UTF-8&c-rut="+rut+"&_D:c-rut=+&_DARGS=/vtr/cartridges/VtrHOHeaderBarPayYourAccountCart/VtrHOHeaderBarPayYourAccountCart.jsp";
        })

        } 


            function url2(){
    var docid; 
         docid= getUrlParameter('data1'); //"AFAEc%2FnhOohJncAMwniaD1w1inFcH147"; //1234  "76114143-0";
          
            swal({
             //title: `el cododigo es: ${docid}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = " https://vtr.com/ss/vboleta/index.html#/home.html?docid="+docid;
        })

        } 

    
    </script>

@endsection