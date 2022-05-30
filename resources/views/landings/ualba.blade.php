@extends('layouts.landing')

@section('title', 'UALBA')

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
    <div id="UALBA" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width:100%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="UALBA">

<center><img width="80%" src="https://imgur.com/bXF0NWR.jpg"></center>
           <!-- <center>  Nuestra Web!<a href="https://admision.udalba.cl/programas-advance2/"> wwww.admision.udalba.cl</a> </center>
            <br>
            <a target="_blank" href="https://admision.udalba.cl/programas-advance2/" class="btn bg-danger text-white col-8 mt-4">Ir a la página web---->
              <i class="fas fa-graduation-cap ml-2"></i>
            </a>

            
                  <hr><div id="cont1" class="p-3 ">
                  <div class="card">     
                <div class="card-body">
                  <!-- Heading -->
                  <h4 class="dark-grey-text text-center">
                    <strong>Eres técnico y deseas estudiar una carrera profesional online?  <strong>¡Nosotros te decimos sí !</strong> ¿Estás pensando en tu futuro? Estudia 100% online una segunda carrera con Advance.</strong>
                  </h4>

                  <br>

                   <h4 class="dark-grey-text text-center">
                    <strong>Seleccione una Carrera!</strong> 
                    <br>
                  </h4>


                 <div class="d-flex justify-content-between  m-0">
                    <div class="md-form col-6  m-0">
                      <input type="text" id="nombre" class="form-control" required placeholder="Nombre">
                      <label for="form3"></label>
                    </div>
                    <div class="md-form col-6  m-0">
                      <input type="text" id="email" class="form-control" required placeholder="E-mail">
                      <label for="form2"></label>
                    </div>
                  </div>
                  
                  <div class="md-form">
                    <select class="form-control" id="carrera" required>
                      <option value="" data-select2-id="4">Selecciona una carrera</option>

                      <center>  Nuestra Web!<a target="_blank" href="https://admision.udalba.cl/programas-advance2/"> wwww.admision.udalba.cl</a> </center>
                      
      <option value="Ingeniería Comercial" data-select2-id="8">Ingeniería Comercial</option>
      <option value="Ingeniería en Administración de Empresas – mención Gestión  de Empresas" data-select2-id="9">Ingeniería en Administración de Empresas – mención Gestión  de Empresas</option>
      <option value="Ingeniería en Administración de Empresas – mención Control de Gestión" data-select2-id="10">Ingeniería en Administración de Empresas – mención Control de Gestión</option>
      <option value="Contador Auditor" data-select2-id="11">Contador Auditor</option>
      <option value="Administración Pública" data-select2-id="12">Administración Pública</option>
      <option value="Trabajo Social" data-select2-id="13">Trabajo Social</option>
      <option value="Ingeniería Industrial" data-select2-id="11">Ingeniería Industrial</option>
            <option value="Ingeniería Civil Industrial (admisión Octubre 2022)" data-select2-id="15">Ingeniería Civil Industrial (admisión Octubre 2022)</option>
      

                    </select>
                  </div>

                  <div class="text-center">
<br>

<center>  Nuestra Web!<a href="https://admision.udalba.cl/programas-advance2/"> wwww.admision.udalba.cl</a> </center>
                      <br>

                      <center> <strong>Nuestras Redes Sociales:</strong> </center>

                      <a class="ml-4" onclick="eventosLanding('INSTAGRAM');" href="https://instagram.com/advanceudalba"><img width="40" src="https://i.imgur.com/DVoiS58.png"></a>

                       <a class="ml-4" onclick="eventosLanding('Faceboook');" href="https://www.facebook.com/permalink.php?story_fbid=126362869834830&id=107115461759571"><img width="80" src="https://imgur.com/qjrNTF4.png"></a>


                    <hr>
                    <button class="btn bg-danger text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame para más información</button>
                  

               <!--<a class="ml-4" onclick="eventosLanding('pagina web');" href="https://admision.udalba.cl/programas-advance2/"><img width="50" src="https://imgur.com/Tu3WSx7.png"></a>
                    </center>-->
                  </div>
                    </div>
                        </div>
               <!--<div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56985296912&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56967664209"><img width="60" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:jesus.binteraction@gmail.com?subject=Landing%20Cobranza"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>-->
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
  <center> <strong>Para mas Informacion:</strong> </center>
                  
            <center>  <a class="ml-2" onclick="eventosLanding('WHATSAPP');"href="https://api.whatsapp.com/send?phone=56935407683&text=Hola,%20Quisiera%20Mas%20Informacion"><img width="50" src="https://i.imgur.com/zwRWdi8.png"></a>

                 <a class="ml-2"onclick="eventosLanding('Correo');" href="mailto:advance@udalba.cl?subject=Hola,%20Quisiera%20Mas%20Informacion"><img width="50" src="https://imgur.com/izFpLFz.jpg"></a>

             <a class="ml-2" onclick="eventosLanding('Pagina web');" href="https://admision.udalba.cl/programas-advance2/"><img width="70" src="https://imgur.com/FN54ULT.png"></a> 

              <br>
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
           // json_datos.rut = $('#rut').val();
            //json_datos.telefono = $('#telefono').val();
           // json_datos.correo = $('#correo').val();
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
                    'Nombre': $('#nombre').val(),
                    'Nombre': getUrlParameter('nombre'),
                    'Apellido': $('#apellido').val(),
                    'RUT': $('#rut').val(),
                    'Telefono': $('#telefono').val(),
                    'Telefono': getUrlParameter('telefono'),
                    'E-mail': $('#correo').val(),
                    'Comuna': getUrlParameter('data1'),
                    'RUT': getUrlParameter('rut'),
                    'Carrera': $('#carrera').val()                
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': getUrlParameter('nombre'),
                    //'monto': getUrlParameter('monto'),
                    'Telefono': getUrlParameter('telefono'),
                    'comuna': getUrlParameter('data1'),
                  'comuna': getUrlParameter('data2'),
                    'rango': getUrlParameter('data3'),
                 //   'Ley': getUrlParameter('data4'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["advance@udalba.cl","jacquelin.rodriguez@udalba.cl","nancy.poblete@udalba.cl"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'patricia.medina@uss.cl'
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
                    $('#message').text('Muchas Gracias. Su solicitud fue enviada a nuestra área de admisión. A la brevedad nos pondremos en contacto');
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