@extends('layouts.landing')

@section('title', 'CLARO MOVIL')

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
      

    <div>
     
    </ol> 

     
    </a>
    </div>
    </div>
    </div>
    </center>

<a onclick="sendMail('Quisiera agendar'); eventosLanding('AGENDAR'); return false;">

    <center><img width="100%" src="https://imgur.com/Y3Sw6ay.jpg"></center>
</a>

                 <br>

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

           var correo = ["eduardo.binteraction@gmail.com"];
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
                     $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted.');

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