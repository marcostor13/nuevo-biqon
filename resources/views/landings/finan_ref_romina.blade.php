@extends('layouts.landing')

@section('title', 'FINANCOOP')

@section('content')

<?php
//$startdate=strtotime("Today");
//$startdate=('Y-m-d\TH:i:s');
$name = $_GET['nombre'];
//$enddate=strtotime("+5 days", $startdate);
//$enddate=('Y-m-d\TH:i:s');
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

   <!-- <div id="CLINICA_DAVILA" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="FINANCOOP">
            
            <div class=col-md-12>
           
                        <div id="cont1" class="p-2 pl-5 pr-5 hide">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar</button>
                       </div>
                       </div> 
                    </div>
                     <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div> 
                    <div id="cont2" class="p-2 pl-3 pr-3">
                        <div class="card">     
                            <div class="card-body">
                                <h4 class="text-grey text-center"> Estimado(a) <strong>   <span><?php echo $name; ?></span> </strong> </h4>
                           <p class="text-grey"> <h5> <strong> 
                            En estos difíciles días que estamos pasando en el país,</strong> <strong class="text-primary">FINANCOOP</strong><strong>, tiene un crédito para usted, de refinanciamiento o crédito nuevo </strong></h5>
                                  <h5> <strong> 
                              <br>* Nuevo monto de crédito para refinanciamiento $ 1.600.000<br>
                              <br>* Crédito socio nuevo hasta  $ 1.500.000<br>
                              <br>* Plazo 90 días descuento en Julio<br>
                              <br>* Enviar foto por WhatsApp de Ultima Liquidación de Sueldo + C. de Identidad + Comprobante de Domicilio<br>
                                   </strong> </h5>
                               </p></h4>

                                <button onclick="Mens1(); eventosLanding('Llamar');" class="btn bg-primary text-white col-12 mt-2">LLAMAR A EJECUTIVO</button>

                                  <button onclick="Mens2(); eventosLanding('WhatsApp');" class="btn bg-primary text-white col-12 mt-2">CONTACTAR POR WHATSAPP</button>

                                <!--<div class="date btn bg-primary text-white col-12 mt-4">
                                 <span>AGENDAR VISITA</span>
                                 <input id="date1"  type="date" class="btn-date text-white" style="border: none;" min="<?php //echo date('Y-m-d') ?>" max="<?php //echo date("Y-m-d", $enddate) ?>"/>
                               </div>-->
                                <button onclick="Mens4(); eventosLanding('Correo');" class="btn bg-primary text-white col-12 mt-2">CONSULTAS POR CORREO
                                </button>


                              <!-- <button onclick="Mens1(); eventosLanding('Pago Transferencia');" class="btn bg-primary text-white col-12 mt-2">PAGAR POR TRANSFERENCIA
                                </button>
                                   <button onclick="Mens5(); eventosLanding('Pago Banco Estado ');" class="btn bg-primary text-white col-12 mt-2">PAGAR POR BANCO ESTADO
                                </button>
                                    
                                <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-4">YA PAGUE</button>

                                 <button onclick="Mens7(); eventosLanding('Consultas ');" class="btn bg-primary text-white col-12 mt-2">CONSULTAS
                                </button>

                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='Mens1(); eventosLanding("Pagar"); '>
                                    <img width="250" src="https://i.imgur.com/8icgXNz.png"></a>-->
                                </div>
                                
                                <!--<button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-primary text-white col-12 mt-2">YA PAGUE 
                                    <img width="200" src="https://i.imgur.com/rFQ2FWM.png">
                                </button>-->
                                  
                                   
                                <!--  <a onclick="eventosLanding('Correo');" href="mailto:infopagatucuenta@davila.cl?subject=Pago%20de%20Cuenta&body=Escribe aquí si tienes preguntas"><img width="85" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>-->
                                    
 <!--<a href = "mailto:miemail@gmail.com??subject=Pago%20de%20Cuenta&body=Escribe aquí si tienes preguntas".id_adm;><img width="85" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>-->

                                    </div>

                            </div>   
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
                    $('#cont1').addClass('hide');
                     $('#cont5').removeClass('hide');
                    $('#error').text("Validación incorrecta, recuerde visitar nuestra pagina web https://financoop.cl/ o enviarnos un correo a cobranzas@financoop.cl.");
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

     

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'Mensaje': msg,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Liquidacion': getUrlParameter('data2'),
                    'Clasificacion': getUrlParameter('data3'),
                    'Cuentas': getUrlParameter('data5'),
                    'Landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Liquidacion': getUrlParameter('data2'),
                    'Clasificacion': getUrlParameter('data3'),
                    'Cuentas': getUrlParameter('data5'),
                    'Landing': '{!! $landing->name !!}'
                } 
            }
             var correo = ["belen.maldonado@financoop.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
               // 'email': '{!! $landing->email !!}'
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
   // var id_adm; 
        // id_adm= getUrlParameter('data1'); //1234;
          
            swal({
             title: `Para Comunicarse, seleccione la opcion 2`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "tel:+56963101244";
        })


        } 
        
          function Mens1(){

        window.location.href ="tel:+56963101244";
    
        } 


    function Mens2(){

        window.location.href = "https://api.whatsapp.com/send?phone=56963101244&text=Hola,%20tengo%20una%20consulta";
    
        } 



     

            function Mens4(){     
         var rut; 
         rut= getUrlParameter('rut'); 
         var Nombre; 
         Nombre= getUrlParameter('Nombre'); 
         var Telefono; 
         Telefono= getUrlParameter('Telefono'); 
   window.location.href = "mailto:belen.maldonado@financoop.cl?subject=Necesito%20Informacion&body= Nombre: "+Nombre+" Telefono: "+Telefono;


 }
    </script>
    

@endsection
