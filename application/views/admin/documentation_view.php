<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Mato Creative | Documentation</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('assets/lib/') ?>fontAwesome/css/font-awesome.min.css">
    <!-- Google Font -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,700i" rel="stylesheet">
    <!-- Documentation Style -->
    <link rel="stylesheet" href="<?php echo site_url('assets/') ?>sass/admin/documentation.css">

    <!-- jQuery 3 -->
    <script src="<?php echo site_url('assets/lib/') ?>jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo site_url('assets/lib/') ?>bootstrap/js/bootstrap.min.js"></script>

</head>
<body>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Admin Controller</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://matocreative.vn" target="_blank">Mato Creative</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>


    <section class="main-content container-fluid">
        <div class="row">
            <div class="left col-md-3 col-sm-4 col-xs-12">
                <span class="logo-lg"><b>Admin</b>Controller</span>
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading"><b>User</b>Manual</div>
                    <div class="panel-body">
                        <p>...</p>
                    </div>

                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item">
							<a href="#1">Đăng nhập</a>
						</li>
                        <li class="list-group-item">
							<a href="#2">Giới thiệu</a>
						</li>
                    </ul>
                </div>
            </div>
            <div class="right col-md-9 col-sm-8 col-xs-12">
                <div class="content">
					<div class="main-title" id="top">
						<h1>User Guide</h1>
						<h3>Website: ngochuong.vn</h3>
						<h4>Author: Mato Creative | Email: hello@matocreative.vn</h4>
						<p>Date Created: 20/04/2018</p>
					</div>
                    <ol>
						<li id="1">Đăng nhập</li>
							<p>User nhập vào thanh địa chỉ trên trình duyệt đường dẫn</p>
							<a href="http://.vn/admin" target="_blank">ngochuong.vn/admin</a>
							<p>Hiển thị trên trang:</p>
							<img src="<?php echo site_url('assets/img/admin/ug/') ?>login.png" alt="ảnh đăng nhập">
							<p>User nhập thông tin đăng nhập như sau:</p>
							<p>Username: <b>admin@admin.com</b></p>
							<p>Password: <b>password</b></p>
							<p>Sau khi đăng nhập thanhf công, sẽ chuyển sang trang <a href="#2">Giới thiệu</a></p>


						<li id="2">Giới thiệu</li>
						<p>Hiển thị trên trang:</p>
						<img src="<?php echo site_url('assets/img/admin/ug/') ?>about.png" alt="ảnh đăng nhập">
						<p>Phần Giới thiệu gồm các mục chính</p>
							<ul>
								<li><b>Hình ảnh</b>: Gồm các ảnh </li>
								<li>Nội dung</li>
							</ul>
					</ol>
                </div>
            </div>
        </div>
    </section>

</body>
</html>