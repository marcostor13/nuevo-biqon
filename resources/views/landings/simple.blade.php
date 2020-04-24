@extends('layouts.landing')

@section('title', 'Simple')

@section('content')
 <?php
//$startdate=strtotime("Today");
//$enddate=strtotime("+7 days", $startdate);
?>
   <!-- <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="simple">

            <!--<div id="cont1" class="p-5 ">
                <h3 class="text-white text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-white">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4"> Validar </button>
            </div>-->
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-3 ">
                <!--<h3 class="text-white text-center">Estimado <span id="name"></span></h3>-->

                <p class="text-white"> <h3>
                    Nuevo PLAN 25GB + 700 MIN con 33% de dscto, a solo $10.000 x 24 meses!
                </h3></p>
                      <button onclick='activa();' class="btn bg-danger text-white col-12 mt-4">PORTABILIDAD</button>

                      <button onclick='activa1();' class="btn bg-danger text-white col-12 mt-4">LINEA NUEVA</button>
                <p class="text-white"> <h3>
                    Ingresa tus datos y te despachamos el chip GRATIS! </h3>
                </p>

                <br>
                 <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-danger text-white col-12 mt-2">LLÁMANOS</a>

                 <a onclick="eventosLanding('Whatsapp'); Mens1();" class="btn bg-danger text-white col-12 mt-2">WHATSAPP</a>

                 <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-danger text-white col-12 mt-2">ESCRÍBENOS</a>

               </div>
                           <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>


            <div  id="cont5" class="p-2 pl-3 pr-3">
                <div>
                <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">
                <a onclick="Cor1();" class="btn bg-danger text-white col-12 mt-2">Comprar</a>

                <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/0hhuMHg.png" alt="simple">
                <a onclick="Cor2();" class="btn bg-danger text-white col-12 mt-2">Comprar</a>
                <br>
                </div>

                <div>
                <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple">
                <a onclick="Cor3();" class="btn bg-danger text-white col-12 mt-2">Comprar</a>

                <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                <a onclick="Cor4();" class="btn bg-danger text-white col-12 mt-2">Comprar</a>
                <br>
               </div>
            </div>

            <div  id="cont6" class="p-2 pl-3 pr-3">
                <div>
                <img class="img-fluid col-3 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">
                <a onclick="Cor1();" class="btn bg-danger text-white col-3 mt-2">Comprar</a>

                <img class="img-fluid col-3 col-md-3 mt-4" src="https://i.imgur.com/0hhuMHg.png" alt="simple">
                <a onclick="Cor2();" class="btn bg-danger text-white col-3 mt-2">Comprar</a>
                <br>
                </div>

                <div>
                <img class="img-fluid col-3 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple">
                <a onclick="Cor3();" class="btn bg-danger text-white col-3 mt-2">Comprar</a>

                <img class="img-fluid col-3 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                <a onclick="Cor4();" class="btn bg-danger text-white col-3 mt-2">Comprar</a>
                <br>
               </div>

               <div>
                <img class="img-fluid col-3 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple">
                <a onclick="Cor5();" class="btn bg-danger text-white col-3 mt-2">Comprar</a>

              <!--  <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                <a onclick="Cor6();" class="btn bg-danger text-white col-12 mt-2">Comprar</a>-->

                <select class="form-control" id="Valor" required>
                  <option value="1" data-select2-id="1">1</option>
                  <option value="2" data-select2-id="2">2</option>
                  <option value="3" data-select2-id="3">3</option>
                  <option value="4" data-select2-id="4">4</option>
                  <option value="5" data-select2-id="5">5</option>

                    </select>
                <br>
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

           var correo = ["inttegrados@gmail.com","jesus.binteraction@gmail.com"];
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

      
         function Mens(){
  
             window.location.href = "tel:+56993443007";
        }  


     function Mens1(){
     
   window.location.href = "https://api.whatsapp.com/send?phone=56993443007&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


          function Mens2(){


         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";

   window.location.href = "mailto:inttegrados@gmail.com?subject=Portabilidad%20Virging%20Mobile&body"+body_message;

 }

 function activa(){

  $('#cont2').addClass('hide');
  $('#cont5').removeClass('hide');
 }

  function activa1(){

  $('#cont2').addClass('hide');
  $('#cont6').removeClass('hide');
 }
    
    </script>
    

@endsection