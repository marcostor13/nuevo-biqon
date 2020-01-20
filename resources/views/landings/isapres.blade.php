@extends('layouts.landing')

@section('title', 'isapres')

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

    
</style>

<!--<<div class="oscurecer p-3">
<div class="content container-fluid d-flex flex-column align-items-center justify-content-start">
            <img style="max-width:55px; max-height:55px " class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="isapres">

        </div></div>-->
    <!--<div id="isapres" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover; ">-->

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
             <!--<img style="max-width: 50%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="isapres">-->

             <div id="cont1" class="p-2 ">
                   <div class="mask rgba-white-light d-flex justify-content-center align-items-center">
                        
      <!-- Content -->
      <div class="container">
    
        <!--Grid row-->
       <div class="card-body ">
            <h3 class="text-danger text-center">
            <!--Arriendo de Juegos para Cumpleaños <br> -->
            Disfurta la Vida<br> 
            <strong>Tenemos el Mejor Plan <br>para Ti y tu Familia </strong> </h3> 
            <h3 class="text-black text-center">
             <strong> <br>   </strong> 
              <strong> <br>  </strong> 
           </h3> 
           
        </div>


           <div id="cont1" class="text-danger text-center">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
    </ol> 

    <!-- Wrapper for slides -->
     <div class="carousel-inner">
        <div class="item active">
          <!--colmena-->
            <img src="https://i.imgur.com/d7PRyo1.jpg" alt="">
            <!--<div class="carousel-caption d-none d-md-block">
              <h5 class="text-danger text-center">hola</h5>
              <p class="text-danger text-center">isapre</p>
            </div>-->
        </div>

        <div class="item">
          <img src="https://i.imgur.com/d7PRyo1.jpg" alt="...">
          <div class="carousel-caption ">
            <h5 class="text-danger text-center">HOLA</h5>
            <p class="text-danger text-center">COLMENA</p>
          </div>
        </div>


        <div class="item">
          <!--vida tres-->
            <img src="https://i.imgur.com/2WSrvwc.png" alt="">
        </div>
        <div class="item">
          <!--mas vida-->
            <img src="https://i.imgur.com/sTstu5U.jpg" alt="">
        </div>
        <div class="item">
          <!--cruz blanca-->
            <img src="https://i.imgur.com/tmF2cn6.jpg" alt="">
        </div>
        <div class="item">
          <!--consalud-->
            <img src="https://i.imgur.com/qUSFUe3.png" alt="">
        </div>
        <div class="item">
          <!--banmedica-->
            <img src="https://i.imgur.com/uERS6xP.png" alt="">
        </div>
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
<br>
<br>
            <!--<div class="card">
              <div class="card-body">-->
                 

                <div class="green-text text-center"> <br> <strong>¡¡Siguenos en Nuestras Redes Sociales!! </strong>  <hr>
                  <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a onclick="eventosLanding('Instagram');" href="https://www.instagram.com/rayoinflables/?hl=es-la"> <img width="50" src="https://i.imgur.com/7HwfV5p.png"> </a>

                    <a onclick="eventosLanding('Facebook');" href="https://www.facebook.com/rayoinflables/"> <img width="50" src="https://i.imgur.com/dKFrTvU.png"> </a>

                  <!-- <a onclick="eventosLanding('Llamar');" href="tel:+56996413264 "><img width="50" src="https://i.imgur.com/oqKGe5C.png"></a>-->

                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56996413264&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://i.imgur.com/b1duJxb.png"></a>
                   <!-- <a onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;"> <img width="40" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"> </a>-->
                   <a  href="https://goo.gl/maps/84vSihPQqcWrHefN8"><img  width="50" src="https://icon-library.net/images/google-map-logo-icon/google-map-logo-icon-5.jpg" /></a>

                  </div>                    
                </div>
             <!-- </div>
            </div>-->
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
            var correo = ["jesus.binteraction@gmail.com"];  
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


    
    </script>

@endsection