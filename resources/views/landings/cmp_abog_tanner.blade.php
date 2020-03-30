@extends('layouts.landing')

@section('title', 'CMP Abogados')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

   <!-- <div id="CMPAbogados" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:200px">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
           <!--  <img style="max-width:250px; max-height:200px "  class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="CMPAbogados">-->

            <!-- <div id="cont1" class="p-5 ">
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-primary text-black col-12 mt-4"> Validar </button>
            </div>-->
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                                 <a href="tel:+56932935338" class="btn bg-primary text-black col-12 mt-4"> Contactar</a>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5 ">
                <h4 class="text-black text-center">Estimado(a) <span id="name"></span></h4>
  <img style="max-width: 60%"  class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/mZPtMyS.jpg" alt="CMPAbogados">
                <p class="text-black">
                 Preparamos una campaña especial solo para los clientes que están al día y que hayan pagado su cuota de marzo 2020 antes del 31 de marzo a las 23:59 hrs. Si cumples con estos requisitos podrás refinanciar tu crédito automotriz y desfasar el pago de hasta 3 cuotas a tasa preferencial.
<br>
Para acceder a esta opción debes ingresar tus datos hasta el jueves 2 de abril haciendo click en el siguiente botón y uno de nuestros ejecutivos se comunicará contigo dentro de los próximos tres días hábiles:
                </p>

<button onclick='window.location.href="https://forms.office.com/Pages/ResponsePage.aspx?id=ngP91nPl9EmH0nIS1-_5-pp2PomBIF1Ig9MZK3TNywRUNzg4TVlGU1BDRlhCS0s3STVMMUNMU09WSyQlQCN0PWcu"; eventosLanding("Formulario"); ' class="btn bg-primary text-black col-12 mt-4">Quiero que me Contacten</button>

                <p> Si no te interesa esta propuesta, no estás al día antes de fin de mes o no cumples con el envío de la información pertinente, tu calendario se mantendrá sin cambios.

Si tienes dudas puedes enviar un mail a <a onclick="eventosLanding('correo');" href="mailto:serviciostanner@tanner.cl?subject=Landing%20CMP%20Abogados"></a>serviciostanner@tanner.cl</p>
            <!--  <div class="date btn bg-primary text-black col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php // echo date('Y-m-d') ?>" max="<?php // echo date("Y-m-d", $enddate) ?>"/>
                </div>-->

               <!-- <button  class="btn bg-primary text-black col-12 mt-4">Convenio de pago, Contactar
                  <a href="tel:+34678567876">Aquí el texto que quieras</a>        
                 class="btn bg-primary text-black col-12 mt-4">Convenio de pago, Contactar</button>-->

                <!-- < <div class="btn bg-primary text-black col-12 mt-4">-->
                    <!--<span>Convenio de pago, Contactar</span>-->
                  <!--  <a href="tel:+56932935338" class="btn bg-primary text-black col-12 mt-4"> Convenio de pago, Contactar</a>--> 
                <!-- <</div>-->
            <!--  <button onclick='window.location.href="https://tanner.cl/acceso-clientes/"; eventosLanding("Pagina de Pagos"); ' class="btn bg-primary text-black col-12 mt-4">PAGAR AHORA</button> -->
                
               <!-- <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-black col-12 mt-4">YA PAGUE</button>-->
                
                <div class="d-flex justify-content-around align-content-center mt-4">
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56932935338&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                
                    <a onclick="eventosLanding('Llamar');" href="tel:+56932935338"><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>

                    <a onclick="eventosLanding('Correo');" href="mailto:fcortes@cmpabogados.cl?subject=Landing%20CMP%20Abogados"><img width="40" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>
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
          var data1; 
         data1= getUrlParameter('data1'); 
          var data2; 
         data2= getUrlParameter('data2'); 

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
                    $('#data1').text(data1);
                    $('#data2').text(data2);
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
                    'Ejecutivo': getUrlParameter('data3'),
                    'Credito Cliente': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Ejecutivo': getUrlParameter('data3'),
                    'Credito Cliente': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["fcortes@cmpabogados.cl"];  
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
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut'); 
   window.location.href = "mailto:infopagatucuenta@davila.cl?subject=Pago%20de%20Cuenta&body=Id Admision: "+id_adm+"   RUT:  "+rut;
        } 
     </script>

@endsection