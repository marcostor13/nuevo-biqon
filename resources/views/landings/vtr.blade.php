@extends('layouts.landing')

@section('title', 'VTR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+3 days", $startdate);

$name = $_GET['NOMBRE'];
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
  text: #747373;
  font-size: 0.9rem;
  font-weight: 400;
}
.card .md-form label {
  font-weight: 300;
}

.oscurecer {
  background-image: 
    linear-gradient(
      rgba(0, 0, 0),
      rgba(0, 0, 0)
    )
    }

.accesos-directo {
    /*position: relative;*/
    background-text: #262626;
    padding: 40px 30px;
}
 .fas {
  font-family: 'Font Awesome 5 Free';
  font-weight: 900; 
  background-text: #262626
}  
    
</style>

<!-- HEAD -->

 <div class="oscurecer p-3">
        <div id="head" class="p-1 pl-1 pr-1 "> <img class="img-fluid col-8 col-md-10" src="{{$landing->logo}}" alt="VTR"> 
        
        
             <a class="ml-1" onclick="eventosLanding('Facebook');" href="https://www.facebook.com/VTRChile"><img width="30" height="30"  src="https://image.flaticon.com/icons/svg/174/174848.svg"></a>
                   
             <a class="ml-1" onclick="eventosLanding('Twitter');" href="https://twitter.com/vtrchile"><img width="30" height="30" src="https://image.flaticon.com/icons/svg/174/174876.svg"></a>

             <a class="ml-1" onclick="eventosLanding('Youtube');" href="https://www.youtube.com/user/VTRChile"><img width="30" height="30" src="https://image.flaticon.com/icons/svg/174/174883.svg"></a>
            </div>

        </div>
<div id="VTR" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; ">

    <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            
<!-- MENU 1: INGRESAR -->
        <div id="cont1" class="p-5 ">
                <br><br><br>
            <h4 class="text-black text-center"><strong><span id="name"></span> </strong>Te damos la bienvenida a la interfaz de VTR, para ingresar valida tu identidad ingresando tu RUT sin el digito verificador</h4>
            <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                
            <button onclick="event1(); return false;" class="btn bg-danger text-black col-12 mt-4"> Ingresar </button>

            <button onclick="url(5)" class="btn bg-danger text-black col-12 mt-4"> Contacto Equivocado </button>

            <button onclick="window.location.href='closer()'; return false;" class="btn bg-danger text-black col-12 mt-4"> Salir </button>

        </div>

            <!-- ERROR 1 -->
            <div id="error" class="p-2 pl-3 pr-3 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="error"class="text-black text-center mt-5">
                                
                            </h5>
                         </div>
                    </div>
            </div>

             <!-- MENU2:  -->
        <div id="cont2" class="p-5 hide" >
            <div class="text-black col-md-12">
                
                <button onclick='url1(); eventosLanding("Pagar"); ' class="btn bg-danger text-black col-12 mt-4"> Pagar</button>

                <button onclick='url(1);' class="btn bg-danger text-black col-12 mt-4"> Compromiso de Pago</button>

                <button onclick='url(2);' class="btn bg-danger text-black col-12 mt-4"> Quiero que me llamen</button>

                <button onclick='url(3);' class="btn bg-danger text-black col-12 mt-4"> Tarifas | Sucursales | Informaciones</button>

                <button onclick='url5(); eventosLanding("Boleta"); ' class="btn bg-danger text-black col-12 mt-4"> Boleta</button>

                <button onclick='url(4);' class="btn bg-danger text-black col-12 mt-4"> Tengo un problema</button>
            </div>  
        </div>

        <!-- FECHA: PAGO -->
        <div id="calend" class="p-5 hide" >
            <div class="text-black col-md-12">
                <h3 class="text-grey text-center">Favor ingrese la fecha en la cual podrá realizar el pago. Solo podrá agendar su pago por 3 días de lo contrario lo volveremos a contactar.   
                </h3>       
            <div>
                <label>Fecha:</label>
                <input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php echo date('Y-m-d')?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
             </div> 
                <button onclick="sendMail(); return false;" class="btn bg-danger text-black col-12 mt-4">Confirmar</button>
            </div>
       </div>

       <!-- FECHA: CONTACTO -->
        <div id="llamen" class="p-5 hide" >
            <div class="text-black col-md-12">
                <h3 class="text-grey text-center">Favor ingrese su fecha y horario de llamada por la cual usted quiere ser contactado. 
                </h3>       
            <div>
                <label>Fecha:</label>
                <input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php echo date('Y-m-d')?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>

                <label>Hora:</label>
                <input id="time1"  type="time" class=" btn-date text-blackform-control input-min-width-95p"/>

             </div> 
                <button onclick="sendMail(); return false;" class="btn bg-danger text-black col-12 mt-4">Confirmar</button>
            </div>
       </div>
        <!-- MENU: CONTACTO EQUIVOCADO -->
        <div id="usrbad" class="p-5 hide" >
            <div class="text-black col-md-12">
                <h6 class="text-black text-center"> ¿Conoces a <strong> <span id="name"></span></strong> ?</h6>
                </div>

            <button onclick='url(6); ' class="btn bg-danger text-black col-6 mt-4"> SI </button>

            <button onclick='url22(); eventosLanding("NO CONTACTO"); ' class="btn bg-danger text-black col-6 mt-4"> NO </button>
        </div>

        <!-- MENU1: CONTACTO EQUIVOCADO: INGRESE NUMERO -->
            <div id="equiv1" class="p-5 hide" >
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Favor, ingresar número de teléfono</h6>
                </div>
                 <input id="telf" type="number" class="form-control mt-4 text-center text-black" >

                <button onclick='url23();' class="btn bg-danger text-black col-6 mt-4"> VALIDAR </button>

                <button onclick='url(7);' class="btn bg-danger text-black col-6 mt-4"> CONTINUAR </button>
                <br>
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Si no quiere ingresar Datos, presione:</h6>
                </div>
                <button onclick='url25();' class="btn bg-danger text-black col-6 mt-4"> No quiero ingresar </button>

            </div>

        <!-- MENU2: CONTACTO EQUIVOCADO: INGRESE CORREO -->
            <div id="equiv2" class="p-5 hide" >
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Favor, ingresar correo</h6>
                </div>
                 <input id="ecorr" type="text" class="form-control mt-4 text-center text-black" >

                <button onclick='url26(); eventosLanding("VALIDAR"); ' class="btn bg-danger text-black col-6 mt-4"> VALIDAR </button>

                <button onclick='url27(); eventosLanding("CONTINUAR"); ' class="btn bg-danger text-black col-6 mt-4"> CONTINUAR </button>
                <br>
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Si no quiere ingresar Datos, presione:</h6>
                </div>
                <button onclick='url28(); ' class="btn bg-danger text-black col-6 mt-4"> No quiero ingresar </button>

            </div>

                <!-- MENU 2: INFORMACIONES -->
            <div id="cont3" class="p-5 hide" >
                <div class="text-black col-md-12">
                
                <button onclick='url6(); eventosLanding("Tarifas"); ' class="btn bg-danger text-black col-12 mt-4"> Tarifas</button>

                <button onclick='url7(); eventosLanding("Lugares de Pago"); ' class="btn bg-danger text-black col-12 mt-4"> Lugares de Pago</button>

                <button onclick='url8(); eventosLanding("Sucursales"); ' class="btn bg-danger text-black col-12 mt-4"> Sucursales</button>

                <button onclick='url9(); eventosLanding("Sucursal Virtual"); ' class="btn bg-danger text-black col-12 mt-4"> Sucursal Virtual</button>

        </div>
         </div>
    <!-- MENU 3: RECLAMO -->
            <div id="cont4" class="p-5 hide">
                <div class="text-black col-md-12 text-center align-items-center justify-content-start p-0">
                
                <button onclick='url10(); eventosLanding("SubTel|Sernac"); ' class="btn bg-danger text-black col-5 mt-4"> SubTel|Sernac </button>

                <button onclick='url10(); eventosLanding("Problemas Económicos); ' class="btn bg-danger text-black col-5 mt-4"> Problemas Economicos</button>

                <button onclick='url10(); eventosLanding("No Reconozco Deuda"); ' class="btn bg-danger text-black col-5 mt-4"> No Reconozco Deuda</button>

                <button onclick='urll0(); eventosLanding("Problema Técnico"); ' class="btn bg-danger text-black col-5 mt-4"> Problema Tecnico</button>

                <button onclick='url10(); eventosLanding("Problema Comercial"); ' class="btn bg-danger text-black col-5 mt-4"> Problema Comercial</button>

                <button onclick='url10(); eventosLanding("Pago no aplicado"); ' class="btn bg-danger text-black col-5 mt-4"> Pago no aplicado</button>

                <button onclick='url10(); eventosLanding("Fraude"); ' class="btn bg-danger text-black col-5 mt-4"> Fraude</button>

                <button onclick='url10(); eventosLanding("Titular fallecido"); ' class="btn bg-danger text-black col-5 mt-4"> Titular fallecido</button>

                <button onclick='url10(); eventosLanding("Baja no ingresanda"); ' class="btn bg-danger text-black col-5 mt-4"> Baja no ingresada</button>

                <button onclick='url10(); eventosLanding("Me cambie de Compañía"); ' class="btn bg-danger text-black col-5 mt-4"> Me cambie de Compañía</button>

        </div>
        </div>
<!-- MENSAJE SUCCESS -->
                <div id="success" class="p-2 pl-5 pr-5 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="message"class="text-grey text-center mt-4 "></h5>
                        </div>
                    </div>
                </div>

                <!-- Contacto Equivocado -->
                <div id="error" class="p-2 pl-5 pr-5 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="message"class="text-grey text-center mt-4 "></h5>
                        </div>
                    </div>
                </div>

   <!-- PIE DE PAGINA -->             
    <div class="oscurecer p-3">
        <!-- <div id="pie" class="p-2 pl-2 pr-2 ">
            <i class="fas fa-question text-danger"></i>
            <a onclick="eventosLanding('Centro de ayuda');" href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-black">Centro de ayuda</a>
                   
            <i class="fas fa-question text-danger"></i>
            <a onclick="eventosLanding('Reportar Abusos');"href="https://vtr.com/productos/reclamos" class="text-black"> Reportar Abusos</a>
                    <br>
            <i class="fas fa-exclamation-circle text-danger"></i> 
            <a onclick="eventosLanding('Actualiza Datos');"href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-black"> Actualiza Datos</a>
            
            <i class="fas fa-user text-danger"></i>
            <a onclick="eventosLanding('Privacidad');" href="https://vtr.com/productos/privacidad" class="text-black">  Privacidad</a>
            <br>
            <img style="max-width:100px; max-height:100px" class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR"> 
        </div> -->

        <table class="table .table-hover">
  <!--<thead>
    <tr>
      <th scope="col">1</th>
      <th scope="col">2</th>
      <th scope="col">3</th>
      <th scope="col">4</th>
      <th scope="col">5</th>
      <th scope="col">6</th>
      <th scope="col">7</th>
      <th scope="col">8</th>
    </tr>
    </thead> -->
    <tbody>
        <tr>
          <td colspan="2"> <!--<i class="fas fa-question text-danger"></i>-->
            <a onclick="eventosLanding('Centro de ayuda');" href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-black">Centro de ayuda</a> </th>
          <td colspan="2"> <!--<i class="fas fa-question text-danger"></i>-->
            <a onclick="eventosLanding('Reportar Abusos');"href="https://vtr.com/productos/reclamos" class="text-black"> Reportar Abusos</a> </td>
          <td colspan="2"> <!--<i class="fas fa-exclamation-circle text-danger"></i> -->
            <a onclick="eventosLanding('Actualiza Datos');"href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-black"> Actualiza Datos</a> </td>
          <td colspan="2"> <!--<i class="fas fa-user text-danger"></i>-->
            <a onclick="eventosLanding('Privacidad');" href="https://vtr.com/productos/privacidad" class="text-black">  Privacidad</a> </td>
        </tr>
        <tr>
          <td colspan="3"> <img style="max-width:100px; max-height:100px" class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR"> </td>
          <td colspan="5"> <h6 class="text-white text-center"> © 2020 VTR Comunicaciones SPA </h6> </td>
        </tr>
  
 <tbody>
        </div>



</div>  

</div>

  <script>
   //EVENT 1
        
        $(function(){
            events({    
                'name': 'Visita',
                'landing_id': {!! $landing->id !!},
                'json_datos': JSON.stringify(getAllurlParameter())
            });
        }); 

         function event1(){
    
            let dataSend = {
                'fourRut': $('#rut').val(),
                'phone': geturlParameter('telefono'),
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
            
            let json_datos = getAllurlParameter(); 

            //json_datos.nombre = $('#name').text();
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
                    'Mensaje': msg,
                    'Nombre': $('#name').text(),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),

                    'Landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': $('#name').text(),
                    'Rut': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Landing': '{!! $landing->name !!}'
                } 
            }
             var correo = ["jesus.binteraction@gmail.com"];
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

        let geturlParameter = function(sParam) {
            var sPageurl = window.location.search.substring(1),
            surlVariables = sPageurl.split('&'),
            sParameterName,
            i;

            for (i = 0; i < surlVariables.length; i++) {
            sParameterName = surlVariables[i].split('=');

            if (sParameterName[0].toLowerCase() === sParam.toLowerCase()) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
            }
        };

        let getAllurlParameter = function() {
            var sPageurl = window.location.search.substring(1),
            surlVariables = sPageurl.split('&'),
            sParameterName,
            i;

            let obj = {}; 

            for (i = 0; i < surlVariables.length; i++) {
            sParameterName = surlVariables[i].split('=');

            obj[sParameterName[0].toLowerCase()] = sParameterName[1];            
            }

            return obj;  
        };


         function url1(){ //Pagar
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a la Página de Pagos`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/miregistro/paymentExpress.jsp?_dyncharset=UTF-8&c-rut="+rut+"&_D:c-rut=+&_DARGS=/vtr/cartridges/VtrHOHeaderBarPayYourAccountCart/VtrHOHeaderBarPayYourAccountCart.jsp";
        })
        } 

            function url5(){ // Ver Boleta
        var docid; 
         docid= geturlParameter('data1');
            swal({
             title:`Espere para Ver su Boleta Online`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = " https://vtr.com/ss/vboleta/index.html#/home.html?docid="+docid;
        })
        } 

        function url6(){ //tarifa
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a la Página de Tarifas`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/";
        })
        } 

                function url7(){ //Lugar de Pago
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a la Página de Lugares de Pago`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/productos/lugares-de-pago";
        })
        } 

                function url8(){ //Sucursales
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a la Página de Sucursales`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/sucursales/v";
        })
        } 

                function url9(){ //sucursal Virtual
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a Sucursal Virtual`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/?login=1&authn_try_count=0&contextType=external&username=string&contextValue=%2Foam&password=sercure_string&challenge_url=https%3A%2F%2Fvtr.com%3Flogin%3D1&request_id=7587868025939220365&locale=es_ES&resource_url=https%253A%252F%252Fvtr.com%252Fmivtr%252Fpriv";
        })
        } 


                function url10(){ //sucursal Virtual
        var rut; 
         rut= geturlParameter('rut');
            swal({
             title: `Será Direccionado a Paguina de Reclamos`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://vtr.com/productos/reclamos";
        })
        } 

function url(idButton) {

 switch(idButton) {
 case 1:
          $('#cont2').addClass('hide');
          $('#calend').removeClass('hide');
    break;

 case 2:
          $('#cont2').addClass('hide');
          $('#llamen').removeClass('hide');
    break;

 case 3:
          $('#cont2').addClass('hide');
          $('#cont3').removeClass('hide'); 
    break;
 case 4:
          $('#cont2').addClass('hide');
          $('#cont4').removeClass('hide'); 
    break;
    case 5:
          $('#cont1').addClass('hide');
          $('#usrbad').removeClass('hide'); 
    break;
     case 6:
          $('#usrbad').addClass('hide');
          $('#equiv1').removeClass('hide'); 
    break;
     case 7:
          $('#equiv2').addClass('hide');
          $('#equiv1').removeClass('hide'); 
    break;
default:
          alert("OPCION INVALIDA.")
        }

   }
    
    </script>

@endsection