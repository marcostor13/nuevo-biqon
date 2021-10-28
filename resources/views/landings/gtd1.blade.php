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
            <img style="height:80px; width:100px;" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="GTD">

            <div id="cont1" class="">
                <div class="videoWrapper">        
                    <iframe width="400" height="320" src="{{asset('/files/gtd1.mp4')}}" frameborder="0" autoplay allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="card">     
                <div class="card-body">
                <h3 class="text-black text-center"> <strong> ¿Desea que le contactemos? </strong> </h3> </div> </div>

                <button onclick="sendMail('El cliente indica que desea ser contactado'); eventosLanding('contacto'); return false;" class="btn bg-primary text-black col-12 mt-3"> <h3> <strong>SI</strong> </h3> </button>
                <br>
           <a onclick="eventosLanding('Contactar con un Ejecutivo');" href="tel:+56975890470" class="btn bg-primary text-white col-12 mt-4">Llamar</a>
               
            <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890470&text=Hola,%20tengo%20una%20consulta" class="btn bg-primary text-white col-12 mt-4">Whatsapp</a>
            
            <a onclick="eventosLanding('Correo');" href="mailto:angelo.castillo@solvencia.cl"  class="btn bg-primary text-white col-12 mt-4">Correo</a>

            </div>

            <div class=" tagline w3-center w3-animate-top black-text"> <br> Solvencia.cl </div>
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

        function sendMail(msg = false){

            console.log({!! $landing->name !!}); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'nombre': $('#name').text(),
                   // 'saldo': $('#pay').text()
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    //'saldo': $('#pay').text(),
                    'landing': {!! $landing->name !!}
                } 
            }

            let dataSend = {
                'data': JSON.stringify(data),
               //'email': '{!! $landing->email !!}'
                'email': 'angelo.castillo@solvencia.cl'
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