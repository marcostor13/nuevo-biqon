@extends('layouts.landing')

@section('title', 'UDLA')

@section('content')
<?php 
$name = $_GET['NOMBRE'];
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
.orange {  background-color: #eb600f;}
  
</style>
   <!-- <div id="USS" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: 100% 100%;">-->

        <div class="oscurecer"></div>

        <div class="content container d-flex flex-column align-items-center justify-content-start p-0">
          <img style="max-width:200px; max-height:60px" class="img-fluid col-10 col-md-2 mt-1" src="{{$landing->logo}}" alt="UDLA">
          <!--<img style="max-width:200px; max-height:50px" class="img-fluid col-10 col-md-2 mt-1" src="https://i.imgur.com/whNYFHQ.png" alt="USS">-->

             <div id="cont1" class="p-2 ">
                <div class="card">     
                <div class="card-body">
                    <h3 class="text-black text-center"><span><?php echo $name; ?></span>, bienvenido a la sucursal virtual de Universidad de Las Américas.</h3>
                <h4 class="text-black text-center">Para validar su identidad, favor digitar los 6 primeros dígitos del Rut, si no es usted, presionar No.</h4>
                </div> </div>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black"  min="6" max="6" maxlength="6">
                <button onclick="event1(); return false;" class="btn orange text-white col-12 mt-4"> Validar </button>
                <button onclick="no(); eventosLanding('NO')" class="btn orange text-white col-12 mt-4"> No </button>

                <div id="cont6" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>

                    </div>
                    <br>
                     <br>
                      <br>
                       <br>
                        <br>
                         <br> <br>
                         <!-- <br>
                           <br>
                            <br>
                             <br>-->
            </div> 
            <div id="no" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error3"class="text-black text-center mt-5">Disculpe las molestias.<br> Muchas gracias por su tiempo.</h5>

                                 <a href="https://udla.cl" class="btn orange text-white col-12 mt-2">Salir </a>
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
                <h5 class="text-black text-center"></h5>
                    <h5 class="text-black">
                    Sabemos que son momentos difíciles para todos, por este motivo queremos informarle que tenemos un  beneficio para que pueda liquidar su deuda con la universidad, el que considera rebaja del 100% en las multas por mora, 100% de los gastos de cobranza y la oportunidad de descuento en capital.</h5><br>
                    <h5 class="text-black">Si le interesa recibir más información, comuníquese con nosotros o solicite que sea contactado.</h5>
                    </div>
                </div>

              <!-- <a onclick="eventosLanding('LLAMAR'); Mens5();" class="btn orange text-white col-12 mt-2"> LLAMAR</a>-->
               <button onclick="Mens5(); eventosLanding('Llamar')" class="btn orange text-white col-12 mt-2">Llamar</button>
                
                <button onclick="Mens6();" class="btn orange text-white col-12 mt-2">Contáctenme</button>

                <button onclick="Mens7(); eventosLanding('Revisar Oferta')" class="btn orange text-white col-12 mt-2">Revisar Beneficio</button>

               <!-- <button onclick="eventosLanding('REVISAR DEUDA'); Mens7();" class="btn orange text-white col-12 mt-2">Revisar Oferta</button>-->

                <br>
                     <br>
                      <br>
                       <br>
            </div>
           <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>

                                <br><br><br>
                                  <a href="https://udla.cl" class="btn orange text-white col-12 mt-2">Salir </a>
                            </div>
                        </div>
                    </div>
            <div id="cont7" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                <div class="card-body">
                    <!--<h3 class="text-black text-center"><span id="name"></span>, bienvenido a la sucursal virtual de UDLA.</h3>-->
                <h4 class="text-black text-center">Por favor indíquenos su teléfono de contacto para llamarle próximamente.</h4>
                </div> </div>
                <input id="telefono1" type="number" class="form-control mt-4 text-center text-black" placeholder="Telefono">
                <input type="hidden" id="nombre1" class="form-control" required placeholder="nombre">

<br> <br>
                <select class="form-control" id="jornada" required>
                  <option value="" data-select2-id="4">Jonada</option>                
                  <option value="En La Mañana" data-select2-id="8">En La Mañana</option>
                  <option value="En la Tarde" data-select2-id="9">En la Tarde</option>
                  <option value="En la Noche" data-select2-id="10">En la Noche</option>
                    </select><br>

               <!-- <button onclick="sendMail('Deseo ser Contactado') return false; eventosLanding('CONTACTENME');" class="btn orange text-white col-12 mt-4"> Validar </button>-->

                <button class="btn orange text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Contactarse');">Confirmar</button>
                    </div>

             <div id="cont8" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                <div class="card-body">
                    <!--<h3 class="text-black text-center"><span id="name"></span>, bienvenido a la sucursal virtual de UDLA.</h3>-->
              <!--  <h4 class="text-black text-center">Revisar Oferta</h4>

                <h4 class="text-black text-center">Detalle</h4>-->
              
            <h4 class="text-black text-center"><span id="name"></span>,  Su monto a pagar es de:</h4>
            <h4 class="text-black text-center"><span id="data4"></span></h4>
               <!-- <table class="table table-striped">
                    <tbody>
        <tr>
            <td>Deuda Total</td>
            <td><span id="data2"></span></td>
        </tr>
        <tr>
            <td>Descuento por Multas por</td>
            <td><span id=""></span>100%</td>
        </tr>
        <tr>
            <td>Descuentos Gastos de</td>
            <td><span id="">100%</td>
        </tr>
        <tr>
            <td>Descuento Capital</td>
            <td><span id="data3"></span></td>
        </tr>
        <tr>
            <td><h4 class="text-black text-center">Monto oferta a pagar</h4></td>
            <td><h4 class="text-black text-center"><span id="data4"></span></h4></td>
        </tr>
    </tbody>
                </table>-->
                    </div>
                      </div> 
            <button onclick="Mens9();" class="btn orange text-white col-12 mt-2">IR A MENU</button>

            <a href="https://udla.cl" class="btn orange text-white col-12 mt-2">Salir </a>



                  </div>

        </div>
     <!-- </div>
    </div>-->

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
            if($('#rut').val().length != 6){
                $('#cont6').removeClass('hide');
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
                    $('#error1').text("Validación incorrecta.");
                }
            })
            .fail(function() {
                console.log( "error" );
            });

        }

}
        let eventosLanding = function(name){
            
            let json_datos = getAllUrlParameter(); 

            json_datos.nombre = $('#name').text();
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
                    //'Telefono': getUrlParameter('telefono'),

                   // 'Datos_Formulario': $('#nombre1').val(),
                    //'Nombre': $('#nombre').val(),
                    //'Apellido': $('#apellido').val(),
                    //'RUT': $('#rut').val(),
                    'Telefono': $('#telefono1').val(),
                   // 'E-mail': $('#email').val(),
                    'jornada': $('#jornada').val(),
                    //'Carrera': $('#carrera').val(),
                    //'Datos_URL': $('#nombre1').val(),
                    //'Nombre_URL': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    //'Telefono_URL': getUrlParameter('telefono'),
                     //'Rut_URL': getUrlParameter('rut')

                    //'Monto': getUrlParameter('monto'),
                    //'Estado': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha Compromiso': date,
                    'Nombre': getUrlParameter('nombre'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                   // 'Monto': getUrlParameter('monto'),
                   // 'Estado': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["msouza@globalcobro.cl"];
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
                      $('#cont7').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Uno de nuestros ejecutivos se pondrá en contacto en el horario indicado.');
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

   
 function no(){
     $('#cont1').addClass('hide');
     $('#no').removeClass('hide');
 }
        
     function Mens5(){
      window.location.href = "tel:+56226993897";
 }

  function Mens6(){
     $('#cont2').addClass('hide');
     $('#cont7').removeClass('hide');
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
     $('#name').text(e.data.nombre);
 }

  function Mens9(){
     $('#cont7').addClass('hide');
      $('#cont8').addClass('hide');
       $('#cont1').addClass('hide');
     $('#cont2').removeClass('hide');
 }
    </script>
 
    

@endsection