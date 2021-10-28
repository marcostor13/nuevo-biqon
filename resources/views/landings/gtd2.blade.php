@extends('layouts.landing')

@section('title', 'GTD')

@section('content')

<style>
.opaco{
    display: none !important; 
}
</style>


        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="height:80px; width:80px;" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="GTD">
            <br>
            <div id="cont1" class=" ">
                <div class="videoWrapper">        
                    <iframe width="400" height="320" src="{{asset('/files/gtd2.mp4')}}" frameborder="0" autoplay allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">     
                <div class="card-body">
                <h5 class="text-black text-center"> <strong> ¿Desea que le contactemos? </strong> </h5> </div> </div>

                <button onclick="sendMail('El cliente indica que desea ser contactado'); eventosLanding('contacto'); return false;" class="btn bg-primary text-white col-12 mt-3">  
                 <strong>SI</strong>  
            </button>
           <br>
           <div class="mt-2 text-center"> 
<p class="text-white text-center"><br><strong>Seleccione alguna de estas opciones para comunicarte con un ejecutivo quien podrá asesorarle y resolver su consulta</strong></p>
                     <div class="d-flex justify-content-around align-content-center text-center"> 
      
                    
                <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890470&text=Hola,%20tengo%20una%20consulta%20IPCHILE"><img width="70" src="https://i.imgur.com/kzyuhVO.png"></a></span>
                        <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:56975890470"><img width="70" src="https://i.imgur.com/9AbTaoC.png"></a></span>
                        <span class="text-white text-center">
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:angelo.castillo@solvencia.cl"><img width="70" src="https://i.imgur.com/h7UKcOG.png"></a></span>
                   <!--  <span class="text-white text-center">
                <a class="ml-2" onclick="eventosLanding('Pago en Línea');" href="https://portal.ipchile.cl/"> <img width="70" src="https://i.imgur.com/HEnso4V.png"></a></span>-->
                </div>
                <br><br>

                  </div>
           <!--
           <a onclick="eventosLanding('Contactar con un Ejecutivo');" href="tel:+56975890470" class="btn bg-primary text-white col-12 mt-4">Llamar</a>
               
            <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890470&text=Hola,%20tengo%20una%20consulta" class="btn bg-primary text-white col-12 mt-4">Whatsapp</a>
            
            <a onclick="eventosLanding('Correo');" href="mailto:angelo.castillo@solvencia.cl"  class="btn bg-primary text-white col-12 mt-4">Correo</a>
-->
            </div>

            <div class=" tagline w3-center w3-animate-top black-text"> <br>  Solvencia.cl </div>
        </div>
        <div id="cont3" class="p-2 pl-3 pr-3 hide">
                <div class="card">     
                <div class="card-body">
                    <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                </div>
                </div>
            </div>
    <!--</div>-->

    <script>

        $(function(){
            events({    
                'name': 'Visita',
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(getAllUrlParameter())
            });
        }); 

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

        //EVENT 1
        

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
              //      $('#pay').text(e.data.monto);
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

        function sendMail(msg = false){

            //console.log({!! $landing->name !!}); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    //'Monto': getUrlParameter('monto'),
                    'Ejecutivo': getUrlParameter('data1'),
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    //'nombre': $('#name').text(),
                    //'saldo': $('#pay').text(),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["angelo.castillo@solvencia.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
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