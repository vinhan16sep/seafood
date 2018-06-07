<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ngoc Huong Restaurant</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/fontAwesome/css/font-awesome.min.css">
	<!-- lightbox.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/lightbox/css/lightbox.min.css">
	<!-- _main.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/main.min.css">

    <script src="<?php echo site_url('assets/') ?>lib/jquery/jquery.min.js"></script>
    <script src="<?php echo site_url('assets/') ?>lib/jquery/jquery.cookie.js"></script>
	<script src="<?php echo site_url('assets/') ?>lib/bootstrap/js/bootstrap.min.js"></script>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo site_url('assets/') ?>img/favicon.png"/>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=1890469611274046&autoLogAppEvents=1';
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

					</ul>
				</div>

                <?php
                $url_vi = '';
                $url_en = '';
                $url_cn = '';
                switch($current_link){
                    case 'homepage':
                        $url_vi = base_url() . 'vi';
                        $url_en = base_url() . 'en';
                        $url_cn = base_url() . 'cn';
                        break;
                    case 'booking':
                        $url_vi = base_url() . 'vi/booking';
                        $url_en = base_url() . 'en/booking';
                        $url_cn = base_url() . 'cn/booking';
                        break;
                    default:
                        $url_vi = base_url() . 'vi';
                        $url_en = base_url() . 'en';
                        $url_cn = base_url() . 'cn';
                        break;
                }
                ?>

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
								<option value="<?php echo $url_vi; ?>">Tiếng Việt</option>
								<option value="<?php echo $url_en; ?>">English</option>
								<option value="<?php echo $url_cn; ?>">中文</option>
							</select>
						</li>
						<script type="text/javascript">
                            var currentLink = "<?php echo $current_link; ?>";
                            var baseUrl = "<?php echo base_url(); ?>";
                            var sessionLocation = "<?php echo $this->session->userdata('langAbbreviation'); ?>";

                            switch(currentLink){
                                case 'homepage':
                                    $url = baseUrl + sessionLocation;
                                    break;
                                case 'booking':
                                    $url = baseUrl + sessionLocation + '/booking';
                                    break;
                                default:
                                    $url = baseUrl + sessionLocation;
                                    break;
                            }
                            $('#langNav').val($url).change();
                            var urlmenu = document.getElementById( 'langNav' );
                            urlmenu.onchange = function() {
                                window.location = this.value;
                            };
						</script>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
