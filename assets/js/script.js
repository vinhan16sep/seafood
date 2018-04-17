$(document).ready(function(){
   'use strict';
   var h = $(window).height();
   var winWidth = $(window).width();

   // Use Script to get CSS
   $('.slide#slider').css('height' , h * 90 / 100);

    //Make gallery square size item
    var maskWidth = $('.container-fluid#gallery .mask').width();
    $('.container-fluid#gallery .mask').css('height' , maskWidth);

    // Smooth Scroll
    var navH = $('header').height();
    var sl = $('#slider').height();
    var ab = $('#about').height() + 200;
    var fo = $('#food').height() + 200;
    var ev = $('#events').height() + 200;
    var ga = $('#gallery').height() + 200;
    var br = $('.break').height() + 300;

    if(winWidth <= 992){
        ab = $('#about').height() + 100;
        fo = $('#food').height() + 100;
        ev = $('#events').height() + 100;
        ga = $('#gallery').height() + 100;
        br = $('.break').height() + 300;
    }


    $('.header a#toAbout, a#toAbout').click(function () {
        $('html, body').animate({
            scrollTop : sl - navH
        }, 800)
    });
    $('.header a#toFood').click(function () {
        $('html, body').animate({
            scrollTop : sl + ab + br - navH
        }, 800)
        console.log(sl + ab + br - navH)
    });
    $('.header a#toEvents').click(function () {
        $('html, body').animate({
            scrollTop : sl + ab + br + fo + br - navH
        }, 800)
    });
    $('.header a#toGallery').click(function () {
        $('html, body').animate({
            scrollTop : sl + ab + br + fo + br + ev - navH
        }, 800)
    });
    $('.header a#toContact').click(function () {
        $('html, body').animate({
            scrollTop : sl + ab + br + fo + br + ev + ga - navH
        }, 800)
    });
    $('.footer .logo a').click(function () {
        $('html, body').animate({
            scrollTop : 0
        }, 800)
    });


    //Expand NAV in Devices

    if(winWidth <= 992){

        $('nav > .nav-expand').hide();
        var i = 1;

        $('#nav-expand-btn').click(function(){
            if(i === 1){
                $('nav > .nav-expand').slideDown();
                $('.header').css('background' , '#333');
                i = 0;
            } else {
                $('nav > .nav-expand').slideUp();
                $('.header').css('background' , '')
                i = 1
            }
        })

        $('.nav-expand a').click(function(){
            $('nav > .nav-expand').slideUp();
            $('.header').css('background' , '')
            i = 1
        })

    };


});




