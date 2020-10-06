@extends('layouts.landing')

@section('title', 'AIEP1')

@section('content')
<?php
//$startdate=strtotime("Today");
//$enddate=strtotime("+5 days", $startdate);
//$enddate1=strtotime("+5 days", $startdate);
//$cadena_fecha = "2020-08-20";

//$name = $_GET["NOMBRE"];
//$name=$_GET['NOMBRE'];
//$Nom_Asistente=$_GET["DATA1"];
//$fecha_contrato $_GET["DATA5"];
//$num_cuota=$_GET["DATA2"];
//$producto="PRODUCTO";
//$entidad="ENTIDAD";
//$monto=$_GET["MONTO"];

?>


<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<style type="text/css">

header {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#6BBDA1), to(#4378AC));
  background-image: linear-gradient(180deg, #6BBDA1 0%, #4378AC 100%);
  height: 110px;
  padding: 20px 20px;
  border-bottom: 1px solid #E6E2E2;
  z-index: 1;
  position: fixed;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

header .clientLogo {
  display: inline-block;
  width: 45%;
  height: 100%;
  background-image: url(../img/logoDA.svg);
  background-repeat: no-repeat;
  background-size: contain;
  background-position: 0 50%;
}



}*/
    
</style>

<!-- HEAD -->

<header>
    <span class="clientLogo"></span>
    <a class="iconMode" ng-class="{&#39;dark&#39;:darkMode}" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="switchDarkMode()"><img src="./home_files/mode.svg" alt=""></a>
</header>

<div class="content container-fluid d-flex flex-column align-items-center justify-content-start p-0">


    <div id="cont1" class="p-5 ">
        <div>
        <h5 class="text-black text-center"> Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña) <b><span class="cap"> ##NOMBRE## </span> </b>?</h5>
    </div>
        <div >
            <a class="btn bg-success text-white col-5 mt-4" href="#">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" href="#">SI</a>
        </div>
</div>


<!--
<div class="page centered">
        <div class="p-5 ">
            <h5 class="center">AIEP le informa que la mensualidad de <b> ##CARRERA## </b> vence el día <b> ##FECHA_VENCE## </b> por un monto de <b> ##MONTO## </b>.<br>
            <br><br>¿Podrá pagar en la fecha indicada?</h5>
        </div>
        <div class="p-5 ">
            <a class="btn bg-success text-white col-5 mt-4" href="#">NO</a>
            <a class="btn bg-success text-white col-5 mt-4" href="#">SI</a>
        </div>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p>Muchas gracias. Le recordamos que puede pagar en </p><br>
            <p>
                <a class="btnLink" href="https://bit.ly/3btocnI">Zumpago</a>
                <a class="btnLink" href="https://portalpago.aiep.cl/">Portal de pago AIEP</a>
                <a class="btnLink" href="https://www.sencillito.com/">Sencillito</a>
                <a class="btnLink" href="https://www.servipag.cl/">Servipag</a>
                <a class="btnLink" href="https://www.unired.cl/">Unired</a>
            </p><br>
            <p>Además del pago presencial en ServiFácil, Sencillito, Unired, ServiEstado y CajaVecina</p>
    </div>
</div>

<div class="page centered" >
         <div class="p-5 ">
            <p class="center">¿Nos podría indicar una fecha de pago?</p>
        </div>
        <div id="datepicker"></div><br>
        <a class="btn">Continuar</a>
</div>

<div class="page centered">
   <div class="p-5 ">
            <p class="center">Muchas gracias por su tiempo y disculpe las molestias</p>
    </div>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p>Seleccionó el día <b> ##FECHAPAGO##</b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
    </div>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p>
                De acuerdo a nuestros registros, desde el día <b> ##FECHA##</b> se encuentra(n) <b> ##NCUOTAS##</b> cuotas(s) pendiente(s) de su <b>> ##CARRERA##</b>
                por un valor de <b> ##MONTO##</b>. ¿Cuando puede efectuar el Pago?
            </p>
        </div>
        <div id="datepicker" ng-init="initializeCalendar()"></div>
        <a class="btn" href="#" >Seleccionar fecha</a>
        <a class="btn" href="#" >No puedo</a>
    </div>
</div>


<div class="page centered">
    <div class="p-5 ">
            <p class="center">Conoce Ud a <b><span class="cap">##NOMBRE##</span></b>?</p>
    </div>
    <div class="twoButtonsWrapper">
            <a class="btn" href="#" >SI</a>
            <a class="btn" href="#" >NO</a>
    </div>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p class="center">Por favor indicar el motivo de su atraso</p>
        </div>
        <ul>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason1&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason1&#39;, &#39;Cesante&#39;)"> Cesante</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason2&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason2&#39;, &#39;Problema_economico&#39;)"> Problema económico</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason3&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason3&#39;, &#39;Problema_salud&#39;)"> Problema de salud</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason4&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason4&#39;, &#39;Crédito&#39;)"> Crédito</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason5&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason5&#39;, &#39;Reclamo&#39;)"> Reclamo</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason6&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason6&#39;, &#39;Ya_pagó&#39;)"> Ya pagó</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason7&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason7&#39;, &#39;No_tengo_cupón&#39;)"> No tengo cupón</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason8&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason8&#39;, &#39;Siniestro&#39;)"> Siniestro</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason9&#39;}"> <a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason9&#39;, &#39;Olvido&#39;)"> Olvido</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason10&#39;}"><a href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="selectReason(&#39;reason10&#39;, &#39;&#39;)"> Otra</a></li>
        </ul>
        <textarea placeholder="Ingresa tu motivo de no pago (máximo 200 caracteres)" maxlength="200"></textarea>
        <a class="btn" href="#">Continuar</a>
</div>


<div class="page centered">
    <div class="p-5 ">
            <p class="center">Sería tan amable de entregarme alguno de estos datos de contacto?</p>
        </div>
        <form name="contactForm" novalidate="">
            <label>Teléfono <span ng-if="contactForm.phone.$invalid">Error</span></label>
            <input type="text" name="phone" id="phone" ng-model="contact.phone" placeholder="+569" inputmode="tel" maxlength="12">
            <label>Email <span class="labelError" ng-if="contactForm.email.$invalid">(email inválido)</span></label>
            <input type="email" name="email" id="email" ng-model="contact.email" placeholder="Ingrese correo electrónico" inputmode="email" maxlength="50">

            <a class="btn" href="#" oneclick="checkContactData()">Enviar</a>
        </form>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p>Gracias por la información de contacto, le agradecemos su ayuda</p>
    </div>
</div>

<div class="page centered">
    <div class="p-5 ">
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p >Entiendo. A la brevedad nos pondremos en contacto con Ud. Para resolver su reclamo.</p>
            <p >Entendemos, verificaremos la información. Disculpe las molestias y gracias por su tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., para conocer en detalle la situación en que se encuentra y poder entregarle las mejores alternativas de solución . Gracias por su atención y tiempo</p>
            <p >Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p >Nos pondremos en contacto con Ud., gracias por su atención.</p>
    </div>
</div>-->

</div>