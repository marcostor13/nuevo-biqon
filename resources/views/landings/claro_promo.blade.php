@extends('layouts.landing')

@section('title', 'CLARO')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
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

    <div id="CLARO" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="CLARO">
            
            <div class=col-md-12>
           
                     <!--<div id="cont1" class="p-2 pl-5 pr-5 hide">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar</button>
                        <h5 id="error"class="text-grey text-center mt-5"></h5>
                       </div>
                       </div> 
                    </div>-->

                    <div id="cont2" class=" ">

                    <center> 
                    <div class="d-flex justify-content-around align-content-center">
                                    <a onclick="sendMail('Solicito ser Contactado Promo 400MB + Tv Pro HD'); ;eventosLanding('Solicitud Informacion'); return false;">
                                    <img style="width: 100%" src="https://i.imgur.com/tPxFjqI.jpg"></a>
                                </div>


                       <!--   <div class="card">     
                            <div class="card-body">
                              <h3 class="text-grey text-center"> Estimado(a) <strong> <span id="name"></span> </strong> </h3>-->
                               <!--<p class="text-white"> <h4> 
                         ¿Quieres aumentar tu velocidad de Internet y agregar Television a tu plan hogar?</h4> </p> 
                               <p> Transforma tu plan de 200 mb en 400 Mb + TV y obten un descuento de $17.000 x 12 meses</p>c-->
                               <!-- <button onclick="sendMail('Solicito ser Contactado Promo  INTERNET 400MB + Tv Pro HD'); ;eventosLanding('Solicitud Informacion'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>-->
<h4> ¿Para mas informacion o Contratacíon Aqui?</h4> </p> 

                               <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://api.whatsapp.com/send?phone=56946954910&text=Hola,%20Quisiera%20Mas%20Informacion%20sobre%20Plan%202play%20internet"><img width="50" src="https://i.imgur.com/zwRWdi8.png"></a>

                               <br>


                                 <button onclick="sendMail('No deseo recibir Mas Noticias de Claro'); ;eventosLanding('No deseo Productos Claro'); return false;" class="btn bg-white text-danger col-12 mt-2"><h5>No deseo recibir Mas Mensajes de Claro</h5></button>
                                 </center>
                            <!--</div>   
                        </div>-->
                    </div>
          
             
                    <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>
                    <div id="cont4" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                        <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href = "https://www.clarochile.cl/negocios/chat-servicios-moviles/" '>
                                    <img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                                </div>
                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href="http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/" '>
                                    <img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>
                                </div>
                                </div>
                        </div>
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
          var id_adm; 
         id_adm= getUrlParameter('data1'); 

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
                    $('#dato1').text(id_adm);
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

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["pedro.guajardo@solvencia.cl"];  
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'marcostor13@gmail.com',
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
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área.');
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

       function Mens(){
   // var id_adm; 
        // id_adm= getUrlParameter('data1'); //1234;
          
            swal({
             title: `Para Comunicarse, llene el formulario`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://www.clarochile.cl/negocios/chat-servicios-moviles/";
        })


        } 
        
    


  
    </script>
    

@endsection
