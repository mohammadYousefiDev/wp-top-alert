jQuery(document).ready(function($){
    
    $('.wpa_container').slideDown(400);
    
    $('.wpa_in_container>span').on( 'click' ,function(){
        $('.wpa_container').slideUp(400);
    });
    
});