@extends('layouts.landing')

@section('title', 'EMODERNA')

@section('content')

<?php
//$startdate=strtotime("Today");
//$startdate=('Y-m-d\TH:i:s');
$monto = $_GET['MONTO'];
$cuota = $_GET['DATA1'];
$name = $_GET['NOMBRE'];
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

    <!--<div id="EMODERNA" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="EMODERNA">
            
            <div class=col-md-12>
           
                     <div id="cont1" class="p-2 pl-5 pr-5 hide">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4">Validar</button>
                       </div>
                       </div> 
                    </div>
                     <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                                 <a onclick="" href="https://emoderna.cl" class="btn bg-danger text-white col-12 mt-2"> Ir a Web</a>

                                 <a onclick="eventosLanding('Correo Error');" href="mailto:cobranzas@emoderna.cl?subject=Cobranza%20Escuela%20Moderna" class="btn bg-danger text-white col-12 mt-2"> Contactar</a>
                            </div>
                        </div>
                    </div>
                    <div id="cont2" class="p-2 pl-3 pr-3 "><!--HIDE-->
                        <div class="card">     
                            <div class="card-body">
                             <h5 class="text-black text-center"> Estimado(a) <strong> <span><?php echo $name; ?></span></strong> </h5>
                            <p class="text-black"> 
                              Te informamos que presenta <span><?php echo $cuota; ?></span> cuotas pendientes  por el siguiente monto total $<span><?php echo $monto; ?></span>. 

                              <br> Le  recordamos que no podrá realizar matricula 2021 si presenta más de 3 cuotas pendientes del arancel 2020.
                              <br>
                               <br> Pinche su opción:
                              <!--<strong>INSTITUTO PROFESIONAL ESCUELA MODERNA DE MUSICA SPA </strong> <br>
                              Le invitamos a realizar el pago de su(s) cuota(s) pendiente(s) mediante transferencia electrónica:
                              <br>
                               <br>
                              Para Realizar su pago cuota EMODERNA mediante transferencia: <br>
                              al BANCO DE CHILE <br>
                              Nombre: ESCUELA MODERNA <br>
                               Cuenta Corriente:  1640663409 <br>
                                RUT:  78206800-8   <br>
                                Correo: cobranzas@emoderna.cl <br>
                                <br>

                                Una vez realizada tu tranferencia de el pago de su(s) cuota(s) pendiente(s) enviar comprobante al correo de cobranzas<br>
                                Correo: cobranzas@emoderna.cl <br>-->
                            </p>

            <a class="btn bg-danger text-white col-12 mt-2" onclick='window.location.href="mailto:cobranzas@emoderna.cl?subject=Cobranza%20Escuela%20Moderna" ; eventosLanding("Consulta"); return false;' class="btn bg-danger text-white col-12 mt-2"> CONTACTAR A COBRANZAS PARA BENEFICIOS Y OPCIONES </a>

             <button onclick="window.location.href='https://pagos.emmd.cl'; eventosLanding('Pagar');" class="btn bg-danger text-white col-12 mt-2">PAGAR AHORA</button>

              <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-white col-12 mt-2">YA PAGUE</button>

            

             <!-- <a class="btn bg-danger text-white col-12 mt-2" onclick='window.location.href="tel:+56932919230" ; eventosLanding("Llamar"); return false;' class="btn bg-danger text-white col-12 mt-2"><img width="30" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"> LLAMAR </a>

              <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56932919230&text=Hola,%20tengo%20una%20consulta" class="btn bg-danger text-white col-12 mt-2"><img width="30" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png">  WHATSAPP </a>-->

                                </div>

                                    <!--<div class="d-flex justify-content-around align-content-center mt-4">
                                                       
                                    <a onclick="eventosLanding('Llamar'); Mens();"><img width="85" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                                   
                                    <a onclick="eventosLanding('Correo');" href="mailto:cobranzas@emoderna.cl?subject=Landing%20Escuela%20Moderna"><img width="85" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg"></a>
                                    </div>-->
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
                        <div class="card">     
                            <div class="card-body">
                        
                            <h6 class="text-black"> 
                              Transferencia a BANCO DE CHILE  <br>
                              cuenta corriente Nº 1640663409<br>
                              INSTITUTO PROFESIONAL  EMM SPA<br>
                              RUT 78206800-8<br>
                              Email: cobranzas@emoderna.cl   

                               </h6>
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
                    $('#error').text("Validación incorrecta, recuerde visitar nuestra pagina web o enviarnos un correo electronico ");
                }
            })
            .fail(function() {
                console.log( "error" );
            });

        }
        

        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

          //  json_datos.nombre = $('#name').text();
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
                    //'Id_Admision': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data2'),
                    //'Ley': getUrlParameter('data4')
                    'Landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'Rut': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    //'Id_Admision': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data2'),
                    //'Ley': getUrlParameter('data4'),
                    'Landing': '{!! $landing->name !!}'
                } 
            }
             var correo = ["cobranzas@emoderna.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
               // 'email': '{!! $landing->email !!}'
                //'email': 'marcostor13@gmail.com', "cobranzas@emoderna.cl"
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
             title: `Si esta ocupado, favor espere`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "tel:+56989000026";
        })


        } 
        
       function Mens1(){
    //var id_adm; 
       //  id_adm= getUrlParameter('data1'); //1234;
           $('#cont2').addClass('hide');
          $('#cont4').removeClass('hide');   


        } 


     function Mens2(){
     $('#cont2').addClass('hide');
     $('#cont4').removeClass('hide');

        } 
    </script>
    

@endsection