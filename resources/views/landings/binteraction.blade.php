@extends('layouts.landing')

@section('title', 'BINTERACTION')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+15 days", $startdate);
?>
<style>
.opaco{
    display: none !important; 
}
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
}
     
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
  font-weight: 600;
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
  font-weight: 600;
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

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="BINTERACTION">

            <div id="cont1">
                            <div class="card">     
                <div class="card-body">
                     <div class="mt-2 text-center" style="background:#003399;"> 
<br>
                    <h5 class="text-white text-center"> <strong> CONTACTA A TUS CLIENTES EN CUALQUIER MOMENTO Y LUGAR</strong> </h5>
                    </div>
<h5 class="text-black text-center">El servicio  <strong class="text-primary"> SMS </strong> e  <strong  class="text-primary"> Email Masivos </strong> de  <strong  class="text-primary" >BINTERACTION CHILE </strong> permite una comunicación rápida y expedita entre las empresas y sus clientes.</h5>

 <img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="" alt="BINTERACTION">


  <h5 class="text-black text-center">Enviar mensajes SMS masivos es una de las principales estrategias de marketing digital, junto con los Emails Masivo, puedes abarcar ambas áreas de contacto a tus clientes, además el envío de URL corta personalizada nos brinda una mayor oportunidad de contacto”.</h5>

 
<div class="mt-2 text-center" style="background:#003399;"> 
<br>
                    <h5 class="text-white text-center"> <strong>Ejemplo de  SMS + Landing Video </strong> </h5>
                    </div>
                    <img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="" alt="BINTERACTION">
                     <div class="videoWrapper">        
                    <iframe width="400" height="320" src="{{asset('/files/binter_vid.mp4')}}" frameborder="0" autoplay allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                </div>


<div class="mt-2 text-center" style="background:#003399;"> 
<br>
                    <h5 class="text-white text-center"> <strong>INFORMACION EFECTIVA </strong> </h5>
                    </div>
<h5 class="text-black text-center"> <strong>Sabemos lo que te hace falta para hacer crecer tu negocio. Con las Campañas de Emails o SMS te conectamos con un mercado abundante y queremos ayudarte a lograrlo.</strong> </h5>


                    <div class="mt-2 text-center" style="background:#003399;"> 
<br>
                    <h5 class="text-white text-center"> <strong>Diseño de Paginas Web </strong> </h5>
                    </div>
<h5 class="text-black text-center"> <strong>Nos especializamos en el Diseño Web y Tiendas Online; Una página web es más que una hoja digital <span class="text-danger"> 100% personalizadas. </span></strong> </h5>

                    <div class="mt-2 text-center" style="background:#003399;"> 
<br>
                    <h5 class="text-white text-center"> <strong>SOLICITA UNA COTIZACIÓN PARA DISEÑO WEB, SMS -EMAILS, O CUALQUIERA DE NUESTROS SERVICIOS </strong> </h5>
                    </div>
               
            </div> </div>


            <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=5695251902&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56232329133"><img width="60" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:lilian.binteraction@gmail.com?subject=Servicios%20Binteraction"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>
        </div>


        <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-black text-center mt-3 hide">GRACIAS, LO CONTACTAREMOS</h5>
                            </div>
                        </div>
                    </div>

   
     <script>
   //EVENT 1

         $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });

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

           // json_datos.nombre = $('#name').text();
           // json_datos.monto = $('#pay').text();

            events({    
                'name': name,
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(json_datos)
            });
        }

     // 

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Mombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2')                
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["maicol.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
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
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, lo contactaremos');
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