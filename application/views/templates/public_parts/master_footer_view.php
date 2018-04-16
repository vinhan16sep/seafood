
<footer class="footer container-fluid">
    <div class="container">
		<div class="row">
			<div class="left col-xs-12 col-sm-4 col-md-4">
				<p><?php echo $this->lang->line('company-address') ?></p>
				<p>Tel: <?php echo $this->lang->line('company-tel') ?></p>
				<p><?php echo $this->lang->line('company-email') ?></p>
			</div>
			<div class="middle col-xs-12 col-sm-4 col-md-4">
				<div class="logo">
					<a href="<?php echo base_url('') ?>">
						<img src="<?php echo site_url('assets/img/logo-footer.png') ?>" alt="Ngoc Huong Logo">
					</a>
				</div>
				<h3><?php echo $this->lang->line('company-follow') ?></h3>
				<ul>
					<li>
						<a href="http://facebook.com" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-facebook-f fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="http://twitter.com" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-twitter fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="http://instagram.com" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-instagram fa-stack-1x"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="right col-xs-12 col-sm-4 col-md-4">
				<p><?php echo $this->lang->line('company-open-time') ?></p>
				<p><?php echo $this->lang->line('company-open-time-start') ?></p>
				<p>& <?php echo $this->lang->line('company-open-time-end') ?></p>
			</div>
		</div>
	</div>
</footer>




<!-- Lightbox JS -->
<script src="<?php echo site_url('assets/lib/lightbox/js/lightbox.js') ?>"></script>
<!-- Smooth Scroll JS -->
<!--<script src="--><?php //echo site_url('assets/lib/smoothScroll/smooth-scroll.min.js') ?><!--"></script>-->
<!-- jQuery Input -->
<script src="<?php echo site_url('assets/js/script.js') ?>"></script>


<script>
   // $(function() {
   //     $('html').smoothScroll(500);
   // });
   $(window).scroll(function () {
       //if you hard code, then use console
       //.log to determine when you want the
       //nav bar to stick.
       'use strict';
       if ($(window).scrollTop() > 150) {
           $('.header').css('' , '');
       }
       if ($(window).scrollTop() < 150) {
           $('.header').css('' , '');
       }
   });
</script>

<script>
	$("a[href*='#']").click(function() {
	    var hash = this.hash;
        console.log($(hash).height());

    });


    // $(document).ready(function(){
    //     // Add smooth scrolling to all links
    //     $("header a[href*='#']").on('click', function(event) {
    //
    //         // Make sure this.hash has a value before overriding default behavior
    //         if (this.hash !== "") {
    //             // Prevent default anchor click behavior
    //             event.preventDefault();
    //
    //             // Store hash
    //             var hash = this.hash;
    //
    //             // Using jQuery's animate() method to add smooth page scroll
    //             // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    //             $('html, body').animate({
		// 			scrollTop: 0,
    //                 scrollTop: $(hash).offset().top
    //             }, 800, function(){
    //
    //                 // Add hash (#) to URL when done scrolling (default click behavior)
    //                 window.location.hash = hash;
    //             });
    //
    //         } // End if
    //     });
    // });
</script>

</body>
</html>