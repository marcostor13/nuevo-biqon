@extends('layouts.landing')

@section('title', 'CLINICA DAVILA')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">

    .opaco{
    display: none !important; 
    }

    #cont1 #cont2 #content{
    background-color: rgba(255, 255, 255, 0.2)!important;
    }
    .cont1 .cont2{
    background-color: rgba(255, 255, 255)!important;
    }
    .input{
        border-color:#A1CBF3 !important;
    }
</style>

    <div id="CLINICA_DAVILA" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" class="h-100">

         <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="CLINICA_DAVILA">

             <div id="cont1" class="p-2 pl-5 pr-5">
                <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar</button>
                <h5 id="error"class="text-grey text-center mt-5"></h5>
            </div>

            <div id="cont2" class="p-2 pl-5 pr-5 hide">
                <h5 class="text-grey text-center"> Estimado(a) <span id="name"></span> </h5>

                <p class="text-grey"> 
                    Clínica Dávila informa que en nuestros registros mantiene copago pendiente por servicios de hospitalización.</p>
                    <br>
                    <p> Su ID admisión es: </p> 
                    <p id="dato1" class="dato1"> </p>
                    </br> 
                
                <!--<div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php // echo date('Y-m-d') ?>" max="<?php //echo date("Y-m-d", $enddate) ?>"/>
                </div>-->
                <button onclick="Mens();" class="btn bg-primary text-white col-12 mt-2">PAGAR AHORA</button>
                
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-2">YA PAGUE</button>
                
                <div class="d-flex justify-content-around align-content-center mt-4">
                    
                    <a onclick='window.location.href="http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/" ' ><img src="https://i.imgur.com/hw0CNnw.png"></a>
                    </div>
                    <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick='window.location.href="http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/" ' ><img src="https://i.imgur.com/rFQ2FWM.png"></a>
                   
                  <!-- <a onclick="eventosLanding('Correo', 'mailto:alsanchez@prainabogados.cl');" ><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png"></a>-->
                </div>
                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
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
                    'monto': getUrlParameter('monto'),
                    'telefono': getUrlParameter('telefono'),
                    'id_admision': getUrlParameter('data1'),
                    'rut': getUrlParameter('rut')
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                    'id_admision': getUrlParameter('data1'),
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

       function Mens(){
    var id_adm; 
         id_adm= getUrlParameter('data1'); //1234;
          
            swal({
             title: `Para Pagar Online Expandir la Pantalla, Ingrese su RUT y su ID admisión es N° ${id_adm}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/";
        })


        } 
        
    
    </script>
    

@endsection
