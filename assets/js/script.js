$(document).ready(function(){
   'use strict';
   var h = $(window).height();

   // Use Script to get CSS
   $('.slide#slider').css('height' , h * 90 / 100);

    // Smooth Scroll
    // $('header a').bind('click.smoothscroll',function (e) {
    //     e.preventDefault();
    //
    //     var target = this.hash,
    //         $target = $(target);
    //
    //     $('html, body').stop().animate({
    //         'scrollTop': $target.offset().top
    //     }, 900, 'swing', function () {
    //         window.location.hash = target;
    //     });
    //     console.log($target);
    // });

    //Expand NAV in Devices

    var winWidth = $(window).width();

    if(winWidth <= 992){
        $('nav > .nav-expand').hide();
        var i = 1;

        $('#nav-expand-btn').click(function(){
            if(i === 1){
                $('nav > .nav-expand').slideDown();
                $('.header').css('background' , '#333');
                i = 0
            } else {
                $('nav > .nav-expand').slideUp();
                $('.header').css('background' , '')
                i = 1
            }
        })

        //Make gallery square size item
        var maskWidth = $('.container-fluid#gallery .mask').width();
        //console.log(maskWidth);
        $('.container-fluid#gallery .mask').css('height' , maskWidth);
        //var maskHeight = $('.container-fluid#gallery .mask').height();
        //console.log(maskHeight);
    };


    // //scroll js
    // smoothScroll.init({
    //     selector: '[data-scroll]', // Selector for links (must be a valid CSS selector)
    //     selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
    //     speed: 500, // Integer. How fast to complete the scroll in milliseconds
    //     easing: 'easeInOutCubic', // Easing pattern to use
    //     updateURL: true, // Boolean. Whether or not to update the URL with the anchor hash on scroll
    //     offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
    //     callback: function ( toggle, anchor ) {} // Function to run after scrolling
    // });

});




