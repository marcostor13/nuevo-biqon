@extends('layouts.landing')

@section('title', 'naztech.cl')

@section('content')



    <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;"

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
           <center> <p class="text-yellow"> <h3>Ecuentra todo lo que necesites
En un solo lugar!</h3></p>
                        </center>
          <button onclick='url1();' class="btn bg-dark text-warning col-12 mt-4"> Cargadores y Cables</button>

          <button onclick='url2();' class="btn bg-dark text-warning col-12 mt-4"> Proteccion</button>

          <button onclick='url3();' class="btn bg-dark text-warning col-12 mt-4"> Audio</button>

          <button onclick='url4();' class="btn bg-dark text-warning col-12 mt-4"> Almacenamiento</button>

          <!-- <a herf="https://ww2.movistar.cl/recarga/" class="btn bg-primary text-white col-12 mt-4">Pagar Movistar</a>-->

                <hr>
                        <center> <p class="text-yellow"> <h3>Para mas Información!</h3></p></center>
                <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-warning text-light col-12 mt-2">LLÁMANOS</a>

                <a onclick="eventosLanding('Whatsapp'); Mens1();" class="btn bg-warning text-light col-12 mt-2">WHATSAPP</a>

                <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-warning text-light col-12 mt-2">ESCRÍBENOS</a> 
                <br>
<center> <p class="text-yellow"> <h3>Ir a la Tienda online!</h3></p>


<div class="d-flex justify-content-around align-content-center mt-4"> 
               <!-- <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://wa.me/56930132218"><img width="60" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>-->

                <a class="ml-2" onclick="eventosLanding('FACEBOOK');" href="https://www.facebook.com/naztechchile/"><img width="50" src="https://i.imgur.com/1MMbEAw.png"></a>
                   
                <a class="ml-4" onclick="eventosLanding('pagina web);" href="https://www.naztech.cl/shop"><img width="50" src="https://imgur.com/nGGotZl.png"></a>

                <a class="ml-4" onclick="eventosLanding('INSTAGRAM');" href="https://www.instagram.com/naztech.chile/"><img width="50" src="https://i.imgur.com/DVoiS58.png"></a>
                   
                    
                </div>
            </div>



           

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
                    <h5 class="text-grey text-center"> Cargadores Inalámbricos</h5>       
                <div>
                    <label>GYRUX POWERBANK 10000 MAH G56</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/6OvrYhi.png" alt="Gyrux">
                 </div> 
                    <button onclick="sendMail('GYRUX POWERBANK 10000 MAH G56');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

                    <div>
                    <label>CARGADOR PARED CON CABLE MICRO USB UMANNO</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/qA4wleS.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('CARGADOR PARED CON CABLE MICRO USB');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>


                    <button onclick="Mens4(); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>ver otras opciones</h4></button>

                </div>

                <div class="text-black col-md-12">      
                <div>
                    <label>CARGADOR PARED CON CABLE LIGHTNING UMANNO</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/1Gmpess.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php // echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                   <button onclick="sendMail('CARGADOR PARED CON CABLE LIGHTNING');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

                   <div>
                    <label>CARGADOR PARED CON CABLE Tipo C UMANNO</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/dXOrQMf.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php // echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                   <button onclick="sendMail('CARGADOR PARED CON CABLE Tipo C');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>
                </div>
            </div>

            <div  id="cont7" class="p-2 pl-3 pr-3 hide">
                     <div class="text-black col-md-12">
                    <h5 class="text-grey text-center"> PROTECCION - FORROS</h5>       
                <div>
                    <label>Soporte Magnetico para Auto</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/QrFAeyN.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('Soporte Magnetico para Auto');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

                    <div>
                    <label>Selfie Stick Gyrux Bluetooth</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/AT8zGt8.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('Selfie Stick Gyrux Bluetooth');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

                </div>
            </div>

             <div  id="cont8" class="p-2 pl-3 pr-3 hide">
                <div class="text-black col-md-12">
                <h5 class="text-grey text-center"> Audio y Parlantes</h5>       
                <div>
                    <label>Audifono YK810 UMANNO</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/9nIUmlM.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('Audifono YK810 UMANNO');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

               </div>
               </div>

             <div  id="cont9" class="p-2 pl-3 pr-3 hide">
                    <div class="text-black col-md-12">
                    <h5 class="text-grey text-center"> Almacenamiento</h5>       
                <div>
                    <label>Memoria Micro SD SanDisk Clase 10</label>
                    <label>16 GB - 32 GB - 64 GB</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/XrKTAlQ.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('Memoria Micro SD');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

                    <div>
                    <label>Pendrive SanDisk Cruzer Blade USB</label>
                    <label>16 GB - 32 GB - 64 GB</label>
                    <img class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/V5Q06wX.png" alt="Gyrux">
                    <!--<input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php // echo date('Y-m-d')?>" max="<?php //echo date("Y-m-d", $enddate) ?>" required="required"/>-->
                 </div> 
                    <button onclick="sendMail('Pendrive SanDisk ');" class="btn bg-warning text-light col-12 mt-4">Confirmar</button>

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
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     //'landing': '{!! $landing->name !!}'
                   
                    
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
                //'email': '{!! $landing->email !!}' "inttegrados@gmail.com", ,"jesus.binteraction@gmail.com" 
                //'email': 'marcostor13@gmail.com' ,"jesus.binteraction@gmail.com" 
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
                     eventosLanding('Solicitud de Plan');
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
             window.location.href = "tel:+56975890470";
        }  

/*
     function Mens11(){
   window.location.href = "https://api.whatsapp.com/send?phone=56975890470&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


    function Mens21(){
         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
             window.location.href = "mailto:angelo.castillo@solvencia.cl ?subject=Portabilidad%20Claro&body"+body_message;
 }
*/

  function Mens11(){
        $('#MOVIL').addClass('hide');
        $('#HOGAR').removeClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').addClass('hide');

 }

 function Mens21(){
        $('#HOGAR').addClass('hide');
        $('#MOVIL').removeClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').addClass('hide');

 }
 function Mens31(){
        $('#HOGAR').addClass('hide');
        $('#MOVIL').addClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').removeClass('hide');

 }


 function Mens1(){
        $('#plan2').addClass('hide');
        $('#plan1').removeClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').addClass('hide');

 }

 function Mens2(){
        $('#plan1').addClass('hide');
        $('#plan2').removeClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').addClass('hide');

 }
 function Mens3(){
        $('#plan1').addClass('hide');
        $('#plan2').addClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').removeClass('hide');

 }


 function Mens4(){

    $('#HOGAR').addClass('hide');
        $('#MOVIL').addClass('hide'); 
        $('#opt1').removeClass('hide');
        $('#BAFI').addClass('hide');
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


 function p0(){

    $('#cont7').addClass('hide');
    $('#cont6').addClass('hide');
    $('#form').addClass('hide');
    $('#cont2').removeClass('hide');
    $('#port4').addClass('hide');
    $('#port3').addClass('hide');
    $('#port2').addClass('hide');
    $('#port1').addClass('hide');
    $('#nuev5').addClass('hide');
    $('#nuev4').addClass('hide');
    $('#nuev3').addClass('hide');
    $('#nuev2').addClass('hide');
    $('#nuev1').addClass('hide');
    $('#port44').addClass('hide');
    $('#port33').addClass('hide');
    $('#port22').addClass('hide');
    $('#port11').addClass('hide');
    $('#nuev55').addClass('hide');
    $('#nuev44').addClass('hide');
    $('#nuev33').addClass('hide');
    $('#nuev22').addClass('hide');
    $('#nuev11').addClass('hide');
    $('#actual').addClass('hide');
    //$('#cont3').addClass('hide');
    $('#CONT').addClass('hide');
 }



    </script>
    

@endsection