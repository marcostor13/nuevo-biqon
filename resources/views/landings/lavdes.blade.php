@extends('layouts.landing')

@section('title', 'LAVAGGIO & DESINFECKTION SPA')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+15 days", $startdate);
?>
<head>
    <!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<style>
.opaco{
    display: none !important; 
}
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
}
     
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
    h4 {
  text-shadow: 1px 1px #ffffff;
}
    h3 {
  text-shadow: 1px 1px #ffffff;
}
</style>

 <div class="oscurecer">
<!-- <div id="LAVDES" class="oscurecer" style="background: url('https://i.imgur.com/DzPdczX.jpg'); background-repeat: no-repeat; background-size: 100% 100%; " >-->
  <div id="LAVDES" style="background: url('https://imgur.com/a/pgUPcLY'); background-repeat: no-repeat; background-size: 100% 100%; " >

       <div align="center" class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 90%" class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/FD5RsDA.png" alt="LAVAGGIO & DESINFECKTION SPA">

            <div id="cont1">
              <div class="text-align:right">
                  <p class="text-white">
                  <h3 class="text-blak"><strong>DILUSION AMONIO CUATERNARIO AL 10%</strong></h3>

                       <h4 class="text-blak"> <strong> Nuevo producto, es un limpiador desinfectante neutro, diseñado especialmente para limpiar y desinfectar baños y pisos de alto brillo. Permitiendo la eliminación de bacterias y microorganismos en un 99% </strong> </h4>

                       <h4 class="text-blak"> <strong> 100% Seguro de usar. No mancha, no destiñe, no es tóxico </strong></h4>

                       <h4 class="text-blak"> <strong> Diluido y listo para aplicar en pisos, paredes y otras superficies de hospitales, colegios, hoteles, restaurantes, en salas de baño y artefactos sanitarios, aplicar con mopa, paño o spray. </strong></h4>
                    

                        <h4 class="text-blak"><Strong>Valores</Strong></h4>

                       <h4 class="text-blak">2.5 litros -  $ 4.800</h4>
                       <h4 class="text-blak">5 litros   -  $ 9.200</h4>
                       <h4 class="text-blak">20 litros  -  $ 28.000</h4>
                        </p>

                        <h3 class="text-blak"> <strong>Paga con: Tarjeta de Débito, Crédito, Transferencia, Efectivo </strong></h3>
                  <button onclick="Mens2(); eventosLanding('WhatsApp');" class="btn bg-success text-white col-8 mt-2">CONTACTAR PORWHATSAPP</button>

                  <a onclick="eventosLanding('Correo'); Mens();" class="btn bg-success text-white col-8 mt-2">CONTACTAR POR CORREO</a>
                        </div>

                        </div>
                       <!-- </div>
                    </div>-->
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

           // json_datos.nombre = $('#name').text();
           // json_datos.monto = $('#pay').text();

            events({    
                'name': name,
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(json_datos)
            });
        }

     // 

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Mombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2')                
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["lavdes2020@gmail.com"];
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
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, lo contactaremos');
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

      
        function Mens2(){

        window.location.href = "https://api.whatsapp.com/send?phone=56981868778&text=Hola,%20tengo%20una%20consulta";
    
        } 
        
         function Mens(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut');

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "%0A%20Estimado%20Cliente,%0A%20favor%20env%C3%ADe%20su%20consulta%20relacionada%20a%20la%20compra%20de%20productos%20de%20limpieza%20%0A%20Saludos%20cordiales%20%0A%20%0A%20Atte.%20Lavaggio%20y%20Desinfecktion%20SPA%20%0A%20Fono:%20+56981868778";

   window.location.href = "mailto:lavdes2020@gmail.com?subject=Quiero%20Consultar%20Sobre%20Los%20Productos%20De%20Limpieza&body=%20RUT:%20"+rut+" "+body_message;

 }
    </script>
    
    </script>
    

@endsection