@extends('layouts.landing')

@section('title', 'FUENTE-ALCAZAR')

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
    .med {
  background-image: 
    linear-gradient(
      rgba(255, 255, 255, 0.5),
      rgba(255, 255, 255, 0.5)
    )
    }
</style>
    <div id="FUENTE-ALCAZAR" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;" >
     

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
          <div class="med align-items-center mt-4">
            <img class="img mt-2" src="{{$landing->logo}}" alt="FUENTE-ALCAZAR"> <br> 
            <br>
          </div>
         
          <div id="cont1" class="p-3 ">
                  <div class="med align-items-center mt-2">
                  <!-- Heading -->
                  <br>
                  <h4 class="dark-grey-text text-center">

                    <strong> Buscas Arriendo o Comprar una propiedad<br>

                    NOSOTROS TE AYUDAMOS<br>

                    LLena estos datos y  nuestros ejecutivos te contactaran! </strong>
                  </h4>
                  <hr>

                  <div class="md-form">
                    <select class="form-control" id="Comuna" required>
                      <option value="COMUNA" data-select2-id="4">COMUNA</option>
                      <option value="CASABLANCA" data-select2-id="4"> CASABLANCA </option>
                      <option value="CONCÓN" data-select2-id="4"> CONCÓN </option>
                      <option value="HIJUELAS" data-select2-id="4"> HIJUELAS </option>
                      <option value="INDEPENDENCIA" data-select2-id="4"> INDEPENDENCIA </option>
                      <option value="LA REINA" data-select2-id="4"> LA REINA </option>                
                      <option value="LAMPA" data-select2-id="4"> LAMPA </option>
                      <option value="LAS CONDES" data-select2-id="4"> LAS CONDES </option>
                      <option value="LIMACHE" data-select2-id="4"> LIMACHE </option>
                      <option value="LITUECHE" data-select2-id="4"> LITUECHE </option>
                      <option value="MACUL" data-select2-id="4"> MACUL </option>
                      <option value="MAIPÚ" data-select2-id="4"> MAIPÚ </option>
                      <option value="ÑUÑOA" data-select2-id="4"> ÑUÑOA </option>
                      <option value="PROVIDENCIA" data-select2-id="4"> PROVIDENCIA </option>
                      <option value="PUENTE ALTO" data-select2-id="4"> PUENTE ALTO </option>
                      <option value="QUINTA NORMAL" data-select2-id="4"> QUINTA NORMAL </option>
                      <option value="SAN MIGUEL" data-select2-id="4"> SAN MIGUEL </option>
                      <option value="SANTIAGO CENTRO" data-select2-id="4"> SANTIAGO CENTRO </option>
                      <option value="VALPARAÍSO" data-select2-id="4"> VALPARAÍSO </option>
                      <option value="VIÑA DEL MAR" data-select2-id="4"> VIÑA DEL MAR </option>

                    </select>
                  </div>
                  <br>
                  <div class="md-form">
                    <select class="form-control" id="Tipo" required>
                      <option value="TIPO" data-select2-id="4">TIPO</option>
                      <option value="CASA" data-select2-id="4"> CASA </option>
                      <option value="DEPARTAMENTO" data-select2-id="4"> DEPARTAMENTO </option>
                      <option value="TERRENO" data-select2-id="4"> TERRENO </option>
                      <option value="BODEGA" data-select2-id="4"> BODEGA </option>
                      <option value="OFICINA" data-select2-id="4"> OFICINA </option>
                      <option value="LOTE" data-select2-id="4"> LOTE </option>
                      <option value="LOCAL COMERCIAL" data-select2-id="4"> LOCAL COMERCIAL</option>
                      <option value="ESTACIONAMIENTO" data-select2-id="4"> ESTACIONAMIENTO</option>                      

                    </select>
                  </div>
                  <br>
                  <div class="md-form">
                    <select class="form-control" id="Contrato" required>
                      <option value="Contrato" data-select2-id="4">Contrato</option>
                      <option value="VENTA" data-select2-id="4"> VENTA </option>
                      <option value="ARRIENDO" data-select2-id="4"> ARRIENDO </option>                      

                    </select>
                  </div>
                  <br>
                  <div class="md-form">
                    <select class="form-control" id="Dormitorios" required>
                      <option value="Dormitorios" data-select2-id="4">Dormitorios</option>
                      <option value="1" data-select2-id="4"> 1 </option>
                      <option value="2" data-select2-id="4"> 2 </option>
                      <option value="3" data-select2-id="4"> 3 </option>                      
                      <option value="4" data-select2-id="4"> 4 </option>
                      <option value="5" data-select2-id="4"> 5 </option>
                      <option value="+5" data-select2-id="4"> +5 </option>
                    </select>
                  </div>
                  <br>
                  <div class="md-form">
                    <select class="form-control" id="Baños" required>
                      <option value="Baños" data-select2-id="4">Baños</option>
                      <option value="1" data-select2-id="4"> 1 </option>
                      <option value="2" data-select2-id="4"> 2 </option>
                      <option value="3" data-select2-id="4"> 3 </option>                      
                      <option value="4" data-select2-id="4"> 4 </option>
                      <option value="5" data-select2-id="4"> 5 </option>
                      <option value="+5" data-select2-id="4"> +5 </option>                     

                    </select>
                  </div>
                  <br>
                 </div>

                  <div class="text-center">
                   <button class="btn bg-primary text-white col-12 mt-4" onclick="sendMail('El cliente solicito Informacion');eventosLanding('Solicitud Informacion'); return false;">Contactame</button>
                  </div>
                    
                       

               <div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56956294380&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56956294380"><img width="60" src="https://i.imgur.com/Oh5DCRW.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:jaime.rojas@propiedadesfuentesalcazar.cl?subject=Landing%20Fuente%20Salazar"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
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

            json_datos.nombre = getUrlParameter('nombre');
            json_datos.apellido = getUrlParameter('telefono');
            json_datos.rut = getUrlParameter('rut');
            json_datos.comuna = $('#Comuna').val();
            json_datos.tipo = $('#Tipo').val();
            json_datos.contrato = $('#Contrato').val();
            json_datos.dormitorios = $('#Dormitorios').val();
            json_datos.baños = $('#Baños').val();

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
                    'Telefono': getUrlParameter('telefono'),
                     'RUT': getUrlParameter('rut'),
                    'Comuna': $('#Comuna').val(),
                    'Tipo': $('#Tipo').val(),
                    'Contrato': $('#Contrato').val(),
                    'Dormitorios': $('#Dormitorios').val(),
                    'Baños': $('#Baños').val(),
                    'landing': '{!! $landing->name !!}'
                                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'Nombre': getUrlParameter('nombre'),
                    'Telefono': getUrlParameter('telefono'),
                    'RUT': getUrlParameter('rut'),
                    'Comuna': $('#Comuna').val(),
                    'Tipo': $('#Tipo').val(),
                    'Contrato': $('#Contrato').val(),
                    'Dormitorios': $('#Dormitorios').val(),
                    'Baños': $('#Baños').val(),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["jesus.binteraction@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'jose.bianchi@uss.cl'
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