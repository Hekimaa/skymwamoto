<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<!-- Mirrored from 99webpage.com/theme-review/html/anakual/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2017 12:31:49 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="<?= base_url()?>/sky/img/ico/a.png"  type="image/x-icon">

    <title>SkyMwamoto | Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url()?>/sky/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- RS5.0 Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/sky/css/revolution/settings.css">
	
	<!-- RS5.0 Layers and Navigation Styles -->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/sky/css/revolution/layers.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>/sky/css/revolution/navigation.css"> 
	
    <link href="<?= base_url()?>/sky/css/style.css" rel="stylesheet">
    
    <!-- Color -->
    <link id="skin" href="<?= base_url()?>/sky/skins/default.css" rel="stylesheet">
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= base_url()?>/sky/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_four"></div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<script type="text/javascript">
		  document.getElementById("loading").className = "loading-visible";
		  var hideDiv = function(){document.getElementById("loading").className = "loading-invisible";};
		  var oldLoad = window.onload;
		  var newLoad = oldLoad ? function(){hideDiv.call(this);oldLoad.call(this);} : hideDiv;
		  window.onload = newLoad;
	</script>
	<!-- End preloading -->
	
	
	<!-- End demo options --> 

	
	<div class="clearfix"></div>  
	
	<?= $this->include('includes/header'); ?>

	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot70">	
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="title-head">
						<h4>Send  us a message</h4>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<!-- Start Form -->
					<form method="post" action="<?= base_url('save')?>" >
						<div class="clearfix"></div>
						<div id="success"></div>
						<div class="row wrap-form">
							<div class="form-group col-md-6 col-sm-6">
								<h6>Full Name</h6>
								<input type="text" name="name" id="name" class="form-control input-lg required" placeholder="Enter your full Name...">
								<span data-for="name" class="error"></span>
							</div>
							<div class="form-group col-md-6 col-sm-6">
								<h6>Email Address</h6>
								<input type="email" name="email" id="email" class="form-control input-lg required" placeholder="Enter your email address...">
								<span data-for="email" class="error"></span>
							</div>
							<div class="form-group col-md-12">
								<h6>Your Message</h6>
								<textarea name="message" id="message" class="form-control input-lg required" placeholder="Write something for us..." rows="9"></textarea>
								<span data-for="message" class="error"></span>
							</div>
							<div class="form-group col-md-12 margintop5">
								<input type="submit" value="Send Message" id="submit" class="btn btn-primary btn-lg"/>
								<div class="status-progress"></div>
							</div>
						</div>
					</form>
					<!-- End Form -->
				</div>
				<div class="col-md-4 col-sm-5">
					<div class="contact-detail">
						<ul class="list-unstyled">
							<li>
								<div class="absolute-icon">
									<i class="icon icon-map"></i>
									<h6>Our location</h6>
									<p>
									<span>PO Box 8475   Sinza Madukani, <br>Dar es Saalam.<br></span>
									<span>PO Box 8475 Sanawari ya Juu <br>Arusha.</span><br>
									</p>
								</div>
							</li>
							<li>
								<div class="absolute-icon">
									<i class="icon icon-mobile"></i>
									<h6>Call center</h6>
									<p>
									+255 655 878616<br>
									+255 763165865
									</p>
								</div>
							</li>
							<li>
								<div class="absolute-icon">
									<i class="icon icon-envelope"></i>
									<h6>Email address</h6>
									<p>
									info@skymwamoto.co.tz
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
    </div>
	<!-- End contain wrapp -->
	
	<div class="clearfix"></div>
	
	<?= $this->include('includes/footer'); ?>

	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="<?= base_url()?>/sky/js/jquery.min.js"></script>
    <script src="<?= base_url()?>/sky/js/bootstrap.min.js"></script>
	<script src="<?= base_url()?>/sky/js/jquery.easing-1.3.min.js"></script>
	
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url()?>/sky/js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- Bootsnavs -->
    <script src="<?= base_url()?>/sky/js/bootsnav.js"></script>
	
	<!-- Custom form -->
	<script src="<?= base_url()?>/sky/js/form/jcf.js"></script>
	<script src="<?= base_url()?>/sky/js/form/jcf.scrollable.js"></script>
	<script src="<?= base_url()?>/sky/js/form/jcf.select.js"></script>
	
	<!-- Custom checkbox and radio -->
	<script src="<?= base_url()?>/sky/js/checkator/fm.checkator.jquery.js"></script>
	<script src="<?= base_url()?>/sky/js/checkator/setting.js"></script>
	
	<!-- Maps -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoRXkZUQLwRTaEF2MymFO5CzuCFBYejMQ"></script>
	<script src="<?= base_url()?>/sky/js/maps/setting.js"></script>
	
    <!-- Start Form Plugin -->
	<script src="<?= base_url()?>/sky/js/validation/jquery.validate.min.js"></script>
	<script src="<?= base_url()?>/sky/js/validation/setting.js"></script>
	
    <!-- Parallax -->
	<script src="<?= base_url()?>/sky/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="<?= base_url()?>/sky/js/parallax/setting.js"></script>
	
    <!-- Twitter -->
	<script src="<?= base_url()?>/sky/js/twitter/tweetie.min.js"></script>
	<script src="js/twitter/ticker.js"></script>
	<script src="<?= base_url()?>/sky/js/twitter/setting.js"></script>
	
    <!-- Custom -->
    <script src="<?= base_url()?>/sky/custom.js"></script>

	<!-- Theme option-->
	<script src="<?= base_url()?>/sky/js/template-option/demosetting.js"></script>	
</body>

</html>
