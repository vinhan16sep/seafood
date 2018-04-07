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
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>lib/lightbox/css/lightbox.css">
	<!-- _main.scss -->
	<link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/main.css">

    <script src="<?php echo site_url('assets/') ?>lib/jquery/jquery.min.js"></script>
	<script src="<?php echo site_url('assets/') ?>lib/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<header class="header">
	<div class="container">
		<nav class="nav">
			<div class="logo">
				<a href="<?php echo base_url('') ?>">
					<img src="<?php echo site_url('assets/img/logo_n.png') ?>" alt="Ngoc Huong Logo">
				</a>
			</div>
			<div class="nav-expand-btn visible-xs" id="nav-expand-btn">
				<span class="nav-icon"></span>
				<span class="nav-icon"></span>
				<span class="nav-icon"></span>
			</div>
			<div class="nav-expand">
				<div class="left">
					<ul>
						<li>
							<a href="<?php echo ($this->uri->segment(1) == 'booking')? 'homepage#about' : '#about' ?>">About us</a>
						</li>
						<li>
							<a href="<?php echo ($this->uri->segment(1) == 'booking')? 'homepage#food' : '#food' ?>">Our food</a>
						</li>
						<li>
							<a href="<?php echo ($this->uri->segment(1) == 'booking')? 'homepage#events' : '#events' ?>">Event</a>
						</li>
						<li>
							<a href="<?php echo ($this->uri->segment(1) == 'booking')? 'homepage#gallery' : '#gallery' ?>">Gallery</a>
						</li>
					</ul>
				</div>
				<div class="right">
					<ul>
						<li>
							<a href="<?php echo ($this->uri->segment(1) == 'booking')? 'homepage#contact' : '#contact' ?>">Contact us</a>
						</li>
						<li id="bookTable">
							<a href="<?php echo base_url('booking') ?>">Book your table</a>
						</li>
						<li class="dropdown" id="dropDownLang">
							<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								English <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" aria-labelledby="dropDownLang">
								<li>
									<a href="#">Vietnamese</a>
								</li>
								<li>
									<a href="#">Chinese</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>
