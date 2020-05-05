@extends('layouts.landing')

@section('title', 'SCoffe')

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
   <!-- <div id="SCoffe" class="oscurecer" style="background: url('{{$landing->background}}'); background-repeat: repeat; background-size: cover;" >-->

        <div class="opaco"></div>

       <div class="content container-fluid d-flex flex-column align-items-center justify-content-center p-0 w-100">
            <img style="max-width: 40%" class="img-fluid col-md-3 mt-2" src="{{$landing->logo}}" alt="SCoffe">

            <div id="cont1" class="p-5 ">
                    <div class="title text-center">
                        <h3 class="dark-blue-text text-center">
                          Reserva un exquisito Cheesecascke de mora o de frutilla, Tartaletas de frutas y Pie de Limón. Despacho a pedidos solo días sábados. (porción para 10 personas).</h3>
                    <div>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/x5fCwx0.jpg" alt="simple">             

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/a1ITnT4.jpg" alt="simple">

                <a onclick="port1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                </div>
                <div>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/VMP6Riq.jpg" alt="simple">             

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/JifbUix.jpg" alt="simple">

                <a onclick="port1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                </div>
                <div>
                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/xzGTqdC.jpg" alt="simple">             

                <img class="img-fluid col-5 col-md-3 mt-4" src="https://i.imgur.com/anQoA5Z.jpg" alt="simple">

                <a onclick="port1();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>

                <a onclick="port2();" class="btn bg-danger text-white col-5 mt-2">Comprar</a>
                <br>
                </div>
                <br>
                 <div class="row">
                 <div class="col">  
                <a  href="https://maps.app.goo.gl/KjBS3At284ux1A2C8"><img  width="40" src="https://icon-library.net/images/google-map-logo-icon/google-map-logo-icon-5.jpg" /></a> 
                </div>
                <div class="col">
                <a  href="https://www.instagram.com/cafeteriasweetcoffee/"><img  width="40" src="https://instagram-brand.com/wp-content/themes/ig-branding/assets/images/ig-logo-email.png" /></a>
                </div>
                 <div class="col">  
                <a  href="mailto:cortezjesus01@gmail.com?subject=promoción%20de%20Pasteles"><img  width="40" src="https://www.internet-didactica.es/wp-content/uploads/que-es-email-correo-electronico-640x640.jpg" /></a> 
                </div>
                <div class="col">
                <a  href="https://api.whatsapp.com/send?phone=+56983106646&text=Hola,%20estoy%20interesado%20en%20Reservar%20"><img  width="40" src="https://i.pinimg.com/originals/6b/6f/95/6b6f9559658ad9c3d371977a674e2a56.png" /></a>
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

            json_datos.nombre = $('#name').text();
            json_datos.monto = $('#pay').text();

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
                    'Nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'RUT': getUrlParameter('rut'),
                    'Telefono': getUrlParameter('telefono'),
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'nombre': $('#name').text(),
                    'monto': getUrlParameter('monto'),
                    'phone': getUrlParameter('telefono'),
                     'rut': getUrlParameter('rut'),
                    'landing': '{!! $landing->name !!}'
                } 
            }

            let dataSend = {
                'data': JSON.stringify(data),
                'email': '{!! $landing->email !!}'
                //'email': 'marcostor13@gmail.com'
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
                     $('#cont2').addClass('hide');
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