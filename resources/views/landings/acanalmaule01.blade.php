@extends('layouts.landing')

@section('title', 'ACanalMaule')

@section('content')

<style>
.opaco{
    display: none !important; 
}
</style>

    <!--<div id="mafchile" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: cover;">-->

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 60%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="ACanalMaule">

            <div id="cont1" class="p-2 pl-3 pr-3 ">

                <div class="card">     
                <div class="card-body">
                     <h4 class="dark-grey-text text-center">
                   Estimado(a) Regante,<br><br>
                     Junto con saludar, nos dirigimos a usted para informarle que de acuerdo a la nueva regulacion de la Junta de Vigilancia del Rio Maule, a partir de hoy,

                      <strong>  <?php echo date("d-m-Y") ?></strong> <br> 

                       el caudal disponible para riego es de 

                     <strong><!--  <h3 class="text-warning"><span id="data2"></span> </h3>  -->120  </strong>

                     m3/s, equivalente al 

                     <strong> <!-- <h3 class="text-warning"><span id="data3"></span> </h3> -->60 </strong>

                     % del caudal maximo para riego, <br> esta condicion se mantendra hasta nuevo aviso. <br><br>
                     Sin otro particular, se despide cordialmente,<br> <br>
                     La administracion 
                  </h4>

                  <hr>
                <button onclick="sendMail('El cliente indica que desea recibio el SMS'); eventosLanding('Recepcion'); return false;" class="btn bg-warning text-black col-12 mt-3"> <h3> <strong>Click Aqui</strong> </h3> </button>
                 </div>
            
                <!--<div class="d-flex justify-content-around align-content-center mt-4"> 
                    <a class="ml-2" onclick="eventosLanding('Whatsapp');" href="https://api.whatsapp.com/send?phone=56933914095&text=Hola,%20tengo%20una%20consulta"><img width="70" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Llamar');" href="tel:+56933914095"><img width="60" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
                    <a class="ml-4" onclick="eventosLanding('Correo');" href="mailto:ivonne.gonzalez@financoop.cl"><img width="60" src="https://es.seaicons.com/wp-content/uploads/2015/10/Email-icon.png"></a>
                </div>-->
        </div>  </div> 

        <div id="cont3" class="p-2 pl-3 pr-3 hide">
                        <div class="card">     
                            <div class="card-body">
                                <h5 id="message"class="text-black text-center mt-3 hide"></h5>
                            </div>
                        </div>
                    </div>
            <!--<div class=" tagline w3-center w3-animate-top black-text">Binteraction.com</div>-->
         </div>
    <!--</div>-->

   
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
     var porc; 
         porc= getUrlParameter('data3'); 
          var metro; 
         metro= getUrlParameter('data2'); 
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
                    $('#data2').text(metro);
                    $('#data3').text(porc);
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

           // json_datos.nombre = $('#name').text();
            //json_datos.monto = $('#pay').text();

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
                    //'Nombre': getUrlParameter('nombre'),
                    'Telefono': getUrlParameter('telefono'),
                     'ID': getUrlParameter('id'),
                     'landing': '{!! $landing->name !!}'
                            
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'Fecha': date,
                    //'Nombre': getUrlParameter('nombre'),
                    'Telefono': getUrlParameter('telefono'),
                     'ID': getUrlParameter('id'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            var correo = ["cortezjesus01@gmail.com"];
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
                //'email': 'marcostor13@gmail.com, ivonne.gonzalez@financoop.cl' "jimelatrach@gmail.com",
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
                    $('#message').text('Muchas Gracias. Su Respuesta Fue enviada a nuestra área.');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont1').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Muchas Gracias. Su Respuesta Fue enviada a nuestra área.');
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