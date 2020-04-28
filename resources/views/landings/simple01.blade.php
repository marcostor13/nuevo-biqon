@extends('layouts.landing')

@section('title', 'Simple')

@section('content')



   <!-- <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="simple">


            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-3 ">
                <h2 class="text-white bg-danger">
                    Portate a Simple Moviles </h2>
                    <br>
                <center><img  style="max-width: 150%"  class="img-fluid col-12 col-md-3 mt-4" src="https://s3-sa-east-1.amazonaws.com/imagenes.simple.cl/Act/Portate/banner-porta-abril.gif?v=2.1.3" alt="simple"></center>
               <!-- <p class="text-white"> <h3>
                    8GB + 300 MIN + 100 SMS Desde $4.990 Oferta Limitada para Portabilidad Prepagos y Planes.
                </h3></p>-->
                      <button onclick='activa();' class="btn bg-danger text-white col-12 mt-4">PORTABILIDAD</button>

                      <button onclick='activa1();' class="btn bg-danger text-white col-12 mt-4">LINEA NUEVA</button>
                <p class="text-white"> <h2 class="text-danger">
                    Ingresa tus datos y te despachamos el chip GRATIS! </h2>
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


            <div  id="cont7" class="p-2 pl-3 pr-3 hide">
                <div>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">             

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/0hhuMHg.png" alt="simple">

                <a onclick="port1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                </div>

                <div>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple">            

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">

                <a onclick="port3();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port4();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
               </div>
            </div>

            <div  id="cont6" class="p-2 pl-3 pr-3 hide">
                <div class="align-items-center">
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VJDOJhs.png" alt="simple">
                

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/m6xIKPD.png" alt="simple">

                <a onclick="nuev1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>


                <a onclick="nuev2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                </div>

               <div class="align-items-center">
                <span class="col-2"></span>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/0eaFUx0.png" alt="simple">

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/7HsoOHi.png" alt="simple">
                <span class="col-2"></span>
                <a onclick="nuev3();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="nuev4();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
               </div>

               <div class="align-items-center">
                <span class="col-5"></span>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TYJ7maf.png" alt="simple"> <br>
                <span class="col-5"></span>
                <a onclick="nuev5();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <br>
               </div>


            </div>
<!-- PORTABILIDAD-->
            <div id="form" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                        <div id="port1" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">
                        </div> 
                        <div id="port2" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/0hhuMHg.png" alt="simple">
                        </div>
                        <div id="port3" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple"> 
                        </div>
                        <div id="port4" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                        </div>

                        <div id="nuev1" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VJDOJhs.png" alt="simple">
                        </div>
                        <div id="nuev2" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/m6xIKPD.png" alt="simple">
                        </div>
                        <div id="nuev3" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/0eaFUx0.png" alt="simple">
                        </div>
                        <div id="nuev4" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/7HsoOHi.png" alt="simple">
                        </div>
                        <div id="nuev5" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TYJ7maf.png" alt="simple">
                        </div>
                    <div class="d-flex justify-content-between">

                    <div class="md-form col-6  m-0">
                      <input type="text" id="rut" class="form-control" required placeholder="RUT">
                      <label for="form2"></label>
                    </div>
                    <div class="md-form col-6  m-0">
                      <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                      <label for="form2"></label>
                    </div>
                  </div> 
                  <div id="actual" class="md-form hide">
                      <select class="form-control" id="valor01" required>
                  <option value="" data-select2-id="1">compañia actual</option>
                  <option value="CLARO" data-select2-id="1">CLARO</option>
                  <option value="ENTEL" data-select2-id="1">ENTEL</option>
                  <option value="MOVISTAR" data-select2-id="2">MOVISTAR</option>
                  <option value="WOM" data-select2-id="3">WOM</option>
                  <option value="VIRGIN" data-select2-id="4">VIRGIN</option>
                  <option value="VTR" data-select2-id="5">VTR</option>
                   <option value="OTRA" data-select2-id="6">OTRA</option>
                    </select>
                  </div>
                  <div id="nuevo" class="md-form hide">
                      <select class="form-control" id="valor" required>
                  <option value="1" data-select2-id="1">1</option>
                  <option value="2" data-select2-id="2">2</option>
                  <option value="3" data-select2-id="3">3</option>
                  <option value="4" data-select2-id="4">4</option>
                  <option value="5" data-select2-id="5">5</option>

                    </select>
                  </div>
                   <div id="port11" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 1');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port22" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 2');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port33" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 3');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port44" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 4');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>

                    <div id="nuev11" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('LINEA NUEVA PLAN 1');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev22" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 2');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev33" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 3');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev44" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 4');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev55" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 5');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                
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
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Chips': $('#valor').val(),
                    'compañia': $('#valor01').val(),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Chips': $('#valor').val(),
                    'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["inttegrados@gmail.com","jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}' "inttegrados@gmail.com", ,"jesus.binteraction@gmail.com" 
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
                     $('#cont7').addClass('hide');
                     $('#cont6').addClass('hide');
                     $('#port4').addClass('hide');
                        $('#port3').addClass('hide');
                        $('#port2').addClass('hide');
                        $('#port1').addClass('hide');
                        $('#nuev5').addClass('hide');
                        $('#nuev4').addClass('hide');
                        $('#nuev3').addClass('hide');
                        $('#nuev2').addClass('hide');
                        $('#nuev1').addClass('hide');
                        $('#form').addClass('hide');
                        $('#actual').addClass('hide');
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

   window.location.href = "mailto:inttegrados@gmail.com?subject=Portabilidad%20Simple&body"+body_message;

 }

 function activa(){

  $('#cont2').addClass('hide');
  $('#cont7').removeClass('hide');
 }

  function activa1(){

  $('#cont2').addClass('hide');
  $('#cont6').removeClass('hide');
 }
//portabilidad 4 planes
 function port1(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port1').removeClass('hide');
  $('#port11').removeClass('hide');
 }
 function port2(){

  $('#cont7').addClass('hide');
   $('#form').removeClass('hide');
   $('#actual').removeClass('hide');
  $('#port2').removeClass('hide');
  $('#port22').removeClass('hide');
 }
  function port3(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port3').removeClass('hide');
  $('#port33').removeClass('hide');
 }
 function port4(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port4').removeClass('hide');
  $('#port44').removeClass('hide');
 }
//linea nueva 5 planes
 function nuev1(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev1').removeClass('hide');
   $('#nuev11').removeClass('hide');
 }
 function nuev2(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev2').removeClass('hide');
   $('#nuev22').removeClass('hide');
 }
 function nuev3(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev3').removeClass('hide');
   $('#nuev33').removeClass('hide');
 }
 function nuev4(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev4').removeClass('hide');
   $('#nuev44').removeClass('hide');
 }
 function nuev5(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev5').removeClass('hide');
   $('#nuev55').removeClass('hide');
 }



    </script>
    

@endsection