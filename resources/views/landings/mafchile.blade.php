@extends('layouts.landing')

@section('title', 'Mafchile')

@section('content')

    <div id="mafchile" style="background: url('https://i.imgur.com/XdLuoGp.jpg'); background-repeat: no-repeat; background-size: cover;">

        <div class="opaco"></div>

        <div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">
            <img class="img-fluid col-10 col-md-3 mt-4" src="{{$landing->logo}}" alt="MAFCHILE">

            <div id="cont1" class="p-5 ">|
                <h3 class="text-white text-center">Por tu seguridad, confírmanos los primeros 4 dígitos de tu RUT</h3>
                <input id="rut" type="number" class="form-control mt-4 text-center text-white">
                <button onclick="event1(); return false;" class="btn bg-danger text-white col-12 mt-4">Validar</button>
                <h5 id="error"class="text-white text-center mt-5"></h5>
            </div>

            <div id="cont2" class="p-5 hide">|
                <h3 class="text-white text-center">Estimado <span id="name"></span></h3>

                <p class="text-white">
                    Te informamos que presentas un retraso en el pago tus cuotas por un monto total de, mas recargos por mora:
                    <b id="pay">$ 500</b>
                    Te ofrecemos las siguientes opciones para regularizar tu deuda pendiente
                </p>
                <div class="date btn bg-danger text-white col-12 mt-4">
                    <span>AGENDAR COMPROMISO DE PAGO</span>
                    <input id="date1"  type="date" class="btn-date text-danger" style="border: none;" />
                </div>
                <button onclick='window.location.href="https://www.mafchile.com/client/login"' class="btn bg-danger text-white col-12 mt-4">PAGAR AHORA</button>
                <button onclick="sendMail('El cliente indica que ya pagó'); return false;" class="btn bg-danger text-white col-12 mt-4">YA PAGUE</button>
                <div class="d-flex justify-content-around align-content-center mt-4">
                    <a href="https://api.whatsapp.com/send?phone=56985296912&text=Hola,%20tengo%20una%20consulta"><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/whatsapp.png"></a>
                    <a href="tel:+56985296912"><img width="40" src="https://img.icons8.com/wired/64/FFFFFF/phonelink-ring.png"></a>
                    <a href="mailto:contacto@binteraction.com"><img width="40" src="https://img.icons8.com/ios-filled/50/FFFFFF/email.png"></a>

                </div>
            </div>

        </div>

        
        <script>

            //EVENT 1
            

            let event1 = function(){
                               
                let dataSend = {
                    'fourRut': $('#rut').val()
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
                        $('#name').text(e.data.name);
                        $('#pay').text(e.data.pay);
                        $('#cont2').removeClass('hide');
                    }else{
                        $('#error').text(e.msg);
                    }
                })
                .fail(function() {
                    console.log( "error" );
                });

            }

            let sendMail = function(msg = false){
                
                let data; 
                if(msg !== false){
                    data = {
                        'mensaje': msg,
                        'nombre': $('#name').text(),
                        'saldo': $('#pay').text()
                    }
                }else{
                    let date = $('#date1').val();
                    data = {
                        'fecha': date,
                        'nombre': $('#name').text(),
                        'saldo': $('#pay').text()
                    } 
                }

                let dataSend = {
                    'data': JSON.stringify(data),
                    'email': 'marcostor13@gmail.com'
                }
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.post( "/sendMail", dataSend,function() {
                    console.log(dataSend);
                })
                .done(function(e) {
                    console.log(e);
                })
                .fail(function() {
                    console.log( "error" );
                });

            }

            $('#date1').change(sendMail());
            

            

            
           
        
        </script>

                

    </div>
    

@endsection