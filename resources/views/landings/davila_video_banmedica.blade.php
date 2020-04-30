@extends('layouts.landing')

@section('title', 'CLINICA DAVILA')

@section('content')
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

   <!-- <div id="CLINICA_DAVILA" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

     <div class="opaco">

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="CLINICA_DAVILA">
            
           
                    <div id="cont1" class="p-2 pl-5 pr-5 ">
                         <div class="card">
                        <div class="card-body">
                        <h5 class="text-grey text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h5>
                        <input id="rut" type="number" class="form-control mt-4 text-center text-grey">
                        <button onclick="event1(); return false;" class="btn bg-primary text-white col-12 mt-4">Validar</button>
                       </div>
                       </div> 
                    </div>


                     <div id="cont5" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                 <h5 id="error"class="text-black text-center mt-5"></h5>
                            </div>
                        </div>
                    </div>
                  
                    <div id="cont2" class=" hide">
                        <div class="card">     
                            <div class="card-body">
                                <h3 class="text-grey text-center"> Estimado(a) <strong> Paciente <!-- <span id="name"></span> --></strong> </h3> <center>
                                <p class="text-white"> <h4> 
                                 Clinica Davila te informa que puedes acceder a la página web de tu isapre para comprar tus bonos GES</h4> <br> <h5>Mira como, en el siguiente vídeo </h5></p> </center>
                                </div>
                              </div>

                            <div class="videoWrapper">        
                            <iframe width="380" height="300" src="{{asset('/files/cdavilabanmedica.mp4')}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                              <div class="card">     
                            <div class="card-body">

                                <p> <h5> El N° de admisión correspondiente a su cuenta es:  </h5> <h5 id="dato1" class="dato1"> </h5></p> 
                              
                                <h4 class="text-grey text-center"> Seleccione una Opcion </h4>

                              <!-- <button onclick="Mens1(); eventosLanding('Pagar');" class="btn bg-primary text-white col-12 mt-2">PAGAR
                                </button>-->
                              <center>
                                 <a onclick="eventosLanding('Llamar'); Mens();" class="btn bg-primary text-white col-10 mt-2">LLÁMANOS</a>

                                  <a onclick="eventosLanding('Correo'); Mens2();" class="btn bg-primary text-white col-10 mt-2">ESCRÍBENOS</a>
                              </center>
                               <!--<div class="d-flex justify-content-around align-content-center mt-4">
                                    <a onclick='Mens1(); eventosLanding("Pagar"); '>
                                    <img width="150" src="https://i.imgur.com/2MYzfWg.png"></a>
                                </div>-->

                                
                               </div>
                            </div>  
                        </div>
                    <!--</div-->          
             
                    <div id="cont3" class="p-2 pl-5 pr-5 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
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
                    'Mensaje': msg,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Liquidacion': getUrlParameter('data2'),
                    'Clasificacion': getUrlParameter('data3'),
                    'Cuentas': getUrlParameter('data5'),
                    'Landing': '{!! $landing->name !!}'
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    'Nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                    'Id_Admision': getUrlParameter('data1'),
                    'Liquidacion': getUrlParameter('data2'),
                    'Clasificacion': getUrlParameter('data3'),
                    'Cuentas': getUrlParameter('data5'),
                    'Landing': '{!! $landing->name !!}'
                } 
            }
             var correo = ["francis.Castillo@davila.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
               // 'email': '{!! $landing->email !!}'
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
             title: `Para Comunicarse, seleccione la opcion 2`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "tel:+56227308000";
        })


        } 
        
       function Mens1(){
    var id_adm; 
         id_adm= getUrlParameter('data1'); //1234;
          
            swal({
               title: `Para Pagar Online Expandir la Pantalla, Ingrese su RUT y su ID admisión es N° ${id_adm}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "http://solucionesweb.clinicadavila.cl/Cta001cW/PagoCuentas/Login.aspx/";
        })


        } 


    /* function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut'); 
   window.location.href = "mailto:infopagatucuenta@davila.cl?subject=Pago%20de%20Cuenta&body=Id Admision: "+id_adm+"   RUT:  "+rut;
        } */


          function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('data1'); 
         var rut; 
         rut= getUrlParameter('rut');

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "%0A%20Estimado%20paciente,%0A%20favor%20env%C3%ADe%20su%20consulta%20relacionada%20al%20pago%20de%20su%20cuenta%20hospitalaria.%20%0A%20Saludos%20cordiales%20%0A%20%0A%20Atte.%20Contact%20Center%20%0A%20Cl%C3%ADnica%20D%C3%A1vila%20%0A%20Fono:%2022730800%20opci%C3%B3n%202";

   window.location.href = "mailto:francis.Castillo@davila.cl?subject=Pago%20de%20Cuenta%20&body=Id_Admision:%20"+id_adm+"%20RUT:%20"+rut+" "+body_message;

 }
    </script>
    

@endsection
