@extends('layouts.landing')

@section('title', 'UNIACC')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+5 days", $startdate);
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
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
    h4 {
  text-shadow: 1px 1px #000000;
}
.purple {  background-color: #db0780;}
.orange {  background-color: #eb600f;}

</style>
    <div id="UNIACC" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="UNIACC">
            

            <a target="_blank" href="https://www.uniacc.cl/" class="btn bg-primary text-white col-4 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            <a target="_blank" href="https://universidad.uniacc.cl/admision2020#carreras" class="btn purple text-white col-3 mt-4">Carreras
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            <a target="_blank" href="https://universidad.uniacc.cl/admision2020#beca-beneficio" class="btn orange text-white col-3 mt-4">Becas
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            <div id="cont1" class="p-3 ">
                 
                  <!-- Heading -->
                  <h4 class="text-white text-center">
                    <strong>CONOCE NUESTRAS BECAS Y BENEFICIOS
                   </strong>
                   EN UNIACC TE APOYAMOS PARA CRECER Y CREAR JUNTOS EL FUTURO
                  </h4>
                  <hr>
                   <div class="card">     
                <div class="card-body">
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
 <option value="" data-select2-id="0" selected="selected"></option>
  <optgroup label="Postgrado Online">
  <option value="Magíster en Administración de Empresa - MBA(OL)" data-select2-id="1">Magíster en Administración de Empresa - MBA(OL)</option>
  <option value="Magíster en Tecnólogia Educativa E Innovacion (OL)" data-select2-id="2">Magíster en Tecnólogia Educativa E Innovacion (OL)</option>
</optgroup> 
<option value="" data-select2-id=""></option>
  <optgroup label="Postgrado SemiPresencial">
  <option value="Magíster en Building Information Modeling Management - BIM (SP)" data-select2-id="1">Magíster en Building Information Modeling Management - BIM (SP)</option>
  <option value="Magíster en Diseño Arquitectónico Sustentable (SP)" data-select2-id="2">Magíster en Diseño Arquitectónico Sustentable (SP)</option>
  <option value="Magíster en Intervención Sostenible del Patrimonio Cultural Arquitectónico (SP)" data-select2-id="3">Magíster en Intervención Sostenible del Patrimonio Cultural Arquitectónico (SP)</option>
  <option value="Magíster en Paisajismo Urbano (SP)" data-select2-id="4">Magíster en Paisajismo Urbano (SP)</option>
  <option value="Magíster en Estética de Música Popular (SP)" data-select2-id="5">Magíster en Estética de Música Popular (SP)</option>
  <option value="Magíster en Gestión de Proyectos Artísticos (SP)" data-select2-id="6">Magíster en Gestión de Proyectos Artísticos (SP)</option>
  <option value="Magíster en Coaching Organizacional (SP)" data-select2-id="7">Magíster en Coaching Organizacional (SP)</option>
  <option value="Magíster en Derecho de Familia e Intervención Familiar (SP)" data-select2-id="8">Magíster en Derecho de Familia e Intervención Familiar (SP)</option>
  <option value="Magíster en Gestión Estratégica de la Comunicación (SP)" data-select2-id="9">Magíster en Gestión Estratégica de la Comunicación (SP)</option>
  <option value="Magíster en Intervención con Jóvenes y Adolescentes (SP)" data-select2-id="10">Magíster en Intervención con Jóvenes y Adolescentes (SP)</option>
</optgroup>
 <option value="" data-select2-id=""></option>
   <optgroup label="Pregrado Diurno">
  <option value="Arquitectura" data-select2-id="1">Arquitectura</option>
  <option value="Artes Visuales" data-select2-id="2">Artes Visuales</option>
  <option value="Comunicación Audiovisual - Cine" data-select2-id="3">Comunicación Audiovisual - Cine</option>
  <option value="Comunicación Audiovisual - Guiones" data-select2-id="4">Comunicación Audiovisual - Guiones</option>
  <option value="Comunicación Audiovisual - Televisión" data-select2-id="5">Comunicación Audiovisual - Televisión</option>
  <option value="Comunicación Digital - Animación Digital" data-select2-id="6">Comunicación Digital - Animación Digital</option>
  <option value="Comunicación Digital - Diseño y Desarrollo de Videojuegos" data-select2-id="7">Comunicación Digital - Diseño y Desarrollo de Videojuegos</option>
  <option value="Danza y Coreografía" data-select2-id="8">Danza y Coreografía</option>
  <option value="Derecho" data-select2-id="9">Derecho</option>
  <option value="Diseño Gráfico - Especialidad Multimedia" data-select2-id="10">Diseño Gráfico - Especialidad Multimedia</option>
  <option value="Diseño de Imagen - Especialidad Moda" data-select2-id="11">Diseño de Imagen - Especialidad Moda</option>
  <option value="Ingeniería Comercial" data-select2-id="12">Ingeniería Comercial</option>
  <option value="Música e Interpretación" data-select2-id="13">Música e Interpretación</option>
  <option value="Música y Composición" data-select2-id="14">Música y Composición</option>
  <option value="Periodismo" data-select2-id="15">Periodismo</option>
  <option value="Psicología" data-select2-id="16">Psicología</option>
  <option value="Publicidad" data-select2-id="17">Publicidad</option>
  <option value="Teatro y Comunicación Escénica" data-select2-id="18">Teatro y Comunicación Escénica</option>
  <option value="Traducción e Interpretariado Bilingüe (Inglés - Español)" data-select2-id="19">Traducción e Interpretariado Bilingüe (Inglés - Español)</option>
</optgroup>
 <option value="" data-select2-id=""></option>
  <<optgroup label="Pregrado Vespertino">
  <option value="Derecho (Vesp.)" data-select2-id="1">Derecho (Vesp.)</option>
  <option value="Ingeniería Comercial (Vesp.)" data-select2-id="2">Ingeniería Comercial (Vesp.)</option>
  <option value="Psicología (Vesp.)" data-select2-id="3">Psicología (Vesp.)</option>
  <option value="Teatro y Comunicación Escénica (Vesp.)" data-select2-id="4">Teatro y Comunicación Escénica (Vesp.)</option>
</optgroup>
 <option value="" data-select2-id=""></option>
  <optgroup label="Pregrado Online">
  <option value="Administración Pública (OL)" data-select2-id="1">Administración Pública (OL)</option>
  <option value="Administración Pública - Técnico  (OL)" data-select2-id="2">Administración Pública - Técnico  (OL)</option>
  <option value="Bibliotecología y Gestión de la Información - Técnico (OL)" data-select2-id="3">Bibliotecología y Gestión de la Información - Técnico (OL)</option>
  <option value="Bibliotecología y Gestión de la Información (OL)" data-select2-id="4">Bibliotecología y Gestión de la Información (OL)</option>
  <option value="Ingeniería en Administración y Gestión de Negocios (OL)" data-select2-id="5">Ingeniería en Administración y Gestión de Negocios (OL)</option>
  <option value="Contador Auditor (OL)" data-select2-id="6">Contador Auditor (OL)</option>
  <option value="Contador Auditor - Técnico  (OL)" data-select2-id="7">Contador Auditor - Técnico  (OL)</option>
  <option value="Ingeniería Comercial (OL)" data-select2-id="8">Ingeniería Comercial (OL)</option>
  <option value="Ingeniería Comercial - Profesional (OL)" data-select2-id="9">Ingeniería Comercial - Profesional (OL)</option>
  <option value="Ingeniería Comercial - Técnico (OL)" data-select2-id="10">Ingeniería Comercial - Técnico (OL)</option>
  <option value="Ingeniería en Control de Gestión (OL)" data-select2-id="11">Ingeniería en Control de Gestión (OL)</option>
  <option value="Ingeniería Informática Multimedia (OL)" data-select2-id="12">Ingeniería Informática Multimedia (OL)</option>
  <option value="Ingeniería Informática Multimedia - Técnico (OL)" data-select2-id="13">Ingeniería Informática Multimedia - Técnico (OL)</option>
  <option value="Trabajo Social (OL)" data-select2-id="14">Trabajo Social (OL)</option>
  <option value="Licenciatura en Trabajo Social (OL)" data-select2-id="15">Licenciatura en Trabajo Social (OL)</option>
  <option value="Trabajo Social - Técnico (OL)" data-select2-id="16">Trabajo Social - Técnico (OL)</option>
</optgroup>
 <option value="" data-select2-id=""></option>
  <optgroup label="Pregrado Semipresencial">
  <option value="Arquitectura (SP)" data-select2-id="1">Arquitectura (SP)</option>
  <option value="Diseño de Interiores y Ambientes (SP)" data-select2-id="2">Diseño de Interiores y Ambientes (SP)</option>
  <option value="Psicología (SP)" data-select2-id="3">Psicología (SP)</option>
  <option value="Periodismo (SP)" data-select2-id="4"> Periodismo (SP)</option>
</optgroup>
 <option value="" data-select2-id=""></option>
<optgroup label="Diplomado y Postitulos">
  <option value="Diplomado en Estrategia y Comunicación Digital (SP)" data-select2-id="1">Diplomado en Estrategia y Comunicación Digital (SP)</option>
  <option value="Magíster en Tecnólogia Educativa E Innovacion (OL)" data-select2-id="2">Magíster en Tecnólogia Educativa E Innovacion (OL)</option>
  <option value="Diplomado en Finanzas y Gestión de Proyectos (OL)" data-select2-id="3">Diplomado en Finanzas y Gestión de Proyectos (OL)</option>
  <option value="Diplomado en Gestión de Negocios (OL)" data-select2-id="4">Diplomado en Gestión de Negocios (OL)</option>
  <option value="Diplomado en Habilidad Directivas (SP)" data-select2-id="5">Diplomado en Habilidad Directivas (SP)</option>
  <option value="Diplomado en Interoperabilidad y Plataformas BIM (SP)" data-select2-id="6">Diplomado en Interoperabilidad y Plataformas BIM (SP)</option>
  <option value="Diplomado en Juventud y Adolescencia (SP)" data-select2-id="7">Diplomado en Juventud y Adolescencia (SP)</option>
  <option value="Diplomado en Negociación y Liderazgo en Escenarios de Conflicto (SP)" data-select2-id="8">Diplomado en Negociación y Liderazgo en Escenarios de Conflicto (SP)</option>
  <option value="Diplomado en Protocolos Obtención de Datos 3D e Infraestructura (SP)" data-select2-id="9">Diplomado en Protocolos Obtención de Datos 3D e Infraestructura (SP)</option>
  <option value="Postítulo en Intervención con Jóvenes y Adolecentes (SP)" data-select2-id="10">Postítulo en Intervención con Jóvenes y Adolecentes (SP)</option>
  <option value="Diplomado en Coaching Fenomenológico (SP)" data-select2-id="11">Diplomado en Coaching Fenomenológico (SP)</option>
  </optgroup>
</select>
                  </div>

                  <div class="text-center">
                    <hr>
                    <button class="btn orange text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>
                    
                  </div>
            <div class="d-flex justify-content-around align-content-center mt-4"> 
              <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56967664209&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
              <a onclick="eventosLanding('Llamar');" href="tel:+56967664209"><img width="40" src="https://i.imgur.com/Oh5DCRW.png"></a>
                   
              <a onclick="eventosLanding('Correo');" href="mailto: jesus.binteracction@gmail.com?subject=Landing%20USS"><img width="40" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
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
                    'Modalidad de Estudio': $('#modalidad').val(),
                    'Carrera': $('#carrera').val(),
                    'landing': '{!! $landing->name !!}'                
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': $('#nombre').val(),
                    'Apellido': $('#apellido').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'E-mail': $('#email').val(),
                    'Modalidad de Estudio': $('#modalidad').val(),
                    'Carrera': $('#carrera').val(),    
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