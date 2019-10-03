jQuery( document ).ready( function( $ ) {

    new WOW().init();

    setTimeout(function(){
        $('.preloader').fadeOut(700);
    }, 1000);

    setTimeout(function(){
        $('.site-background-right').addClass('start');
    }, 1700);

    console.log($('.main-content').offset());

    var customScroCount = 0;
    $(window).scroll(function(){
        var customScrolltop = false;
        
        if (customScroCount < $(window).scrollTop() ) {
            customScrolltop = false;
            customScroCount = $(window).scrollTop();
        } else {
            customScrolltop = true;
            customScroCount = $(window).scrollTop();
        }

        console.log(customScrolltop);
        console.log(customScroCount);
        var block = document.querySelector('.site-background-right');
        if($(window).scrollTop() > $('.main-content').offset().top - 100){
            block.style.animationName = 'main-content-start';
            block.style.animationDuration = '1.5s';
            setTimeout(function(){
                block.style.backgroundColor = '#2E3E43';
            }, 1500 );
        }

        if($(window).scrollTop() < $('.main-content').offset().top - 100 && customScrolltop && block.style.animationName != 'main-content-start-back') {
            block.style.animationName = 'main-content-start-back';
            setTimeout(function(){
                block.style.backgroundColor = '#01B8ED';
            }, 1500 );
        }
    });

});