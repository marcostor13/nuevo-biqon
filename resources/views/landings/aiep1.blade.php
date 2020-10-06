

<!-- INICIO-->
<div class="robotBubble">
 	<p>Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña) <b><span class="cap ng-binding"> Luis Rosas G. </span></b>?</p>
</div>
<div class="twoButtonsWrapper ng-scope">
   	<a class="btn" href="#" >NO</a>
   	<a class="btn" href="#" >SI</a>
</div>

<!-- RESPUESTA 1 SI-->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;pendingPaymentInfo&#39;, &#39;hideToLeft&#39;:oldPage==&#39;pendingPaymentInfo&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>
                De acuerdo a nuestros registros, desde el día <b class="ng-binding">28/09/2020</b> se encuentra(n) <b class="ng-binding">1</b> cuotas(s) pendiente(s) de su <b class="ng-binding">mensualidad carrera Ingeniería de Software AIEP</b>
                por un valor de <b class="ng-binding">$75.800</b>. ¿Cuando puede efectuar el Pago?
            </p>
        </div>
        <div id="datepicker" ng-init="initializeCalendar()"></div>
        <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;calendar&#39;)">Seleccionar fecha</a>
        <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;iCannotPay&#39;); saveInteraction(1,9,&#39;no_puedo_pagar&#39;);">No puedo</a>
    </div>
</div>
<!-- RESPUESTA 1 NO-->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;giveMeInformationAboutHim&#39;, &#39;hideToLeft&#39;:oldPage==&#39;giveMeInformationAboutHim&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Conoce Ud a <b><span class="cap ng-binding">Luis Rosas G.</span></b>?</p>
        </div>
        <div class="twoButtonsWrapper">
            <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;fillInformationAboutHim&#39;)">SI</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;iAmNot&#39;)">NO</a>
        </div>
    </div>
</div>
<!-- RESPUESTA 1 NO  RESPUESTA 2 SI-->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;fillInformationAboutHim&#39;, &#39;hideToLeft&#39;:oldPage==&#39;fillInformationAboutHim&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Sería tan amable de entregarme alguno de estos datos de contacto?</p>
        </div>
        <form name="contactForm" novalidate="" class="ng-pristine ng-valid ng-valid-maxlength ng-valid-email">
            <label>Teléfono <!-- ngIf: contactForm.phone.$invalid --></label>
            <input type="text" name="phone" id="phone" ng-model="contact.phone" placeholder="+569" inputmode="tel" maxlength="12" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-maxlength">
            <label>Email <!-- ngIf: contactForm.email.$invalid --></label>
            <input type="email" name="email" id="email" ng-model="contact.email" placeholder="Ingrese correo electrónico" inputmode="email" maxlength="50" class="ng-pristine ng-untouched ng-valid ng-empty ng-valid-email ng-valid-maxlength">

            <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="checkContactData()">Enviar</a>
        </form>
    </div>
</div>

<!-- RESPUESTA 1 NO  RESPUESTA 2 SI  VALIDACION CORRECTA-->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;thanksForData&#39;, &#39;hideToLeft&#39;:oldPage==&#39;thanksForData&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>Gracias por la información de contacto, le agradecemos su ayuda</p>
        </div>
    </div>
</div>
<!-- RESPUESTA 1 NO  RESPUESTA 2 NO-->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;iAmNot&#39;, &#39;hideToLeft&#39;:oldPage==&#39;iAmNot&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Muchas gracias por su tiempo y disculpe las molestias</p>
        </div>
    </div>
</div>


<!-- RESPUESTA si SELECCIONAR FECHA -->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;calendar&#39;, &#39;hideToLeft&#39;:oldPage==&#39;calendar&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">¿Nos podría indicar una fecha de pago?</p>
        </div>
        <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;confirmCommitment&#39;); saveInteraction(1 ,6, &#39;compromiso&#39;, selectedCommitmentDate.format(&#39;YYYY-MM-DD&#39;));">Continuar</a>
    </div>
</div>

<!-- VALIDAR SELECCIONAR FECHA -->

<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;confirmCommitment&#39;, &#39;hideToLeft&#39;:oldPage==&#39;confirmCommitment&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>Seleccionó el día <b class="ng-binding">6 de octubre de 2020</b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
        </div>
    </div>
</div>

<!-- RESPUESTA si NO PUEDO -->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;iCannotPay&#39;, &#39;hideToLeft&#39;:oldPage==&#39;iCannotPay&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Por favor indicar el motivo de su atraso</p>
        </div>
        <ul>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason1&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason1&#39;, &#39;Cesante&#39;)"> Cesante</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason2&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason2&#39;, &#39;Problema_economico&#39;)"> Problema económico</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason3&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason3&#39;, &#39;Problema_salud&#39;)"> Problema de salud</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason4&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason4&#39;, &#39;Crédito&#39;)"> Crédito</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason5&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason5&#39;, &#39;Reclamo&#39;)"> Reclamo</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason6&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason6&#39;, &#39;Ya_pagó&#39;)"> Ya pagó</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason7&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason7&#39;, &#39;No_tengo_cupón&#39;)"> No tengo cupón</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason8&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason8&#39;, &#39;Siniestro&#39;)"> Siniestro</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason9&#39;}"> <a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason9&#39;, &#39;Olvido&#39;)"> Olvido</a></li>
            <li ng-class="{&#39;selected&#39;:selectedReason==&#39;reason10&#39;}"><a href="https://aiep.athenacampaign.com/p/" ng-click="selectReason(&#39;reason10&#39;, &#39;&#39;)"> Otra</a></li>
        </ul>
        <!-- ngIf: selectedReason=='reason10' -->
        <a class="btn" href="https://aiep.athenacampaign.com/p/" ng-click="goPage(&#39;infoSituation&#39;); saveInteraction(1 ,7, selectedReasonDesc)">Continuar</a>
    </div>
</div>

<!-- MOTIVO ATRASO -->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;infoSituation&#39;, &#39;hideToLeft&#39;:oldPage==&#39;infoSituation&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <!-- ngIf: ['reason1', 'reason2', 'reason3'].includes(selectedReason); -->
            <!-- ngIf: selectedReason=='reason4' -->
            <!-- ngIf: selectedReason=='reason5' -->
            <!-- ngIf: selectedReason=='reason6' -->
            <!-- ngIf: selectedReason=='reason7' -->
            <!-- ngIf: selectedReason=='reason8' -->
            <!-- ngIf: selectedReason=='reason9' -->
            <!-- ngIf: selectedReason=='reason10' -->
        </div>
    </div>
</div>


<!-- RESPUESTA si SELECCIONAR FECHA -->
<div class="page centered ng-scope" ng-class="{&#39;appear&#39;:currentPage==&#39;yesIWillPay&#39;, &#39;hideToLeft&#39;:oldPage==&#39;yesIWillPay&#39;}">
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

<!-- RESPUESTA 1 NO -->


