<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Tell the browser to be responsive to screen width -->
    <?php if ($this->uri->segment(1) != 'blog'): ?>
        <?php if ($this->uri->segment(1) == 'booking'): ?>
            <title>Đặt Bàn</title>
        <?php else: ?>
            <title>Ngoc Huong Restaurant</title>
        <?php endif ?>
        
        <meta name="description" content="<?php echo isset($event['meta_description'])? $event['meta_description'] : '' ?>">
        <meta name="keywords" content="<?php echo isset($event['meta_keywords']) ? $event['meta_keywords'] : '' ?>">
    <?php else: ?>
        <?php if ($this->uri->segment(2) == 'detail'): ?>
            <title><?php echo $detail['dynamictitle'] ?></title>
        <?php else: ?>
            <title>Tin Tức</title>
        <?php endif ?>
        <meta name="description" content="<?php echo isset($detail['meta_description']) ? $detail['meta_description'] : '' ?>">
        <meta name="keywords" content="<?php echo isset($detail['meta_keywords']) ? $detail['meta_keywords'] : '' ?>">
    <?php endif ?>

	<!-- Canonical tag -->
	<link rel="canonical" href="<?php echo base_url(uri_string())?>">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/fontAwesome/css/font-awesome.min.css">
	<!-- lightbox.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/lightbox/css/lightbox.min.css">
	<!-- _main.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/style.min.css">

    <script src="<?php echo site_url('assets/') ?>lib/jquery/jquery.min.js"></script>
	<script src="<?php echo site_url('assets/') ?>lib/bootstrap/js/bootstrap.min.js"></script>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo site_url('assets/') ?>img/favicon.png"/>

	<!-- Start Shema.org -->
	<script type="application/ld+json">
    {
    	"@context": "http://schema.org",
      	"@type": "Organization",

      	"address": {
    		"@type": "PostalAddress",
    		"addressLocality": "Đà Nẵng",
    		"addressRegion": "Việt Nam",
    		"postalCode":"550000",
    		"streetAddress": "Lô 8+9, Khu dân cư 3, đường Võ Nguyên Giáp, quận Sơn Trà, thành phố Đà Nẵng"
    },
      	"url": "https://ngochuong.vn",
		"logo": "https://ngochuong.vn/assets/img/logo.png",
      	"name" : "Nhà Hàng Ngọc Hương",
		"url" : "https://ngochuong.vn",
        "sameAs" : [
        	"https://www.facebook.com/NgocHuongSeafood",
			"https://www.instagram.com/ngochuongseafood",
		],
      	"contactPoint" :
      	[
        	{
        		"@type" : "ContactPoint",
          		"telephone" : "+84 913315127",
          		"contactType" : "customer service"
        	}
		]
    }
	</script>
	<!-- End Shema.org -->
</head>

<body>

<!-- Facebook SDK -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<header class="header">
	<div class="container">
		<nav class="nav">

				<a href="<?php echo base_url('') ?>" class="logo">
					<img src="<?php echo site_url('assets/img/logo.png') ?>" alt="Ngoc Huong Logo">
				</a>

			<div class="nav-expand-btn visible-xs visible-sm" id="nav-expand-btn">
				<span class="nav-icon"></span>
				<span class="nav-icon"></span>
				<span class="nav-icon"></span>
			</div>
			<div class="nav-expand">
				<div class="left">
					<ul class="nav nav-justified">
                        <li>
                            <a href="homepage#about" id="toAbout">
                                <?php echo $this->lang->line('about-us') ?>
                            </a>
                        </li>
                        <li>
                            <a href="homepage#food" id="toFood">
                                <?php echo $this->lang->line('our-food') ?>
                            </a>
                        </li>
                        <li>
                            <a href="homepage#events" id="toEvents">
                                <?php echo $this->lang->line('events') ?>
                            </a>
                        </li>
                        <li>
							<a href="homepage#news" id="toNews">
                                <?php echo $this->lang->line('blogs') ?>
							</a>
						</li>
					</ul>
				</div>
				<div class="right">
					<ul class="nav nav-justified">
						<li>
							<a href="homepage#gallery" id="toGallery">
                                <?php echo $this->lang->line('gallery') ?>
							</a>
						</li>
						<li>
							<a href="homepage#contact" id="toContact">
                                <?php echo $this->lang->line('contact-us') ?>
							</a>
						</li>
						<li id="bookTable">
							<a href="<?php echo base_url('booking') ?>">
                                <?php echo $this->lang->line('book-table') ?>
							</a>
						</li>
						<li>
							<select class="form-control" id="langNav">
								<option value="vi">Tiếng Việt</option>
								<option value="en">English</option>
								<option value="cn">中文</option>
							</select>
						</li>
						<script type="text/javascript">

                            $("#langNav").val("<?php echo $this->session->userdata('langAbbreviation'); ?>");

                            $("#langNav").change(function(){
                                $.ajax({
                                    method: "GET",
                                    url: "http://localhost/seafood/homepage/change_language",
                                    data: {
                                        lang: $(this).val()
                                    },
                                    success: function(res){
                                        if(res.message == 'changed'){
                                            window.location.reload();
                                        }
                                    },
                                    error: function(){

                                    }
                                });
                            });
						</script>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
