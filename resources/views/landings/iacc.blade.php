@extends('layouts.landing')

@section('title', 'IACC')

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
    <div id="IACC" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat:repeat;" >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="IACC">
            
                 
             <!--<a target="_blank" href="https://www.iacc.cl/" class="btn bg-success text-white col-8 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>-->

            <div id="cont1" class="p-3 ">
              <br>
              <br>
              <br>
              <br>
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                 
                  <h5 class="text-grey text-center">
                    <strong>¿TIENES CONSULTAS?</strong>
                    NOSOTROS TE AYUDAMOS
                  </h5>
                  <hr>

                  <div class="d-flex justify-content-between  m-0">
                    <div class="md-form col-6  m-0">
                      <input type="text" id="nombre" class="form-control" required placeholder="Nombre">
                      <label for="form3"></label>
                    </div>
                    <div class="md-form col-6  m-0">
                      <input type="text" id="apellido" class="form-control" required placeholder="Apellido">
                      <label for="form2"></label>
                    </div>
                  </div>
                  
                 <div class="d-flex justify-content-between">

                    <div class="md-form col-6  m-0">
                      <input type="text" id="rut" class="form-control" required placeholder="RUT">
                      <label for="form2"></label>
                    </div>
                    <div class="md-form col-6  m-0">
                      <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                      <label for="form2"></label>
                    </div>
                  </div> 


                  <div class="md-form col-12 m-0">
                    <input type="text" id="email" class="form-control" required placeholder="E-mail">
                    <label for="form2"></label>
                  </div>  

                  <div class="md-form">
                    <select class="form-control" id="carrera" required>
 <option value="">Selecciona aqu&iacute;</option>

  <option value="Diplomado de Control y Gesti&oacute;n de Operaciones">Diplomado de Control y Gesti&oacute;n de Operaciones</option>
  <option value="Diplomado en Prevenci&oacute;n de Riesgos, Gesti&oacute;n en Seguridad y Salud Ocupacional">Diplomado en Prevenci&oacute;n de Riesgos, Gesti&oacute;n en Seguridad y Salud Ocupacional</option>
  <option value="Diplomado en Big Data">Diplomado en Big Data</option>
  <option value="Diplomado Gesti&oacute;n en Riesgos (ISO 31.000) y Auditor&iacute;a (ISO 19.011)">Diplomado Gesti&oacute;n en Riesgos (ISO 31.000) y Auditor&iacute;a (ISO 19.011)</option>
  <option value="Diplomado en Tecnolog&iacute;a Educativa">Diplomado en Tecnolog&iacute;a Educativa</option>
  <option value="Diplomado en Implementaci&oacute;n de Sistemas de Gesti&oacute;n Energ&eacute;tica (ISO 50001:2011)">Diplomado en Implementaci&oacute;n de Sistemas de Gesti&oacute;n Energ&eacute;tica (ISO 50001:2011)</option>
  <option value="Diplomado en Marketing y Ventas">Diplomado en Marketing y Ventas</option>
  <option value="Diplomado en Ciberseguridad">Diplomado en Ciberseguridad</option>
  <option value="Diplomado en Gesti&oacute;n P&uacute;blica">Diplomado en Gesti&oacute;n P&uacute;blica</option>
  <option value="Diplomado en Normas Internacionales de Informaci&oacute;n Financiera IFRS">Diplomado en Normas Internacionales de Informaci&oacute;n Financiera IFRS</option>
  <option value="Diplomado en Gesti&oacute;n de Recursos Humanos por Competencias Laborales">Diplomado en Gesti&oacute;n de Recursos Humanos por Competencias Laborales</option>
  <option value="Diplomado en Gesti&oacute;n de Calidad">Diplomado en Gesti&oacute;n de Calidad</option>
  <option value="Diplomado en Intervenci&oacute;n con Adolescentes por Consumo de Drogas">Diplomado en Intervenci&oacute;n con Adolescentes por Consumo de Drogas</option>
  <option value="Diplomado en Gesti&oacute;n Integral Log&iacute;stica">Diplomado en Gesti&oacute;n Integral Log&iacute;stica</option>
  <option value="Diplomado en Gesti&oacute;n Ambiental">Diplomado en Gesti&oacute;n Ambiental</option>
  <option value="Diplomado en Marketing Digital">Diplomado en Marketing Digital</option>
  <option value="Diplomado en Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos">Diplomado en Formulaci&oacute;n y Evaluaci&oacute;n de Proyectos</option>
  <option value="Diplomado en Intervenci&oacute;n en Maltrato y Abuso Sexual Infantil">Diplomado en Intervenci&oacute;n en Maltrato y Abuso Sexual Infantil</option>
  <option value="Diplomado en Gesti&oacute;n Operativa en Remuneraciones">Diplomado en Gesti&oacute;n Operativa en Remuneraciones</option>
  <option value="Diplomado en Planificaci&oacute;n y Control de Gesti&oacute;n">Diplomado en Planificaci&oacute;n y Control de Gesti&oacute;n</option>
  <option value="Diplomado en Comercio Internacional y Operaciones">Diplomado en Comercio Internacional y Operaciones</option>
  <option value="Diplomado en Gesti&oacute;n de Proyectos Inform&aacute;ticos">Diplomado en Gesti&oacute;n de Proyectos Inform&aacute;ticos</option>
  <option value="Diplomado en Desarrollo de Aplicaciones M&oacute;viles">Diplomado en Desarrollo de Aplicaciones M&oacute;viles</option>
  <option value="Diplomado Peritaje Social">Diplomado Peritaje Social</option>
  <option value="Diplomado de Liderazgo Organizacional y Trabajo en Equipo">Diplomado de Liderazgo Organizacional y Trabajo en Equipo</option>
  <option value="Diplomado Gesti&oacute;n en Seguridad y Salud Ocupacional ISO 45001">Diplomado Gesti&oacute;n en Seguridad y Salud Ocupacional ISO 45001</option>
</select>

                  
                  </div>

                  <div class="text-center">
                    <hr>
                    <button class="btn bg-success text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>
                  </div>
                  <div>
                    <hr>
                    <button class="btn bg-success text-white col-12 mt-4" onclick="eventosLanding('Ir a Web');" href="https://www.iacc.cl/;">Contactame</button>
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

            json_datos.nombre = $('#nombre').val();
            json_datos.apellido = $('#apellido').val();
            json_datos.rut = $('#rut').val();
            json_datos.telefono = $('#telefono').val();
            json_datos.correo = $('#email').val();
            json_datos.carrera =  $('#carrera').val();

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
                    'Nombre': $('#nombre').val(),
                    'Apellido': $('#apellido').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'E-mail': $('#email').val(),
                    'Carrera': $('#carrera').val()                
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
                     $('#cont2').addClass('hide');
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

      
        
    
    </script>
    

@endsection