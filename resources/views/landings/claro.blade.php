@extends('layouts.landing')

@section('title', 'Claro')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
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
    
</style>

    <div id="CLARO" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="CLINICA_DAVILA">
            
            <div class=col-md-12>
           
                     <div id="cont1" class="p-2 pl-5 pr-5">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar</button>
                        <h5 id="error"class="text-grey text-center mt-5"></h5>
                       </div>
                       </div> 
                    </div>

                    <div id="cont2" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h3 class="text-grey text-center"> Estimado(a) <strong> <span id="name"></span> </strong> </h3>
                                 <p class="text-white"> <h4> 
                                Claro informa que puedes acceder a Todos estos Productos y Servicios.</h4> </p>
                               <!-- <p> Su ID admisión es: </p> 
                               <strong> <h4><p id="dato1" class="dato1"> </p> </h4>  </strong>
                                <h4 class="text-grey text-center"> Seleccione una Opcion </h4>

                               <button onclick="Mens1();" class="btn bg-primary text-white col-12 mt-2">PAGAR
                                </button>-->
                                <h4 class="text-grey text-center"> <p>PROMOCIONES</p> </h4>

                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href = "https://www.clarochile.cl/personas/cyber-planes-equipos/"'>
                                    <img width="250" src="https://i.imgur.com/P4qbN1u.png"></a>
                                </div>
                                 <h4 class="text-grey text-center"> <p>ACCESORIOS</p> </h4>
                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href = "https://accesorios.clarochile.cl/"'>
                                    <img width="250" src="http://movilarena.com/wp-content/uploads/2012/01/sony-accesorios.jpg"></a>
                                </div>
                                
                                <div class="d-flex justify-content-around align-content-center mt-4">
                                      <p>MOVIL</p>                  
                                    <a onclick='window.location.href = "https://www.clarochile.cl/personas/servicios/servicios-moviles/prepago/" '><img width="85" src="https://www.clarochile.cl/portal/cl/recursos_contenido/1541533759347.png"></a>
                                     <p>HOGAR</p> 
                                    <a onclick='window.location.href = "https://www.clarochile.cl/personas/servicios/servicios-hogar/arma-tu-play/" '><img width="85" src="https://www.clarochile.cl/portal/cl/recursos_contenido/1541533781511.png"></a>
                                    </div>

                                    <div class="d-flex justify-content-around align-content-center mt-4">
                                      <p>TIENDA ONLINE</p>                 
                                    <a onclick='window.location.href = "https://tienda.clarochile.cl/catalogo" '><img width="85" src="https://i.imgur.com/bjyoy12.png"></a>
                                     <p>CONTACTO</p> 
                                    <a onclick='window.location.href = "https://api.whatsapp.com/send?phone=56975890470&text=Hola,%20tengo%20una%20consulta" '><img width="85" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                                    </div>
<!--<a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56985296912text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>-->
                                   <!-- <div class="d-flex justify-content-around align-content-center mt-4">
                                                       
                                    <a onclick="eventosLanding('Llamar'); Mens();"><img width="85" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png">LLAMAR</a>
                                   
                                    <a onclick="eventosLanding('Correo');" href="mailto:cortezjesus01@gmail.com?subject=Landing%20Claro"><img width="85" src="http://ojwgq1ostm42ulxuw45kfbt8-wpengine.netdna-ssl.com/hoosnetwork/wp-content/uploads/sites/30/2015/02/Email-image.jpg">Correo</a>
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
                        <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href = "https://www.clarochile.cl/negocios/chat-servicios-moviles/" '>
                                    <img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                                </div>
                                <div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='window.location.href="http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/" '>
                                    <img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>
                                </div>
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
                    $('#error').text(e.msg);
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
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Prevision': getUrlParameter('data2'),
                    'Estado': getUrlParameter('data3'),
                    'Ley': getUrlParameter('data4')
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Prevision': getUrlParameter('data2'),
                    'Estado': getUrlParameter('data3'),
                    'Ley': getUrlParameter('data4'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            let dataSend = {
                'data': JSON.stringify(data),
                'email': '{!! $landing->email !!}'
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
             title: `Para Comunicarse, llene el formulario`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://www.clarochile.cl/negocios/chat-servicios-moviles/";
        })


        } 
        
    


  
    </script>
    

@endsection
