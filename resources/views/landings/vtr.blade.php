@extends('layouts.landing')

@section('title', 'VTR')

@section('content')
<?php
$startdate=strtotime("Today");
$enddate=strtotime("+3 days", $startdate);
?>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style type="text/css">

    
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
  text: #747373;
  font-size: 0.9rem;
  font-weight: 400;
}
.card .md-form label {
  font-weight: 300;
}

.oscurecer {
  background-image: 
    linear-gradient(
      rgba(0, 0, 0),
      rgba(0, 0, 0)
    )
    }

.accesos-directo {
    /*position: relative;*/
    background-text: #262626;
    padding: 40px 30px;
}
 .fas {
  font-family: 'Font Awesome 5 Free';
  font-weight: 900; 
  background-text: #262626
}  

    
</style>
<!-- HEAD -->
<div class="oscurecer p-3">
 <div class="oscurecer p-3">
         <div id="head" class="p-2 pl-2 pr-2 "> <img style="max-width:100px; max-height:50px" class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR"> 

             <a class="ml-4" onclick="eventosLanding('Facebook');" href="www.facebook.com"><img width="20" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                   
             <a class="ml-4" onclick="eventosLanding('Twitter');" href="www.twitter.com"><img width="20" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
                    <br>
             <a class="ml-4" onclick="eventosLanding('Youtube');" href="www.youtube.com"><img width="20" src="https://i.pinimg.com/236x/93/0e/6f/930e6fe9fe45beab222542ae42b05c4f.jpg"></a>
           
        </div>

        </div> </div>
<div id="VTR" style="background: url('{{$landing->background}}'); background-repeat: no-repeat; background-size: contain; ">

    <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            
<!-- MENU 1: INGRESAR -->
             <div id="cont1" class="p-5 ">
                <br><br><br>
                <h4 class="text-black text-center"><strong><span id="name"></span> </strong>Te damos la bienvenida a la interfaz de VTR, para ingresar valida tu identidad ingresando tu RUT sin el digito verificador</h4>
                <input id="rut" type="number" class="form-control mt-4 text-center text-black">
                
                <button onclick="event1(); return false;" class="btn bg-danger text-black col-12 mt-4"> Ingresar </button>

                <button onclick="myFunction(2)" class="btn bg-danger text-black col-12 mt-4"> Contacto Equivocado </button>

                <button onclick="myFunction(3)" class="btn bg-danger text-black col-12 mt-4"> Salir </button>

<!--<li onclick="myFunction(1)">Producto1</li>
<li onclick="myFunction(2)">Producto2</li>
<li onclick="myFunction(3)">Producto3</li>-->

<!--<div id="producto1" style="display:none;">
   <div class="tituloDiv">
      <h3>Producto1</h3>
   </div>
   <div class="contenidoDiv">
      <p>Descripción producto1.</p>
   </div>
</div>

<div id="producto2" style="display:none;">
     <div class="tituloDiv">
        <h3>Producto1</h3>
     </div>
     <div class="contenidoDiv">
        <p>Descripción producto2.</p>
     </div>
</div>
<div id="producto3" style="display:none;">
    <div class="tituloDiv">
         <h3>Producto1</h3>
    </div>
    <div class="contenidoDiv">
        <p>Descripción producto3.</p>
    </div>
</div>-->

            </div>
            <!-- ERROR 1 -->
            <div id="error" class="p-2 pl-3 pr-3 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="error"class="text-black text-center mt-5">
                                
                            </h5>
                         </div>
                    </div>
            </div>

             <!-- MENU2:  -->
        <div id="cont2" class="p-5 hide" >
                <div class="text-black col-md-12">
                
                <button onclick='url1(); eventosLanding("Pagar"); ' class="btn bg-danger text-black col-12 mt-4"> Pagar</button>

                <button onclick='myFunction(2);' class="btn bg-danger text-black col-12 mt-4"> Compromiso de Pago</button>

                <button onclick='url3();' class="btn bg-danger text-black col-12 mt-4"> Quiero que me llamen</button>

                <button onclick='url4();' class="btn bg-danger text-black col-12 mt-4"> Tarifas | Sucursales | Informaciones</button>

                <button onclick='url5(); eventosLanding("Boleta"); ' class="btn bg-danger text-black col-12 mt-4"> Boleta</button>

                <button onclick='url6();' class="btn bg-danger text-black col-12 mt-4"> tengo un problema</button>

        </div>

        <!-- FECHA: PAGO -->
        <div id="producto2" class="p-5"  style="display:none;">
                <div class="text-black col-md-12">
            <h3 class="text-grey text-center">Favor ingrese la fecha en la cual podrá realizar el pago. Solo podrá agendar su pago por 3 días de lo contrario lo volveremos a contactar.         
            <div>
                <label>Fecha:</label>
                <input id="date1"  type="date" class=" btn-date text-blackform-control input-min-width-95p" min="<?php echo date('Y-m-d')?>" max="<?php echo date("Y-m-d", $enddate) ?>"/>
             </div> 
                <button onclick="sendMail(); return false;" class="btn bg-warning text-black col-12 mt-4">Confirmar</button>
            </div>
        </div>

<!-- MENU: CONTACTO EQUIVOCADO -->
            <div id="producto2" class="p-5"  style="display:none;">
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> ¿Conoces a <strong> <span id="name"></span></strong> ?</h6>
                </div>

                <button onclick='url21(); eventosLanding("SI"); ' class="btn bg-danger text-black col-6 mt-4"> SI </button>

                <button onclick='url22(); eventosLanding("NO"); ' class="btn bg-danger text-black col-6 mt-4"> NO </button>
        </div>

<!-- MENU1: CONTACTO EQUIVOCADO: INGRESE NUMERO -->
            <div id="equiv1" class="p-5"  style="display:none;">
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Favor, ingresar número de teléfono</h6>
                </div>
                 <input id="telf" type="number" class="form-control mt-4 text-center text-black" >

                <button onclick='url23(); eventosLanding("VALIDAR"); ' class="btn bg-danger text-black col-6 mt-4"> VALIDAR </button>

                <button onclick='url24(); eventosLanding("CONTINUAR"); ' class="btn bg-danger text-black col-6 mt-4"> CONTINUAR </button>
                <br>
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Si no quiere ingresar Datos, presione:</h6>
                </div>
                <button onclick='url25(); eventosLanding("No quiero ingresar"); ' class="btn bg-danger text-black col-6 mt-4"> No quiero ingresar </button>

            </div>

<!-- MENU2: CONTACTO EQUIVOCADO: INGRESE CORREO -->
            <div id="equiv2" class="p-5"  style="display:none;">
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Favor, ingresar correo</h6>
                </div>
                 <input id="ecorr" type="text" class="form-control mt-4 text-center text-black" >

                <button onclick='url26(); eventosLanding("VALIDAR"); ' class="btn bg-danger text-black col-6 mt-4"> VALIDAR </button>

                <button onclick='url27(); eventosLanding("CONTINUAR"); ' class="btn bg-danger text-black col-6 mt-4"> CONTINUAR </button>
                <br>
                <div class="text-black col-md-12">
                <h6 class="text-black text-center"> Si no quiere ingresar Datos, presione:</h6>
                </div>
                <button onclick='url28(); eventosLanding("No quiero ingresar"); ' class="btn bg-danger text-black col-6 mt-4"> No quiero ingresar </button>

            </div>



        <!-- MENU 2: INFORMACIONES -->
            <div id="cont3" class="p-5"  style="display:none;">
                <div class="text-black col-md-12">
                
                <button onclick='url7(); eventosLanding("Tarifas"); ' class="btn bg-danger text-black col-12 mt-4"> Tarifas</button>

                <button onclick='url8(); eventosLanding("Lugares de Pago"); ' class="btn bg-danger text-black col-12 mt-4"> Lugares de Pago</button>

                <button onclick='url9(); eventosLanding("Sucursales"); ' class="btn bg-danger text-black col-12 mt-4"> Sucursales</button>

                <button onclick='url10(); eventosLanding("Sucursal Virtual"); ' class="btn bg-danger text-black col-12 mt-4"> Sucursal Virtual</button>

        </div>


         <!-- MENU 3: RECLAMO -->
            <div id="cont4" class="p-5 "  style="display:none;">
                <div class="text-black col-md-12">
                
                <button onclick='url11(); eventosLanding("SubTel|Sernac"); ' class="btn bg-danger text-black col-12 mt-4"> SubTel|Sernac </button>

                <button onclick='url12(); eventosLanding("Problemas Económicos); ' class="btn bg-danger text-black col-12 mt-4"> Problemas Economicos</button>

                <button onclick='url13(); eventosLanding("No Reconozco Deuda"); ' class="btn bg-danger text-black col-12 mt-4"> No Reconozco Deuda</button>

                <button onclick='urll4(); eventosLanding("Problema Técnico"); ' class="btn bg-danger text-black col-12 mt-4"> Problema Tecnico</button>

                <button onclick='url15(); eventosLanding("Problema Comercial"); ' class="btn bg-danger text-black col-12 mt-4"> Problema Comercial</button>

                <button onclick='url16(); eventosLanding("Pago no aplicado"); ' class="btn bg-danger text-black col-12 mt-4"> Pago no aplicado</button>

                <button onclick='url17(); eventosLanding("Fraude"); ' class="btn bg-danger text-black col-12 mt-4"> Fraude</button>

                <button onclick='url18(); eventosLanding("Titular fallecido"); ' class="btn bg-danger text-black col-12 mt-4"> Titular fallecido</button>

                <button onclick='url19(); eventosLanding("Baja no ingresanda"); ' class="btn bg-danger text-black col-12 mt-4"> Baja no ingresada</button>

                <button onclick='url20(); eventosLanding("Me cambie de Compañía"); ' class="btn bg-danger text-black col-12 mt-4"> Me cambie de Compañía</button>

        </div>


<!-- MENSAJE SUCCESS -->
                <div id="success" class="p-2 pl-5 pr-5 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="message"class="text-grey text-center mt-4 "></h5>
                        </div>
                    </div>
                </div>

                <!-- Contacto Equivocado -->
                <div id="error" class="p-2 pl-5 pr-5 hide">
                    <div class="card">     
                        <div class="card-body">
                            <h5 id="message"class="text-grey text-center mt-4 "></h5>
                        </div>
                    </div>
                </div>

   <!-- PIE DE PAGINA -->             
    <div class="oscurecer p-3">
         <div id="pie" class="p-2 pl-2 pr-2 ">
            <i class="fas fa-question text-danger"></i>
            <a onclick="eventosLanding('Centro de ayuda');" href="http://centrodeayudaonline.vtr.com/contactanos/" class="text-black">Centro de ayuda</a>
                   
            <i class="fas fa-question text-danger"></i>
            <a onclick="eventosLanding('Reportar Abusos');"href="https://vtr.com/productos/reclamos" class="text-black"> Reportar Abusos</a>
                    <br>
            <i class="fas fa-exclamation-circle text-danger"></i> 
            <a onclick="eventosLanding('Actualiza Datos');"href="http://centrodeayudaonline.vtr.com/autoatencion/conocer-sucursal-virtual/" class="text-black"> Actualiza Datos</a>
            
            <i class="fas fa-user text-danger"></i>
            <a onclick="eventosLanding('Privacidad');" href="https://vtr.com/productos/privacidad" class="text-black">  Privacidad</a>
            <br>
            <img style="max-width:100px; max-height:100px" class="img-fluid col-10 col-md-3" src="{{$landing->logo}}" alt="VTR"> 
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
                'json_datos': JSON.stringify(getAllurlParameter())
            });
        }); 

         function event1(){
    
            let dataSend = {
                'fourRut': $('#rut').val(),
                'phone': geturlParameter('telefono'),
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
            
            let json_datos = getAllurlParameter(); 

            //json_datos.nombre = $('#name').text();
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
                    'Nombre': $('#name').text(),
                    //'monto': geturlParameter('monto'),
                    'RUT': geturlParameter('rut'),
                    'Telefono': geturlParameter('telefono'),
                    'landing': '{!! $landing->name !!}'
                   
                    
                }
            }else{
                let date = $('#date1').val();
                data = {
                    'fecha': date,
                    'Nombre': $('#name').text(),
                    //'monto': geturlParameter('monto'),
                     'RUT': geturlParameter('rut'),
                    'Telefono': geturlParameter('telefono'),
                    'landing': '{!! $landing->name !!}'
                } 
            }
            var correo = ["jesus.binteraction@gmail.com"];  
            let dataSend = {
                'data': JSON.stringify(data),
                'email': correo
                //'email': '{!! $landing->email !!}'
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
                    $('#message').text('Ha quedado su llamada agendada. Gracias por su tiempo. VTR le desea que tenga un excelente día. Cualquier duda al 600 800 9000.');
                }else{
                    $('#message').removeClass('hide');
                     $('#cont2').addClass('hide');
                    $('#cont3').removeClass('hide');
                    $('#message').text('Ha quedado registrado su compromiso. Gracias por su tiempo. VTR le desea que tenga un excelente día. Cualquier duda al 600 800 9000.');
                      eventosLanding('Compromiso de Pago');

                }
            })
            .done(function(e) {
                console.log(e);
            })
            .fail(function() {
                console.log( "error" );
            });

        }

        function url2(){
        $('#cont2').addClass('hide');
        $('#calend').removeClass('hide'); 
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

        let geturlParameter = function(sParam) {
            var sPageurl = window.location.search.substring(1),
            surlVariables = sPageurl.split('&'),
            sParameterName,
            i;

            for (i = 0; i < surlVariables.length; i++) {
            sParameterName = surlVariables[i].split('=');

            if (sParameterName[0].toLowerCase() === sParam.toLowerCase()) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
            }
        };

        let getAllurlParameter = function() {
            var sPageurl = window.location.search.substring(1),
            surlVariables = sPageurl.split('&'),
            sParameterName,
            i;

            let obj = {}; 

            for (i = 0; i < surlVariables.length; i++) {
            sParameterName = surlVariables[i].split('=');

            obj[sParameterName[0].toLowerCase()] = sParameterName[1];            
            }

            return obj;  
        };


         function url1(){
    var rut; 
         rut= geturlParameter('rut'); //1234  "76114143-0";
         // console.log(rut);
            swal({
             title: `Será Direccionado a la Página de Pagos`,//`el cododigo es: ${rut}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = "https://vtr.com/miregistro/paymentExpress.jsp?_dyncharset=UTF-8&c-rut="+rut+"&_D:c-rut=+&_DARGS=/vtr/cartridges/VtrHOHeaderBarPayYourAccountCart/VtrHOHeaderBarPayYourAccountCart.jsp";
        })

        } 

       // function url2(){

            //function(){
           // $('#cont2').addClass('hide');
           // $('#calend').removeClass('hide');
           // }
      //  }

            function url5(){
    var docid; 
         docid= geturlParameter('data1'); //"AFAEc%2FnhOohJncAMwniaD1w1inFcH147"; //1234  "76114143-0";
          
            swal({
             title:`Espere para Ver su Boleta Online`,// `el cododigo es: ${docid}`,
             //text: "Expandir la Pantalla",
             type: "success",
             timer: 5000
        }, 
        function(){
             window.location.href = " https://vtr.com/ss/vboleta/index.html#/home.html?docid="+docid;
        })

        } 


function myFunction(idButton) {
  var url1 = document.getElementById('producto1');
  var producto2 = document.getElementById('producto2');
  var producto3 = document.getElementById('producto3');



 switch(idButton) {
 case 1:

          producto1.style.display = 'block';
          producto2.style.display = 'none';
          producto3.style.display = 'none';
    break;

 case 2:
          //$('#cont1').addClass('hide');
          $('#cont2').addClass('hide');
          producto2.style.display = 'block';
          $('#success').removeClass('hide');
    break;

 case 3:
          producto1.style.display = 'none';
          producto2.style.display = 'none';
          producto3.style.display = 'block';
    break;

default:
          alert("hay un problema: No existe el producto.")
        }

   }
    
    </script>

@endsection