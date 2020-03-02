@extends('layouts.landing')

@section('title', 'UNIACC')

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
                  <h4 class="text-black text-center">
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
                    <select class="form-control" id="modalidad" required>
                      <option value="" data-select2-id="0">Selecciona una carrera</option>
                      
                <option value="1" data-select2-id="1">Pregrado Diurno</option>
                <option value="2" data-select2-id="2">Pregrado Vespertino</option>
                <option value="3" data-select2-id="3">Pregrado Presencial</option>
                <option value="4" data-select2-id="4">Pregrado Online</option>
                <option value="5" data-select2-id="5">Pregrado Semipresencial</option>
                <option value="6" data-select2-id="6">Postgrado Online</option>
                <option value="7" data-select2-id="7">Postgrado SemiPresencial</option>
                <option value="8" data-select2-id="8">Diplomado y Postitulos</option>

                    </select>
                  </div>

                  <div class="md-form ">
                    <select class="form-control" id="carrera_postonline" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Magíster en Administración de Empresa - MBA(OL)</option>
                      <option value="" data-select2-id="2">Magíster en Tecnólogia Educativa E Innovacion (OL)</option>
                    </select>
                  </div>

                  <div class="md-form">
                    <select class="form-control" id="carrera_postsemip" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Magíster en Building Information Modeling Management - BIM (SP)</option>
                      <option value="" data-select2-id="2">Magíster en Diseño Arquitectónico Sustentable (SP)</option>
                      <option value="" data-select2-id="3">Magíster en Intervención Sostenible del Patrimonio Cultural Arquitectónico (SP)</option>
                      <option value="" data-select2-id="4">Magíster en Paisajismo Urbano (SP)</option>
                      <option value="" data-select2-id="5">Magíster en Estética de Música Popular (SP)</option>
                      <option value="" data-select2-id="6">Magíster en Gestión de Proyectos Artísticos (SP)</option>
                      <option value="" data-select2-id="7">Magíster en Coaching Organizacional (SP)</option>
                      <option value="" data-select2-id="8">Magíster en Derecho de Familia e Intervención Familiar (SP)</option>
                      <option value="" data-select2-id="9">Magíster en Gestión Estratégica de la Comunicación (SP)</option>
                      <option value="" data-select2-id="10">Magíster en Intervención con Jóvenes y Adolescentes (SP)</option>
                    </select>
                  </div>

                   <div class="md-form ">
                    <select class="form-control" id="carrera_pregdiurno" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Arquitectura</option>
                      <option value="" data-select2-id="2">Artes Visuales</option>
                      <option value="" data-select2-id="3">Comunicación Audiovisual - Cine</option>
                      <option value="" data-select2-id="4">Comunicación Audiovisual - Guiones</option>
                      <option value="" data-select2-id="5">Comunicación Audiovisual - Televisión</option>
                      <option value="" data-select2-id="6">Comunicación Digital - Animación Digital</option>
                      <option value="" data-select2-id="7">Comunicación Digital - Diseño y Desarrollo de Videojuegos</option>
                      <option value="" data-select2-id="8">Danza y Coreografía</option>
                      <option value="" data-select2-id="9">Derecho</option>
                      <option value="" data-select2-id="10">Diseño Gráfico - Especialidad Multimedia</option>
                      <option value="" data-select2-id="11">Diseño de Imagen - Especialidad Moda</option>
                      <option value="" data-select2-id="12">Ingeniería Comercial</option>
                      <option value="" data-select2-id="13">Música e Interpretación</option>
                      <option value="" data-select2-id="14">Música y Composición</option>
                      <option value="" data-select2-id="15">Periodismo</option>
                      <option value="" data-select2-id="16">Psicología</option>
                      <option value="" data-select2-id="17">Publicidad</option>
                      <option value="" data-select2-id="18">Teatro y Comunicación Escénica</option>
                      <option value="" data-select2-id="19">Traducción e Interpretariado Bilingüe (Inglés - Español)</option>
                    </select>
                  </div>

                   <div class="md-form ">
                    <select class="form-control" id="carrera_pregvespert" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Derecho (Vesp.)</option>
                      <option value="" data-select2-id="2">Ingeniería Comercial (Vesp.)</option>
                      <option value="" data-select2-id="3">Psicología (Vesp.)</option>
                      <option value="" data-select2-id="4">Teatro y Comunicación Escénica (Vesp.)</option>
                    </select>
                  </div>

                   <div class="md-form ">
                    <select class="form-control" id="carrera_pregonline" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Administración Pública (OL)</option>
                      <option value="" data-select2-id="2">Administración Pública - Técnico  (OL)</option>
                      <option value="" data-select2-id="3">Bibliotecología y Gestión de la Información - Técnico (OL)</option>
                      <option value="" data-select2-id="4">Bibliotecología y Gestión de la Información (OL)</option>
                      <option value="" data-select2-id="5">Ingeniería en Administración y Gestión de Negocios (OL)</option>
                      <option value="" data-select2-id="6">Contador Auditor (OL)</option>
                      <option value="" data-select2-id="7">Contador Auditor - Técnico  (OL)</option>
                      <option value="" data-select2-id="8">Ingeniería Comercial (OL)</option>
                      <option value="" data-select2-id="9">Ingeniería Comercial - Profesional (OL)</option>
                      <option value="" data-select2-id="10">Ingeniería Comercial - Técnico (OL)</option>
                      <option value="" data-select2-id="11">Ingeniería en Control de Gestión (OL)</option>
                      <option value="" data-select2-id="12">Ingeniería Informática Multimedia (OL)</option>
                      <option value="" data-select2-id="13">Ingeniería Informática Multimedia - Técnico (OL)</option>
                      <option value="" data-select2-id="14">Trabajo Social (OL)</option>
                      <option value="" data-select2-id="15">Licenciatura en Trabajo Social (OL)</option>
                      <option value="" data-select2-id="16">Trabajo Social - Técnico (OL)</option>
                    </select>
                  </div>

                   <div class="md-form ">
                    <select class="form-control" id="carrera_pregsemip" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Arquitectura (SP)</option>
                      <option value="" data-select2-id="2">Diseño de Interiores y Ambientes (SP)</option>
                      <option value="" data-select2-id="3">Psicología (SP)</option>
                      <option value="" data-select2-id="4"> Periodismo (SP)</option>
                    </select>
                  </div>

                   <div class="md-form ">
                    <select class="form-control" id="carrera_diplomado" required>
                      <option value="" data-select2-id="0">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="1">Diplomado en Estrategia y Comunicación Digital (SP)</option>
                      <option value="" data-select2-id="2">Magíster en Tecnólogia Educativa E Innovacion (OL)</option>
                      <option value="" data-select2-id="3">Diplomado en Finanzas y Gestión de Proyectos (OL)</option>
                      <option value="" data-select2-id="4">Diplomado en Gestión de Negocios (OL)</option>
                      <option value="" data-select2-id="5">Diplomado en Habilidad Directivas (SP)</option>
                      <option value="" data-select2-id="6">Diplomado en Interoperabilidad y Plataformas BIM (SP)</option>
                      <option value="" data-select2-id="7">Diplomado en Juventud y Adolescencia (SP)</option>
                      <option value="" data-select2-id="8">Diplomado en Negociación y Liderazgo en Escenarios de Conflicto (SP)</option>
                      <option value="" data-select2-id="9">Diplomado en Protocolos Obtención de Datos 3D e Infraestructura (SP)</option>
                      <option value="" data-select2-id="10">Postítulo en Intervención con Jóvenes y Adolecentes (SP)</option>
                      <option value="" data-select2-id="11">Diplomado en Coaching Fenomenológico (SP)</option>
                    </select>
                  </div>

                   <!--<div class="md-form ">
                    <select class="form-control" id="carrera_postG_Online" required>
                      <option value="" data-select2-id="4">Selecciona una carrera de interes</option>
                      <option value="" data-select2-id="4">Magíster en Administración de Empresa - MBA(OL)</option>
                      <option value="" data-select2-id="4">Magíster en Tecnólogia Educativa E Innovacion (OL)</option>
                    </select>
                  </div>-->

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
            var correo = ["jesus.binteracction@gmail.com"];
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

    $(function() {

  $("#modalidad").on('change', function() {

    var selectValue = $(this).val();
    switch (selectValue) {
 case 1:
          $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').removeClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').addClass('hide');

    break;

 case 2:
         $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').removeClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').addClass('hide');
    break;

 case 3:
          $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').removeClass('hide');
          $('#carrera_pregsemip').addClass('hide');
 case 4:
          $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').removeClass('hide');
    break;
    case 5:
          $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').removeClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').addClass('hide'); 
    break;
     case 6:
          $('#carrera_diplomado').addClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').removeClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').addClass('hide');
    break;
     case 7:
          $('#carrera_diplomado').removeClass('hide');
          $('#carrera_postonline').addClass('hide');
          $('#carrera_postsemip').addClass('hide');
          $('#carrera_pregdiurno').addClass('hide');
          $('#carrera_pregvespert').addClass('hide');
          $('#carrera_pregonline').addClass('hide');
          $('#carrera_pregsemip').addClass('hide');
    break;
default:
          alert("OPCION INVALIDA.")
        
    }

  }).change();

});


    
    </script>
    

@endsection