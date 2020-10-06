
<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;initial&#39;, &#39;hideToLeft&#39;:oldPage==&#39;initial&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>Buenos Dias, soy su asistente AIEP Finanzas, es usted Don(ña) <b><span class="cap">{{clientData.field1}}</span></b>?</p>
        </div>
        <div class="twoButtonsWrapper" ng-if="isGreaterThanCurrentDate(split(clientData.field2, 1))">
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;iAmNot&#39;); saveInteraction(1,3,&#39;identidad_incorrecta&#39;);">NO</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;yesIAm&#39;); saveInteraction(1,2,&#39;confirma_identidad&#39;);">SI</a>
        </div>

        <div class="twoButtonsWrapper" ng-if="!isGreaterThanCurrentDate(split(clientData.field2, 1))">
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;giveMeInformationAboutHim&#39;); setOldPage(&#39;initial&#39;); saveInteraction(1,3,&#39;identidad_incorrecta&#39;);">NO</a>
            <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;pendingPaymentInfo&#39;); setOldPage(&#39;initial&#39;); saveInteraction(1,2,&#39;confirma_identidad&#39;);">SI</a>
        </div>
    </div>
</div>

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;yesIAm&#39;, &#39;hideToLeft&#39;:oldPage==&#39;yesIAm&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">AIEP le informa que la mensualidad de <b>{{split(clientData.field2, 0)}}</b> vence el día <b>{{YMD2DMY(split(clientData.field2, 1))}}</b> por un monto de <b>{{formatNumberCL(clientData.field3)}}</b>.<br>
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
            <p>Seleccionó el día <b>{{selectedCommitmentDate.format('LL')}}</b> como fecha de compromiso de pago.</p>
            <p>Muchas gracias. Que tenga un buen dia. Hasta luego</p>
        </div>
    </div>
</div>

<!-- ----------------------------------------------------------------------------------------------- -->

<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;pendingPaymentInfo&#39;, &#39;hideToLeft&#39;:oldPage==&#39;pendingPaymentInfo&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p>
                De acuerdo a nuestros registros, desde el día <b>{{YMD2DMY(split(clientData.field2, 1))}}</b> se encuentra(n) <b>{{split(clientData.opcion, 0)}}</b> cuotas(s) pendiente(s) de su <b>{{split(clientData.opcion, 1)}}</b>
                por un valor de <b>{{formatNumberCL(clientData.field3)}}</b>. ¿Cuando puede efectuar el Pago?
            </p>
        </div>
        <div id="datepicker" ng-init="initializeCalendar()"></div>
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;calendar&#39;)">Seleccionar fecha</a>
        <a class="btn" href="https://aiep.athenacampaign.com/p/views/home.html" ng-click="goPage(&#39;iCannotPay&#39;); saveInteraction(1,9,&#39;no_puedo_pagar&#39;);" "="">No puedo</a>
    </div>
</div>


<div class="page centered" ng-class="{&#39;appear&#39;:currentPage==&#39;giveMeInformationAboutHim&#39;, &#39;hideToLeft&#39;:oldPage==&#39;giveMeInformationAboutHim&#39;}">
    <div class="wrapper">
        <div class="robotBubble">
            <p class="center">Conoce Ud a <b><span class="cap">{{clientData.field1}}</span></b>?</p>
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