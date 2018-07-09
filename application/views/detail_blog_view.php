<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/blogs.css">

<div class="cover">
	<div class="mask">
		<img src="<?php echo base_url('assets/upload/blog/'. $detail['image']) ?>">
	</div>
</div>

<section class="main-content container-fluid">
	<div class="container-fluid content" id="detail-blogs">
		<div class="title">
			<h1><?php echo $detail['title'] ?></h1>
		</div>
		<div class="container">
			<article>
				<p class="description"><?php echo $detail['description'] ?></p>

				<p class="paragraph"><?php echo $detail['content'] ?></p>
			</article>
		</div>
	</div>
</section>
