
<footer class="footer container-fluid">
    <div class="container">
		<div class="row">
			<div class="left col-xs-12 col-sm-4 col-md-4">
				<p><?php echo $this->lang->line('company-address') ?></p>
				<p>Tel: 0933 15 15 15 | info@ngochuong.vn</p>
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
						<a href="https://www.facebook.com/NgocHuongSeafood/" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-facebook-f fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="http://instagram.com/ngochuongseafood" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-instagram fa-stack-1x"></i>
							</span>
						</a>
					</li>
					<li>
						<a href="https://www.tripadvisor.com.vn/" target="_blank">
							<span class="fa-stack fa-lg">
								<i class="fa fa-tripadvisor fa-stack-1x"></i>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="right col-xs-12 col-sm-4 col-md-4">
				<p><?php echo $this->lang->line('company-open-time') ?></p>
				<p>10h00 - 22:00 </p>
			</div>
		</div>
	</div>
</footer>




<!-- Lightbox JS -->
<script src="<?php echo site_url('assets/lib/lightbox/js/lightbox.min.js') ?>"></script>
<!-- jQuery Input -->
<script src="<?php echo site_url('assets/js/script.min.js') ?>"></script>

<script type="text/javascript">
    function onLoad(){
        if( $(window).width() <= 992) {

            //Hide nav expand menu
            $('nav > .nav-expand').hide();
        }
    };

    window.onload = onLoad();
</script>


</body>
</html>