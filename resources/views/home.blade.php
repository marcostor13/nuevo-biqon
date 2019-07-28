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
            <h1 class="text-white p-3 h3">Panel principal</h1>
        </div>

        <div id="contentBiqon" class="bg-light">
            <div  class="bg-white shadow-sm rounded m-3 p-5">
                
            </div>            
        </div>
        
    </div>
</div>
@endsection
