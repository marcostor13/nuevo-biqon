@extends('layouts.landing')

@section('title', 'USS')

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
    <div id="USS" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="USS">
            

            <a target="_blank" href="https://www.advance.uss.cl/?utm_source=google&utm_medium=search&utm_campaign=advance&utm_term=generico&utm_content=nacional&gclid=EAIaIQobChMIsLn10Z-e4wIVFwSRCh0QaAqIEAAYASAAEgJdNvD_BwE" class="btn bg-primary text-white col-8 mt-4">Ir a la página web
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            <div id="cont1" class="p-3 ">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                  <h4 class="dark-grey-text text-center">
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
                      <option value="" data-select2-id="4">Selecciona una carrera</option>
                      
      <option value="Ingeniería Comercial" data-select2-id="8">Ingeniería Comercial</option>
      <option value="Ingeniería en Administración de Empresas Mención Gestión Empresarial" data-select2-id="9">Ingeniería en Administración de Empresas Mención Gestión Empresarial</option>
      <option value="Ingeniería en Gestión en Tecnologías de la Información" data-select2-id="10">Ingeniería en Gestión en Tecnologías de la Información</option>
      <option value="Ingeniería en Tecnologías de la Información y Comunicaciones" data-select2-id="11">Ingeniería en  Tecnologías de la Información y Comunicaciones</option>
      <option value="Ingeniería Industrial" data-select2-id="12">Ingeniería Industrial</option>
      <option value="Contador Auditor" data-select2-id="13">Contador Auditor</option>
      <option value="Ingeniería Civil Industrial" data-select2-id="14">Ingeniería Civil Industrial</option>
      <option value="Ingeniería en Prevención de Riesgos" data-select2-id="15">Ingeniería en Prevención de Riesgos</option>
      <option value="Ingeniería en Comercio Internacional" data-select2-id="16">Ingeniería en Comercio Internacional </option>
      <option value="Ingeniería en Logística y Transporte" data-select2-id="17">Ingeniería en Logística y Transporte </option>
      <option value="Administración Pública" data-select2-id="18">Administración Pública</option>
      <option value="Ingeniería en Administración de Empresas Mención Control de Gestión" data-select2-id="19">Ingeniería en Administración de Empresas Mención Control de Gestión</option>
      <option value="Ingeniería en Administración de Empresas Mención Gestión de Personas" data-select2-id="20">Ingeniería en Administración de Empresas Mención Gestión de Personas</option>
      <option value="Ingeniería en Administración de Empresas Mención Finanzas Corporativas" data-select2-id="21">Ingeniería  en Administración de Empresas Mención Finanzas Corporativas</option>
      <option value="Ingeniería en Administración de Empresas Mención Marketing Digital" data-select2-id="22">Ingeniería en  Administración de Empresas Mención Marketing Digital</option>
      <option value="Psicología" data-select2-id="23">Psicología</option>
      <option value="Pedagogía en Educación Diferencial" data-select2-id="24">Pedagogía en Educación Diferencial</option>
      <option value="Trabajo Social" data-select2-id="25">Trabajo Social</option>

                    </select>
                  </div>

                  <div class="text-center">
                    <hr>
                    <button class="btn bg-primary text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>
                    
                  </div>

            <div class="d-flex justify-content-around align-content-center mt-4"> 
              <a onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=+56989002595&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
              <a onclick="eventosLanding('Llamar');" href="tel:++56989002595"><img width="40" src="https://i.imgur.com/Oh5DCRW.png"></a>
                   
              <a onclick="eventosLanding('Correo');" href="mailto: jaqueline.rodriguez@uss.cl?subject=Landing%20USS"><img width="40" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
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
            json_datos.correo = $('#correo').val();
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
                    'E-mail': $('#correo').val(),
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
            var correo = ["jacqueline.rodriguez@uss.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'jaqueline.rodriguez@uss.cl'
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

      
        
    
    </script>
    

@endsection