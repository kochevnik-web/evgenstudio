jQuery( document ).ready( function( $ ) {

    new WOW().init();

    setTimeout(function(){
        $('.preloader').fadeOut(700);
    }, 1000);

    setTimeout(function(){
        $('.site-background-right').addClass('start');
    }, 1700);

});