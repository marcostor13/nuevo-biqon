@extends('layouts.landing')

@section('title', 'CLAROMAX')

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
                 <center><div class="bg-primary"><BR>
               <h3 class="text-white ">OFERTA MASIVA POSTPAGO </h3><BR></div><br>
                    <h3 class="text-black bg-white">
                    SE EXTIENDE HASTA EL 15 DE ABRIL 2021 </h3></center>
                    <br>

 <div class="card">     
         <div class="card-body">
 <table class="default">
  <tr>

    <td><img  style="max-width: 50%"  class="img-fluid mt-4" src="https://i.imgur.com/OF38uTK.png" alt="PlanXS"></td>

    <td class="text-center" colspan="3">
        <h6>PROMOCION EXCLUSIVA <strong  class="text-danger  text-center">MIGRACION</strong>    </h6>
      <div style="background:#d7dbdb;">  <BR><h6>MIGRATE A CLARO Y DISFRUTA DE NUESTRO PLAN XS </h6>
        <h6 class="text-danger  text-center">CON EL DOBLE DE GIGAS POR UN AÑO    </h6></div>
        <p>Plan XS con doble de GB, aplica exclusivamente para la modalidad de <strong>Migracion.</strong><br>Oferta aplica a todos los canales de Venta</p>

    </td>
  </tr>
  </table>
</div>
</div>



                </center>
               <!-- <p class="text-white"> <h3>
                    8GB + 300 MIN + 100 SMS Desde $4.990 Oferta Limitada para Portabilidad Prepagos y Planes.
                </h3></p>-->
                <br>
<br>
<br>
                <div class="fila1">
                <center style="background:#d7dbdb;"><BR><h3 class="text-danger">
                    SI PORTAS SOLO UNA LINEA  <h4 class="text-black ">
                    DISFRUTA DEL DOBLE DE GB </h4> </h3></center>
                    <br>
                <center>

                      <center ><h3 class="text-black">
                    PORTATE A CLARO Y LLEVATE UN PLAN  <h4 class="text-danger ">
                    MAX LIBRE DESDE $10.990 MENSUALES </h4> </h3></center>
                    <br>
                <center>
            <div class="card">     
         <div class="card-body">


    <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
      <!--  <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>-->
        <!--<li data-target="#myCarousel" data-slide-to="9"></li>-->
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
            <img src="https://i.imgur.com/x9S2FSj.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/whgH91n.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/LoBs9pX.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/xX5SEJt.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/CmmiqSh.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/fFBy9Vi.png" alt="">
        </div>
        <!--<div class="item">
            <img src="https://http2.mlstatic.com/D_NQ_NP_984738-MLC45362014336_032021-O.webp" alt="">
        </div>
        <div class="item">
            <img src="https://http2.mlstatic.com/D_NQ_NP_630036-MLC45362014339_032021-O.webp" alt="">
        </div>
        <div class="item">
            <img src="https://http2.mlstatic.com/D_NQ_NP_759418-MLC45362014333_032021-O.webp" alt="">
        </div>-->

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
</div>
<br>
<br>
<br>
<div class="fila2">
                <center style="background:#d7dbdb;"><BR><h3 class="text-danger">
                    SI PORTAS DOS O MAS LINEAS <h4 class="text-black "><br>
                    TE DAMOS X2 + DOBLE DE GB, AMBOS X 1 AÑO </h4> </h3></center>
                    <br>
                <center>
                    <br>
                <center>
            <div class="card">     
         <div class="card-body">


     <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
       <!-- <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>-->
        <!--<li data-target="#myCarousel" data-slide-to="9"></li>-->
    </ol> 

     <div class="carousel-inner">
        <div class="item active">
            <img src="https://i.imgur.com/QoBXz1a.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/Isl8pE9.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/vtxzJmJ.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/eTiGaf2.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/OZkxEBa.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/GqwfsL8.png" alt="">
        </div>
        <div class="item">
            <img src="https://i.imgur.com/W31zVra.png" alt="">
        </div>
       <!-- <div class="item">
            <img src="https://http2.mlstatic.com/D_NQ_NP_630036-MLC45362014339_032021-O.webp" alt="">
        </div>
        <div class="item">
            <img src="https://http2.mlstatic.com/D_NQ_NP_759418-MLC45362014333_032021-O.webp" alt="">
        </div>-->

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
<br>
<br>
    <div class="d-flex justify-content-around align-content-center text-center"> 
      
                    <!-- <span class="text-white  text-center">Mi Cuenta<br>
                     <a class="ml-2" onclick="eventosLanding('Cuenta');" href="https://solvencia.cl/pagadeudas/"><img width="60" src="https://image.freepik.com/foto-gratis/lupa_172429-232.jpg"></a></span>-->
                         <span class="text-warning  text-center">WhatsApp<br>
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56975890470&text=Hola"><img width="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/240px-WhatsApp.svg.png"></a></span>
                       <span class="text-warning  text-center">Teléfono<br>
                    <a class="ml-2" onclick="eventosLanding('Llamar');" href="tel:+56975890470"><img width="50" src="https://image.freepik.com/vector-gratis/mano-humana-sosteniendo-telefono-movil_74855-6532.jpg"></a></span>
                       <span class="text-warning  text-center">Correo<br>
                    <a class="ml-2" onclick="eventosLanding('Correo');" href="mailto:angelo.castillo@solvencia.cl"><img width="50" src="https://image.freepik.com/psd-gratis/monitor-escritorio-3d-correo_23-2148938933.jpg"></a></span>
                    <span class="text-warning  text-center">Chat en Linea<br>
                     <a class="ml-2" onclick="eventosLanding('Pago en Linea');" href="https://claro.solvencia.cl/schat/ingresoFormulario/chatMovil"><img width="50" src="https://i.imgur.com/vXAWUfn.jpg"></a></span>
                </div>
<br>
<br>
<br>
                 <center> <img style="max-width: 100%"  class="img-fluid col-10 col-md-3 mt-4" src="https://i.imgur.com/8L2dAzh.png" alt="simple"></center>
</div>
                   <!--  <button onclick='activa();' class="btn bg-danger text-white col-12 mt-4">REVISA PLANES PORTABILIDAD</button>

                      <button onclick='activa1();' class="btn bg-danger text-white col-12 mt-4">REVISA PLANES LINEAS NUEVAS</button>
                <p class="text-white"> <h3 class="text-danger">
                    Ingresa tus datos y te despachamos el chip GRATIS! </h3>
                </p>
-->
                <br>
           <!-- <a onclick="eventosLanding('Whatsapp'); Mens1();" class="btn bg-danger text-white col-12 mt-2">WHATSAPP</a>
            <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-danger text-white col-12 mt-2">LLÁMANOS</a>
            <a onclick="Mens3();" class="btn bg-danger text-white col-12 mt-2">TE LLAMAMOS</a>
            <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-danger text-white col-12 mt-2">ESCRÍBENOS</a>-->
               </div>
                           <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
            </div>


            <div  id="cont7" class="p-2 pl-3 pr-3 hide"> <center>
               
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/oz5xXYM.png" alt="simple">

                <br>
                <a onclick="port1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple">            

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                <br>
                <a onclick="port3();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port4();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>  
              
           </center>
           <br>
               <a onclick="p0();" class="btn bg-ligth text-danger col-12 mt-2"><strong>ATRAS</strong></a>
            </div>

            <div  id="cont6" class="p-2 pl-3 pr-3 hide"> 
                <center>
                
                <!--<img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VJDOJhs.png" alt="simple">-->
                
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/m6xIKPD.png" alt="simple">

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/NK81GiD.png" alt="simple">
                <br>
               <!-- <a onclick="nuev1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>-->

                <a onclick="nuev2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="nuev3();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/7HsoOHi.png" alt="simple">

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TYJ7maf.png" alt="simple"> <br>
                <br>
                

                <a onclick="nuev4();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="nuev5();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                
                
                
                </center> <br>
               <a onclick="p0();" class="btn bg-ligth text-danger col-12 mt-2"><strong> ATRAS </strong></a>

            </div>
<!-- PORTABILIDAD-->
            <div id="form" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body"> <center>
                        <div id="port1" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VpN3RT0.png" alt="simple">
                        </div> 
                        <div id="port2" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/oz5xXYM.png" alt="simple">
                        </div>
                        <div id="port3" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/nIKsFm0.png" alt="simple"> 
                        </div>
                        <div id="port4" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/IUGXSOF.png" alt="simple">
                        </div>

                        <div id="nuev1" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VJDOJhs.png" alt="simple">
                        </div>
                        <div id="nuev2" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/m6xIKPD.png" alt="simple">
                        </div>
                        <div id="nuev3" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/NK81GiD.png" alt="simple">
                        </div>
                        <div id="nuev4" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/7HsoOHi.png" alt="simple">
                        </div>
                        <div id="nuev5" class="p-2 pl-3 pr-3 hide">
                        <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/TYJ7maf.png" alt="simple">
                        </div></center>
                    <div class="d-flex justify-content-between">

                    <div class="md-form col-6  m-0">
                      <input type="text" id="rut" class="form-control" required placeholder="RUT">
                      <input type="hidden" id="nombre1" class="form-control" required placeholder="nombre">
                      <label for="form2"></label>
                    </div>
                    
                    
                    
                    <div class="md-form col-6  m-0">
                      <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                      <label for="form2"></label>
                    </div>
                  </div> 
                  <div id="actual" class="md-form hide">
                      <select class="form-control" id="valor01" required>
                  <option value="" data-select2-id="1">compañia actual</option>
                  <option value="CLARO" data-select2-id="1">CLARO</option>
                  <option value="ENTEL" data-select2-id="1">ENTEL</option>
                  <option value="MOVISTAR" data-select2-id="2">MOVISTAR</option>
                  <option value="WOM" data-select2-id="3">WOM</option>
                  <option value="VIRGIN" data-select2-id="4">VIRGIN</option>
                  <option value="VTR" data-select2-id="5">VTR</option>
                   <option value="OTRA" data-select2-id="6">OTRA</option>
                    </select>
                  </div>
                  <div id="nuevo" class="md-form hide">
                      <select class="form-control" id="valor" required>
                  <option value="1" data-select2-id="1">1</option>
                  <option value="2" data-select2-id="2">2</option>
                  <option value="3" data-select2-id="3">3</option>
                  <option value="4" data-select2-id="4">4</option>
                  <option value="5" data-select2-id="5">5</option>

                    </select>
                  </div>
                   <div id="port11" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 1'); eventosLanding('PORTABILIDAD PLAN 1');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port22" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 2'); eventosLanding('PORTABILIDAD PLAN 2');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port33" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 3'); eventosLanding('PORTABILIDAD PLAN 3');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="port44" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('PORTABILIDAD PLAN 4'); eventosLanding('PORTABILIDAD PLAN 4');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>

                    <div id="nuev11" class="p-2 pl-3 pr-3 hide">
                    <button  onclick="sendMail('LINEA NUEVA PLAN 1'); eventosLanding('LINEA NUEVA PLAN 1');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev22" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 2'); eventosLanding('LINEA NUEVA PLAN 2');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev33" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 3'); eventosLanding('LINEA NUEVA PLAN 3');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev44" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 4'); eventosLanding('LINEA NUEVA PLAN 4');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="nuev55" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('LINEA NUEVA PLAN 5'); eventosLanding('LINEA NUEVA PLAN 5');" class="btn bg-danger text-white col-12 mt-4">SOLICITAR</button>
                    </div>
                    <div id="CONT" class="p-2 pl-3 pr-3 hide">
                     <button  onclick="sendMail('DESEO QUE ME LLAMEN'); eventosLanding('Contacto');" class="btn bg-danger text-white col-12 mt-4">CONTACTAR</button>
                    </div>
                
            </div>



        </div>
        <br>
        <a onclick="p0();" class="btn bg-ligth text-danger col-12 mt-2"><strong>ATRAS</strong></a>
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
                    'Datos_Formulario': $('#nombre1').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Chips': $('#valor').val(),
                    'Compañia': $('#valor01').val(),
                    //'Datos_URL': $('#nombre1').val(),
                    //'Nombre_URL': getUrlParameter('nombre'),
                    //'Telefono_URL': getUrlParameter('telefono'),
                    //'Rut_URL': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Chips': $('#valor').val(),
                    'landing': '{!! $landing->name !!}'
                } 
            }

           var correo = ["angelo.castillo@solvencia.cl"];
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
                     $('#cont7').addClass('hide');
                     $('#cont6').addClass('hide');
                     $('#port4').addClass('hide');
                     $('#port3').addClass('hide');
                     $('#port2').addClass('hide');
                     $('#port1').addClass('hide');
                     $('#nuev5').addClass('hide');
                     $('#nuev4').addClass('hide');
                     $('#nuev3').addClass('hide');
                     $('#nuev2').addClass('hide');
                     $('#nuev1').addClass('hide');
                     $('#form').addClass('hide');
                     $('#actual').addClass('hide');
                     $('#cont3').removeClass('hide');
                     $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');

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


     function Mens1(){
   window.location.href = "https://api.whatsapp.com/send?phone=56975890470&text=Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
        } 


    function Mens2(){
         var body_message = "Quiero%20tener%20mas%20informacion%20sobre%20el%20servicio%20de%20Portabilidad";
             window.location.href = "mailto:angelo.castillo@solvencia.cl ?subject=Portabilidad%20Claro&body"+body_message;
 }


  function Mens3(){
        $('#cont2').addClass('hide');
        $('#form').removeClass('hide'); 
        $('#CONT').removeClass('hide');
        $('#actual').addClass('hide');

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
    $('#cont3').addClass('hide');
    $('#CONT').addClass('hide');
 }



    </script>
    

@endsection