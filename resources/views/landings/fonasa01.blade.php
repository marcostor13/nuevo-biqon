@extends('layouts.landing')

@section('title', 'HerediaAbogados')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
$name = $_GET['NOMBRE'];

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

     <!-- <div id="HerediaAbogados" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: 100% 100%;" >-->

        <!--<div class="opaco"></div>-->
       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
  <img style="height:80px; width:100px;" class="img-fluid col-md-6 mt-1 hide" src="https://i.imgur.com/qTyzi5W.jpeg" alt="HerediaAbogados">
   <img style="height:120px; width:500px;" class="img-fluid col-md-6 mt-1 hide" src="https://i.imgur.com/qTyzi5W.jpeg" alt="HerediaAbogados">

   <img style="height:450px; width:450px;" class="img-fluid col-md-6 mt-1" src="https://i.imgur.com/qTyzi5W.jpeg" alt="HerediaAbogados">

             <div id="cont1" class="p-5 hide">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-blue input" autofocus>
                <button onclick="event1(); return false;" class="btn bg-dark text-white col-12 mt-4">Validar </button>
            </div>
            
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                                 <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a href="tel:+56226331354" class="btn bg-danger text-black col-12 mt-4"> Contactar</a>
                     </div>

                            </div>
                        </div>
                    </div>

            <div id="cont2" class="p-5 ">
                <h5 class="text-black text-center">Empleador(a)<strong><span> <?php echo $name; ?></span></strong></h5>

                <h5><p class="text-black"  align="justify">
                  Por mandato de FONASA le informamos que tiene una demanda en curso. Con el fin de evitar continuar con las acciones ejecutivas interpuestas y evaluar una futura acción penal. Ante cualquier consulta marque su alternativa:




1.-Escribenos un mensaje email
2.-Por whatsapp +56934811384 señalando su RUT
3.-Llamando a  los  teléfono +56934811384
4.-No corresponde el teléfono





                </p> </h5>
               
               <!-- <button onclick="sendMail('Solicito forma de pago'); eventosLanding('Solicitud'); return false;" class="btn bg-dark text-white col-12 mt-4">Solicito forma de pago</button>

                <button onclick="window.location.href='https://www.fonasa.cl'; eventosLanding('Consulta') ; return false;" class="btn bg-dark text-white col-12 mt-4"> Consultaré a Fonasa</button>-->
              <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56934811384&text=Hola,%20tengo%20una%20consulta" class="btn bg-dark text-white col-12 mt-4">WHATSAPP EJECUTIVO </a>
                   
              <a onclick="eventosLanding('Llamar');" href="tel:+56934811384"class="btn bg-dark text-white col-12 mt-4">LLAMAR A EJECUTIVO </a>

               <a onclick="eventosLanding('Correo');" href="mailto: judicial@herediaabogados.cl?subject=Cobranza%20Fonasa"class="btn bg-dark text-white col-12 mt-4">ESCRIBIR POR CORREO</a>


               

                 <!-- <a onclick="eventosLanding('Consultar');" href="http://bit.ly/2kAAUJB" class="btn bg-dark text-white col-12 mt-4" style="border: 1px solid #9e9e9e;"> Consultar a la Autopista </a>-->
                 <button onclick="window.location.href='https://www.fonasa.cl'; eventosLanding('Consulta') ; return false;" class="btn bg-dark text-white col-12 mt-4"> CONSULTAR EN FONASA </button>


                 <!-- <button onclick="sendMail('El teléfono no corresponde '); eventosLanding('No Corresponde'); return false;" class="btn bg-dark text-white col-12 mt-4" style="border: 1px solid #9e9e9e;">El teléfono no corresponde </button>-->
                 <a onclick="eventosLanding('Contactenme'); sendMail('El cliente indica Solicitar CONTACTO');" class="btn bg-dark text-white col-12 mt-4" style="border: 1px solid #9e9e9e;"> DESEO QUE ME CONTACTEN </a>

                 <!--   <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56934811384&text=Hola,%20tengo%20una%20consulta" class="btn bg-dark text-white col-12 mt-4"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png">WHATSAPP</a>
                   
                    <a onclick="eventosLanding('Llamar');" href="tel:+56934811384"class="btn bg-dark text-white col-12 mt-4"><img width="40" src="https://i.imgur.com/Oh5DCRW.png">LLAMAR</a>-->
                   
                   
           

             <!--   <a onclick="eventosLanding('Whastapp');" href="https://api.whatsapp.com/send?phone=56934811384&text=Hola,%20quiero%20una%20propuesta%20por%20el%20pago%20de%20mi%20deuda" class="btn bg-white text-dark  col-12 mt-4"  style="  border: 1px solid #9e9e9e;">Enviar propuesta de pago por Whastapp  <img width="30" src="https://i.imgur.com/Rtw9BXz.png"></a>

                 <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-white text-dark  col-12 mt-4" style="  border: 1px solid #9e9e9e;">Enviar propuesta de pago por email <img width="30" src="https://i.imgur.com/EpCpCdx.png"></a>

                  <a onclick="eventosLanding('Llamen'); sendMail('El cliente indica que desea ser contactado');" class="btn bg-white text-dark col-12 mt-4" style="  border: 1px solid #9e9e9e;">Solicito que me llamen  <img width="30" src="https://i.imgur.com/lKsQG4U.png"></a>
                
                

              <div class="d-flex justify-content-around align-content-center mt-2"> 

                   
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56934811384&text=Hola,%20tengo%20una%20consulta"><img width="42" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a onclick="eventosLanding('Llamar');" href="tel:+56226331354"><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                   
                    <a onclick="eventosLanding('Correo');" href="mailto: judicial@herediaabogados.cl?subject=Cobranza%20Fonasa"><img width="40" src="https://www.marketingdirecto.com/wp-content/uploads/2014/03/correo-electronico.png"></a>
                
                </div>-->
                
                
            <br><br><br><br><br>
                <p class="text-black" align="justify">
                 Si al momento de recibir esta información, su cuenta está regularizada, rogamos omitir este aviso
                </p>
                
             </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>

        </div>
        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
         <h5 id="message"class="text-grey text-center mt-3">Contáctanos </h5>
        </div>
           <img style="height:100px; width:500px;" class="img-fluid col-md-6 mt-1 " src="https://i.imgur.com/aWzOg2b.png" alt="HerediaAbogados">
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
                    $('#cont1').addClass('hide');
                     $('#cont5').removeClass('hide');
                    $('#error').text("Validación incorrecta, Por favor Comuniquese Aquí.");
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
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Monto': getUrlParameter('monto'),
                    'Estado': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha Compromiso': date,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Monto': getUrlParameter('monto'),
                    'Estado': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["judicial@herediaabogados.cl"];
           // var correo = ["jesus.binteraction@gmail.com"];
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
                    $('#message').text('Gracias, Su compromiso de pago fue agendado. Nos pondremos en contacto con usted en los próximos días');
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

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "%0A%20Estimado,%0A%20favor%20env%C3%ADe%20su%20propuesta%20relacionada%20al%20pago%20de%20mi%20cuenta%20";

   window.location.href = "mailto:judicial@herediaabogados.cl?subject=Pago%20de%20Cuenta%20&body=%20RUT:%20"+rut+" "+body_message;

 }
    </script>
    

@endsection