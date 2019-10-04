jQuery( document ).ready( function( $ ) {

    new WOW().init();

    setTimeout(function(){
        $('.preloader').fadeOut(700);
    }, 1000);

    setTimeout(function(){
        $('.site-background-right').addClass('start');
        var imgList1 = document.querySelector('.imgList1');
        imgList1.style.animationName = 'imgList1';
        imgList1.style.opacity = 1;
    }, 1700);

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

        var block = document.querySelector('.site-background-right');
        var imgList2 = document.querySelector('.imgList2');
        var imgList3 = document.querySelector('.imgList3');
        if($(window).scrollTop() > $('.main-content').offset().top - 200 && $(window).scrollTop() < $('#uslugi').offset().top - 200) {
            block.style.animationName = 'main-content-start';
            block.style.animationDuration = '1s';
            block.setAttribute('data-animation', 'main-content-start');
            imgList2.style.animationName = 'imgList2';
            imgList2.style.opacity = 1;
        }

        if($(window).scrollTop() < $('.main-content').offset().top - 100 && customScrolltop && block.style.animationName != 'main-content-start-back') {
            block.style.animationName = 'main-content-start-back';
            block.setAttribute('data-animation', 'main-content-start-back');
        }

        if($(window).scrollTop() > $('#uslugi').offset().top - 200){
            block.style.animationName = 'main-content-second';
            block.style.animationDuration = '1s';
            block.setAttribute('data-animation', 'main-content-second');
            imgList3.style.animationName = 'imgList3';
            imgList3.style.opacity = 1;
        }
    });

});