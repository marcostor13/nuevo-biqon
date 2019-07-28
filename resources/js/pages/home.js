//GENERALES 

//DESPLEGAR MENU

$(function(){
    if( $(window).width()<768){
        $('.itemMenu span').show('fast'); 
        $('.itemMenu').hide(); 
        $('#logout').hide();
        $('#navPrincipal').removeClass('vh-100');
        $('#menuLateral ').addClass('justify-content-end'); 
        $('#iconMenu').addClass('pb-4'); 
    }
});


$( "#iconMenu" ).click(function() {

    if( $(window).width()<768){
    
    $('.itemMenu').toggle('fast');

    $('#logout').toggle('fast');

    }else{
        $('.itemMenu span').toggle('fast');
        $( '#imgPerfil' ).toggleClass( "imgPerfil" );
    }    
    
});


var path = window.location.pathname; 

if(path == '/home'){


    



}


