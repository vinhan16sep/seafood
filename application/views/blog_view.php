<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/blogs.css">

<div class="cover">
	<div class="mask">
		<img src="http://ngochuong.vn/assets/upload/banner/96356c19ad617951219b18438da2a6cf.jpg" alt="cover">
	</div>
</div>

<section class="main-content container-fluid">
    <div class="container-fluid content" id="list-blogs">
        <div class="title">
            <h1><?php echo $this->lang->line('blogs') ?></h1>
        </div>
		<div class="container">
			<div class="row">
                <?php if($blogs): ?>
                	<?php foreach ($blogs as $key => $value): ?>
						<div class="item col-sm-4 col-xs-12">
							<div class="mask">
								<a href="<?php echo base_url('blog/detail/' . $value['slug']) ?>">
									<img src="<?php echo base_url('assets/upload/blog/'. $value['image']) ?>" alt="">
								</a>
							</div>
							<a href="<?php echo base_url('blog/detail/' . $value['slug']) ?>"><?php echo $value['title'] ?></a>
						</div>
                    <?php endforeach ?>
                <?php endif ?>
			</div>
		</div>
<!--        <div class="carousel" data-ride="carousel">-->
<!--            <div class="carousel-inner" role="listbox">-->
<!--                <div class="item active">-->
<!--                    <div class="row" style="padding: 2%">-->
<!--                        --><?php //if($blogs): ?>
<!--                            --><?php //foreach ($blogs as $key => $value): ?>
<!--                                <div class="image col-xs-6 col-sm-6 col-md-4">-->
<!--                                    <div class="inner">-->
<!--                                        <div class="mask">-->
<!--                                            <a href="--><?php //echo base_url('blog/detail/' . $value['slug']) ?><!--">-->
<!--                                                <img src="--><?php //echo base_url('assets/upload/blog/'. $value['image']) ?><!--" alt="">-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <a href="--><?php //echo base_url('blog/detail/' . $value['slug']) ?><!--">--><?php //echo $value['title'] ?><!--</a>-->
<!--                                    </div>-->
<!--                                    -->
<!--                                </div>-->
<!--                            --><?php //endforeach ?>
<!--                        --><?php //endif ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

    </div>
    <!-- End Contact -->
</section>



