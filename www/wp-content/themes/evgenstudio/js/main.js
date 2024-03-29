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

    var ecran_3 = false;
    var ecran_4 = false;

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
            ecran_3 = false;
            ecran_4 = false;
        }

        if($(window).scrollTop() < $('.main-content').offset().top - 100 && customScrolltop && block.style.animationName != 'main-content-start-back') {
            block.style.animationName = 'main-content-start-back';
            block.setAttribute('data-animation', 'main-content-start-back');
        }

        if($(window).scrollTop() > $('#uslugi').offset().top - 200 && $(window).scrollTop() <= $('#projects').offset().top - 400){
            if(!ecran_3){
                if(customScrolltop){
                    block.style.animationName = 'main-content-second-top';
                    ecran_3 = true;
                } else {
                    block.style.animationName = 'main-content-second';
                    ecran_3 = true;
                }
            }

            block.style.animationDuration = '1s';
            block.setAttribute('data-animation', 'main-content-second');
            imgList3.style.animationName = 'imgList3';
            imgList3.style.opacity = 1;
            ecran_4 = false;
        }

        if($(window).scrollTop() > $('#projects').offset().top - 400 && $(window).scrollTop() <= $('#contacts').offset().top - 200){
            ecran_3 = false;
            if(!ecran_4){
                if(customScrolltop){
                    block.style.animationName = 'main-content-object-top';
                    ecran_4 = true;
                } else {
                    block.style.animationName = 'main-content-object';
                    ecran_4 = true;
                }
            }
            block.style.animationDuration = '1s';
            block.setAttribute('data-animation', 'main-content-object');
        }

        if($(window).scrollTop() > $('#contacts').offset().top - 200){
            ecran_3 = false;
            ecran_4 = false;
            block.style.animationName = 'main-content-footer';
            block.style.animationDuration = '1s';
            block.setAttribute('data-animation', 'main-content-footer');
        }
    });

    if($(document).width() >= 991){
        $(document).on('click','.uslugi-item span', function(){
            var uslugiModal = document.querySelector('.uslugi-modal-wrapper');
            if(uslugiModal.style.opacity == 0){
                uslugiModal.classList.add('show');
                uslugiModal.classList.remove('hide');
                uslugiModal.style.opacity = 1;
            }
            $('.uslugi-modal-content').html($(this).parent().find('.uslugi-content').html());
        });
    } else {
        $(document).on('click','.uslugi-item span', function(){
            $('.uslugi-modal-wrapper-global').show();
            $('.uslugi-modal-content-2').html($(this).parent().find('.uslugi-content').html());
            $('body').addClass('overflowy-hidden');
        });
    }


    $(document).on('click','.close-uslugi-modal', function(){
        var uslugiModal = document.querySelector('.uslugi-modal-wrapper');
        if(uslugiModal.style.opacity != 0){
            uslugiModal.classList.add('hide');
            uslugiModal.classList.remove('show');
            uslugiModal.style.opacity = 0;
        }
        $('body').removeClass('overflowy-hidden');
        $('.uslugi-modal-wrapper-global').hide();
    });

    $(document).on('click','.close-project-modal', function(){
        $('body').removeClass('overflowy-hidden');
        $('.wrapper_modal').fadeOut(200);
    });

    $(document).on('click','.projects-sorting li span', function(){
        $('.projects-sorting li span').removeClass('active');
        $(this).addClass('active');
        var srt = $(this).data('sort');
        $('.project_item').each(function (index, value) {
            if($(this).data('sort').includes(srt + '+')){
                $(this).addClass('d-block');
                $(this).removeClass('d-none');
            } else {
                $(this).addClass('d-none');
                $(this).removeClass('d-block');
            }
        });
    });

    $(document).on('click','.hamburger', function(){
        if($(this).hasClass('is-active')){
            $(this).removeClass('is-active');
            $('body').removeClass('overflowy-hidden');
            $('.menu-mobile').slideUp('300');
        } else {
            $(this).addClass('is-active');
            $('.menu-mobile').slideDown('300');
            $('body').addClass('overflowy-hidden');
        }
    });


    //Скрол главного меню
    let scrollDataMenu = 0;
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() >= $('.header').offset().top && $(window).width() >= 768 && scrollDataMenu == 0 ) {
            console.log($(window).scrollTop());
            console.log($('.header').offset().top);
            $('.header').addClass('position-fixed');
            scrollDataMenu = $('.header').offset().top;
        }

        if ($(window).scrollTop() < scrollDataMenu){
            $('header').removeClass('position-fixed');
            scrollDataMenu = 0;
        }

    });

    $('a[href^="#"]').click( function(){
        $('.hamburger').removeClass('is-active');
        $('body').removeClass('overflowy-hidden');
        $('.menu-mobile').slideUp('300');
        var scroll_el = $(this).attr('href');
        var destination = $(scroll_el).offset().top;
        if ($(scroll_el).length != 0) {
            $('html, body').animate( { scrollTop: destination }, 1100 );
        }
        return false;
    });

    var swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          type: 'fraction',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });

});