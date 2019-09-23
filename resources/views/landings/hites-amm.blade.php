@extends('layouts.landing')

@section('title', 'HITES')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
// echo date("M d", $startdate) . "<br>";
  // echo date("Y-m-d", $enddate) . "<br>";
 
?>

<style type="text/css">
#n1,div#n2,#n3,#n4,#n5,#n6,#n7,#n8 {
    display:none; }
    body{
      background: #0474b4;
  color: #FAFAFA;
    }
    #music{
        opacity: 0;
    }
</style>

    <div id="HITES" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="HITES">

             <div id="cont1" class="p-5 ">|
                <h3 class="text-white text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-white">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4">Validar</button>
                <h5 id="error"class="text-white text-center mt-5"></h5>
            </div>

            <div id="n1">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-animate-top">HOLA</div>
        <div class="intro w3-animate-bottom orange-text"><strong><?php echo $Nombre," ", $Apellido;?></strong></div>
    </main>
</div>

    
<div id="n2">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-animate-bottom">Monto referencial a</div>
        <div class="intro w3-animate-bottom orange-text"><strong><?php echo $meses[date('n')-1]. " del ".date('Y') ;?></strong></div>

        <div class="intro w3-center w3-animate-bottom">Valor cuota</div>
        <div class="intro w3-animate-bottom orange-text"> <strong> $ <?php echo $tota;?></strong></div>

        <div class="intro w3-center w3-animate-bottom">Vencimiento</div>
        <div class="intro w3-animate-bottom orange-text"> <strong> <?php echo $fecha_vence;?></strong></div>
    </main>
</div>


    
<div id="n3">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-center w3-animate-top">¿Tienes problemas para pagar tu cuota?</div>
        <div class="intro w3-center w3-animate-top orange-text">Solicita tu Avance Monto Mínimo </div>
        <div class="intro w3-center w3-animate-top"> Aliviana tu cuota</div>
    </main>
    </div>


    
<div id="n4">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-center w3-animate-bottom orange-text">¿Cómo solicitar el Avance Monto Mínimo?</div>
        <div class="cont">
        <div class="tagline w3-animate-right"> <strong>Pie: $ <?php echo $ppie;?> </strong></div>
        </div> 
        <div class="contenedor">
        <div class=" tagline lateral w3-animate-left"><strong>  3 Cuotas:  <p>$ <?php echo $p3cuota;?></p> </strong></div>
        <div class=" tagline principal w3-animate-left"><strong>  6 Cuotas: <p> $ <?php echo $p6cuota;?></p> </strong></div>
        <br>
        <div class=" tagline lateral w3-animate-left"><strong>  9 Cuotas:  <p>$ <?php echo $p9cuota;?></p> </strong></div>
        <div class=" tagline principal w3-animate-left"><strong>  12 cuotas:  <p>$ <?php echo $p12cuota;?></p> </strong></div>
        </div> 
    </main>
</div>


    
<div id="n5">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-center w3-animate-top orange-text">Beneficios </div>
        <div class="tagline w3-animate-bottom"> <strong> Mantienes tu cuota al día, evitando quedar en mora </strong></div>
        <div class="tagline w3-animate-bottom orange-text"> <strong> Puedes seguir utilizando tu tarjeta en Hites y comercios adheridos (sujeto a cupo disponible) </strong></div>
        <div class="tagline w3-animate-bottom"> <strong> Aliviana tu carga financiera </strong></div>
    </main>
</div>


    
<div id="n6">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.png"></div>
        <div class="intro w3-center w3-animate-top">Haz efectiva esta Promocion</div>
        <div class="intro w3-center w3-animate-top orange-text">No te pierdas esta oportunidad</div>
    </main>
</div>


    
<div id="n7">
    <main>
        <div class="intro w3-animate-zoom"><img src="hites2.jpg"></div>
        <div class="intro">
             <div class="tagline text-center white-text"><br> ¿Deseas que te contactemos?  Haz click en el siguiente botón
<br>
             <button class="btn btn-orange white-text" onclick="enviarMensaje();"><strong><h2>Sí</strong></strong></h2></button>
             </div>
        </div>

                <div>
                <div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>
                <button onclick='window.location.href="https://pagos.uss.cl/"' class="btn bg-danger text-white col-12 mt-4">PAGAR AHORA</button>
                
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-white col-12 mt-4">YA PAGUE</button>
                </div> 

                <div>
                <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick="eventosLanding('Whatsapp', 'https://api.whatsapp.com/send?phone=+56964386131&text=Hola,%20tengo%20una%20consulta')"><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png"></a>
                    <a onclick="eventosLanding('Llamar', 'tel:+56967664209') "><img width="40" src="https://img.icons8.com/wired/64/FFFFFF/phonelink-ring.png"></a>
                   - <a onclick="eventosLanding('Correo', 'mailto:alsanchez@prainabogados.cl');" ><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png"></a>
                </div>
                <h5 id="message"class="text-white text-center mt-5 hide"></h5>
            </div>

        </div>
    </div>

   <script>
   //EVENT 1
    
setTimeout(function(){ 
    $('#n1').hide('fast');
    $('#n2').show('fast');
    }, 3000);

setTimeout(function(){
    $('#n2').hide('fast');
    $('#n3').show('fast');
    }, 9000);

setTimeout(function(){
    $('#n3').hide('fast');
    $('#n4').show('fast'); 
    }, 23000);

setTimeout(function(){
    $('#n4').hide('fast');
    $('#n5').show('fast'); 
    }, 42000);

setTimeout(function(){
    $('#n5').hide('fast');
    $('#n6').show('fast'); 
    }, 58000);

setTimeout(function(){
    $('#n6').hide('fast');
    $('#n7').show('fast');
   sendForm(); 
    }, 67000);


     $(function(){

    $('#btn-sound').click(function(){
      console.log('Reproducir Sonido');
      document.getElementById("music").play();
    });

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
                    'nombre': $('#name').text(),
                    'saldo': $('#pay').text(),
                    'phone': getUrlParameter('telefono'),
                    'rut': getUrlParameter('rut')
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'saldo': $('#pay').text(),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            let dataSend = {
                'data': JSON.stringify(data),
                'email': '{!! $landing->email !!}'
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
                    $('#message').text('Gracias por su información');
                }else{
                    $('#message').removeClass('hide');
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