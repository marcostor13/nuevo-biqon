@extends('layouts.landing')

@section('title', 'Gyrux')

@section('content')



   <!-- <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="Gyrux">


            <div id="cont5" class="p-2 pl-3 pr-3 hide">
            <div class="card">     
            <div class="card-body">
                <h5 id="error"class="text-black text-center mt-5"></h5>
            </div>
            </div>    
            </div>

            <div id="cont2" class="p-3 ">
                <!--<h3 class="text-white text-center">Estimado <span id="name"></span></h3>-->
            <p class="text-white"> <h3>Gyrux La Evolucion en Accesorios Mobile</h3></p>

          <button onclick='url1();' class="btn bg-primary text-white col-12 mt-4"> Energia</button>

          <button onclick='url2();' class="btn bg-primary text-white col-12 mt-4"> Proteccion</button>

          <button onclick='url3();' class="btn bg-primary text-white col-12 mt-4"> Audio</button>

          <button onclick='url4();' class="btn bg-primary text-white col-12 mt-4"> Almacenamiento</button>

          <button onclick='url5();' class="btn bg-primary text-white col-12 mt-4">Pagar Movistar</button>

                <hr>
                <br>
                <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-primary text-white col-12 mt-2">LLÁMANOS</a>

                <a onclick="eventosLanding('Whatsapp'); Mens1();" class="btn bg-primary text-white col-12 mt-2">WHATSAPP</a>

                <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-primary text-white col-12 mt-2">ESCRÍBENOS</a>

               </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                <div class="card">     
                <div class="card-body">
                    <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                </div>
                </div>
            </div>


            <div  id="cont6" class="p-2 pl-3 pr-3 hide">
                <div class="text-black col-md-12">
                    <h5 class="text-grey text-center"> ENERGIA - CARGADORES</h5>       
                <div>
                    <label>GYRUX POWERBANK 10000 MAH G56</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(6);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                    <div>
                    <label>CARGADOR PARED CON CABLE MICRO USB UMANNO</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(7);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                </div>

                <div class="text-black col-md-12">      
                <div>
                    <label>CARGADOR PARED CON CABLE LIGHTNING UMANNO</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php // echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                   <button onclick="url(7);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                   <div>
                    <label>CARGADOR PARED CON CABLE Tipo C UMANNO</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php // echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                   <button onclick="url(7);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>
                </div>
            </div>

            <div  id="cont7" class="p-2 pl-3 pr-3 hide">
                     <div class="text-black col-md-12">
                    <h5 class="text-grey text-center"> PROTECCION - FORROS</h5>       
                <div>
                    <label>Soporte Magnetico para Auto</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(6);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                    <div>
                    <label>Selfie Stick Gyrux Bluetooth</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(7);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                </div>
            </div>

             <div  id="cont8" class="p-2 pl-3 pr-3 hide">
                <div class="text-black col-md-12">
                <h5 class="text-grey text-center"> Audio y Parlantes</h5>       
                <div>
                    <label>Audifono YK810 UMANNO</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(6);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

               <div>
            </div>

             <div  id="cont9" class="p-2 pl-3 pr-3 hide">
                    <div class="text-black col-md-12">
                    <h5 class="text-grey text-center"> Almacenamiento</h5>       
                <div>
                    <label>Memoria Micro SD SanDisk Clase 10</label>
                    <label>16 GB - 32 GB - 64 GB</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(6);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

                    <div>
                    <label>Pendrive SanDisk Cruzer Blade USB</label>
                    <label>16 GB - 32 GB - 64 GB</label>
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="url(7);" class="btn bg-primary text-white col-12 mt-4">Confirmar</button>

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
                //'email': '{!! $landing->email !!}' "inttegrados@gmail.com",
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
  $('#port1').removeClass('hide');
  $('#port11').removeClass('hide');
 }
 function port2(){

  $('#cont7').addClass('hide');
   $('#form').removeClass('hide');
  $('#port2').removeClass('hide');
  $('#port22').removeClass('hide');
 }
  function port3(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#port3').removeClass('hide');
  $('#port33').removeClass('hide');
 }
 function port4(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
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