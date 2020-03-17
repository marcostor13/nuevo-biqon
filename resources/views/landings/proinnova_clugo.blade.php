@extends('layouts.landing')

@section('title', 'ProInnova')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

    <div id="ProInnova" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:200px">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width:250px; max-height:250px " class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="ProInnova">

             <div id="cont1" class="p-5 ">
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-primary text-black col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                                 <a href="tel:+56226385232" class="btn bg-primary text-black col-12 mt-4"> Contactar</a>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5 hide">
                <h4 class="text-black text-center">Estimado(a) <span id="name"></span></h4>

                <p class="text-black">
                  Le Informamos que usted posee una deuda con <strong> ISAPRE COLMENA GOLDEN CROSS S.A. </strong> favor comunicarse con nosotros para su regularización a la brevedad. <br>  </p>

                
              <div class="date btn bg-primary text-black col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>

               <!-- <button  class="btn bg-primary text-black col-12 mt-4">Convenio de pago, Contactar
                  <a href="tel:+34678567876">Aquí el texto que quieras</a>        
                 class="btn bg-primary text-black col-12 mt-4">Convenio de pago, Contactar</button>-->

                <!-- < <div class="btn bg-primary text-black col-12 mt-4">-->
                    <!--<span>Convenio de pago, Contactar</span>-->
                    <a href="tel:+56989064378" class="btn bg-primary text-black col-12 mt-4"> Convenio de pago, Contactar</a> 
                <!-- <</div>-->
               <!-- <button onclick='window.location.href="https://vtr.com/?pagoexpress=1"; eventosLanding("Pagina de Pagos"); ' class="btn bg-primary text-black col-12 mt-4">PAGAR AHORA</button>-->
                
                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-black col-12 mt-4">YA PAGUE</button>
                
                <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56989064378&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                
                    <a onclick="eventosLanding('Llamar');" href="tel:+56989064378"><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>

                    <a onclick="eventosLanding('Correo');" href="mailto:carlos.lugo@proinnova.cl?subject=Landing%20ProInnova"><img width="40" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>
                </div>
                
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
                    $('#data1').text(getUrlParameter('data1'));
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

            json_datos.nombre = $('#name').text();
            //json_datos.monto = $('#pay').text();

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
                   // 'Tipo Deuda': getUrlParameter('data1'),
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                    'rut': getUrlParameter('rut'),
                   // 'Tipo Deuda': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["carlos.lugo@proinnova.cl"];  
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

      </script>

@endsection