@extends('layouts.landing')

@section('title', 'dell´oro')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
$name=$_GET['NOMBRE'];
$N_folio = $_GET['DATA1'];
$cliente = $_GET['DATA2'];
?>

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
    
</style>

    <div id="Banmedica" style=" /*background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;*/">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
           <img style="max-width: 80%" class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="Banmedica">-

<!--<img style="max-width: 50%" class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/LRZ1x2g.png" alt="UANDES">-->
           
             <div id="cont1" class="p-5  hide">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-warning text-black col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-4"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-1">
                <div class="card">     
                            <div class="card-body">
                <h3 class="text-black text-center">Señor(a) <span id="name"> <?php echo $name; ?></span></h3>

                <h3 class="text-black text-center">RUT:<span id="rut"> <?php echo $N_folio; ?></span></h3>
                   <p class="text-black text-center"><strong>
            Presente.</strong></p>
 <br> 
                <p class="text-black text-center">
                    Junto con saludar, como Dell’Oro Abogados nos dirigimos a usted por encargo de <strong> <?php echo $cliente; ?> </strong> atendido el retraso que registra actualmente en los pagos de su crédito automotriz.</p>                
<br>
<p class="text-black text-center">
                  En Dell’Oro Abogados entendemos que la vida no está exenta de imprevistos por lo que tenemos distintas opciones para ofrecerle dependiendo de la situación en que usted se encuentra, entre ellas un Pago Único Total <strong>(PUT)</strong>con un descuento de al menos el 30% de la deuda, un convenio de pago con un pie mínimo del 20% de la deuda y por un plazo máximo de 15 cuotas (todo esto previa aprobación de comité).</p>

                  <p class="text-black text-center">
                 Es por esto que lo invitamos a contactarnos para buscar una solución extrajudicial al pago de su deuda, evitando de esta forma las molestias e inconvenientes que le puede causar la cobranza.</p>


                  <p class="text-black text-center">
                 Para contactarnos puede hacerlo por los siguientes medios:
                 <br>
                 <br>
Fono de Contacto:<strong> 968391674</strong>
<br>
Correo electrónico: <strong>DGIRON@DELLOROABOGADOS.CL</strong>
<br>
Nombre Ejecutivo:<strong> DIANA GIRON</strong>
<br>
 </p>

 <strong>
       También, puede comunicarse con nosotros a nuestro Servicio de Atención de Clientes al <a href="tel:+226964361"> 226964361</a>, o dirigirse a nuestra oficina comercial ubicada en Carmencita 25, Of. 82, Las Condes.</strong>
         
<br><br>
         <p><small>Esta gestión no corresponde a un procedimiento que persiga la ejecución de sus bienes. La Ley 19.496 establece los derechos de los consumidores respecto de las acciones de cobranza extrajudiciales, entre ellas: se prohíbe que afecte su privacidad o situación laboral; los llamados de cobranza sólo se pueden realizar de lunes a sábados entre las 8:00 y las 20:00 horas; el consumidor tienen derecho a pagar su deuda directamente a la empresa a la que le debe; los gastos de cobranza extrajudicial deberán cumplir los límites establecidos en inciso 2 del artículo 37 de misma Ley, y se aplicarán transcurridos los primero 20 días desde la mora. Infórmese responsablemente sobre sus derechos en www.sernac.cl</p>

</div>
           <!-- </div>
                 <div class="mt-2 text-center col-12" style="background:#F1EFEE;">
                    <p class="text-black text-center"><br><strong>Seleccione alguna de estas opciones para comunicarte con un ejecutivo quien podrá asesorarle y resolver su consulta</strong></p>
                     <div class="d-flex justify-content-around align-content-center text-center">----> 
      
                    <!-- <span class="text-white  text-center">Mi Cuenta<br>
                     <a class="ml-2" onclick="eventosLanding('Cuenta');" href="https://solvencia.cl/pagadeudas/"><img width="60" src="https://image.freepik.com/foto-gratis/lupa_172429-232.jpg"></a></span>
                         <span class="text-danger  text-center">WhatsApp<br>
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890453&text=Hola,%20tengo%20una%20consulta%20por%20deuda%20Banmedica"><img width="50" src="https://i.imgur.com/86IRYB5.png"></a></span>
                       <span class="text-danger  text-center">Teléfono<br>
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:6004416010"><img width="50" src="https://i.imgur.com/EQmqiCk.png"></a></span>
                       <span class="text-danger  text-center">Correo<br>
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:contactos@solvencia.cl"><img width="50" src="https://i.imgur.com/Jg98aT5.png"></a></span>
                    <span class="text-danger  text-center">Pago en Línea<br>
                     <a class="ml-2" onclick="eventosLanding('Pago en Línea');" href="https://solvencia.cl/pagadeudas"><img width="50" src="https://i.imgur.com/2YPpKWm.png"></a></span>
                </div>-->



            </div>
        </div>
           <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
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
                    $('#dato1').text(N_Folio);
                     $('#dato2').text(cliente);
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
            json_datos.monto = $('#pay').text();
           // json_datos.date = $('#date1').val();

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
                    'Mombre': getUrlParameter('nombre'),
                    'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     //'Direccion': getUrlParameter('data1'),
                     'N_Folio': getUrlParameter('data1'),
                     'cliente': getUrlParameter('data2'),
                     'Comuna': getUrlParameter('data2') 
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                     'Fecha': date,
                    'Mombre': getUrlParameter('nombre'),
                    'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     //'Direccion': getUrlParameter('data1'),
                     'cliente': getUrlParameter('data2'),
                     'N_Folio': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            
            var correo = ["eduardo,binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                 'email': correo
                //'email':' {!! $landing->email !!}'
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
                    $('#message').text('Gracias, Su compromiso de pago fue agendado. Nos pondremos en contacto con usted en los próximos días');
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