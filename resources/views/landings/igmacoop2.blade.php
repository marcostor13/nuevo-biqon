@extends('layouts.landing')

@section('title', 'Oyarzun')

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
    .wine {  background-color: #6b2737;}
</style>

     <!-- <div id="CMPAbogados" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; max-height:200px">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <br><br>
             <img style="max-width:320px; max-height:180px" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="Oyarzun"> <!--<h1> <strong>Oyarzun y Cia Ltda </strong></h1>-->

             <div id="cont1" class="p-5 ">
                <h4 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4"> Validar </button>
            </div>
            <div id="cont5" class="p-5 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
            <div id="cont2" class="p-5 hide">
                <h4 class="text-black text-center">Estimado(a) <span id="name"></span> </h4>
         
                 <h4 class="text-black text-center">RUT :<span id="RUT"></span> </h4>

                   <p class="text-black" style="text-align: center;">

                  Le saluda  <strong>*IGMACOB SPA*</strong> y me comunico por encargo de la empresa <strong>WÜRTH Chile Ltda.</strong>, quien nos ha autorizado para realizar el cobro de la deuda pendiente que a la fecha se encuentra en mora cuyo registro es:


</p>
      
               

               <!-- <button onclick="Mens1(); eventosLanding('Pago Transferencia');" class="btn bg-success text-white col-12 mt-2">PAGAR AHORA </button>

<INFORMACIÓN DE TU DEUDA>

<CONTACTA UN EJECUTIVO> 

<COMPROMISO DE PAGO>

<YA PAGUÉ> 

<WHATSAPP EJECUTIVO>
               -->
  <!--  <button onclick="Mens7(); eventosLanding('INFORMACIÓN');" class="btn wine text-white col-12 mt-2">INFORMACIÓN DE TU DEUDA </button> -->


    <div class="date btn bg-danger text-white col-12 mt-2"> <span>AGENDAR COMPROMISO DE PAGO</span>
        <input id="date1"  type="date" class="btn-date text-black" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
    </div>


    <button onclick="sendMail('El cliente indica que ya pagó'); eventosLanding('Ya pagué'); return false;" class="btn bg-danger text-white col-12 mt-2">YA PAGUE</button>
                        
  <!--  <button onclick="Mens2(); eventosLanding('Llamar');" class="btn bg-warning text-white col-12 mt-2">LLAMAR A EJECUTIVO </button>  --> 
<p class="text-black text-center"><br><strong>Seleccione alguna de estas opciones para comunicarte con un ejecutivo quien podrá asesorarle y resolver su consulta</strong></p>


<div class="d-flex justify-content-around align-content-center mt-4"> 
               <!-- <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://wa.me/56930132218"><img width="60" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>-->

                 <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://api.whatsapp.com/send?phone=56951580232&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://i.imgur.com/zwRWdi8.png"></a>

                <a class="ml-4" onclick="eventosLanding('gmail');" href="mailto: aassen@igmacob.cl"><img width="50" src="https://imgur.com/r0207Me.png"></a>


                <a class="ml-4" onclick="eventosLanding('telefono');" href="tel:951580232"><img width="50" src="https://imgur.com/fd8dy76.png"></a>

                   
                    
                </div>

             </div>
                           <div id="cont3" class="p-5 pl-3 pr-3 hide">
                            
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>

                         <div id="cont8" class="p-5 pl-5 pr-5 hide">
                        <div class="card">     
                <div class="card-body">
                    <!--<h3 class="text-black text-center"><span id="name"></span>, bienvenido a la sucursal virtual de UDLA.</h3>-->
                <h4 class="text-black text-center">Revisar Oferta</h4>

                <table class="table table-striped">
                    <tbody>
        <tr>
            <td>OP</td>
            <td><span id="monto"></span></td>
        </tr>
        <tr>
            <td>deuda + 10% </td>
            <td><span id="data1"></span></td>
        </tr>
        <tr>
            <td>Campaña </td>
            <td><span id="data2"></td>
        </tr>
        <tr>
            <td>Dias de mora</td>
            <td><span id="data3"></span></td>
        </tr>
        <tr>
            <td>Rol</td>
            <td><span id="data4"></span></td>
        </tr>
        <tr>
            <td>Tribunal</td>
            <td><span id="data5"></span></td>
        </tr>
    </tbody>
                </table>
                    </div>
                      </div> 
            <button onclick="Mens9();" class="btn bg-danger text-white col-12 mt-2">IR A MENU</button>



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
                    $('#RUT').text(e.data.rut);
                   // $('#pay').text(e.data.monto);
                    $('#cont2').removeClass('hide');
                    $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });
                }else{
                        $('#cont1').addClass('hide');
                     $('#cont5').removeClass('hide');
                    $('#error').text("Validación incorrecta");
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
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'EJECUTIVO': getUrlParameter('data1'),
                     'PATENTE': getUrlParameter('data2'),
                     'CARTERA': getUrlParameter('data3'),
                     'OPERACION': getUrlParameter('data4'),
                     'CAMPANA': getUrlParameter('data5'),
                   'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Compromiso de Pago': date,
                    'nombre': $('#name').text(),
                   // 'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                     'EJECUTIVO': getUrlParameter('data1'),
                     'PATETE': getUrlParameter('data2'),
                     'CARTERA': getUrlParameter('data3'),
                   'OPERACION': getUrlParameter('data4'),
                     'CAMPANA': getUrlParameter('data5'),
                    'landing': '{!! $landing->name !!}'
                } 

               }
            var correo = ["aassen@igmacob.cl", "esolano547@gmail.com"];  

            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'arojas@zonasursa.cl', "arojas@zonasursa.cl"
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
                    $('#message').text('Si ya pagaste, te rogamos ignorar nuestro mensaje');
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


           function Mens1(){
      
 /*  window.location.href = "https://ww3.servipag.com/pagoenlinea/portal/desktop/public/todas/!ut/p/b1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNgs0CLZ0MHQ38zQPcDBx9gs1CzAK9Df0DTYAKIvEo8DanTL-HEXH6DXAARwNC-r30o9Jz8pOAXg3Xj8KrGOQXvApAjgUrwOMaP4_83FT9gtzQ0IjKYE9dR0VFADNEynw!/dl4/d5/L2dBISEvZ0FBIS9nQSEh/?idServicio=34&idBiller=843?TELEFONO=985296912&ID=79849235&URL=https://ww3.servipag.com/pagoenlinea/portal/desktop/public/todas/!ut/p/b1/04_Sj9CPykssy0xPLMnMz0vMAfGjzOKNgs0CLZ0MHQ38zQPcDBx9gs1CzAK9Df0DTYAKIvEo8DanTL-HEXH6DXAARwNC-r30o9Jz8pOAXg3Xj8KrGOQXvApAjgUrwOMaP4_83FT9gtzQ0IjKYE9dR0VFADNEynw!/dl4/d5/L2dBISEvZ0FBIS9nQSEh/?idServicio=34&idBiller=843";*/

     window.location.href = "https://sconsumer.e-pagos.cl/eftPP/";


        } 

    function Mens3(){

        window.location.href = "https://api.whatsapp.com/send?phone=56951580232&text=Hola,%20tengo%20una%20consulta";
    
        } 

           function Mens2(){

        window.location.href ="tel:+56951580232";
    
        } 

         function Mens7(){
    var monto,data1,data2,data3,data4,data5; 
         monto= getUrlParameter('monto');
         data1= getUrlParameter('data1');
         data2= getUrlParameter('data2');
         data3= getUrlParameter('data3');
         data4= getUrlParameter('data4');
         data5= getUrlParameter('data5');

     $('#cont2').addClass('hide');
      $('#cont7').addClass('hide');
     $('#cont8').removeClass('hide');
     $('#monto').text(monto);
     $('#data1').text(data1);
     $('#data2').text(data2);
     $('#data3').text(data3);
     $('#data4').text(data4);
     $('#data5').text(data5);
 }
  function Mens9(){
     $('#cont7').addClass('hide');
      $('#cont8').addClass('hide');
       $('#cont1').addClass('hide');
     $('#cont2').removeClass('hide');
 }

    </script>
    

@endsection