@extends('layouts.landing')

@section('title', 'Oriencoop')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);

//$name = $_GET['NOMBRE'];
//echo "El identificador de este cliente es: $identificador";
?>
<style>
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
  font-weight: 400;
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
  font-weight: 400;
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

   <div id="Oriencoop" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

        
        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="Oriencoop">


               <div id="cont1" class="p-5 hide">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-blue input" autofocus>
                <button onclick="event1(); return false;" class="btn bg-dark text-white col-12 mt-4">Validar </button>
            </div>

           <div id="cont2" class="p-1">
                <div class="card">     
                            <div class="card-body">
                <h3 class="text-black text-center">Estimado(a) <span id="name"> <?php // echo $name; ?></span></h3>
<hr>
                <p class="text-black text-center">
                Lleva hasta el 23 de Mayo $1.100.000 En 24 cuotas a una tasa del 0,99%. solicita ahora en cualquiera de estas Opciones..
<br>
                </p><br>
     </div>
            </div>
 <!--                
<p class="text-white text-center"><strong>Seleccione alguna de estas opciones para comunicarse con un ejecutivo quien podrá asesorarle y resolver su consulta</strong><br></p>-->
                     
      
       <a onclick="eventosLanding('solicitar credito');" href="https://www.oriencoop.cl/simulador-credito/" class="btn bg-primary text-white col-12 mt-4">SOLICITAR CREDITO </a><br>
        <a onclick="eventosLanding('Simular Credito');" href="https://www.oriencoop.cl/simulador-credito/" class="btn bg-primary text-white col-12 mt-4">SIMULAR CREDITO </a><br>
         
          <a onclick="eventosLanding('Llamen'); sendMail('El cliente indica que desea ser contactado');"  class="btn bg-primary text-white col-12 mt-4" style="  border: 1px solid #9e9e9e;">SOLICITO QUE ME CONTACTEN</a>
<br>
<br>
<br>
                    <!-- <span class="text-white  text-center">Mi Cuenta<br>
                     <a class="ml-2" onclick="eventosLanding('Cuenta');" href="https://solvencia.cl/pagadeudas/"><img width="60" src="https://image.freepik.com/foto-gratis/lupa_172429-232.jpg"></a></span>-->
                     <div class=" text-center col-12" style="background:#006fb6;" > 

                     <div class="d-flex justify-content-around align-content-center text-center"> 
                         <span class="text-white  text-center"><br>
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56961933082&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg"></a></span>
                       <span class="text-white text-center"><br>
                    <a class="ml-2" onclick="eventosLanding('Facebook');" href="https://facebook.com/oriencoop5"><img width="50" src="https://i.imgur.com/1MMbEAw.png"></a></span>
                       <span class="text-white  text-center"><br>
                    <a class="ml-2" onclick="eventosLanding('Instagran');" href="https://facebook.com/oriencoop"><img width="50" src="ttps://i.imgur.com/DVoiS58.png"></a></span>
                    <span class="text-white  text-center"><br>
                     <a class="ml-2" onclick="eventosLanding('Pago en Linea');" href="https://www.oriencoop.cl/express/"><img width="50" src="https://img.freepik.com/free-vector/plain-credit-card-concept-illustration_114360-199.jpg?size=338&ext=jpg"></a></span>
                </div>
                <br><br>

               
       
        </div>
            
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-black text-center mt-3 hide"></h5>
                            </div>
                        </div>
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

            //json_datos.nombre = $('#name').text();
           // json_datos.monto = $('#pay').text();
            json_datos.nombre=getUrlParameter('nombre');
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
                    'Mombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                    // 'Sucursal': getUrlParameter('data1'),
                    // 'Campaña': getUrlParameter('data2'),
                    // 'Ejecutivo': getUrlParameter('data3'),
                      'landing': '{!! $landing->name !!}'
                                     
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Mombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                    // 'Sucursal': getUrlParameter('data1'),
                    // 'Campaña': getUrlParameter('data2'),
                    // 'Ejecutivo': getUrlParameter('data3'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["vmontecinos@oriencoop.cl "];
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
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
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