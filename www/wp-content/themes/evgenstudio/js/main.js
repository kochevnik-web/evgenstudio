jQuery( document ).ready( function( $ ) {

    new WOW().init();

    setTimeout(function(){
        $('.preloader').fadeOut(700);
    }, 1000);

    setTimeout(function(){
        $('.site-background-right').addClass('start');
    }, 1700);

    console.log($('.main-content').offset());

    $(window).scroll(function(){
        var block = document.querySelector('.site-background-right');
        if($(window).scrollTop() > $('.main-content').offset().top - 100){
            block.style.animationName = 'main-content-start';
            block.style.animationDuration = '1.5s';
            setTimeout(function(){
                block.style.backgroundColor = '#2E3E43';
            }, 1500 );
        }
        console.log($('.main-content').offset());
        console.log($(window).scrollTop());
    });

});