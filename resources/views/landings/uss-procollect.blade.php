@extends('layouts.landing')

@section('title', 'USS')

@section('content')
<?php 
//$startdate=strtotime("Today");
//$enddate=strtotime("+5 days", $startdate);
?>

<style type="text/css">
    
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
    <div id="USS" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">

        <div class="oscurecer">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width: 60%" class="img-fluid col-10 col-md-2 mt-1" src="{{$landing->logo}}" alt="USS">
            <img style="max-width: 30%" class="img-fluid col-10 col-md-2 mt-1" src="https://i.imgur.com/whNYFHQ.png" alt="USS">

             <div id="cont1" class="p-2 ">
                <div class="card">     
                <div class="card-body">
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 6 dígitos de tu RUT</h4>
                </div> </div>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black"  min="6" max="6" maxlength="6">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4"> Validar </button>

                <div id="cont6" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error1"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-1 hide">
                <div class="card">     
                <div class="card-body">
                <h5 class="text-black text-center">Estimado(a) <span id="name"></span></h5>
                <p class="text-black">
                    Tenemos una propuesta para regularizar tus cuotas pendientes. <br> Tienes disponible descuentos en Intereses,  gastos de cobranza y de capital <br> Si te interesa recibir más información, comunícate con nosotros o solicita que te llamemos.</p>
             </div> </div>

                <button onclick="sendMail('Quiero Que me llamen'); eventosLanding('LLAMADA'); return false;" class="btn bg-danger text-white col-12 mt-4">QUIERO QUE ME LLAMEN</button>

                <a onclick="eventosLanding('CORREO'); Mens2();" class="btn bg-danger text-white col-12 mt-4"> ESCRÍBENOS <img width="30" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>


                <button onclick='window.location.href="https://pagos.uss.cl"; eventosLanding("PAGINA DE PAGOS USS"); ' class="btn bg-danger text-white col-12 mt-4">REVISAR DEUDA COMPLETA</button>



                <!-- <button onclick='window.location.href="https://pagos.uss.cl/"; eventosLanding("Pagina de Pagos"); ' class="btn bg-danger text-white col-12 mt-4">PAGAR AHORA</button>-->
                
               
                
               <!-- <div class="d-flex justify-content-around align-content-center mt-4">
                    
                    <a onclick="eventosLanding('Llamar');" href="tel:+56225940241"> LLAMAR</a>
                   
                </div>-->
                
            </div>
           <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
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

            console.log(getAllUrlParameter())
        }); 

      

         function event1(){

             if($('#rut').val().length != 6){
                 $('#error').text("Debe ingresar 6 dígitos");
             }else{
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

        }

        }
        

        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

            json_datos.nombre = $('#name').text();
          //  json_datos.monto = $('#pay').text();
           // json_datos.date = $('#date1').val();

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
                    'Mensaje': msg,
                    'Nombre': $('#name').text(),
                    'Monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': $('#name').text(),
                    'Monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),                    
                    'landing': '{!! $landing->name !!}'
                } 
            }
 
           
            
            var correo = ["uss@procollect.cl","josesm@procollect.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email':' {!! $landing->email !!}'
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

        let getAllUrlParameter = async function() {
            var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

            let obj = {}; 

            for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            obj[sParameterName[0].toLowerCase()] = sParameterName[1];            
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            return await $.post( "/getUrlByCode", obj, function() {
                
            })
            .done(function(e) {

                sURLVariables = e.split('&'),
                sParameterName,
                i;

                let obj2 = {}; 

                for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                obj2[sParameterName[0].toLowerCase()] = sParameterName[1];            

                console.log(obj2)    

                return obj2;

            }


                console.log(e);
             
            })
            .fail(function(e) {
                console.log(e);               
            });


            return obj;  
        };

        function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut');

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "%0A%20Estimado%20estudiante,%0A%20favor%20env%C3%ADe%20su%20consulta%20relacionada%20al%20pago%20de%20su%20cuenta.%20%0A%20Saludos%20cordiales%20";
   window.location.href = "mailto:uss@procollect.cl?subject=Pago%20de%20Cuenta%20&body=RUT:%20"+rut+" "+body_message;

 }
        
    
    </script>
    

@endsection