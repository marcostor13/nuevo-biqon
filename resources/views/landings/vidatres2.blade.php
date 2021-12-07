@extends('layouts.landing')

@section('title', 'VIDATRES')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
//$name=$_GET['NOMBRE'];
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

    <div id="VIDATRES" style=" /*background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;*/">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
           <img style="max-width: 80%" class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="VIDATRES">-

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
                <h3 class="text-black text-center">Estimado(a) <span id="name"> <?php //echo $name; ?></span></h3>
<hr>
                <p class="text-black text-center">
                 Junto con saludar y en atención a lo instruido por Isapre Vida Tres solicito comunicarse a la brevedad posible, para entregarle información de su interés sobre presuntas inconsistencias en sus cotizaciones de salud y regularizar pagando solo el capital de la deuda exonerando los intereses, reajuste y recargos.<br>

                </p><br>
  </div>
            </div>
                 <div class="mt-2 text-center" style="background:#fff;"> 

                    <p class="text-black text-center"><br><strong>Seleccione alguna de estas opciones para comunicarte con un ejecutivo quien podrá asesorarle y resolver su consulta</strong></p>
                     <div class="d-flex justify-content-around align-content-center text-center"> 
      
                    <!-- <span class="text-white  text-center">Mi Cuenta<br>
                     <a class="ml-2" onclick="eventosLanding('Cuenta');" href="https://solvencia.cl/pagadeudas/"><img width="60" src="https://image.freepik.com/foto-gratis/lupa_172429-232.jpg"></a></span>
                         <span class="text-primary  text-center">WhatsApp<br>
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890453&text=Hola,%20tengo%20una%20consulta%20por%20Vida%20Tres"><img width="50" src="https://i.imgur.com/86IRYB5.png"></a></span>
                       <span class="text-primary  text-center">Teléfono<br>
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:6004416010"><img width="50" src="https://i.imgur.com/EQmqiCk.png"></a></span>
                       <span class="text-primary  text-center">Correo<br>
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:contactos@solvencia.cl"><img width="50" src="https://i.imgur.com/Jg98aT5.png"></a></span>
                    <span class="text-primary  text-center">Pago en Línea<br>
                     <a class="ml-2" onclick="eventosLanding('Pago en Línea');" href="https://solvencia.cl/pagadeudas"><img width="50" src="https://i.imgur.com/2YPpKWm.png"></a></span>
                </div>-->
                 <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890497&text=Hola,%20tengo%20una%20consulta%20Isapre%20%20Vida%20Tres"><img width="70" src="https://i.imgur.com/kzyuhVO.png"></a></span>
                        <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:+56975890486"><img width="70" src="https://i.imgur.com/9AbTaoC.png"></a></span>
                        <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:isapreregulariza@solvencia.cl"><img width="70" src="https://i.imgur.com/h7UKcOG.png"></a></span>
                     <span class="text-white text-center">
                <a class="ml-2" onclick="eventosLanding('Pago en Línea');" href="https://www.vidatres.cl/pago-en-linea/"> <img width="70" src="https://i.imgur.com/HEnso4V.png"></a></span>
                </div>
                <br><br>

Si al momento de recibir la presente comunicación ya regularizó esta situación, agradeceremos no considerarla y desde ya le damos las gracias por su atención <br>
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
                     'Direccion': getUrlParameter('data1'),
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
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            
            var correo = ["isapreregulariza@solvencia.cl"];
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