@extends('layouts.landing')

@section('title', 'CLINICA DAVILA')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
// echo date("M d", $startdate) . "<br>";
  // echo date("Y-m-d", $enddate) . "<br>";
 
?>
    <div id="CLINICA_DAVILA" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="CLINICA_DAVILA">

             <div id="cont1" class="p-5 ">|
                <h3 class="text-white text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                <button onclick="validarClinicaDavila(); return false;" class="btn bg-danger text-white col-12 mt-4">Validar</button>
                <h5 id="error"class="text-white text-center mt-5"></h5>
            </div>

            <div id="cont2" class="p-5 hide">|
                <h3 class="text-white text-center">Estimado <span id="name"></span></h3>

                <p class="text-white">
                    agradecemos contactar con
                    <b> </b><b id="isapre"></b>
                   y solicitar fecha de emisión de bonos por hospitalización pendiente.
                </p>
                <!--<div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php //echo date('Y-m-d') ?>" max="<?php //echo date("Y-m-d", $enddate) ?>"/>
                </div>-->
                <button id="isapre2" class="btn bg-danger text-white col-12 mt-4">CONTACTAR CON ISAPRE</button>
                
                <!--<button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-white col-12 mt-4">YA PAGUE</button>
                
                <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick="eventosLanding('Whatsapp', 'https://api.whatsapp.com/send?phone=+56964386131&text=Hola,%20tengo%20una%20consulta')"><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png"></a>
                    <a onclick="eventosLanding('Llamar', 'tel:+56967664209') "><img width="40" src="https://img.icons8.com/wired/64/FFFFFF/phonelink-ring.png"></a>
                   - <a onclick="eventosLanding('Correo', 'mailto:alsanchez@prainabogados.cl');" ><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png"></a>
                </div>-->
                <h5 id="message"class="text-white text-center mt-5 hide"></h5>
            </div>

        </div>
    </div>

   <script>
   //EVENT 1
     function validarClinicaDavila() {

        var rut = $('#rut').val();
        // var idIngreso = $('#idIngreso').val();

        if (rut == '') {
          $('#respuesta').text('Debe ingresar todos los campos');
          return false;
        }


        var datos = {
          'funcion': 'validarClinicaDavila',
          'rut': rut,
          // 'idIngreso': idIngreso,
          'numero': getUrlParameter('numero')
        }

        $.ajax({
          data: datos,
          type: "POST",
          url: "/biqon/procesos/funciones.php",
        })
          .done(function (data, textStatus, jqXHR) {
            if (data == 0) {
              $('#respuesta').text('Los datos no son válidos');
            } else {
              console.log(data);
              data = JSON.parse(data);
              $('main').show('slow');
              $('#datos').show('slow');
              $('#idIngreso').text(data.idIngreso);
              $('#isapre').text(data.prevision); 
              $('#card1').show('fast');
              $('#card2').hide('fast');

              var prevision = data.prevision;
              var numero; 
              if(prevision.indexOf('CRUZ BLANCA')>-1){
                numero = 'tel:+56229981000'; 
              }else if (prevision.indexOf('CONSALUD') > -1) {
                numero = 'tel:+56223325020';
              }else if (prevision.indexOf('BANMEDICA') > -1) {
                numero = 'tel:+56222706800';
              }else if (prevision.indexOf('FUNDACION BANCO ESTADO') > -1) {
                numero = 'tel:+56223479000';
              }else if (prevision.indexOf('VIDA TRES') > -1) {
                numero = 'tel:+56225403600';
              }else if (prevision.indexOf('NUEVA MÁS VIDA') > -1) {
                numero = 'tel:6006000262';
              }else if (prevision.indexOf('RIO BLANCO') > -1) {
                numero = 'tel:800835400';
              }else if (prevision.indexOf('COLMENA') > -1) {
                numero = 'tel:+56229594040';
              }else if (prevision.indexOf('CHUQUICAMATA') > -1) {
                numero = 'tel:800835400';
              }else if (prevision.indexOf('NUEVA MÁS VIDA') > -1) {
                numero = 'tel:6006000262';
              }else if (prevision.indexOf('CHUQUICAMATA LTDA') > -1) {
                numero = 'tel:800835400';
              }else if (prevision.indexOf('SAN LORENZO') > -1) {
                numero = 'tel:800835400';
              }

              console.log(numero);

              $('#isapre2').attr('href', numero);

            }
          })
          .fail(function (jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);
          });


      }

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