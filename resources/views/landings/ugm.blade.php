@extends('layouts.landing')

@section('title', 'UGM')

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
  background-color: #6610f2;
  border: 0;
  font-weight: 400;
}
.card[class*=border] {
  border: 1px solid #007bff;
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
  color: #007bff;
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
   <!-- <div id="UGM" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >-->

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-80">
            <!--<img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="USS">-->
            <img style="max-width: 40%" class="img-fluid col-md-12 mt-2" src="https://ricardo.qa.agenciafenomena.cl/ugm/wp-content/uploads/2020/04/favicon-ugm-full.png" alt="UGM">

           <!-- <a target="_blank" href="https://www.advance.uss.cl/?utm_source=google&utm_medium=search&utm_campaign=advance&utm_term=generico&utm_content=nacional&gclid=EAIaIQobChMIsLn10Z-e4wIVFwSRCh0QaAqIEAAYASAAEgJdNvD_BwE" class="btn bg-danger text-white col-8 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>-->

            <div id="cont1" class="p-3 ">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                 <h4 class="text-danger text-center">
                    <strong>ADMISION OCTUBRE 2020</strong>
                  </h4>
                 <h4 class="dark-grey-text text-center">
                    <strong>INGRESA TUS DATOS Y TE CONTACTAREMOS A LA BREVEDAD</strong>
                  </h4>
                  <hr>

                  <div class="d-flex justify-content-between  m-0">
                    <div class="md-form col-6  m-0">
                      <label for="form3" class="text-white">Nombre</label>
                      <input type="text" id="nombre" class="form-control" required placeholder="">
                    <input type="hidden" id="nombre1" class="form-control" required placeholder="nombre">
                      
                    </div>
                    <div class="md-form col-6  m-0">
                      <label for="form2" class="text-white">Apellido</label>
                      <input type="text" id="apellido" class="form-control" required placeholder="">
                      
                    </div>
                  </div>
                  <br>
                 <div class="d-flex justify-content-between">

                    <div class="md-form col-6  m-0">
                      <label for="form2" class="text-white">RUT</label>
                      <input type="text" id="rut" class="form-control" required placeholder="RUT">
                      
                    </div>
                    <div class="md-form col-6  m-0">
                      <label for="form2" class="text-white">Teléfono</label>
                      <input type="text" id="telefono" class="form-control" required placeholder="">
                      
                    </div>
                  </div> 

 <br>
                  <div class="md-form col-12 m-0">
                    <label for="form2" class="text-white">Email</label>
                    <input type="text" id="email" class="form-control" required placeholder="E-mail">
                    
                  </div>  
<br> <br>
           
                <select name="select_carreras" class="form-control" id="carrera" required>
<option value="0">Seleccionar Carrera</option>
<option value="Psicología">Psicología</option>
<option value="Ingeniería Comercial">Ingeniería Comercial</option>
<option value="Ingeniería Civil Industrial">Ingeniería Civil Industrial</option>
<option value="Administración Pública">Administración Pública</option>
<option value="Ingeniería en Administración de Empresas Mención Comercio Internacional">Ingeniería en Administración de Empresas Mención Comercio Internacional</option>
<option value="Ingeniería en Administración de Empresas Mención Gestión de Personas">Ingeniería en Administración de Empresas Mención Gestión de Personas</option>
<option value="Ingeniería en Administración de Empresas Mención Finanzas Corporativas y Control de Gestión">Ingeniería en Administración de Empresas Mención Finanzas Corporativas y Control de Gestión</option>
<option value="Ingeniería en Administración de Empresas Mención Marketing Digital">Ingeniería en Administración de Empresas Mención Marketing Digital</option>
<option value="Ingeniería en Computación e Informática Mención Desarrollo de Aplicaciones Empresariales y Ciberseguridad">Ingeniería en Computación e Informática Mención Desarrollo de Aplicaciones Empresariales y Ciberseguridad</option>
<option value="Ingeniería en Computación e Informática Mnción Gestión de Proyectos – PMO">Ingeniería en Computación e Informática Mención Gestión de Proyectos – PMO</option>
<option value="Ingeniería en Computación e Informática Mención Redes e Infraestructura">Ingeniería en Computación e Informática Mención Redes e Infraestructura</option>
<option value="Ingeniería Industrial Mención Diseño de Productos">Ingeniería Industrial Mención Diseño de Productos</option>
<option value="Ingeniería Industrial Mención Gestión de Operaciones">Ingeniería Industrial Mención Gestión de Operaciones</option>
<option value="Ingeniería Industrial Mención Logística y Transporte">Ingeniería Industrial Mención Logística y Transporte</option>
<option value="Trabajo Social">Trabajo Social</option>
<option value="Licenciatura en Trabajo Social">Licenciatura en Trabajo Social</option>
        </select>
                  </div>

                  <div class="text-center">
                    <hr>
                    <button class="btn bg-primary text-white col-10 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;"> Quiero saber mas</button>
                    
                  </div>
              </div>
               </div>
               
                <div class="text-center">
              <button onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56956889198&text=Hola,%20tengo%20una%20consulta" class="btn bg-primary text-white col-10 mt-4"><img width="30" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"> Contactanos</button>
            
             <!-- <a onclick="eventosLanding('Correo');Mens2();" class="btn bg-danger text-white col-12 mt-4"><img width="30" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"> Escríbenos</a>-->
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
                   /// $('#dato1').text(id_adm);
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
                    'Sede': $('#sede').val(),
                    'Carrera': $('#carrera').val(),
                    'Datos_URL': $('#nombre1').val(),
                    'Nombre_URL': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono_URL': getUrlParameter('telefono'),
                     'Rut_URL': getUrlParameter('rut')
                    // '': getUrlParameter('data1'),               
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    //'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                 //   'Id_Admision': getUrlParameter('data1'),
                 //   'Prevision': getUrlParameter('data2'),
                 //   'Estado': getUrlParameter('data3'),
                 //   'Ley': getUrlParameter('data4'),
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
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Solicitud Fue enviada a nuestra área. Nos pondremos en contacto con usted en los próximos días');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
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

         var body_message = "Estoy%20Interesado%20en%20conocer%20mas%20sobre%20el%20Programa%20Advance";

   window.location.href = "mailto:mariavictoria.rojas@uss.cl?subject=Consulta%20Cursos%20Advance%20&body=Telefono:%20"+id_adm+"%20RUT:%20"+rut+" "+body_message;

 }
    </script>
    

@endsection