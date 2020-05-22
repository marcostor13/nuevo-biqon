@extends('layouts.landing')

@section('title', 'Falabella')

@section('content')



   <!-- <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">

          <div style="background-color: #54C86B">
            <img class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/Yc3aiQM.png" alt="FALABELLA"> 
             <h3 class="text-grey text-rigth"> Estimado(a) <strong>  <span id="name"></span> <!-- <?php //echo $name; ?> --></strong> </h3>
          </div>

            <div id="cont2" class="p-3 ">

                <img style="max-width: 100%" src="https://i.imgur.com/un6vWpt.jpg">

                <center><h3 class="text-white bg-danger">
                    <h3>¡Paga tu CMR en línea!</h3>
                <h3>¿Solo has pagado en sucursales y nunca por la web?</h3>
                <div > 
                    <h4>¡No te preocupes!<br>
                    nosotros te enseñamos </h4>
                    <img style="max-width: 75%" class="img-fluid col-md-3 mt-0" src="https://i.imgur.com/DCPCot4.jpg" alt="FALABELLA">
                </div>  </center>
                    <br>
      
               </div>

            <div  id="cont7" class="p-2 pl-3 pr-3"> <center>
               
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/cU90gV4.jpg" alt="FALABELLA">
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/piA0aT3.jpg" alt="FALABELLA">
                
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/a69Upgt.jpg" alt="FALABELLA">
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/wRp1ijh.jpg" alt="FALABELLA">
               
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/bXzEs8W.jpg" alt="FALABELLA">
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/2gHQpku.jpg" alt="FALABELLA">
                
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/XUTkNVy.jpg" alt="FALABELLA">
                
                <img style="max-width: 100%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/PWFmHww.jpg" alt="FALABELLA"><img style="max-width: 80%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TCmWgnf.jpg" alt="FALABELLA"> 
              
           </center>
           <br> <br>
           <p>El pago con Tarjetas de Crédito puede tener costos asociados. Consultar al emisor para mayor información. Infórmese sobre la garantía estatal de los depósitos en su banco o <a href="www.cmfchile.cl">www.cmfchile.cl</a> </p>
            </div>

<!-- PORTABILIDAD-->
            
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
                    'Datos_Formulario': $('#nombre1').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Chips': $('#valor').val(),
                    'Compañia': $('#valor01').val(),
                    //'Datos_URL': $('#nombre1').val(),
                    //'Nombre_URL': getUrlParameter('nombre'),
                    //'Telefono_URL': getUrlParameter('telefono'),
                    //'Rut_URL': getUrlParameter('rut'),
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

           var correo = ["ventas@trademovil.cl"];
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
             window.location.href = "tel:+56952208933";
        }  


     function Mens1(){
   window.location.href = "https://api.whatsapp.com/send?phone=56992213123&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


    function Mens2(){
         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
             window.location.href = "mailto:ventas@trademovil.cl ?subject=Portabilidad%20Simple&body"+body_message;
 }


  function Mens3(){
        $('#cont2').addClass('hide');
        $('#form').removeClass('hide'); 
        $('#CONT').removeClass('hide');
        $('#actual').addClass('hide');

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
    $('#cont3').addClass('hide');
    $('#CONT').addClass('hide');
 }



    </script>
    

@endsection