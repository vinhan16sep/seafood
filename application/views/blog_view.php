<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/blogs.css">
<style type="text/css">
.page{
	text-align: center;
}
.page strong{
	border: 1px solid #337ab7;
	border-radius: 3px;
	margin-right: 3px;
	padding: 5px 10px;
	color: #fff;
	cursor: pointer;
	background-color: #337ab7;
	border-color: #337ab7;
}
.page a{
	color: #23527c;
	background-color: #fff;
	border-color: #fff;
	border-radius: 3px;
	margin-right: 3px;
	padding: 5px 10px;
	cursor: pointer;
}
.page a:hover{
	background: #ddd;
}
</style>
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
			<div class="page col-sm-6 col-sm-offset-3 col-xs-12">
                <?php echo $page_links ?>
            </div>
		</div>
    </div>
    <!-- End Contact -->
</section>



