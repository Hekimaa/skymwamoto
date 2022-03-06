<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>SKYMWAMOTO | LOGIN </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url()?>/skytour/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url()?>/skytour/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url()?>/skytour/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url()?>/skytour/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url()?>/skytour/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?= base_url()?>/skytour/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/skytour/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>/skytour/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url()?>/skytour/css/custom.css" rel="stylesheet">
    <style>
        .center {
  width: 400px;
  height: 400px;
  background-color: #fff;
  position: absolute;
  left: 0;
  right: 0;
  top: 150px;
  bottom: 0;
  margin: auto;
  max-width: 100%;
  max-height: 100%;
  overflow: auto;
  padding: 1em 2em;
  border-bottom: 2px solid #ccc;
  display: table;
}
    </style>
</head>

<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login" class="center">

		<aside>
			<figure>
				<a href="<?= base_url('/logins')?>"><img src="<?= base_url()?>/skytour/img/logo.jpg" width="155" height="50" data-retina="true" alt="" class="logo_sticky"></a>
			</figure>
			<?php
                   if(isset($validation)):?>
                      <div class="col-md-12">
                         <div class="alert alert-danger" role="alert">
                           <?= $validation->listErrors() ?>
                         </div>
                      </div>
                  <?php endif; ?>

			  <form method="post" action="<?= base_url('Admin/save')?>">
				
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_30">
					
					<!--<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>-->
				</div>
			
				<input type="submit" class="btn_1 rounded full-width" name="submit" value="Submit">
				<!-- <div class="text-center add_top_10">New to Panagea? <strong><a href="register.html">Sign up!</a></strong></div> -->
			</form>
			<div class="copy">© 2021 SkyMwamoto</div>
		</aside>
	</div>
	<!-- /login -->
		
	<!-- COMMON SCRIPTS -->
    <script src="<?= base_url()?>/skytour/js/common_scripts.js"></script>
    <script src="<?= base_url()?>/skytour/js/main.js"></script>
	<script src="<?= base_url()?>/skytour/assets/validate.js"></script>	
  
</body>
</html>