<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">

<!-- Mirrored from 99webpage.com/theme-review/html/anakual/portfolio-alt1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2017 12:31:08 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="<?= base_url()?>/sky/img/ico/a.png"  type="image/x-icon">

    <title>SkyMwamoto | Volunteering</title>

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
	
	
	<div class="clearfix"></div>  
    <?= $this->include('includes/header'); ?>

	
	
	<!-- Start contain wrapp -->
      
	<div class="contain-wrapp padding-bot70">	
		<div class="container">
		
			<div class="row">
          
				<div id="gallery" class="masonry gallery">
					<div class="grid-sizer col-md-4 col-sm-6 col-xs-12"></div>
                    <?php foreach($alldestinations as $cat): ?>
					<!-- Start Gallery 01 -->
					<div data-filter="web" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capZoomInDown">
								<a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat['destinations_title']; ?>" class="zoomer ">
									<h4 ><?php echo $cat['destinations_title']; ?>
									</h4>
								</a>
							</div>
							<img src="<?= base_url('uploads/destinations_image/'.$cat['destinations_image']) ?>" class="img-responsive" alt="" style="width:800px;height:200px;">
						</div>
                        <div class="img-content">
							<p class="text-left"><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat['destinations_title']; ?>"><?php echo $cat['destinations_title']; ?></a></p>
						
						</div>
					</div>
                    <?php endforeach; ?>
					<!-- End Gallery 01 -->

				</div>
                
			</div>
          
		</div>
    </div>
	<!-- End contain wrapp -->

	<div class="clearfix"></div>
	
		<!-- Start footer -->
        <?= $this->include('includes/footer');?>
	<!-- End footer -->

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
	
    <!-- masonry -->
	<script src="<?= base_url()?>/sky/js/masonry/masonry.min.js"></script>	
	<script src="<?= base_url()?>/sky/js/masonry/masonry.filter.js"></script>
	<script src="<?= base_url()?>/sky/js/masonry/setting.js"></script> 
	
    <!-- PrettyPhoto -->
	<script src="<?= base_url()?>/sky/js/prettyPhoto/jquery.prettyPhoto.js"></script>  
	<script src="<?= base_url()?>/sky/js/prettyPhoto/setting.js"></script>
	
    <!-- Parallax -->
	<script src="<?= base_url()?>/sky/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="<?= base_url()?>/sky/js/parallax/setting.js"></script>
	
    <!-- Twitter -->
	<script src="<?= base_url()?>/sky/js/twitter/tweetie.min.js"></script>
	<script src="<?= base_url()?>/sky/js/twitter/ticker.js"></script>
	<script src="<?= base_url()?>/sky/js/twitter/setting.js"></script>
	
    <!-- Custom -->
    <script src="<?= base_url()?>/sky/js/custom.js"></script>

	<!-- Theme option-->
	<script src="<?= base_url()?>/sky/js/template-option/demosetting.js"></script>	
</body>

<!-- Mirrored from 99webpage.com/theme-review/html/anakual/portfolio-alt1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Oct 2017 12:31:08 GMT -->
</html>
