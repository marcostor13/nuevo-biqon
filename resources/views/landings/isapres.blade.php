@extends('layouts.landing')

@section('title', 'Isapres')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>


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
h4 {
  text-shadow: 2px 2px #000000;
}
    
</style>

 <div id="Isapres" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain;" >

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
             
                  <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
                        
      <!-- Content -->
      <div class="container">
  

        <!--Grid row-->
         <!--<div class="card">     
              
       <div class="card-body ">-->
            <h4 class="text-black text-center">
            <!--Arriendo de Juegos para Cumpleaños <br> -->
            <strong>Disfurta la Vida<br> 
            Tenemos el Mejor Plan <br>
            para Ti y tu Familia </strong> </h4> 

            <!--</div>
        </div>-->

          <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
            <!--<div class="card">     
                <div class="card-body">-->
            <h4 class="text-black text-center"> 
            <strong> Somos expertos en Isapres, <br>
            acá encontraras fácil y rápido el mejor plan de salud.  
           </strong> </h4> 
           
       <!-- </div>
        </div>-->
    


           <div id="cont1" class="text-danger text-center">
             <button onclick='window.location.href="tel:+56996891048" 'class="btn bg-warning text-black col-12 mt-4">LLAMAR</button>

       <button onclick='Mens1();' class="btn bg-warning text-black col-12 mt-4">CONSULTAS</button>
<br> <br>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
     <div class="carousel-inner">
        <div class="item active">
          <!--colmena-->
          <img src="https://i.imgur.com/87CPX6U.png" alt="...">
        </div>
        <div class="item">
          <!--vida tres-->
            <img src="https://i.imgur.com/vA1O1sj.png" alt="">
        </div>
        <div class="item">
          <!--mas vida-->
            <img src="https://i.imgur.com/EzLv3Wb.png" alt="">
        </div>
        <div class="item">
          <!--cruz blanca-->
            <img src="https://i.imgur.com/ZtD4H89.png" alt="">
        </div>
        <div class="item">
          <!--consalud-->
            <img src="https://i.imgur.com/z3d5mwC.png" alt="">
        </div>    
        <div class="item">
          <!--banmedica-->
            <img src="https://i.imgur.com/zRZEcDB.png" alt="">
        </div>

    <!-- Controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

      


        <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56996891048&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a onclick="eventosLanding('Llamar');" href="tel:+56996891048"><img width="40" src="https://puertascolmena.com/wp-content/uploads/2019/05/img2.png"></a>
                   
                    <a onclick="eventosLanding('Correo');" href="mailto:williamzuniga@gmail.com"><img width="40" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>   
      </div>

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
            var correo = ["williamzuniga@gmail.com"];  
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
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

 function Mens1(){
   // var id_adm; 
        // id_adm= getUrlParameter('data1'); //1234;
          
            swal({
             title: `Será atendido por uno de nuestros asesores via Whatsapp`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://api.whatsapp.com/send?phone=56996891048&text=Hola,%20tengo%20una%20consulta";
        })


        } 
    
    </script>

@endsection