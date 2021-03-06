@extends('layouts.landing')

@section('title', 'AIEP')

@section('content')
<?php
$startdate=strtotime("Today");
//$enddate=strtotime("+2 days", $startdate);
$enddate=strtotime("+5 days", $startdate);

//$name = $_GET["NOMBRE"];
//$name=$_GET['NOMBRE'];
//$Nom_Asistente=$_GET["DATA1"];
//$fecha_contrato $_GET["DATA5"];
//$num_cuota=$_GET["DATA2"];
//$producto="PRODUCTO";
//$entidad="ENTIDAD";
//$monto=$_GET["MONTO"];
//$cadena_fecha = "2020-08-20";

//$name = $_GET["NOMBRE"];
$name=$_GET['NOMBRE'];
$Nom_Asistente=$_GET["DATA1"];
$cadena_fecha=$_GET["DATA5"];
$num_cuota=$_GET["DATA2"];
$producto=$_GET["DATA3"];
$entidad=$_GET["DATA4"];
$monto=$_GET["MONTO"];


?>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

  </script>
<style type="text/css">


.oscurecer {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#6BBDA1), to(#4378AC));
  background-image: linear-gradient(180deg, #6BBDA1 0%, #4378AC 100%);
  width: 100%;
}
@keyframes hideFrame{
    0% { margin-top: 0 }
    100% { margin-top: -100vh } 
}
@keyframes showFrame{
    0% { margin-top: 200vh }
    100% { margin-top: 0 } 
}

.hideClass{
    animation-name: hideFrame;
    animation-duration: .5s;
}

.showClass{
    animation-name: showFrame;
    animation-duration: .5s; 
}


.datepicker {
  width: 400px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 50px 0 rgba(0, 0, 0, 0.2);
  margin: 50px auto;
  overflow: hidden;
}
.datepicker .datepicker-header {
  height: 250px;
  background-image: url("https://cdn.dribbble.com/users/3178178/screenshots/6346366/lifeguard_on_duty.jpg");
  background-position: center center;
  background-size: 100%;
}
.datepicker .ui-datepicker-inline {
  padding: 30px;
}
.datepicker .ui-datepicker-header {
  text-align: center;
  padding-bottom: 1em;
  text-transform: uppercase;
  letter-spacing: 0.1em;
}
.datepicker .ui-datepicker-header .ui-datepicker-prev,
.datepicker .ui-datepicker-header .ui-datepicker-next {
  display: inline;
  float: left;
  cursor: pointer;
  font-size: 1.4em;
  padding: 0 10px;
  margin-top: -10px;
  color: #ccc;
}
.datepicker .ui-datepicker-header .ui-datepicker-next {
  float: right;
}
.datepicker .ui-datepicker-calendar {
  width: 100%;
  text-align: center;
}
.datepicker .ui-datepicker-calendar thead {
  color: #ccc;
}
.datepicker .ui-datepicker-calendar tr th,
.datepicker .ui-datepicker-calendar tr td {
  padding-bottom: 0.5em;
}
.datepicker .ui-datepicker-calendar a {
  color: #444;
  text-decoration: none;
  display: block;
  margin: 0 auto;
  width: 35px;
  height: 35px;
  line-height: 35px;
  border-radius: 50%;
  border: 1px solid transparent;
  cursor: pointer;
}
.datepicker .ui-datepicker-calendar .ui-state-highlight {
  border-color: #d24d57;
  color: #d24d57;
}

  
     input[type="date"]::-webkit-inner-spin-button,
                  ::-webkit-calendar-picker-indicator,
                  ::-webkit-datetime-edit{
        display: inline;
    }
   
    /* mostrar el calendario al hacer click */
    input[type="date"]::-webkit-calendar-picker-indicator {
        display: block;
        background: transparent;
        bottom: 0;
        color: black;
        cursor: pointer;
        height: auto;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        width: auto;
    }
.date1{ border-width: 1px;
  border-style: solid;
  border-color: black;}
</style>

<!-- HEAD -->
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
 
 <div class="oscurecer p-5">
        <div id="head" class="p-1 pl-1 pr-1 "> <img style="max-width:200px; max-height:80px"class="img-fluid col-10 col-md-3 mt-0" src="{{$landing->logo}}" alt="AIEP"></a>
        </div>
 </div>

    <div id="cont1" class="p-5">
        <div class="p-5 ">
    <h5 class="center"> Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña)<strong> <span id="name"> <?php echo $name; ?></span> </strong>?</h5>
            <a class="btn bg-success text-white col-5 mt-4" onclick="url(1)">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" onclick="url(2)">SI</a>
        </div>
</div>

<div id="cont2" class="p-5 hide">
        <div class="p-5 ">
            <h5 class="center">AIEP le informa que la mensualidad de <b> ##CARRERA## </b> vence el día <b> ##FECHA_VENCE## </b> por un monto de <b> ##MONTO## </b>.<br>
            <br><br>¿Podrá pagar en la fecha indicada?</h5>
        </div>
        <div class="p-5 ">
            <a class="btn bg-success text-white col-5 mt-4" href="#">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" href="#">SI</a>
        </div>
</div>

<div id="cont3" class="p-5 hide">
    <div class="p-5 ">
            <p>Muchas gracias. </p><br>
           <!-- <p>
                <a class="btnLink" href="https://bit.ly/3btocnI">Zumpago</a>
                <a class="btnLink" href="https://portalpago.aiep.cl/">Portal de pago AIEP</a>
                <a class="btnLink" href="https://www.sencillito.com/">Sencillito</a>
                <a class="btnLink" href="https://www.servipag.cl/">Servipag</a>
                <a class="btnLink" href="https://www.unired.cl/">Unired</a>
            </p><br>
            <p>Además del pago presencial en ServiFácil, Sencillito, Unired, ServiEstado y CajaVecina</p>-->
    </div>
</div>

<div id="cont4" class="p-5 hide">
         <div class="p-5 ">
            <p class="center">¿Nos podría indicar una fecha de pago?</p>
        </div>
             <!--<div class='datepicker'>
 <div class="datepicker-header"></div>
  <div class="ui-datepicker-calendar"></div>
</div>-->

<input id="date1"  type="date" class=" btn-date text-black form-control col-12 mt-4 date1" min="<?php echo date('Y-m-d')?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>

                <button onclick="sendMail(); eventolanding('Compromiso de Pago'); return false;" class="btn bg-success text-white col-12 mt-4">Confirmar</button>
</div>

<div id="cont5" class="p-5 hide">
   <div class="p-5 ">
            <p class="center">Muchas gracias por su tiempo y disculpe las molestias</p>
    </div>
</div>

<div id="cont6" class="p-5 hide">
    <div class="p-5 ">
            <p>Seleccionó el día <b><span id="datesel"> </span></b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
    </div>
</div>

<div id="cont7" class="p-5 hide">
    <div class="p-5 ">

        <h5 class="text-black text-center"> <br>De acuerdo a nuestros registros, desde el día 
     <strong> <span id="enddate"><?php echo $cadena_fecha; ?></span> </strong>
        se encuentra(n)
     <strong>  <span id="num_cuota"> <?php echo $num_cuota; ?></span> </strong>
      cuota(s) pendiente(s) de su 
   <strong>  <span id="producto">  <?php echo $producto; ?> </span> </strong>
      del 
  <strong>   <span id="entidad">   <?php echo $entidad; ?></span> </strong>
     por un valor de 
    <strong>  <span id="monto">  <?php echo $monto; ?></span> </strong>
      . Cuando puede efectuar el Pago? <br></h5>
          <!--  <p>
                De acuerdo a nuestros registros, desde el día <b> ##FECHA##</b> se encuentra(n) <b> ##NCUOTAS##</b> cuotas(s) pendiente(s) de su <b>> ##CARRERA##</b>
                por un valor de <b> ##MONTO##</b>. ¿Cuando puede efectuar el Pago?
            </p>-->
        </div>
        
        <a class="btn bg-success text-white col-12 mt-4" onclick="url(3)" >Seleccionar fecha</a>
        <a class="btn bg-success text-white col-12 mt-4" onclick="url(4)">No puedo</a>
    </div>
</div>


<div id="cont8" class="p-5 hide">
    <div class="p-5 ">
            <p class="center">Conoce Ud a <b><strong> <span id="name"> <?php echo $name; ?></span> </strong></b>?</p>
    </div>
    <div class="twoButtonsWrapper">
            <a class="btn bg-success text-white col-12 mt-4"  onclick="url(5)" >SI</a>
            <a class="btn bg-success text-white col-12 mt-4"  onclick="url(6)" >NO</a>
    </div>
</div>

<div id="cont9" class="p-5 hide">
    <div class="p-5 ">
            <p class="center">Por favor indicar el motivo de su atraso</p>
        </div>

        <button onclick='url23();  eventolanding("Cesante"); ' class="btn bg-success text-white col-5 mt-4"> Cesante </button>

        <button onclick='url23();  eventolanding("Problemas Economicos"); ' class="btn bg-success text-white col-5 mt-4"> Problemas Económicos</button>

        <button onclick='url23();  eventolanding("Problemas Salud"); ' class="btn bg-success text-white col-5 mt-4"> Problemas Salud</button>

        <button onclick='url23();  eventolanding("Credito"); ' class="btn bg-success text-white col-5 mt-4"> Crédito</button>

        <button onclick='url23();  eventolanding("Reclamo"); ' class="btn bg-success text-white col-5 mt-4"> Reclamo</button>

        <button onclick='url23();  eventolanding("Ya Pago"); ' class="btn bg-success text-white col-5 mt-4"> Ya Pago </button>

        <button onclick='url23();  eventolanding("No Tengo Cupon"); ' class="btn bg-success text-white col-5 mt-4"> No Tengo Cupón </button>

        <button onclick='url23();  eventolanding("Siniestro"); ' class="btn bg-success text-white col-5 mt-4"> Siniestro</button>

        <button onclick='url23();  eventolanding("Olvido"); ' class="btn bg-success text-white col-5 mt-4"> Olvido</button>

        <button onclick='url23(); eventolanding("Desconocida"); ' class="btn bg-success text-white col-5 mt-4"> Desconocida</button>

</div>


<div id="cont10" class="p-5 hide">
    <div class="p-5 ">
            <h5 class="text-black text-center">Sería tan amable de entregarme alguno de estos datos de contacto?</h5>
        </div>
        <div class="text-black col-md-12">
                <h5 class="text-black text-center"> Favor, ingresar número de teléfono</h5>
                </div>
                <div class="text-black col-md-11">
                <input id="telf"  type="number" class="form-control mt-4 text-center text-black" maxlength="8" required="required"/>
                </div>
                <br> 
                <div class="text-black col-md-12">
                <h5 class="text-black text-center"> Favor, ingresar correo</h5>
                </div>
                 <input id="ecorr" type="text" class="form-control mt-4 text-center text-black" required="required">

               <!-- <button onclick='valtlf();' class="btn bg-warning align-items-center text-black col-5 mt-4"> VALIDAR </button>-->

                <button onclick='urldatos();' class="btn bg-success text-white col-5 mt-4"> CONTINUAR </button>
                <br>
                <div class="text-black col-md-12">
                    <br>  <br>  <br>  <br>
                <h5 class="text-black text-center"> Si no quiere ingresar Datos, presione:</h5>
                </div>
                <button onclick='url22();' class="btn bg-success text-white col-10 mt-4"> No quiero ingresar </button>
</div>

<div id="cont11" class="p-5 hide">
    <div class="p-5 ">
         <h5 id="messages"class="text-grey text-center mt-4 "> Gracias por la información de contacto, le agradecemos su ayuda</h5>
    </div>
</div>

<div id="cont12" class="p-5 hide">
    <div class="p-5 ">
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. A la brevedad nos pondremos en contacto con Ud. Para resolver su reclamo.</p>
            <p >Entendemos, verificaremos la información. Disculpe las molestias y gracias por su tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., para conocer en detalle la situación en que se encuentra y poder entregarle las mejores alternativas de solución . Gracias por su atención y tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., gracias por su atención.</p>
    </div>
</div>

</div>

   <script>
    $(document).ready(function () {
  $(".datepicker").datepicker({
    prevText: '<i class="fa fa-fw fa-angle-left"></i>',
    nextText: '<i class="fa fa-fw fa-angle-right"></i>'
  });
});

   //EVENT 1

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

            json_datos.nombre = getUrlParameter('nombre');
            json_datos.rut = getUrlParameter('rut');
            json_datos.telefono = getUrlParameter('Telefono');
            json_datos.fecha = $('#date1').val();
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
                    'Marca': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Marca': getUrlParameter('data1'),
                    'Periodo': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

             var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
               // 'email': '{!! $landing->email !!}'
                //'email': "carla.torres@amicar.cl jesus.binteraction@gmail.com" ,"arturo.sthandier@gmail.com"
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
                     $('#cont10').addClass('hide');
                    $('#cont11').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont4').addClass('hide');
                    $('#cont6').removeClass('hide');
                    var datesell= $('#date1').val();
                    $('#datesel').text(datesell);
                    $('#message').text('Gracias, Su visita fue agendada.  Nos pondremos en contacto con usted en los próximos días');
                     eventosLanding('Agendo Pago');
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
       
    
function url(idButton) {

 switch(idButton) {
 case 1:
          $('#cont1').addClass('hideClass').promise().done(function(){
              $('#cont1').addClass('hide')
          });
          $('#cont8').removeClass('hide').promise().done(function(){
              $('#cont8').addClass('showClass')
          });
    break;

 case 2:
           $('#cont1').addClass('hideClass').promise().done(function(){
              $('#cont1').addClass('hide')
          });
          $('#cont7').removeClass('hide').promise().done(function(){
              $('#cont7').addClass('showClass')
          });

    break;

 case 3:
          $('#cont7').addClass('hideClass').promise().done(function(){
              $('#cont7').addClass('hide')
          });
          $('#cont4').removeClass('hide').promise().done(function(){
              $('#cont4').addClass('showClass')
          });

    break;
 case 4:

          $('#cont7').addClass('hideClass').promise().done(function(){
              $('#cont7').addClass('hide')
          });
          $('#cont9').removeClass('hide').promise().done(function(){
              $('#cont9').addClass('showClass')
          });

    break;
    case 5:

           $('#cont8').addClass('hideClass').promise().done(function(){
              $('#cont8').addClass('hide')
          });
          $('#cont10').removeClass('hide').promise().done(function(){
              $('#cont10').addClass('showClass')
          });



    break;
     case 6:

          $('#cont8').addClass('hideClass').promise().done(function(){
              $('#cont8').addClass('hide')
          });
          $('#cont5').removeClass('hide').promise().done(function(){
              $('#cont5').addClass('showClass')
          });


    break;
     case 7:

          $('#equiv1').addClass('hideClass').promise().done(function(){
              $('#equiv1').addClass('hide')
          });
          $('#equiv10').addClass('hideClass').promise().done(function(){
              $('#equiv10').addClass('hide')
          });
          $('#name').text(geturlParameter('nombre'));
          $('#equiv2').removeClass('hide').promise().done(function(){
              $('#equiv2').addClass('showClass')
          });
    break;
default:
          alert("OPCION INVALIDA.")
        }

   }

    function  valtlf(){      
             if ($('#telf').val().length == 8){ 
               alert("El Largo del telefono es correcto");
             }else{
                 alert("El telefono es incorecto");
             }
                 }

      $('#validate').click(function() {
    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

    if (regex.test($('#ecorr').val().trim())) {
        alert('Correo validado');

    } else {
        alert('La direccón de correo no es válida');
    }
    });


       function url22(){ //tarifa
       // var rut; 
         //rut= geturlParameter('rut');
            swal({
             title: `Gracias por su tiempo.`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://www.aiep.cl/";
        })
        }


function url23(){ //tarifa
       // var rut; 
         //rut= geturlParameter('rut');
            swal({
             title: `Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.`,
             type: "success",
             timer: 3000
        }, 
        function(){
             window.location.href = "https://www.aiep.cl/";
        })
        }

         function  urldatos(){

            var telf = $('#telf').val();
            var ecorr = $('#ecorr').val();
            var msg1;
            msg1 = " El cliente Informa que el telefono es 569 "+telf+" y el correo es "+ecorr+".";

            //alert (msg1);

            sendMail(msg1);
        }
    </script>


@endsection