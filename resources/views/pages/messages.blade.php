@extends('layouts.home')

@section('content')
<div id="homeContent"  class="container-fluid p-0">
    <div class="d-flex flex-column ">
        <div class="d-flex align-items-center justify-content-between p-2 pl-5 pr-5">
            <div>
                <span class="text-color4">Hola</span>
                <span class="text-color4"><b>{{Auth::user()->name}}</b></span>
                <span class="text-color4">, bienvenido a </span>
                <a class="navbar-brand ml-2" href="{{ url('/home') }}">
                    <div class="logo">
                        <img width="100" src="{{url('img/biqon/logo2.png')}}" alt="BIQON">
                    </div>
                </a>            
            </div>
            <div>
                <span class="saldo text-color1">SALDO SMS</span>
                <span class="barra ml-3"></span>
                <span class="saldoCont text-color4 ml-3">{{Auth::user()->sms}}</span>
            </div>
        </div>

        <div class="col-12 bg-color1">
            <h1 class="text-white p-3 h3">Mensajes Unitarios</h1>
        </div>

        <div id="contentBiqon" class="bg-light">
            <div  class="bg-white shadow-sm rounded m-3 p-5">
                <h1 class="h6 text-color5">Crear Mensajes Unitarios</h1>
                <hr>
                                                          
                <form action="{{url('/sendUnitMessages')}}" method="post" class="col-6">
                    @csrf
                    <div id="phones" class="form-group">
                      <input type="text" name="phone_1" class="form-control" placeholder="Ingrese el destinatario" aria-describedby="Destinatario" maxlength="12" required>                      
                    </div>
                    <i id="addNumber" class="fas fa-plus-circle text-color1 h1 cursor"></i>

                    <div class="form-group mt-4">
                        <input type="text" name="landing" class="form-control" placeholder="Ingrese la landing page (Opcional)" aria-describedby="Landing">                      
                    </div>

                    <div class="form-group">
                      <textarea id="message" class="message-landing form-control" name="message" rows="4" placeholder="Ingrese el mensaje" maxlength="160" required></textarea>
                      <div class="d-flex justify-content-between">
                          <small class="form-text text-muted">Ingrese (url) donde irá la url corta de la landing page</small>
                          <small class="form-text text-muted">Restantes <span class="counter">160</span></small>
                      </div>
                    </div>
                    <button type="submit" class="btn bg-color1 text-white">Enviar</button>

                </form>

            </div>            
        </div>
        
    </div>
</div>
@endsection
