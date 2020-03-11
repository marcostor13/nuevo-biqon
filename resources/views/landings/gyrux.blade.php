@extends('layouts.landing')

@section('title', 'Gyrux')

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

    <div id="Gyrux" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="Gyrux">
            
            <div class=col-md-12>
           
                    <div id="cont2" class="p-2 pl-3 pr-3">
                        <p class="text-white"> <h4 class="text-white text-center">Gyrux La Evolucion en Accesorios Mobile</h4> </p>   
                        <h4 class="text-white text-center"> <p>INNOVACION Y TENDENCIAS</p> </h4>
                            <div class="d-flex justify-content-around align-content-center mt-4">
                                <a onclick='window.location.href = "#"'> <!--IR a Facebook / Instagram / tienda Online-->
                                <img width="200" src="https://www.tecnobits.xyz/wp-content/uploads/2018/02/los-mejores-celulares-del-momento.jpg"></a>
                            </div>   
                            <div class="d-flex text-white justify-content-around align-content-center mt-4">
                                 <br>  <br>               
                                <a onclick='url(1);'><span class="text-white text-center">ENERGIA</span><img width="50" src="https://www.clarochile.cl/portal/cl/recursos_contenido/1541533759347.png"></a>

                                 <br> <br>
                                <a onclick='url(2);'><span class="text-white text-center">PROTECCION</span><img width="50" src="https://www.clarochile.cl/portal/cl/recursos_contenido/1541533781511.png"></a>
                                </div>

                                <div class="d-flex text-white justify-content-around align-content-center mt-4">
                                   <br><br>
                                <a onclick='url(3);'><span class="text-white text-center">AUDIO</span><img width="50" src="https://i.imgur.com/bjyoy12.png"> </a>

                                 <br><br>
                                <a onclick='url(4);'><span class="text-white text-center">ALMACENAMIENTO</span><img width="50" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                            </div>
                    </div>
          
             
                    <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>

                    <div id="c1" class="p-2 pl-5 pr-5 hide"> <!-- Energia-->
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href = "#" '><img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                        </div>
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href="#" '><img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>    
                        </div>
                    </div>
 
                    <div id="c2" class="p-2 pl-5 pr-5 hide"> <!-- Proteccion-->
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href = "#" '><img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                        </div>
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href="#" '><img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>    
                        </div>
                    </div>

                    <div id="c3" class="p-2 pl-5 pr-5 hide"> <!-- Audio-->
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href = "#" '><img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                        </div>
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href="#" '><img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>    
                        </div>
                    </div>

                    <div id="c4" class="p-2 pl-5 pr-5 hide"> <!-- Almacenamiento-->
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href = "#" '><img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                        </div>
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href="#" '><img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>    
                        </div>
                    </div>


                    <div id="vale" class="p-2 pl-5 pr-5 hide"> <!-- Solicitud-->
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href = "#" '><img width="200" src="https://i.imgur.com/hw0CNnw.png"></a>
                        </div>
                        <div class="d-flex justify-content-around align-content-center mt-4">
                            <a onclick='window.location.href="#" '><img width="200" src="https://i.imgur.com/rFQ2FWM.png"></a>    
                        </div>
                    </div>

                    <br><br> <hr> <br><br> 
                    <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56967664209&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56967664209"><img width="60" src="https://i.imgur.com/Oh5DCRW.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:sprieto@naztech.cl?subject=Landing%20Gyrux"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>

                    <a class="ml-4" onclick="eventosLanding('Facebook');" href="https://www.facebook.com/Gyruxcl/"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>

                    <a class="ml-4" onclick="eventosLanding('Instagram');" href="https://www.instagram.com/gyruxcl/"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
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

            var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'jose.bianchi@uss.cl'
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
        
    function url(idButton) {

 switch(idButton) {
 case 1:
          $('#cont2').addClass('hide');
          $('#c1').removeClass('hide');
    break;

 case 2:
          $('#cont2').addClass('hide');
          $('#c2').removeClass('hide');
    break;

 case 3:
          $('#cont2').addClass('hide');
          $('#c3').removeClass('hide'); 
    break;
 case 4:
          $('#cont2').addClass('hide');
          $('#c4').removeClass('hide'); 
    break;
    
default:
          alert("OPCION INVALIDA.")
        }

   }


  
    </script>
    

@endsection
