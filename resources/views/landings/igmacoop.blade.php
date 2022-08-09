@extends('layouts.landing')

@section('title', 'Mundo Credito')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+10 days", $startdate);

$name=$_GET['NOMBRE'];
$rut=$_GET['RUT'];
$fecha=$_GET['DATA1'];
?>
<style>
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
    
}

table {
   width: 100%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;

}


.styled-table { border-collapse: collapse; margin: 25px 0; font-size: 1em; font-family: sans-serif; min-width: 450px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); }

.styled-table thead tr { background-color: #980081; color: #ffffff; text-align: middle; }

.styled-table th, .styled-table td { padding: 12px 15px; }

.styled-table tbody tr { border-bottom: 1px solid #dddddd; } .styled-table tbody tr:nth-of-type(even) { background-color: #f3f3f3; } .styled-table tbody tr:last-of-type { border-bottom: 2px solid #009879; }
</style>
    <!-- <div id="mundocredito" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width:350px; max-height:100px " class="img-fluid col-10 col-md-3 mt-2" src="{{$landing->logo}}" alt="mundocredito">

            <div id="cont1" class="p-5 ">
                <h3 class="text-black text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-blue input" autofocus>
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4">Validar </button>
            </div>

            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>

            <div id="cont2" class="p-5 hide">
               <!-- <h3 class="text-black text-center">Estimado(a) <span id="name"></span></h3>-->


               <p style="text-align: right;">Santiago, <strong> <span id="name"> <?php echo $fecha; ?></span></p></strong></p>

<p> Cliente: <span id="name"> <?php echo $name; ?></span></p>
<p> RUT:    <span id="name"> <?php echo $rut; ?></span></p>
    

                <p class="text-black" style="text-align: justify;">

                  Le saluda  <strong>*IGMACOB SPA*</strong> y me comunico por encargo de la empresa <strong>WÜRTH Chile Ltda.</strong>, quien nos ha autorizado para realizar el cobro de la deuda pendiente que a la fecha se encuentra en mora cuyo registro es:


</p>


<table class="content-table"> <thead> 
        <tr> 
        <th>FACTURA</th> 
        <th>FACTURA</th> 
        <th>FACTURA</th> 
    </tr> 

</thead> 
<tbody> <tr> <td>Emmanuel</td> 
    <td>Enchiladas</td> <td>Pasas</td> 
</tr> <td>Lina</td> 
<td>Salteñas</td> 
<td>Aderezos</td> </tr> 
<tr> <td>Adrián</td> 
    <td>Berenjenas horneadas</td> 
    <td>Queso</td> </tr> <tr> 
        <td>Yaz</td> 
        <td>Sopa de cebolla</td> 
        <td>Carnes rojas</td> </tr> 
    </tbody> </table>



                <br>
                <br>


                   Gracias por tu Preferencia.
                </p>


<!--

                               <div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-primary" style="border: none;" min="<?php  echo date('Y-m-d') ?>"  max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>



         <a onclick="eventosLanding('Contactar con un Ejecutivo');" href="tel:+56983106646" class="btn bg-danger text-white col-12 mt-4"><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png">Contactarme con un ejecutivo</a>


               
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56983106646&text=Hola,%20tengo%20una%20consulta" class="btn bg-danger text-white col-12 mt-4"><img width="40" src="https://i.pinimg.com/originals/79/dc/31/79dc31280371b8ffbe56ec656418e122.png">Enviar SMS por Whatsapp</a>


                <button onclick='window.location.href="https://botondepago.mundocredito.cl/#/Ingreso"; eventosLanding("Pagina de Pagos");' class="btn bg-danger text-white col-12 mt-4">PAGAR AHORA</button>

               
                
                
                    -->
                    
                </div>       
            </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>
        </div>
    </div>

    <script>

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
                     'ejecutivo': getUrlParameter('data1'),
                   'landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                   // 'monto': getUrlParameter('monto'),
                    'rut': getUrlParameter('rut'),
                    'phone': getUrlParameter('telefono'),
                    'ejecutivo': getUrlParameter('data1'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["smunoz@prainabogados.cl"];
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