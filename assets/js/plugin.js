//to make wordpress accept ' $ ' jquery var
$ = jQuery.noConflict();

$(document).ready(function () {
    // menu settings

    $('.mobile-menu .menu').on('click',function () {
        $('nav.site-nav').toggle('slow');
    });
    
    var breakPoint  = 500;
    
    $(window).resize(function () {
      
        if($(document).width() < breakPoint){
           $('nav.site-nav').hide('slow');

       } else {
           $('nav.site-nav').show('slow');

       }
    });
    
});

