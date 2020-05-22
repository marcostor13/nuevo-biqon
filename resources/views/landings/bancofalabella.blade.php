@extends('layouts.landing')

@section('title', 'FALABELLA')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+15 days", $startdate);
?>
<style>
.opaco{
    display: none !important; 
}
.opaco{
    display: none !important; 

}
.input{
  border-color: #A1CBF3 !important;
}
     
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

        <div class="opaco"></div>

       <div align="center" class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
        <div style="background-color:#54C86B; " class="col-md-10 mt-2">
        <img style="max-width: 100%" class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/Yc3aiQM.png" alt="FALABELLA"> 
        <h3 class="text-grey text-left"> Estimado(a) <strong>  <span id="name"></span> <!-- <?php //echo $name; ?> --></strong> </h3>
        </div>
            <div id="cont1">
                          <!--  <div class="card">     
                <div class="card-body">-->

                     <center> <img src="https://i.imgur.com/un6vWpt.jpg"> </center>
                  
                        <!-- <div>
                 <button onclick='window.location.href="https://cuentacorriente.bancofalabella.cl/#/"' type="button" class="btn bg-warning text-white col-10 mt-4" >CUENTA CORRIENTE</button>
                 <div>
                        <button onclick='window.location.href="https://www.bancofalabella.cl/credito-de-consumo?utm_source=sitio_clientes&utm_medium=lugar_principal"' type="button" class="btn bg-warning text-white col-10 mt-4" >PIDE TU CREDITO</button>
                      <div>
                        <button onclick='window.location.href="https://solicitudes.cmr.cl/?feature=insurance_v1&utm_expid=.PbkBPSTwQjuqM_GpPiVRFA.1&utm_referrer="' type="button" class="btn bg-warning text-white col-10 mt-4" >TARJETA CMR</button>
                    </div>                   
                 </div>
            </div>-->
            <div > <!--texto--><br>
                <h3>¡Paga tu CMR en línea!</h3>
                <h3>¿Solo has pagado en sucursales y nunca por la web?</h3>
                <div class="card-body" > 
                    <h3>¡No te preocupes!<br>
                    nosotros te enseñamos </h3> <img class="img-fluid col-md-3 mt-2" src="https://i.imgur.com/DCPCot4.jpg" alt="FALABELLA">
                </div>  

            </div> 

            <div class="p-2 pl-3 pr-3"> 
                <center> <!--IMAGENES-->
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/cU90gV4.jpg" alt="FALABELLA">
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/piA0aT3.jpg" alt="FALABELLA">
                <br>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/a69Upgt.jpg" alt="FALABELLA">
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/wRp1ijh.jpg" alt="FALABELLA">
                <br>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/bXzEs8W.jpg" alt="FALABELLA">
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/2gHQpku.jpg" alt="FALABELLA">
                <br>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/XUTkNVy.jpg" alt="FALABELLA">
                <br>
                <img style="max-width: 40%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/PWFmHww.jpg" alt="FALABELLA"><img style="max-width: 16%" class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TCmWgnf.jpg" alt="FALABELLA">
            </center>
            </div>

            <div> <!--FIN--><br>
                <p>El pago con Tarjetas de Crédito puede tener costos asociados. Consultar al emisor para mayor información. Infórmese sobre la garantía estatal de los depósitos en su banco o <a href="www.cmfchile.cl">cmfchile.cl</a></p>
            </div> 
                   
                
   <!-- </div>
        </div>-->

         <div class="d-flex justify-content-around align-content-center mt-1"> 

            
                                                            
            </div>
          
     <script>
   //EVENT 1

         $('#date1').on('change', function(){
                        if($('#date1').val() != ''){
                            sendMail();
                        }
                    });

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
                    $('#error').text(e.msg);
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

     // 

        function sendMail(msg = false){

            console.log('{!! $landing->name !!}'); 
            
            let data; 
            if(msg !== false){
                data = {
                    'mensaje': msg,
                    'Mombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2')                
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Phone': getUrlParameter('telefono'),
                     'Rut': getUrlParameter('rut'),
                     'Direccion': getUrlParameter('data1'),
                     'Comuna': getUrlParameter('data2'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["maicol.binteraction@gmail.com"];
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
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, lo contactaremos');
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