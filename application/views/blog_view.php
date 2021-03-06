<section id="list-blogs">
	<div class="cover">
		<div class="mask">
			<img src="http://ngochuong.vn/assets/upload/banner/96356c19ad617951219b18438da2a6cf.jpg" alt="cover">
		</div>
	</div>

	<section class="main-content container-fluid">
		<div class="container-fluid content">
			<div class="title">
				<h1><?php echo $this->lang->line('blogs') ?></h1>
			</div>
			<div class="container">
				<div class="row">
                    <?php if($blogs): ?>
                        <?php foreach ($blogs as $key => $value): ?>
							<div class="item col-sm-4 col-xs-12">
								<div class="square">
									<div class="mask">
										<a href="<?php echo base_url('blog/detail/' . $value['slug']) ?>">
											<img src="<?php echo base_url('assets/upload/blog/'. $value['image']) ?>" alt="">
										</a>
									</div>
								</div>
								<a href="<?php echo base_url('blog/detail/' . $value['slug']) ?>"><?php echo $value['title'] ?></a>
							</div>
                        <?php endforeach ?>
                    <?php endif ?>
				</div>
				<div class="page col-sm-6 col-sm-offset-3 col-xs-12">
                    <?php echo $page_links ?>
				</div>
			</div>
		</div>
		<!-- End Contact -->
	</section>
</section>




