@extends('layouts.landing')

@section('title', 'BINTER')

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
    
</style>

     <!-- <div id="CMPAbogados" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:200px">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width:350px; max-height:250px" class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/jXMebWV.jpg" alt="BINTER">

             <div id="cont1" class="p-5 hide">
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
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
            <div id="cont2" class="p-5 ">
                <!--<h3 class="text-black text-center">Estimado <span id="name"></span></h3>-->
                 <div class="videoWrapper">        
                    <iframe width="400" height="320" src="{{asset('/files/binter_vid.mp4')}}" frameborder="0" autoplay allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                </div>
               <div class="card">
                    <div class="card-body">
                        <h5 class="text-dark text-center">Vecinos y vecinas de #COMUNA#, mi nombre es #BINTERACTION# y soy candidat@ a concejal, por ustedes. Hace muchos años trabajé con ustedes, Hoy día estoy mucho más preparad@s, tengo mucha más experiencia, y eso lo traigo para ustedes, y por eso #COMUNA#!</h5>
                        <br>
                        <br>
                       
                 <br>
                  <br>
                   <h5 class="text-grey text-center">Le interesa recibir <br>información de Nuestro Candidato<br> a Consejal por Comuna</h5>


                    </div> 
                  </div>
                     <button onclick="sendMail('SI QUIERO CONECER A BINTERACTION'); ;eventosLanding('SI'); return false;" class="btn bg-primary text-white col-12 mt-4">SI</button>

                     <button onclick="sendMail('NO QUIERO CONECER A BINTERACTION'); ;eventosLanding('NO'); return false;" class="btn bg-primary text-white col-12 mt-4">NO</button>
                <br>
                <br>
                               
             </div>
        </div>

            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                                

                            </div>
                        </div>
                        <br>
                   <br>
    
                   <br>
                   <br>
                    </div>
                     <!--<img style="max-width: 100%" class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/b4XygqX.png" alt="AMICAR">-->
                  <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('FACEBOOK');" href="https://www.facebook.com/BinteractionChile-SPA-110810853983300/"><img width="60" src="https://i.imgur.com/1MMbEAw.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('INSTAGRAM');" href="https://www.instagram.com/binteractionchile/"><img width="60" src="https://i.imgur.com/DVoiS58.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://wa.me/56995251902"><img width="60" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>

                    <br>
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
                    $('#error').text("Validación incorrecta, recuerde visitar nuestra pagina web https://binteraction.cl/.");
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
                    'rut': getUrlParameter('rut'),
                    'phone': getUrlParameter('telefono'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}' "alsanchez@prainabogados.cl"
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

       function Mens1(){
    var id_adm; 
         id_adm= getUrlParameter('data1'); //1234;
          
            swal({
               title: `Transferencia a BANCO ESTADO,  Cuenta Vista Nº 29170729925,`,
             text: "BINTERACTION CHILE SPA, RUT 76.929.825-8, contacto@binteraction.com",
             type: "success",
             timer: 5000
        }, )


        } 

        
    
    </script>
    

@endsection