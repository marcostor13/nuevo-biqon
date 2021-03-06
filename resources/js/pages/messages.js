var path = window.location.pathname; 


if(path == '/messages'){

    $(function(){

        eventsInputPhone(); 
        textAreaMaxLength();

        //FORM SENDUNITSMESSAGES

        $('#sendUnitMessages').submit(function(){
            sendUnitMessages();
            return false;
        });

        

    });


    //ADD NEW INPUT NUMBER
    $('#addNumber').click(function(){
        let amountInputs = $('#phones input').length; 
        $('#phones').append(`<div class="d-flex align-items-center"><input type="text" name="phone_${amountInputs+1}" class="form-control mt-1" placeholder="Ingrese el destinatario" aria-describedby="Destinatario" maxlength="12" required><i class="deleteNumber far fa-trash-alt ml-3 cursor text-color4"></i></div>`);
        eventsInputPhone();
        $('.deleteNumber').click(function(){
            $(this).parent().remove(); 
        }); 
    });

    //LAST CHARACTER
    $('.message-landing').keyup(function(){
        contarCaracteres($(this).attr('id'), 160);        
    });

    let contarCaracteres = function(id, cant){
        if($("#"+id).val().indexOf('(url)') > -1){
            $("#"+id).attr('maxlength', '135');
            cant = 135;
            textAreaMaxLength();
        }
        var car = $("#"+id).val().length;
        car = cant-car;
        $(".counter").text(car);        
    }

    //maxlength inputs
    let textAreaMaxLength = function(){
        $('textarea').keyup(function(){
            var maxlength = parseInt($(this).attr('maxlength')),
                text = $(this).val(),
                eol = text.match(/(\r\n|\n|\r)/g),
                count_eol = $.isArray(eol) ? eol.length : 0,//error if eol is null
                count_chars = text.length - count_eol;
            if (maxlength && count_chars > maxlength)
              $(this).val(text.substring(0, maxlength + count_eol));
          });

    }
    
   
      

    let eventsInputPhone = function(){

        $('#phones input').keyup(function(){
        var maxlength = parseInt($(this).attr('maxlength')),
            text = $(this).val(),
            eol = text.match(/(\r\n|\n|\r)/g),
            count_eol = $.isArray(eol) ? eol.length : 0,//error if eol is null
            count_chars = text.length - count_eol;
        if (maxlength && count_chars > maxlength)
            $(this).val(text.substring(0, maxlength + count_eol));
        })
        .keypress(function(event){
            return soloNumeros(event);
        });

    }

    
    //ONLY NUMBERS
    let soloNumeros = function(evt){

        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)){
            if(charCode == 43){
                return true;
            }else{
                return false;
            } 	
        }   
        return true;    
    }


    
    let sendUnitMessages = function(skip = false){

        let data = $('#sendUnitMessages').serialize();

        if(skip !== false){
            data += '&skip=true';
        }
       
        $.post( '/sendUnitMessages', data, function() {
             
        })
        .done(function(e) {
            console.log(e);
            if(e.status === '100'){
                let errors = '';
                let index = 1; 
                e.data.forEach(element => {
                    errors += `<tr>
                                    <th scope="row">${index}</th>                                    
                                    <td>${element}</td>
                                </tr>`;
                    
                }); 
                
                $('#modal').modal("show");
                $('#modallabel').text('Errores'); 
                $('#modalContent').html(`
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Error</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            ${errors}
                        </tbody>
                    </table>
                `); 
                $('#actionModal').text('Omitir').click(function(){
                    sendUnitMessages(true); 
                    $('#modal').modal("hide");
                }); 

            }else if(e.status === '200'){
                console.log(e.data);
            }


            
        })
        .fail(function(e) {
            console.log(e);
        });
    }


}