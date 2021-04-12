$(document).ready(function() {
    
    
    
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