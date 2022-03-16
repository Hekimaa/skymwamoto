<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="<?= base_url()?>/sky/img/ico/a.png"  type="image/x-icon">

    <title>Home | Skymwamoto tours and safaris</title>

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
	<?= $this->include('includes/header');?>
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div id="slider_container" class="rev_slider_wrapper">
		<div id="rev-slider" class="rev_slider"  data-version="5.0">
			<ul> 
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/chui.jpg"  alt=""  width="1920" height="1020" /> 
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-text-bold default-text" 
						id="slide-1-layer-1" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="300" 
						data-width="['900','900','900','900']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-text-title default-text" 
						id="slide-1-layer-2" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="240" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;">
					</div>
					
				</li>
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/leopard.jpg"  alt=""  width="1920" height="1020" /> 
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-text-bold default-text" 
						id="slide-2-layer-1" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="300" 
						data-width="['900','900','900','900']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-text-title default-text" 
						id="slide-2-layer-2" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="240" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;">
					</div>
				
				</li>
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/simba.jpg"  alt=""  width="1920" height="1020" /> 
					<!-- LAYER NR. 1 -->
					<div class="tp-caption cap-text-bold default-text" 
						id="slide-3-layer-1" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="300" 
						data-width="['900','900','900','900']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: normal;">
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption cap-text-title default-text" 
						id="slide-3-layer-2" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="240" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;">
					</div>
					
				</li>
			</ul>
		</div><!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->




    <!-- Start contain wrapp -->
	<div class="contain-wrapp gray-container"style="padding-top:5px">	
		<div class="container">	
     	 <!-- Start contain wrapp -->
	     <div class="contain-wrapp" >	
		    <div class="container">
			<div class="row">
				<div class="col-md-6" style="font-size: 16px; text-align:justify;">
					
					<b >SKYMWAMOTO TOURS AND SAFARI</b> was established in 2014, as a family business, and like most small businesses had a fine reputation for personalized service. Today, SkyMwamoto tours is rated as one of the leading tour operators in Tanzania, receiving thousands of visitors a year but our motivation is exactly the same to treat all visitors as our personal guests. We have invested substantially to maintain the efficiency and the personalized service that has been our foundation and is now the Skymwamoto Tours tradition and trademark. We focused our attention on training and upgrading the personnel, opening offices in key tourist centers, expanding and modernizing our workshop facilities, increasing the quantity and quality of our vehicles, and installing the necessary equipment for smooth communication with the outside world and linking our operations countrywide.
				
				</div>
				<div class="col-md-6">
					<img src="<?= base_url()?>/sky/img/slider/leopard.jpg" class="img-responsive" alt="" />
				</div>
			 </div>
		 </div>
	</div>
    <!-- End contain wrapp -->
			</div>
		</div>
	</div>
    <!-- End contain wrapp -->

    <!-- Start contain wrapp -->
	<div class="contain-wrapp " style="padding-top:2px;">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title-head centered">
						<h2>Our Popular Destinations</h2>
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div id="recent-4column" class="owl-carousel leftControls-right lg-nav">
				
                    <?php if($destinationss): ?>
				<?php foreach($destinationss as $cat): ?>
						<!-- Strat team 6 -->
						<div class="item">
                        <a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>" class="grid_item">
							<div class="img-wrapper">
								
								<img src="<?= base_url('uploads/destinations_image/'.$cat->destinations_image) ?>" class="img-responsive" alt="" style="height:150px;" />
							</div>
							<div class="team-content nowrapp">
                            <a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>" class="grid_item">
								<h6><?= $cat->destinations_title;?></h6>
                            </a>	
							</div>
                        </a>
						</div>
                        <?php endforeach; ?>
			            <?php endif; ?>
						<!-- End team 6 -->
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End contain wrapp -->

	<!-- Start parallax -->
	<div class="parallax padding-bot50" data-background="<?= base_url()?>/sky/img/image.JPEG" data-speed="0.5" data-size="50%">
		<div class="overlay"></div>
		<div class="container">
			<div class="content-parallax">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 owl-column-wrapp text-center">
					<h4>Testimoni</h5>
					<div id="single-item" class="owl-carousel leftControls-right">
						<!-- Start testimoni 1 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									  	What an amazing experience!fun, laughter, jokes, motivation and highly detailed and informative trip!from a porter to the outstanding guides(Innocent).Thanks for the incredible trip and services.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
									<img src="<?= base_url()?>/sky/img/images.png" style="width:100px" class="testimo-avatar" alt=""/>
									<span>ERICH D</span>
								
								</div>
							</div>
						</div>
						<!-- End testimoni 1 -->
						
						<!-- Start testimoni 2 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									  Lava tower and Barraco were amazing but nothing beats summit day.Skymwamoto tours took great care of us and we all made it to the top.Thanks for increadible trip and services.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
								<img src="<?= base_url()?>/sky/img/images.png" style="width:100px" class="testimo-avatar" alt=""/>
									<span>Christopher F</span>
									
								</div>
							</div>
						</div>
						<!-- End testimoni 2 -->
						
						<!-- Start testimoni 3 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									Excellent safari organized by Skymwamoto tours safaris.They took care of all details,we had a worry free safari.Hotels were perfect,much exceeded our expectations.We saw a lot of animals and it was wonderful.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
								<img src="<?= base_url()?>/sky/img/images.png" style="width:100px" class="testimo-avatar" alt=""/>
									<span>Joko J</span>
									
								</div>
							</div>
						</div>
						<!-- End testimoni 3 -->
						
						<!-- Start testimoni 4 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									They are professional from every aspects.Ask them questions,listens to their advice and they will never let you down and make life time safari experience for you.I felt lucky to choose them!

									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
								<img src="<?= base_url()?>/sky/img/images.png" style="width:100px" class="testimo-avatar" alt=""/>
									<span>Dayang sumbi</span>
									
								</div>
							</div>
						</div>
						<!-- End testimoni 4 -->
						<!-- Start testimoni 4 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									  Second time I organize safaris with SkyMwamoto I dont have to add anything else.Reliable,professional,attentive to your every need and what is very important a group of really very experienced guides.

									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
								<img src="<?= base_url()?>/sky/img/images.png" style="width:100px" class="testimo-avatar" alt=""/>
									<span>Dayang sumbi</span>
									
								</div>
							</div>
						</div>
						<!-- End testimoni 4 -->
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!-- End parallax -->
	<div class="clearfix"></div>
	
	<!-- Start footer -->
	<?= $this->include('includes/footer');?>
	<!-- End footer -->

	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->

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
	
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/jquery.themepunch.revolution.min.js"></script>
	
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/revolution.extension.video.min.js"></script>
	
	<!-- CUSTOM REVOLUTION JS FILES -->
	<script type="text/javascript" src="<?= base_url()?>/sky/js/revolution/setting/hermes-revolution-slider.js"></script>
	
 
	
    <!-- PrettyPhoto -->
	<script src="<?= base_url()?>/sky/js/prettyPhoto/jquery.prettyPhoto.js"></script>  
	<script src="<?= base_url()?>/sky/js/prettyPhoto/setting.js"></script>
	
    <!-- Parallax -->
	<script src="<?= base_url()?>/sky/js/parallax/jquery.parallax-1.1.3.js"></script>
	<script src="<?= base_url()?>/sky/js/parallax/setting.js"></script>
	
    <!-- owl carousel -->
	<script src="<?= base_url()?>/sky/js/owlcarousel/owl.carousel.min.js"></script>  
	<script src="<?= base_url()?>/sky/js/owlcarousel/setting.js"></script>
	
    <!-- Player -->
	<script src="<?= base_url()?>/sky/js/jplayer/jquery.jplayer.js"></script>
	<script src="<?= base_url()?>/sky/js/jplayer/setting.js"></script>
	
    <!-- Twitter -->
	<script src="<?= base_url()?>/sky/js/twitter/tweetie.min.js"></script>
	<script src="<?= base_url()?>/sky/js/twitter/ticker.js"></script>
	<script src="<?= base_url()?>/sky/js/twitter/setting.js"></script>
	
    <!-- Custom -->
    <script src="<?= base_url()?>/sky/js/custom.js"></script>

</body>

</html>
