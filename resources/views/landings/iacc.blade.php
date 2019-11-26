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
            

            <a target="_blank" href="https://www.iacc.cl/" class="btn bg-success text-white col-8 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            <div id="cont1" class="p-3 ">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                  <h4 class="green-text text-center">
                    <strong>¿TIENES CONSULTAS?
                    NOSOTROS TE AYUDAMOS</strong>
                  </h4>
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
<option value="">Selecciona tu carrera </option>

<option value="Administración Pública">Administración Pública </option>
<option value="Programa Continuidad Administración Pública">Programa Continuidad Administración Pública </option>
<option value="Técnico de Nivel Superior en Ciberseguridad">Técnico de Nivel Superior en Ciberseguridad </option>
<option value="Técnico Superior en Administración de Empresas">Técnico Superior en Administración de Empresas </option>
<option value="Técnico Superior en Administración de Empresas Mención Contabilidad y Finanzas">Técnico Superior en Administración de Empresas Mención Contabilidad y Finanzas </option>
<option value="Técnico Superior en Administración de Empresas Mención Recursos Humanos">Técnico Superior en Administración de Empresas Mención Recursos Humanos </option>
<option value="Técnico Superior en Administración de Empresas Mención Logística y Operaciones">Técnico Superior en Administración de Empresas Mención Logística y Operaciones </option>
<option value="Técnico Superior en Administración de Empresas Mención Marketing y Ventas">Técnico Superior en Administración de Empresas Mención Marketing y Ventas </option>
<option value="Técnico de Nivel Superior en Educador Social Infantojuvenil">Técnico de Nivel Superior en Educador Social Infantojuvenil </option>
<option value="Técnico de Nivel Superior en Trabajo Social">Técnico de Nivel Superior en Trabajo Social </option>
<option value="Contabilidad General">Contabilidad General </option>
<option value="Contador Auditor">Contador Auditor </option>
<option value="Carrera Profesional Trabajo Social">Carrera Profesional Trabajo Social </option>
<option value="Ingeniería en Administración de Empresas">Ingeniería en Administración de Empresas </option>
<option value="Ingeniería en Recursos Humanos">Ingeniería en Recursos Humanos </option>
<option value="Ingeniería en Prevención de Riesgos">Ingeniería en Prevención de Riesgos </option>
<option value="Ingeniería en Informática">Ingeniería en Informática </option>
<option value="Ingeniería Industrial">Ingeniería Industrial </option>
<option value="Programa de Continuidad a Trabajo Social">Programa de Continuidad a Trabajo Social </option>
<option value="Programa de Continuidad Ingeniería en Administración de Empresas">Programa de Continuidad Ingeniería en Administración de Empresas </option>
<option value="Programa de Continuidad Ingeniería en Recursos Humanos">Programa de Continuidad Ingeniería en Recursos Humanos </option>
<option value="Programa de Continuidad Ingeniería en Prevención de Riesgos">Programa de Continuidad Ingeniería en Prevención de Riesgos </option>
<option value="Programa de Continuidad en Contador Auditor">Programa de Continuidad en Contador Auditor </option>
<option value="Programa de Continuidad para Ingeniería en Informática">Programa de Continuidad para Ingeniería en Informática </option>
<option value="Programa de Continuidad a Ingeniería Industrial">Programa de Continuidad a Ingeniería Industrial </option>
<option value="Técnico de Nivel Superior en Administración Pública">Técnico de Nivel Superior en Administración Pública </option>
<option value="Técnico de Nivel Superior en Logística">Técnico de Nivel Superior en Logística </option>
<option value="Técnico de Nivel Superior en Recursos Humanos">Técnico de Nivel Superior en Recursos Humanos </option>
<option value="Técnico Superior Prevención de Riesgos">Técnico Superior Prevención de Riesgos </option>
<option value="Técnico de Nivel Superior en Control Industrial">Técnico de Nivel Superior en Control Industrial </option>
<option value="Técnico de Nivel Superior en Gestión de Calidad y Ambiente">Técnico de Nivel Superior en Gestión de Calidad y Ambiente  </option>
<option value="Técnico de Nivel Superior en Procesos Mineros">Técnico de Nivel Superior en Procesos Mineros </option>
<option value="Técnico de Nivel Superior en Informática">Técnico de Nivel Superior en Informática </option>
<option value="Técnico de Nivel Superior Analista Programador Computacional">Técnico de Nivel Superior Analista Programador Computacional </option>
<option value="Técnico de Nivel Superior en Administración de Redes">Técnico de Nivel Superior en Administración de Redes </option>
<option value="Técnico de Nivel Superior en Trabajo Social">Técnico de Nivel Superior en Trabajo Social </option>
<option value="Técnico de Nivel Superior en Automatización y Control">Técnico de Nivel Superior en Automatización y Control </option>
<option value="Técnico de Nivel Superior en Educación Diferencial">Técnico de Nivel Superior en Educación Diferencial </option>
<option value="Técnico de Nivel Superior en Educación Parvularia">Técnico de Nivel Superior en Educación Parvularia </option>
<option value="Técnico de Nivel Superior Ambiental y Gestión Energética">Técnico de Nivel Superior Ambiental y Gestión Energética  </option>
<option value="Técnico Jurídico">Técnico Jurídico </option>
<option value="Psicopedagogía">Psicopedagogía </option>
<option value="Ingeniería en Gestión de Calidad y Ambiente">Ingeniería en Gestión de Calidad y Ambiente </option>
<option value="Programa de Continuidad de Ingeniería en Gestión de Calidad y Ambiente">Programa de Continuidad de Ingeniería en Gestión de Calidad y Ambiente </option>   
  <option value="Técnico de Nivel Superior en Telecomunicaciones">Técnico de Nivel Superior en Telecomunicaciones </option>
</select>

                 
                  <div class="text-center">
                    <hr>
                    <button class="btn bg-success text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>
                    
                  </div>
                    </div>
                        </div>
               
            </div>
            <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-green text-center mt-3 hide"></h5>
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