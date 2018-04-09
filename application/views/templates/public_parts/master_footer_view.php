
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
						<img src="<?php echo site_url('assets/img/logo_n.png') ?>" alt="Ngoc Huong Logo">
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



<!-- jQuery Input -->
<script src="<?php echo site_url('assets/js/script.js') ?>"></script>
<!-- Lightbox JS -->
<script src="<?php echo site_url('assets/lib/lightbox/js/lightbox.js') ?>"></script>
<!-- Smooth Scroll JS -->
<script src="<?php echo site_url('assets/lib/smoothScroll/jquery.smoothscroll.js') ?>"></script>

<script>
    $(function() {
        $('html').smoothScroll(500);
    });
</script>

</body>
</html>