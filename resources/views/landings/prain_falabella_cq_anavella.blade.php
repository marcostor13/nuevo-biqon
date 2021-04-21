@extends('layouts.landing')

@section('title', 'PRAIN')

@section('content')
 <?php
$startdate=strtotime("Today");
$enddate=strtotime("+7 days", $startdate);
//$rol = $_GET['DATA2'];
//$tribunal = $_GET['DATA3'];
//$comuna = $_GET['DATA4'];
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

    <!--<div id="CLINICA" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="PRAIN">
            
            <div class=col-md-12>
           
                     <div id="cont1" class="p-2 pl-5 pr-5 ">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-success text-white col-12 mt-4">Validar</button>
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
                    <div id="cont2" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h3 class="text-grey text-center"> Señor (a): <strong> <span id="name"></span></strong> </h3>
                             <p class="text-white"> <h4> 

     PRAIN ABOGADOS en representación de su mandante CMR FALABELLA., tiene por fin comunicarle, que ante el incumplimiento de pago de su tarjeta, hemos iniciado las acciones judiciales para cobro, encontrándose, en actual tramitación, una demanda ejecutiva. <br>
<br>
     Le solicitamos contactarse, con el propósito de buscar en conjunto una solución favorable y definitiva a su endeudamiento de acuerdo a sus posibilidades de pago; evitando así avanzar el proceso a instancia embargo.<br>
<br>
Regularizando su deuda usted:<br>
<br>
-   Pone fin a la demanda Judicial que actualmente cursa en su contra<br>
-   Detiene acciones de cobranza Judicial<br>
-   Aclara sus antecedentes comerciales.<br>
-   Podrá Reactivar el uso de su tarjeta <br>
<br><br>
 
                      </h4>
                      </p>  


                      <div class="date btn bg-success text-white col-12 mt-4">
                        <span>Agendar Compromiso de Pago</span>
                          <input id="date1"  type="date" class="btn-date text-success" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                      </div>          

                      <a onclick="eventosLanding('Llamar');" href="tel:+56964386129" class="btn bg-success text-white col-12 mt-4">Llamar a Ejecutivo</a> 

                      <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56964386129&text=Hola,%20tengo%20una%20consulta"  class="date btn bg-success text-white col-12 mt-4">Contactar por WhatsApp</a>  

                      <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-success text-white col-12 mt-4">Correo a Ejecutivo</a>

                       <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-success text-white col-12 mt-4">Ya Pague</button>

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
                    <div id="cont4" class="p-2 pl-5 pr-5 hide">
                       <!-- <div class="card">     
                            <div class="card-body">
                        <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='Mens1(); '>
                                    <img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                                </div>
                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href="http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/" '>
                                    <img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>
                                </div>-->
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
            json_datos.monto = $('#pay').text();

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
                    'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'rut': getUrlParameter('rut'),
                    'phone': getUrlParameter('telefono'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
             var correo = ["anavella@prainabogados.cl"];
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
             window.location.href = "tel:+56964386129";
        })


        } 
        
       function Mens1(){
    var id_adm; 
         id_adm= getUrlParameter('data1'); //1234;
          
            swal({
               title: `Para Pagar Online Expandir la Pantalla, Ingrese su RUT y su ID admisión es N° ${id_adm}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/";
        })


        }

          function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut'); 
   window.location.href = "mailto:anavella@prainabogados.cl?subject=Pago%20de%20Cuenta%20%20RUT:%20"+rut;


        }  

    </script>
    

@endsection