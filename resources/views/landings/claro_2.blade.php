@extends('layouts.landing')

@section('title', 'CLARO')

@section('content')


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
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
    .med {
  background-image: 
    linear-gradient(
      rgba(255, 255, 255, 0.5),
      rgba(255, 255, 255, 0.5)
    )
    }
    .fila1{
      
        border-style: dotted;
   border-width: 1px;
   border-color: 660033;
    }
</style>
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
   <!-- <div id="simple" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img style="max-width:200px; max-height:180px "class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="simple">


            <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>


            <div id="cont2" class="p-2 pl-3 ">
                <center>
            <h3  class="text-primary "><strong> Conoce nuestros Planes Claro</strong> </h3>
            <h4> Escoge el paquete ideal para ti y tu familia</h4> </center>
            <div id="opt1" class="p-2 pl-3">
                        <!--<div class="card">     
                            <div class="card-body">-->
                               <center>
                               <a onclick="Mens11();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:500px;" src="https://i.imgur.com/jxPkfY5.jpeg"></a> <br>
                                <a onclick="Mens21();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:500px;" src="https://i.imgur.com/Q7o51O6.jpeg"></a> <br>
                                <a onclick="Mens31();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:500px;" src="https://i.imgur.com/99f6XF9.jpeg"></a> </center>

 
                                <button onclick="sendMail('No deseo recibir Mas Noticias de Claro'); eventosLanding('No deseo Productos Claro'); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>No deseo recibir Mas Mensajes de Claro</h4></button>
                                
                                <button onclick="sendMail('ya soy cliente Claro'); eventosLanding('Soy Cliente Claro'); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>Ya soy cliente Claro</h4></button>
                                                            
            </div>
          
<!--HOGAR-->
<div id="HOGAR" class="p-2 pl-3 hide">
<!--
<center>
            <h3  class="text-primary "><strong> Conoce nuestros Planes Claro Hogar </strong> </h3>
            <h4> Escoge el paquete ideal para ti y tu familia</h4> </center>-->
            <div id="opt11" class="p-2 pl-3">
                       
                               <center>
                               <a onclick="Mens1();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:400px;" src="https://imgur.com/GWkleqW.png"></a> <br>

          

                                <a onclick="Mens2();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:400px;" src="https://imgur.com/RMl8rwF.png"></a> <br>
                                <a onclick="Mens3();" class="btn bg-white text-danger col-12 mt-2"> <img class="col-12 mt-2" style="max-width:400px;" src="https://imgur.com/6S1xMqg.png"></a> </center>

 
                                <button onclick="sendMail('No deseo recibir Mas Noticias de Claro'); ;eventosLanding('No deseo Productos Claro'); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>No deseo recibir Mas Mensajes de claro</h4></button>
                               
                              
            </div>
          

<div id="plan1" class="p-2 pl-3 hide">

<center>
            <h3  class="text-primary "><strong> 1 Play: Internet  </strong> </h3>
            <h4> Disfruta de Internet en alta velocidad</h4> </center>
<div class="card">     
         <div class="card-body">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
       
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
        <center> <a onclick="sendMail('Solicito ser Contactado Plan  HOGAR PRO'); ;eventosLanding('Solicitud Informacion  Plan HOGAR PRO'); return false;">
          <img class="col-12 mt-2" style="max-width: 350px; max-height:350px " src="https://i.imgur.com/Cx6ia7O.png" alt=""> </a> <br> 
          </center> <br> <br>
          <button onclick="sendMail('Solicito ser Contactado Plan  HOGAR PRO'); ;eventosLanding('Solicitud Informacion  Plan HOGAR PRO'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
          <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan HOGAR 80'); ;eventosLanding('Solicitud Informacion  Plan HOGAR 80'); return false;"> 
        <img class="col-12 mt-2" style="max-width:350px; max-height:350px " src="https://i.imgur.com/p9ETw33.png" alt=""> </a> <br> 
        </center><br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan HOGAR 80'); ;eventosLanding('Solicitud Informacion  Plan HOGAR 80'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
        <br> <br> <br> 
        </div>
 
    </div>

     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    </div>  
    <div id="opt11" class="p-2 pl-3">
                        <div class="card">     
                            <div class="card-body">
                               <!--<button onclick="Mens1();" class="btn bg-danger text-white col-12 mt-2"><img width="100" src="https://i.imgur.com/9hoo6Uk.png"> <strong>   1 Play: Internet </strong> </button>--> 
                             <button onclick="Mens2();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://imgur.com/RMl8rwF.png"> <strong></strong> </button>
                             <button onclick="Mens3();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://imgur.com/6S1xMqg.png"> <strong> </strong> </button>
                            </div>
                        </div>
            </div>
</div>
    
<!--plan 2-->

    <div id="plan2"  class="p-2 pl-3 hide">

    <center>
            <h3  class="text-primary "><strong> 2 Play: Internet + Tv</strong> </h3>
            <h4> Disfruta de Internet en alta velocidad y entretenimiento en HD.</h4> </center>
    <br>
<div class="card">     
         <div class="card-body">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
        <center> <a onclick="sendMail('Solicito ser Contactado Plan 2PLAY 80'); ;eventosLanding('Informacion 2PLAY 80'); return false;">
          <img  class="col-12 mt-2" style="max-width:350px; max-height:350px " src="https://i.imgur.com/2dOjk6p.png" alt=""> </a> <br> 
          </center> <br> <br>
          <button onclick="sendMail('Solicito ser Contactado Plan 2PLAY 80'); ;eventosLanding('Informacion 2PLAY 80'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
          <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan 2PLAY 200'); ;eventosLanding('Solicitud Informacion  Plan 2PLAY 200'); return false;"> 
        <img class="col-12 mt-2" style="max-width:350px; max-height:350px " src="https://i.imgur.com/79ESIJK.png" alt=""> </a> <br> 
        </center><br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan 2PLAY 200'); ;eventosLanding('Solicitud Informacion  Plan 2PLAY 200'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
        <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan 2PLAY 400'); ;eventosLanding('Solicitud Informacion  Plan 2PLAY 400'); return false;">   
        <img class="col-12 mt-2" style="max-width:350px; max-height:350px " src="https://i.imgur.com/tN0p7Vy.png" alt=""> </a> <br> 
        </center> <br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan 2PLAY 400'); ;eventosLanding('Solicitud Informacion  Plan 2PLAY 400'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
                      <br> <br> <br>          
        </div>
      

    </div>

     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    </div> 
    <div id="opt12" class="p-2 pl-3">
                        <div class="card">     
                            <div class="card-body">
                               <button onclick="Mens1();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://imgur.com/GWkleqW.png"> <strong> </strong> </button>
                                <!--<button onclick="Mens2();" class="btn bg-danger text-white col-12 mt-2"><img width="100" src="https://i.imgur.com/B9n98KE.png"> <strong>  2 Play: Internet + Tv</strong> </button>-->
                               <button onclick="Mens3();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://imgur.com/6S1xMqg.png"> <strong></strong> </button>
                            </div>
                        </div>
            </div>
</div>

    <!--plan 3-->

    <div id="plan3"  class="p-2 pl-3 hide">
    <br>

    <center>
            <h3  class="text-primary "><strong> 3 Play: Internet + Tv + Telefonía </strong> </h3>
            <h4> Disfruta de Internet en alta velocidad, entretenimiento en HD y telefonía fija.</h4> </center>
    <div class="card">     
         <div class="card-body">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
     <!--   <li data-target="#myCarousel" data-slide-to="2"></li>-->
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
        <center> <a onclick="sendMail('Solicito ser Contactado Plan 3PLAY 200'); ;eventosLanding('Informacion 3PLAY 200'); return false;">
          <img class="col-12 mt-2" style="max-width:350px; max-height:350px " src="https://i.imgur.com/8WeUw2T.png" alt=""> </a> <br> 
          </center> <br> <br>
          <button onclick="sendMail('Solicito ser Contactado Plan 3PLAY 200'); ;eventosLanding('Informacion 3PLAY 200'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
          <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan 3PLAY 400'); ;eventosLanding('Solicitud Informacion  Plan 3PLAY 400'); return false;"> 
        <img class="col-12 mt-2" style="max-width:350px; max-height:350px "  src="https://i.imgur.com/hvJ1c0u.png" alt=""> </a> <br> 
        </center><br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan 3PLAY 400'); ;eventosLanding('Solicitud Informacion  Plan 3PLAY 400'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
        <br> <br> <br> 
        </div>     

    </div>

     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    </div>
    </center>
    <div id="opt11" class="p-2 pl-3">
                        <div class="card">     
                            <div class="card-body">
                               <!--<button onclick="Mens11();" class="btn bg-danger text-white col-12 mt-2"><img width="100" src="https://i.imgur.com/9hoo6Uk.png"> <strong>   1 Play: Internet </strong> </button>--> 
                             <button onclick="Mens21();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/Q7o51O6.jpeg"> <strong></strong> </button>
                             <button onclick="Mens31();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/99f6XF9.jpeg"> <strong> </strong> </button>
                             <button onclick="Mens4(); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>ver otras opciones</h4></button>
                                                            
                                                            </div>
                        </div>
            </div>
</div>
</div>
<!--MOVIL-->

    <div id="MOVIL"  class="p-2 pl-3 hide">

    <center> <h3  class="text-primary "><strong> Conoce Nuestras Ofertas En Planes Móviles Del Mes</strong> </h3></center>
            <div class="card">     
         <div class="card-body">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
        <center> <a onclick="sendMail('Solicito ser Contactado Plan Gigas Libre'); ;eventosLanding('Informacion GIGAS LIBRE'); return false;">
          <img class="col-12 mt-2" style="max-width: 550px; max-height:900px "src="https://imgur.com/DWibohM.png" alt=""> </a> <br> 
          </center> <br> <br>
          <button onclick="sendMail('Solicito ser Contactado Plan Gigas Libre'); ;eventosLanding('Informacion GIGAS LIBRE'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
          <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan Max M'); ;eventosLanding('Solicitud Informacion  Plan Max M'); return false;"> 
        <img class="col-12 mt-2" style="max-width: 550px; max-height:900px " src="https://imgur.com/HLGmf6B.png" alt=""> </a> <br> 
        </center><br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan Max M'); ;eventosLanding('Solicitud Informacion  Plan Max M'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
        <br> <br> <br> 
        </div>
        <div class="item">
        <center><a onclick="sendMail('Solicito ser Contactado Plan Max L'); ;eventosLanding('Solicitud Informacion  Plan Max L'); return false;">   
        <img class="col-12 mt-2" style="max-width: 550px; max-height:900px" src="https://imgur.com/Oj3NBUu.png" alt=""> </a> <br> 
        </center> <br> <br>
        <button onclick="sendMail('Solicito ser Contactado Plan Max L'); ;eventosLanding('Solicitud Informacion  Plan Max L'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>
                      <br> <br> <br>      


        </div>
       

    </div>

     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    </div>
    </center>
<br>
   
    <div id="opt12" class="p-2 pl-3">
                        <div class="card">     
                            <div class="card-body">
                               <button onclick="Mens11();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/jxPkfY5.jpeg"> <strong> </strong> </button>
                                <!--<button onclick="Mens21();" class="btn bg-danger text-white col-12 mt-2"><img width="100" src="https://i.imgur.com/B9n98KE.png"> <strong>  2 Play: Internet + Tv</strong> </button>-->
                               <button onclick="Mens31();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/99f6XF9.jpeg"> <strong></strong> </button>
                               <button onclick="Mens4(); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>ver otras opciones</h4></button>
                             
                            </div>
                        </div>
            </div>
</div>

    <!--BAFI-->

    <div id="BAFI"  class="p-2 pl-3 hide">
    <br>

    <div class="card">     
        <div class="card-body">
            <!--   <h3 class="text-grey text-center"> Estimado(a) <strong> <span id="name"></span> </strong> </h3>-->
            <center>  <p class="text-white"> <h4> 
            Claro informa de una oferta especial. Descuento de $14.000 X Siempre</h4> </p> </center>
            
            <center>
            <div class="d-flex justify-content-around align-content-center mt-4">
                <a onclick="sendMail('Solicito ser Contactado Plan Inalambrico'); ;eventosLanding('Solicitud Informacion'); return false;">
                <img style="max-width: 100%" src="https://i.imgur.com/IvsIqkY.png"></a>
            </div>
            </center>

            <button onclick="sendMail('Solicito ser Contactado  Plan Inalambrico'); ;eventosLanding('Solicitud Informacion'); return false;" class="btn bg-danger text-white col-12 mt-2"><h4>Contactar</h4></button>

                <button onclick="sendMail('No deseo recibir Mas Noticias de Claro'); ;eventosLanding('No deseo Productos Claro'); return false;" class="btn bg-white text-danger col-12 mt-2"><h5>No deseo recibir Mas Mensajes de Claro</h5></button>

        </div>   
    </div>

    <div id="opt11" class="p-2 pl-3">
                        <div class="card">     
                            <div class="card-body">
                            <button onclick="Mens11();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/jxPkfY5.jpeg"> <strong> </button> 
                            <button onclick="Mens21();" class="btn bg-white text-danger col-12 mt-2"><img width="300" src="https://i.imgur.com/Q7o51O6.jpeg"> <strong> </strong> </button>
                               <!--<button onclick="Mens31();" class="btn bg-danger text-white col-12 mt-2"><img width="100" src="https://i.imgur.com/fDpn2k2.png"> <strong>  3 Play: Internet + Tv + Telefonía</strong> </button>-->
                               <button onclick="Mens4(); return false;" class="btn bg-white text-danger col-12 mt-4"><h4>ver otras opciones</h4></button>
                             
                            </div>
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

            //json_datos.nombre = $('#name').text();
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
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'Comuna': getUrlParameter('data1'),
                    //'Prevision': getUrlParameter('data2'),
                    //'Estado': getUrlParameter('data3'),
                    //'Ley': getUrlParameter('data4'),
                     'RUT': getUrlParameter('rut'),
                     'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}' "inttegrados@gmail.com", ,"jesus.binteraction@gmail.com" 
                //'email': 'marcostor13@gmail.com' ,"jesus.binteraction@gmail.com" 
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
                     $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área.');

                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Gracias, Su compromiso de pago fue agendado');
                     eventosLanding('Solicitud de Plan');
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
             window.location.href = "tel:+56975890470";
        }  

/*
     function Mens11(){
   window.location.href = "https://api.whatsapp.com/send?phone=56975890470&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


    function Mens21(){
         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
             window.location.href = "mailto:angelo.castillo@solvencia.cl ?subject=Portabilidad%20Claro&body"+body_message;
 }
*/

  function Mens11(){
        $('#MOVIL').addClass('hide');
        $('#HOGAR').removeClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').addClass('hide');

 }

 function Mens21(){
        $('#HOGAR').addClass('hide');
        $('#MOVIL').removeClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').addClass('hide');

 }
 function Mens31(){
        $('#HOGAR').addClass('hide');
        $('#MOVIL').addClass('hide'); 
        $('#opt1').addClass('hide');
        $('#BAFI').removeClass('hide');

 }


 function Mens1(){
        $('#plan2').addClass('hide');
        $('#plan1').removeClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').addClass('hide');

 }

 function Mens2(){
        $('#plan1').addClass('hide');
        $('#plan2').removeClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').addClass('hide');

 }
 function Mens3(){
        $('#plan1').addClass('hide');
        $('#plan2').addClass('hide'); 
        $('#opt11').addClass('hide');
        $('#plan3').removeClass('hide');

 }


 function Mens4(){

    $('#HOGAR').addClass('hide');
        $('#MOVIL').addClass('hide'); 
        $('#opt1').removeClass('hide');
        $('#BAFI').addClass('hide');
}

 function activa(){

  $('#cont2').addClass('hide');
  $('#cont7').removeClass('hide');
 }

  function activa1(){

  $('#cont2').addClass('hide');
  $('#cont6').removeClass('hide');
 }
//portabilidad 4 planes
 function port1(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port1').removeClass('hide');
  $('#port11').removeClass('hide');
 }
 function port2(){

  $('#cont7').addClass('hide');
   $('#form').removeClass('hide');
   $('#actual').removeClass('hide');
  $('#port2').removeClass('hide');
  $('#port22').removeClass('hide');
 }
  function port3(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port3').removeClass('hide');
  $('#port33').removeClass('hide');
 }
 function port4(){

  $('#cont7').addClass('hide');
  $('#form').removeClass('hide');
  $('#actual').removeClass('hide');
  $('#port4').removeClass('hide');
  $('#port44').removeClass('hide');
 }
//linea nueva 5 planes
 function nuev1(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev1').removeClass('hide');
   $('#nuev11').removeClass('hide');
 }
 function nuev2(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev2').removeClass('hide');
   $('#nuev22').removeClass('hide');
 }
 function nuev3(){

  $('#cont6').addClass('hide');
    $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev3').removeClass('hide');
   $('#nuev33').removeClass('hide');
 }
 function nuev4(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev4').removeClass('hide');
   $('#nuev44').removeClass('hide');
 }
 function nuev5(){

  $('#cont6').addClass('hide');
   $('#form').removeClass('hide');
  $('#nuevo').removeClass('hide');
  $('#nuev5').removeClass('hide');
   $('#nuev55').removeClass('hide');
 }


 function p0(){

    $('#cont7').addClass('hide');
    $('#cont6').addClass('hide');
    $('#form').addClass('hide');
    $('#cont2').removeClass('hide');
    $('#port4').addClass('hide');
    $('#port3').addClass('hide');
    $('#port2').addClass('hide');
    $('#port1').addClass('hide');
    $('#nuev5').addClass('hide');
    $('#nuev4').addClass('hide');
    $('#nuev3').addClass('hide');
    $('#nuev2').addClass('hide');
    $('#nuev1').addClass('hide');
    $('#port44').addClass('hide');
    $('#port33').addClass('hide');
    $('#port22').addClass('hide');
    $('#port11').addClass('hide');
    $('#nuev55').addClass('hide');
    $('#nuev44').addClass('hide');
    $('#nuev33').addClass('hide');
    $('#nuev22').addClass('hide');
    $('#nuev11').addClass('hide');
    $('#actual').addClass('hide');
    //$('#cont3').addClass('hide');
    $('#CONT').addClass('hide');
 }



    </script>
    

@endsection