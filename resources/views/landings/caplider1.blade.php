@extends('layouts.landing')

@section('title', 'Cursos Gratis')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>
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
  font-weight: 300;
}
.card .md-form label {
  font-weight: 280;
}

.oscurecer {
  background-image: 
    linear-gradient(
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    )
    }
</style>
    <div  >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-80">
            <!--<img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="USS">-->
            <img style="max-width: 70%" class="img-fluid col-md-3 mt-2" src="https://firebasestorage.googleapis.com/v0/b/biqon-d2511.appspot.com/o/landings%2Flogos%2F1617974764515_unnamed%20(2).png?alt=media&token=28e9512a-8472-434e-98ad-0066598bd2af" alt="USS">
            

           <!-- <a target="_blank" href="https://www.advance.uss.cl/?utm_source=google&utm_medium=search&utm_campaign=advance&utm_term=generico&utm_content=nacional&gclid=EAIaIQobChMIsLn10Z-e4wIVFwSRCh0QaAqIEAAYASAAEgJdNvD_BwE" class="btn bg-danger text-white col-8 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>-->
            

            <div id="cont2" class="p-3 ">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                  <center>
                 <img style="max-width: 70%" src="https://firebasestorage.googleapis.com/v0/b/biqon-d2511.appspot.com/o/landings%2Fimages%2F1617974797548_unnamed%20(1).png?alt=media&token=7947eebf-7b18-4e7f-8b0c-bd69498be9fa">
                 </center> <hr>
                   <div>
                   <center>

                   <h5>Inscríbete con nosotros y automatiza procesos de tu emprendimiento, La metodología personalizada a utilizar durate toda la realización del curso, es completamente práctica y fomentando siempre la participación activa de cada uno de los alumnos. Los requisitos son:  </h5>
                    <h5>-Ser dueños, socios,representantes legales o trabajadores de una micro empresa </h5>
                   <h5>-Tener al menos una declaración de IVA con enta en los últimos 12 meses</h5></center>
                 </div>
                 <br>
                 <a onclick="Mens(); return false;" class="btn bg-warning text-white col-12 mt-2"><h4>Mostar</h4></a>
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

                     <div id="cont3" class="p-5 hide">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                  <center>
                 <img style="max-width: 70%" src="https://firebasestorage.googleapis.com/v0/b/biqon-d2511.appspot.com/o/landings%2Fimages%2F1617974797548_unnamed%20(1).png?alt=media&token=7947eebf-7b18-4e7f-8b0c-bd69498be9fa">
                 </center>
                  <div class="d-flex justify-content-between  m-0">
                    <div class="md-form col-6  m-0">
                      <input type="text" id="nombre" class="form-control" required placeholder="Nombre">
                    <input type="hidden" id="nombre1" class="form-control" required placeholder="nombre">
                      <label for="form3"></label>
                    </div>
                    <div class="md-form col-6  m-0">
                      <input type="text" id="apellido" class="form-control" required placeholder="Apellido">
                      <label for="form2"></label>
                    </div>
                  </div>
                  
                 <div class="d-flex justify-content-between">

                    <div class="md-form col-6  m-0">
                      <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                      <label for="form2"></label>
                    </div>

                    <div class="md-form col-6 m-0">
                    <input type="text" id="email" class="form-control" required placeholder="E-mail">
                    <label for="form2"></label>
                  </div> 
                  </div> 


  

                  <div class="text-center">
                    <hr>
                    <button class="btn btn-danger text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Inscribir</button>
                    
                  </div>
                </div>
                 </div>
                  </div>


            <div id="cont4" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-grey text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-around align-content-center mt-4"> 
               <!-- <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://wa.me/56930132218"><img width="60" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>-->

                <a class="ml-2" onclick="eventosLanding('FACEBOOK');" href="https://facebook.com/lidercapacitaciones"><img width="50" src="https://i.imgur.com/1MMbEAw.png"></a>
                   
                <a class="ml-4" onclick="eventosLanding('WHATSAPP');" href="https://api.whatsapp.com/send?phone=56946954910&text=Hola,%20tengo%20una%20consulta"><img width="50" src="https://i.imgur.com/zwRWdi8.png"></a>

                <a class="ml-4" onclick="eventosLanding('INSTAGRAM');" href="https://www.instagram.com/lidercapacitaciones/"><img width="50" src="https://i.imgur.com/DVoiS58.png"></a>
                   
                    
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

            //json_datos.nombre = $('#nombre').val();
            //json_datos.apellido = $('#apellido').val();
            //json_datos.rut = $('#rut').val();
            //json_datos.telefono = $('#telefono').val();
            //json_datos.correo = $('#email').val();
            //json_datos.correo = $('#sede').val();
            //json_datos.carrera =  $('#carrera').val();


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
                    'Nombre': $('#nombre').val(),
                    'Apellido': $('#apellido').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'E-mail': $('#email').val(),
                    'Datos_URL': $('#nombre1').val(),
                    'Nombre_URL': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono_URL': getUrlParameter('telefono'),
                     'Rut_URL': getUrlParameter('rut')  
                     'landing': '{!! $landing->name !!}'         
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': getUrlParameter('nombre'),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'mariavictoria.rojas@uss.cl'
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
                     $('#cont3').addClass('hide');
                    $('#cont4').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont3').addClass('hide');
                    $('#cont4').removeClass('hide');
                    $('#message').text('Gracias, Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
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

      
        
     function Mens2(){
       var id_adm; 
         id_adm= getUrlParameter('Telefono'); 
         var rut; 
         rut= getUrlParameter('rut');

        // var body_message = "%3C%2Fbr%3E Estimado paciente,%3C%2Fbr%3E favor envíe su consulta relacionada al pago de su cuenta hospitalaria. %3C%2Fbr%3E Saludos cordiales %3C%2Fbr%3E %3C%2Fbr%3E Atte. Contact Center %3C%2Fbr%3E Clínica Dávila %3C%2Fbr%3E Fono: 22730800 opción 2";

         var body_message = "Estoy%20Interesado%20en%20conocer%20los%20cursos%20el%20gratis";

   window.location.href = "mailto:enrique.binteraction@gmail.com?subject=Consulta%20Cursos%20Advance%20&body=Telefono:%20"+id_adm+"%20RUT:%20"+rut+" "+body_message;

 }

 function Mens(){
              $('#cont2').addClass('hide');
                $('#cont3').removeClass('hide'); 
        }  

    </script>
    

@endsection