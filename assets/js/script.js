$(document).ready(function(){
   'use strict';
   var h = $(window).height();

   // Use Script to get CSS
   $('.slide').css('height' , h * 90 / 100);


    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
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
    }

});


$(window).scroll(function () {
    //if you hard code, then use console
    //.log to determine when you want the
    //nav bar to stick.
    'use strict';
    if ($(window).scrollTop() > 150) {
        $('.header').addClass('fixed');
    }
    if ($(window).scrollTop() < 150) {
        $('.header').removeClass('fixed');
    }
});