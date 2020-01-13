@extends('layouts.landing')

@section('title', 'VTR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+3 days", $startdate);
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

<div class="oscurecer p-3">
<div class="content container-fluid d-flex flex-column  col-12 justify-content-start">
            <img style="max-width:55px; max-height:55px " class="img-fluid col-6 col-md-3" src="{{$landing->logo}}" alt="VTR">  
            <a class="col-2" onclick="eventosLanding('Facebook');" href=""><img width="10" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
            <a class="col-2" onclick="eventosLanding('Twitter');" href=""><img width="10" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>

            <a class="col-2" onclick="eventosLanding('Youtube');" href=""><img width="10" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>

        </div></div>
<div id="VTR" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; ">

    <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <!--<img style="max-width:120px; max-height:120px " class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="VTR">-->

             <div id="cont1" class="p-5 ">
                <br><br><br>
                <h4 class="text-black text-center"><strong><span id="name"></span> </strong>Te damos la bienvenida a la interfaz de VTR, para ingresar valida tu identidad ingresando tu RUT sin el digito verificador</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4"> INGRESAR </button>

                <button onclick="eve(); return false;" class="btn bg-danger text-white col-12 mt-4"> Contacto Equivocado </button>

                <button onclick="eve1(); return false;" class="btn bg-danger text-white col-12 mt-4"> Salir </button>
            </div>
            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="error"class="text-black text-center mt-5"></h5>
                         </div>
                    </div>
            </div>


            <div id="cont2" class="p-5 hide">
                <div class="text-white col-md-12">
                <h6 class="text-white text-center"> <strong> <span id="name"></span></strong></h6>
                </div>
            <br><br>
                <p class="text-black">
                    Tu boleta asociada al servicio <strong> <span id="data2"></span></strong>, se encuentra <strong> <span id="data3"> </span> </strong>, por el monto de:
                         <strong> $ <span id="pay"></span> </strong>
                </p>
                <p>Recuerda que pagar tu boleta al día evita la suspensión de tus servicios.</p>

                <button onclick='url(); eventosLanding("PagoExpress"); ' class="btn bg-danger text-white col-12 mt-4"> Pagar</button>

                <div class="date btn bg-danger text-white col-12 mt-4">
                    <span> Compromiso de pago </span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" min="<?php echo date('Y-m-d') ?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
                </div>

                <button onclick='url9(); eventosLanding("LLamar"); ' class="btn bg-danger text-white col-12 mt-4"> Quiero que me llamen </button>

                <button onclick='url10(); eventosLanding("Informaciones"); ' class="btn bg-danger text-white col-12 mt-4"> Tarifas |Sucursales | Informaciones</button>

                <button onclick='url11(); eventosLanding("Ultima Boleta"); ' class="btn bg-danger text-white col-12 mt-4"> Ver última boleta</button>
                

                 <button onclick='url2(); eventosLanding("Problemas"); ' class="btn bg-danger text-white col-12 mt-4"> Tengo un problema</button>
                
              

                    <div class="d-flex justify-content-around align-content-center mt-4"> 
                    
                     <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56933914095"><img width="60" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:ivonne.gonzalez@financoop.cl"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>

        </div>
                <div id="cont3" class="p-2 pl-5 pr-5 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="message"class="text-grey text-center mt-4 hide"></h5>
                        </div>
                    </div>
                </div>
    <div class="oscurecer p-3">
         <div id="cont4" class="p-2 pl-5 pr-5 ">
            <i class="fas fa-question text-danger"></i> Centro de ayuda</a></li>
            <a onclick="eventosLanding('Centro de ayuda');" href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-white"></a>
                   
            <i class="fas fa-question text-danger"></i> Reportar Abusos</a></li>
            <a onclick="eventosLanding('Reportar Abusos');"href="https://vtr.com/productos/reclamos" class="text-white"></a>
                    <br>
            <i class="fas fa-exclamation-circle text-danger"></i> Actualiza Datos</a></li>
            <a onclick="eventosLanding('Actualiza Datos');"href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-white"></a>
            
            <i class="fas fa-user text-danger"></i> Privacidad</a></li>
            <a onclick="eventosLanding('Privacidad');" href="https://vtr.com/productos/privacidad" class="text-white"></a>
            <br>
            <img style="max-width:55px; max-height:55px" class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR"> 
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
                    'mensaje': msg,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
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
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["jesus.binteraction@gmail.com"];  
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
                    $('#message').text('Ha quedado su llamada agendada. Gracias por su tiempo. VTR le desea que tenga un excelente día. Cualquier duda al 600 800 9000.');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Ha quedado registrado su compromiso. Gracias por su tiempo. VTR le desea que tenga un excelente día. Cualquier duda al 600 800 9000.');
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


         function url(){
    var rut; 
         rut= getUrlParameter('rut'); //1234  "76114143-0";
         // console.log(rut);
            swal({
             title: `Será Direccionado a la Página de Pagos`,//`el cododigo es: ${rut}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://vtr.com/miregistro/paymentExpress.jsp?_dyncharset=UTF-8&c-rut="+rut+"&_D:c-rut=+&_DARGS=/vtr/cartridges/VtrHOHeaderBarPayYourAccountCart/VtrHOHeaderBarPayYourAccountCart.jsp";
        })

        } 


            function url2(){
    var docid; 
         docid= getUrlParameter('data1'); //"AFAEc%2FnhOohJncAMwniaD1w1inFcH147"; //1234  "76114143-0";
          
            swal({
             title:`Espere para Ver su Boleta Online`,// `el cododigo es: ${docid}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = " https://vtr.com/ss/vboleta/index.html#/home.html?docid="+docid;
        })

        } 

    
    </script>

@endsection