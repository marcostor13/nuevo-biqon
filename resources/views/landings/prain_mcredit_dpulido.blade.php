@extends('layouts.landing')

@section('title', 'Mundo Credito')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+6 days", $startdate);
$codigo = $_GET['DATA2'];
?>
<style>
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
    
}
</style>
   <!-- <div id="mundocredito" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width:250px; max-height:100px " class="img-fluid col-10 col-md-3 mt-2" src="{{$landing->logo}}" alt="mundocredito">

             <div id="cont1" class="p-5 ">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-blue input" autofocus>
                <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar </button>
            </div>

            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>

            <div id="cont2" class="p-5 hide">
                <h3 class="text-black text-center"> Señor (a): <span id="name"></span></h3>

                <p class="text-black">  
                    De nuestra consideración; <br>
                    <br>
                    Nuestro cliente MUNDO CREDITO es consciente de la situación actual del país y por tal motivo reiteramos la importancia de mantener la comunicación y lograr brindar la mejor asesoría y respuesta para la regularización de su financiamiento.
                    <br>
                    Informamos a usted que se procederá  a interponer  acciones de cobranza en su contra por la deuda que mantiene vigente de su crédito Automotriz correspondiente al código: <?php echo $codigo; ?>
                    <br>
                    Le recordamos que el contrato de Prenda sin desplazamiento firmado por usted y la Ley 20.190, contienen una cláusula de aceleración que estipula que el no pago de dos o más cuotas hará exigible el total de la deuda.
                    <br>
                    Si requiere información le ofrecemos las siguientes opciones:
                    <br>
                                    </p>
                               <div class="date btn bg-primary text-white col-12 mt-4">
                        <span>Agendar Compromiso de Pago</span>
                          <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                      </div>          

                      <a onclick="eventosLanding('Llamar');" href="tel:+56967599323" class="btn bg-primary text-white col-12 mt-4">Llamar a Ejecutivo</a> 

                      <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56967599323&text=Hola,%20tengo%20una%20consulta"  class="date btn bg-primary text-white col-12 mt-4">Contactar por WhatsApp</a>  

                      <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-primary text-white col-12 mt-4">Correo a Ejecutivo</a>

                       <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-4">Ya Pague</button>

            </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>
        </div>
   <!-- </div>-->

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

            json_datos.nombre = $('#name').text();
            
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
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                     'ejecutivo': getUrlParameter('data1'),
                   'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                   // 'monto': getUrlParameter('monto'),
                    'rut': getUrlParameter('rut'),
                    'phone': getUrlParameter('telefono'),
                     'ejecutivo': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["dpulido@prainabogados.cl"];
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
                     $('#cont2').addClass('hide');
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

      
            function Mens2(){
         var rut; 
         rut= getUrlParameter('rut'); 
   window.location.href = "mailto:dpulido@prainabogados.cl?subject=Pago%20de%20Cuenta%20%20RUT:%20"+rut;
     }  
    </script>
    

@endsection