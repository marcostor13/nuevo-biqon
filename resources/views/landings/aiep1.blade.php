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
*, html, body {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
}

body {
  margin: 0;
  font-family: myAvnr;
  color: #004976;
  font-size: 18px;
  font-weight: 400;
  background-color: #F1F1F1;
  -webkit-transition: background-color 1s;
  transition: background-color 1s;
}

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

.page {
  padding: 20px 20px;
  width: 100%;
  height: calc(100% - 220px);
}

.page.centered {
  position: fixed;
  height: calc(100% - 172px);
  overflow-y: auto;
}

.page.centered > .wrapper {
  position: relative;
}

.popup {
  background-color: rgba(68, 88, 101, 0.5);
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.popup .window {
  background-color: white;
  width: 90%;
  padding: 20px;
  border-radius: 15px;
  -webkit-box-shadow: 0 0 30px #6c7880;
          box-shadow: 0 0 30px #6c7880;
}

footer {
  position: fixed;
  bottom: 0;
  height: 60px;
  width: 100%;
  background-color: #F1F1F1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

footer .fillFooter {
  width: calc(100% - 207px);
  border-bottom: 10px solid #D0D0D0;
}

footer span.athenaFooter {
  background-image: url(../img/footer.svg);
  height: 60px;
  width: 207px;
  background-position: right bottom;
  background-repeat: no-repeat;
}

i {
  margin-right: 10px;
}

i:after {
  display: inline-block;
}

i.icon {
  height: 40px;
  width: 40px;
  background: #FFFFFF;
}

i.icon.phone {
  -webkit-mask: url(../img/icons/phone.svg);
          mask: url(../img/icons/phone.svg);
}

i.icon.mail {
  -webkit-mask: url(../img/icons/mail.svg);
          mask: url(../img/icons/mail.svg);
}

i.icon.pay {
  -webkit-mask: url(../img/icons/payNow.svg);
          mask: url(../img/icons/payNow.svg);
}

i.icon.mask {
  -webkit-mask-size: cover;
          mask-size: cover;
  -webkit-mask-size: auto;
          mask-size: auto;
  -webkit-mask-position: 50%;
          mask-position: 50%;
  -webkit-mask-repeat: no-repeat;
          mask-repeat: no-repeat;
}

a.btn, button.btn {
  background-color: #2dd678;
  color: white;
  display: inline-block;
  text-align: center;
  border: none;
  outline: none;
  text-decoration: none;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 100%;
  font-size: 15px;
  font-weight: bold;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 100%;
  opacity: 1;
  -webkit-transition: opacity 1s;
  transition: opacity 1s;
  height: 50px;
  line-height: 50px;
  border-radius: 6px;
  margin-bottom: 10px;
}

a.btn i, button.btn i {
  margin-left: 20px;
  vertical-align: middle;
  display: inline-block;
  line-height: 100%;
}

a.btn:hover, a.btn:active, button.btn:hover, button.btn:active {
  background-color: #C4DCF6;
  color: #3578BF;
}

a.btn:hover i.icon.mask, a.btn:active i.icon.mask, button.btn:hover i.icon.mask, button.btn:active i.icon.mask {
  background: #3578BF;
}

a.btn.disabled, button.btn.disabled {
  opacity: 0.4;
  pointer-events: none;
}

a.btn.next::after, button.btn.next::after {
  content: url(../img/icons/chevron.svg);
  margin-left: 10px;
}

label span.labelError {
  color: #e85555;
}

input {
  background: #F7F7F7;
  height: 50px;
  width: 100%;
  border: 1px solid #d0d5dc;
  -webkit-box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
          box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  font-family: inherit;
  padding: 0 10px;
  color: inherit;
  font-size: inherit;
  margin-bottom: 20px;
}

input:focus {
  outline: none;
}

input::-webkit-input-placeholder {
  color: #BFC9D6;
}

input:-moz-placeholder {
  color: #BFC9D6;
}

textarea {
  height: 80px;
  background: #F7F7F7;
  width: 100%;
  border: 1px solid #d0d5dc;
  -webkit-box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
          box-shadow: inset 0 1px 3px 0 rgba(0, 0, 0, 0.5);
  border-radius: 3px;
  font-family: inherit;
  padding: 10px;
  color: inherit;
  font-size: inherit;
  margin-bottom: 20px;
}

.inputGroup {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.inputGroup input {
  border-radius: 3px 0 0 3px;
}

.inputGroup .btn {
  text-align: center;
  border-radius: 0 3px 3px 0;
}

.alert {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: 20px;
  background-color: red;
  font-size: 17px;
  background-color: #FFE2E2;
  color: #A45858;
  border-radius: 6px;
}

.alert img {
  margin-right: 10px;
}

.mgt {
  margin-top: 20px;
}

.mgb {
  margin-bottom: 20px;
}

.mgb.x2 {
  margin-bottom: calc(20px * 2);
}

.mgb10 {
  margin: 10px 0;
}

.right {
  text-align: right;
}

.left {
  text-align: left !important;
}

.bold {
  font-weight: bold;
}

.cap {
  text-transform: capitalize;
}

.center {
  text-align: center;
}

body {
  height: calc(100vh - 80px);
}

.page {
  top: calc(100vh + 1px);
  opacity: 0;
  -webkit-transition: top 2s, opacity 1s;
  transition: top 2s, opacity 1s;
}

.page.hideToLeft {
  top: calc(100vh - (100vh * 2));
  opacity: 0;
}

.page.appear {
  top: 110px !important;
  opacity: 1;
}

.twoButtonsWrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.twoButtonsWrapper a.btn {
  width: 50%;
  margin: 0 5px;
}

a.btnLink {
  display: block;
  margin-bottom: 10px;
  text-align: center;
  text-decoration: none;
  line-height: 50px;
  background-color: #ecf4fb;
  color: inherit;
}

ul {
  list-style: none;
  padding: 5px;
}

ul li {
  margin-bottom: 10px;
}

ul li:before {
  content: url(../img/icons/radioOff.svg);
  vertical-align: middle;
}

ul li.selected:before {
  content: url(../img/icons/radioOn.svg);
}

ul li a {
  text-decoration: none;
  color: inherit;
}

.robotBubble {
  background: #FFFFFF;
  border: 1px solid #BEBEBE;
  -webkit-box-shadow: 0 2px 14px 0 rgba(0, 0, 0, 0.26);
          box-shadow: 0 2px 14px 0 rgba(0, 0, 0, 0.26);
  padding: 30px 20px;
  border-radius: 0 10px 10px 10px;
  margin-bottom: 20px;
}

.robotBubble p {
  margin: 0;
}

a.iconMode {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition: -webkit-transform 2s;
  transition: -webkit-transform 2s;
  transition: transform 2s;
  transition: transform 2s, -webkit-transform 2s;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}

a.iconMode.dark {
  -webkit-transform: rotateZ(-180deg);
          transform: rotateZ(-180deg);
}

body.dark {
  background-color: #424242;
  color: #D5CECE;
}

body.dark header {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#57776C), to(#475C71));
  background-image: linear-gradient(180deg, #57776C 0%, #475C71 100%);
  border-bottom-color: #475C71;
}

body.dark .robotBubble {
  background-color: #787878;
  border-color: #787878;
  color: #F1F1F1;
}

body.dark footer {
  background-color: #424242;
}

body.dark footer .fillFooter {
  border-bottom-color: #6D6D6D;
}

body.dark footer span.athenaFooter {
  background-image: url(../img/footer_dark.svg);
}

body.dark a.btn {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5AA0A5), to(#4C87AA));
  background-image: linear-gradient(180deg, #5AA0A5 0%, #4C87AA 100%);
}

body.dark a.btnLink {
  background-image: -webkit-gradient(linear, left top, left bottom, from(#5AA0A5), to(#4C87AA));
  background-image: linear-gradient(180deg, #5AA0A5 0%, #4C87AA 100%);
}
/*# sourceMappingURL=styles.css.map */
}
    
</style>

<!-- HEAD -->

<header>
    <span class="clientLogo"></span>
    <a class="iconMode" ng-class="{&#39;dark&#39;:darkMode}" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="switchDarkMode()"><img src="./home_files/mode.svg" alt=""></a>
</header>


<div class="page centered" >
    <div class="wrapper">
        <div class="robotBubble">
            <p>Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña) <b><span class="cap"> ##NOMBRE##</b>?</p>
        </div>
        <div class="twoButtonsWrapper">
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html">NO</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html">SI</a>
        </div>

        <div class="twoButtonsWrapper" >
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;giveMeInformationAboutHim&#39;); setOldPage(&#39;initial&#39;); saveInteraction(1,3,&#39;identidad_incorrecta&#39;);">NO</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;pendingPaymentInfo&#39;); setOldPage(&#39;initial&#39;); saveInteraction(1,2,&#39;confirma_identidad&#39;);">SI</a>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;yesIAm&#39;, &#39;hideToLeft&#39;:oldPage==&#39;yesIAm&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">AIEP le informa que la mensualidad de <b> ##CARRERA## </b> vence el día <b> ##FECHA_VENCE## </b> por un monto de <b> ##MONTO## </b>.<br>
            <br><br>¿Podrá pagar en la fecha indicada?</p>
        </div>
        <div class="twoButtonsWrapper">
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;calendar&#39;); saveInteraction(1,5,&#39;no_pagará&#39;);">NO</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;yesIWillPay&#39;); saveInteraction(1,4,&#39;si_pagará&#39;);">SI</a>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;yesIWillPay&#39;, &#39;hideToLeft&#39;:oldPage==&#39;yesIWillPay&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
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
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;calendar&#39;, &#39;hideToLeft&#39;:oldPage==&#39;calendar&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">¿Nos podría indicar una fecha de pago?</p>
        </div>
        <div id="datepicker"></div><br>

        
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;confirmCommitment&#39;); saveInteraction(1 ,6, &#39;compromiso&#39;, selectedCommitmentDate.format(&#39;YYYY-MM-DD&#39;));">Continuar</a>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;iAmNot&#39;, &#39;hideToLeft&#39;:oldPage==&#39;iAmNot&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Muchas gracias por su tiempo y disculpe las molestias</p>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;confirmCommitment&#39;, &#39;hideToLeft&#39;:oldPage==&#39;confirmCommitment&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>Seleccionó el día <b> ##FECHAPAGO##</b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
        </div>
    </div>
</div>

<!-- ----------------------------------------------------------------------------------------------- -->

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;pendingPaymentInfo&#39;, &#39;hideToLeft&#39;:oldPage==&#39;pendingPaymentInfo&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>
                De acuerdo a nuestros registros, desde el día <b> ##FECHA##</b> se encuentra(n) <b> ##NCUOTAS##</b> cuotas(s) pendiente(s) de su <b>> ##CARRERA##</b>
                por un valor de <b> ##MONTO##</b>. ¿Cuando puede efectuar el Pago?
            </p>
        </div>
        <div id="datepicker" ng-init="initializeCalendar()"></div>
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;calendar&#39;)">Seleccionar fecha</a>
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;iCannotPay&#39;); saveInteraction(1,9,&#39;no_puedo_pagar&#39;);">No puedo</a>
    </div>
</div>


<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;giveMeInformationAboutHim&#39;, &#39;hideToLeft&#39;:oldPage==&#39;giveMeInformationAboutHim&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Conoce Ud a <b><span class="cap">##NOMBRE##</span></b>?</p>
        </div>
        <div class="twoButtonsWrapper">
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;fillInformationAboutHim&#39;)">SI</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;iAmNot&#39;)">NO</a>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;iCannotPay&#39;, &#39;hideToLeft&#39;:oldPage==&#39;iCannotPay&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
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
        <textarea ng-model="$parent.selectedReasonDesc" ng-if="selectedReason==&#39;reason10&#39;" placeholder="Ingresa tu motivo de no pago (máximo 200 caracteres)" maxlength="200"></textarea>
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;infoSituation&#39;); saveInteraction(1 ,7, selectedReasonDesc)">Continuar</a>
    </div>
</div>


<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;fillInformationAboutHim&#39;, &#39;hideToLeft&#39;:oldPage==&#39;fillInformationAboutHim&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Sería tan amable de entregarme alguno de estos datos de contacto?</p>
        </div>
        <form name="contactForm" novalidate="">
            <label>Teléfono <span ng-if="contactForm.phone.$invalid">Error</span></label>
            <input type="text" name="phone" id="phone" ng-model="contact.phone" placeholder="+569" inputmode="tel" maxlength="12">
            <label>Email <span class="labelError" ng-if="contactForm.email.$invalid">(email inválido)</span></label>
            <input type="email" name="email" id="email" ng-model="contact.email" placeholder="Ingrese correo electrónico" inputmode="email" maxlength="50">

            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="checkContactData()">Enviar</a>
        </form>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;thanksForData&#39;, &#39;hideToLeft&#39;:oldPage==&#39;thanksForData&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>Gracias por la información de contacto, le agradecemos su ayuda</p>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;infoSituation&#39;, &#39;hideToLeft&#39;:oldPage==&#39;infoSituation&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p ng-if="[&#39;reason1&#39;, &#39;reason2&#39;, &#39;reason3&#39;].includes(selectedReason);">Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p ng-if="selectedReason==&#39;reason4&#39;">Entiendo. Le informamos que tenemos alternativas para regularizar su deuda.</p>
            <p ng-if="selectedReason==&#39;reason5&#39;">Entiendo. A la brevedad nos pondremos en contacto con Ud. Para resolver su reclamo.</p>
            <p ng-if="selectedReason==&#39;reason6&#39;">Entendemos, verificaremos la información. Disculpe las molestias y gracias por su tiempo</p>
            <p ng-if="selectedReason==&#39;reason7&#39;">Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p ng-if="selectedReason==&#39;reason8&#39;">Nos pondremos en contacto con Ud., para conocer en detalle la situación en que se encuentra y poder entregarle las mejores alternativas de solución . Gracias por su atención y tiempo</p>
            <p ng-if="selectedReason==&#39;reason9&#39;">Le recordamos que puede pagar directmente en el portal de pagos AIEP, ingresando a <a href="https://portalpago.aiep.cl/" target="_blank">https://portalpago.aiep.cl</a></p>
            <p ng-if="selectedReason==&#39;reason10&#39;">Nos pondremos en contacto con Ud., gracias por su atención.</p>
        </div>
    </div>
</div>