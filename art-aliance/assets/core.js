$(document).ready(function() {
    
    $('form').submit(function(e){
        e.preventDefault();
        var params = $(this).serialize(),
            b = $(this).find('button');

        $.ajax({
            type: "POST",
            url: 'assets/ajax.php',
            data: params,
            success: function(answer){
                $(this).prop('disabled', false);
                var obj = jQuery.parseJSON(answer);
                $('input[name="name"]').val('');
                $('input[name="phone"]').val('');
                $('input[name="mail"]').val('');
                if(obj.response){
                    var n = $('#noty_center_layout_container').noty({text: obj.response,type: 'success',layout: 'center', modal : true, timeout: 5000});
                    $(':input[type="submit"]').prop('disabled', false);
                }else{
                    var n = $('#noty_center_layout_container').noty({text: obj.error,type: 'warning',layout: 'center', modal : true, timeout: 5000});
                    $(b).prop('disabled', false);
                    var ovr = jQuery.parseJSON(answer);
                    console.log(ovr[0]['result']['status']);
                    if ( ovr[0]['result']['status'] === 'success' ){
                        var a = ovr[0]['result']['code'];
                        $('body').before(a);
                        console.log('Code: ' + a);
                    }
                }
            }
         });
    });
    
    /* open modal */
    $('[data-action=popup_open]').click(function(e){
        $('#m001_popup').fadeIn(450);
        $('#m001_overlay').fadeIn(450);
        e.preventDefault();
    });
    
    /* close modal */
    $('[data-action=popup_close]').click(function(){
        $('#m001_popup').fadeOut(450);
        $('#m001_overlay').fadeOut(450);
        e.preventDefault();
    });
    
});