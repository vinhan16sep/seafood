$(document).ready(function(){
   'use strict';
   var h = $(window).height();

   // Use Script to get CSS
   $('.slide#slider').css('height' , h * 90 / 100);


    $('header a[href^="#"]').bind('click.smoothscroll',function (e) {
        e.preventDefault();

        var target = this.hash,
            $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
    });

    //Expand NAV in Devices

    var winWidth = $(window).width();

    if(winWidth <= 768){
        $('nav > .nav-expand').hide();
        var i = 1;

        $('#nav-expand-btn').click(function(){
            if(i === 1){
                $('nav > .nav-expand').slideDown();
                i = 0
            } else {
                $('nav > .nav-expand').slideUp();
                i = 1
            }
        })
    };

    //Slider Gallery

    $(document).ready(function(){

        $('#itemslider').carousel({ interval: 3000 });

        $('.carousel-showmanymoveone .item').each(function(){
            var itemToClone = $(this);

            for (var i=1;i<6;i++) {
                itemToClone = itemToClone.next();

                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }

                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
            }
        });
    });

});


$(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    'use strict';
    if ($(window).scrollTop() > 150) {
        $('.header').css('background-color' , 'red');
    }
    if ($(window).scrollTop() < 150) {
        $('.header').css('background-color' , 'blue');
    }
});