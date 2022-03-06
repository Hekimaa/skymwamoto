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
    <link rel="icon" href="ico/favicon.png">

    <title>Anakual multipurpose and responsive corporate template</title>

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
	
 	<!-- Start demo options -->
	<div class="demo-panel">
		<div class="demo-col">
			<h5>Try anakual with other template and color skins</h5>
			<h6>Index variants</h6>
			<select onchange="location = this.options[this.selectedIndex].value;" data-jcf='{"wrapNative": false, "wrapNativeOnMobile": false}'>
				<optgroup label="Corporate">
					<option value="index.html">Corporate alt1</option>
					<option value="index-corporate-alt1.html">Corporate alt2</option>
					<option value="index-corporate-alt2.html">Corporate alt3</option>
					<option value="index-corporate-alt3.html">Corporate alt4</option>
					<option value="index-corporate-alt4.html">Corporate alt5</option>
					<option value="index-corporate-alt5.html">Corporate alt6</option>
					<option value="index-corporate-alt6.html">Corporate alt7</option>
					<option value="index-corporate-alt7.html">Corporate alt8</option>
					<option value="index-corporate-alt8.html">Corporate alt9</option>
					<option value="index-corporate-alt9.html">Corporate alt10</option>
				</optgroup>
				<optgroup label="Creative">
					<option value="index-creative-alt1.html">Creative alt1</option>
					<option value="index-creative-alt2.html">Creative alt2</option>
					<option value="index-creative-alt3.html">Creative alt3</option>
					<option value="index-creative-alt4.html">Creative alt4</option>
					<option value="index-creative-alt5.html">Creative alt5</option>
					<option value="index-creative-alt6.html">Creative alt6</option>
					<option value="index-creative-alt7.html">Creative alt7</option>
					<option value="index-creative-alt8.html">Creative alt8</option>
				</optgroup>
				<optgroup label="Niche template">
					<option value="index-niche-app.html">App</option>
					<option value="index-niche-construction.html">Construction</option>
					<option value="index-niche-ecommerce.html">Ecommerce</option>
					<option value="index-niche-medical.html">Medical</option>
					<option value="index-niche-photography.html">Photography</option>
					<option value="index-niche-realestate.html">Real estate</option>
					<option value="index-niche-restaurant.html">Restaurant</option>
					<option value="index-niche-travel.html">Travel</option>
					<option value="index-niche-furniture.html">Furniture</option>
					<option value="index-niche-magazine.html">Magazine</option>
				</optgroup>
				<optgroup label="Speciality page">
					<option value="resume.html">Resume page</option>
					<option value="underconstruction.html">Under construction</option>
					<option value="maintenance.html">Maintenance</option>
					<option value="error404.html">Error 404</option>
				</optgroup>
				<optgroup label="Landing page">
					<option value="index-landingpage.html">Landing page video</option>
					<option value="index-landingpage-alt1.html">Landing page form</option>
				</optgroup>
			</select>
		</div>
		<div class="demo-col">
			<h6>Color options</h6>
			<ul class="stylechanger">
				<li><a id="color1" href="#" data-skin="default.html"></a><span>Default</span></li>
				<li><a id="color2" href="#" data-skin="yellow.html"></a><span>Yellow</span></li>
				<li><a id="color3" href="#" data-skin="brown.html"></a><span>Brown</span></li>
				<li><a id="color4" href="#" data-skin="red.html"></a><span>Red</span></li>
				<li><a id="color5" href="#" data-skin="green.html"></a><span>Maroon</span></li>
				<li><a id="color6" href="#" data-skin="misty.html"></a><span>Magenta</span></li>
				<li><a id="color7" href="#" data-skin="pink.html"></a><span>Pink</span></li>
				<li><a id="color8" href="#" data-skin="purple.html"></a><span>Purple</span></li>
				<li><a id="color9" href="#" data-skin="blue.html"></a><span>Blue</span></li>
				<li><a id="color10" href="#" data-skin="sky-blue.html"></a><span>Sky</span></li>
			</ul>
		</div>
	</div>	
	<a class="openpanel" href="#" title=""></a>
	<!-- End demo options --> 
	
	<!-- Start top -->
	<div class="top-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="top-share">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="top-link">
						<li><a href="signin.html"><i class="fa fa-lock"></i> login</a></li>
						<li><a href="signup.html" class="signup"><i class="fa fa-sign-in"></i> Register</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- End top -->
	
	<div class="clearfix"></div>  
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky navbar-default bootsnav">
        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu cart-list">
                            <li>
                                <a href="#" class="photo"><img src="img/product/thumbs/thumb01.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Delica omtantur </a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="img/product/thumbs/thumb02.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Omnes ocurreret</a></h6>
                                <p>1x - <span class="price">$33.33</span></p>
                            </li>
                            <li>
                                <a href="#" class="photo"><img src="img/product/thumbs/thumb03.jpg" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">Agam facilisis</a></h6>
                                <p>2x - <span class="price">$99.99</span></p>
                            </li>
                            <li class="total">
                                <span class="pull-right"><strong>Total</strong>: $233.31</span>
                                <a href="shopping-cart.html" class="btn btn-default">Cart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#brand"><img src="img/brand/logo-black.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Home</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Corporate template</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Corporate Alt1</a></li>
                                    <li><a href="index-corporate-alt1.html">Corporate Alt2</a></li>
                                    <li><a href="index-corporate-alt2.html">Corporate Alt3</a></li>
	                                <li><a href="index-corporate-alt3.html">Corporate Alt4</a></li>
                                    <li><a href="index-corporate-alt4.html">Corporate Alt5</a></li>
                                    <li><a href="index-corporate-alt5.html">Corporate Alt6</a></li>
									<li><a href="index-corporate-alt6.html">Corporate Alt7</a></li>
                                    <li><a href="index-corporate-alt7.html">Corporate Alt8</a></li>
                                    <li><a href="index-corporate-alt8.html">Corporate Alt9</a></li>
									<li><a href="index-corporate-alt9.html">Corporate Alt10</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Creative template</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-creative-alt1.html">Creative Alt1</a></li>
                                    <li><a href="index-creative-alt2.html">Creative Alt2</a></li>
                                    <li><a href="index-creative-alt3.html">Creative Alt3</a></li>
                                    <li><a href="index-creative-alt4.html">Creative Alt4</a></li>
                                    <li><a href="index-creative-alt5.html">Creative Alt5</a></li>
                                    <li><a href="index-creative-alt6.html">Creative Alt6</a></li>
                                    <li><a href="index-creative-alt7.html">Creative Alt7</a></li>
                                    <li><a href="index-creative-alt8.html">Creative Alt8</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Niche template</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-niche-ecommerce.html">Ecommerce</a></li>
                                    <li><a href="index-niche-realestate.html">Real estate</a></li>
                                    <li><a href="index-niche-medical.html">Medical</a></li>
                                    <li><a href="index-niche-travel.html">Travel</a></li>
                                    <li><a href="index-niche-app.html">App</a></li>
                                    <li><a href="index-niche-photography.html">Photography</a></li>
                                    <li><a href="index-niche-construction.html">Construction</a></li>
                                    <li><a href="index-niche-restaurant.html">Restaurant</a></li>
                                    <li><a href="index-niche-furniture.html">Furniture</a></li>
                                    <li><a href="index-niche-magazine.html">Magazine</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Speciality page</a>
                                <ul class="dropdown-menu">
                                    <li><a href="resume.html">Resume page</a></li>
                                    <li><a href="underconstruction.html">Under construction</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
									<li><a href="error404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Landing page</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index-landingpage.html">Landing page video</a></li>
                                    <li><a href="index-landingpage-alt1.html">Landing page form</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>	
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Page</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >About</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html">About Alt1</a></li>
                                    <li><a href="about-alt1.html">About Alt2</a></li>
                                    <li><a href="about-alt2.html">About Alt3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="services.html">Services Alt1</a></li>
                                    <li><a href="services-alt1.html">Services Alt2</a></li>
                                    <li><a href="services-alt2.html">Services Alt3</a></li>
                                </ul>
                            </li>
                            <li><a href="faq.html">Faq</a></li>
							<li><a href="site-map.html">Site map</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Menu alt</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Submenu</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Menu alt</a></li>
                                            <li><a href="#">Menu alt</a></li>
                                            <li><a href="#">Menu alt</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Menu alt</a></li>
                                    <li><a href="#">Menu alt</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog left sidebar</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-leftsidebar.html">Blog left sidebar alt1</a></li>
                                    <li><a href="blog-leftsidebar-alt1.html">Blog left sidebar alt2</a></li>
                                    <li><a href="blog-leftsidebar-alt2.html">Blog left sidebar alt3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog Right sidebar</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-rightsidebar.html">Blog right sidebar alt1</a></li>
                                    <li><a href="blog-rightsidebar-alt1.html">Blog right sidebar alt2</a></li>
                                    <li><a href="blog-rightsidebar-alt2.html">Blog right sidebar alt3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog fullwidth</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-nosidebar.html">Blog fullwidth alt1</a></li>
                                    <li><a href="blog-nosidebar-alt1.html">Blog fullwidth alt2</a></li>
                                    <li><a href="blog-nosidebar-alt2.html">Blog fullwidth alt3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Single Post</a>
                                <ul class="dropdown-menu">
                                    <li><a href="singlepost-leftsidebar.html">Single Post alt1</a></li>
                                    <li><a href="singlepost-nosidebar.html">Single Post alt2</a></li>
                                    <li><a href="singlepost-rightsidebar.html">Single Post alt3</a></li>
									<li><a href="singlepost-magazine.html">Single Post magazine</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Portfolio</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio-alt1.html">Portfolio alt1</a></li>
							<li><a href="portfolio-alt2.html">Portfolio alt2</a></li>
							<li><a href="portfolio-alt3.html">Portfolio alt3</a></li>
							<li><a href="portfolio-alt4.html">Portfolio alt4</a></li>
							<li><a href="portfolio-alt5.html">Portfolio alt5</a></li>
							<li><a href="portfolio-alt6.html">Portfolio alt6</a></li>
							<li><a href="portfolio-alt7.html">Portfolio alt7</a></li>
							<li><a href="portfolio-alt8.html">Portfolio alt8</a></li>
							<li><a href="portfolio-alt9.html">Portfolio alt9</a></li>
							<li><a href="portfolio-detail.html">Portfolio detail</a></li>
                        </ul>
                    </li>
                    <li class="dropdown megamenu-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Components</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Interactive</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="call-to-action.html">Call to action</a></li>
                                                <li><a href="counter.html">Counter</a></li>
                                                <li><a href="maps.html">Google maps</a></li>
                                                <li><a href="media-responsive.html">Media responsive</a></li>
                                                <li><a href="modal.html">Modal</a></li>
                                                <li><a href="process.html">Process</a></li>
                                                <li><a href="progress.html">Progress bar</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="testimoni.html">Testimoni</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Elements</h6>
                                        <div class="content">
                                            <ul class="menu-col">
												<li><a href="accordion.html">Accordion</a></li>
                                                <li><a href="alert.html">Alert</a></li>
                                                <li><a href="button.html">Button</a></li>
                                                <li><a href="form.html">Form</a></li>
                                                <li><a href="icon.html">Icons style</a></li>
                                                <li><a href="icon-box.html">Icons with box</a></li>
												<li><a href="icon-text.html">Icons with text</a></li>
                                                <li><a href="images.html">Images style</a></li>
												<li><a href="pagination.html">Pagination</a></li>
												<li><a href="tab.html">Tab style</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Typography & MLsc</h6>
                                        <div class="content">
                                            <ul class="menu-col">                                                
                                                <li><a href="typography.html">Typography</a></li>
                                                <li><a href="heading.html">Heading</a></li>
                                                <li><a href="blockquote.html">Blockquote</a></li>
                                                <li><a href="columns.html">Columns</a></li>
                                                <li><a href="divider.html">Separators</a></li>
                                                <li><a href="dropcaps.html">Dropcaps</a></li>
                                                <li><a href="highlights.html">Highlights</a></li>
                                                <li><a href="list.html">List style</a></li>
                                                <li><a href="maps.html">Maps</a></li>
                                                <li><a href="modal.html">Modal</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Speciality page</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                                <li><a href="error404.html">Error 404</a></li>
                                                <li><a href="maintenance.html">Maintenance</a></li>
                                                <li><a href="signin.html">Signin</a></li>
                                                <li><a href="signup.html">Signin</a></li>
                                                <li><a href="resume.html">Resume</a></li>
												<li><a href="underconstruction.html">Underconstruction</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Shop page</a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">Shop page alt1</a></li>
                                    <li><a href="shop-alt1.html">Shop page alt2</a></li>
									<li><a href="shop-alt2.html">Shop page alt3</a></li>
									<li><a href="shop-alt3.html">Shop page alt4</a></li>
                                </ul>
                            </li>
                            <li><a href="shop-detail.html">Shop detail</a></li>
                            <li><a href="shopping-cart.html">Shopping cart</a></li>
                            <li><a href="shopping-checkout.html">Checkout</a></li>
                        </ul>
                    </li>
					<li><a href="contact.html">Contact us</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
	
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div id="slider_container" class="rev_slider_wrapper">
		<div id="rev-slider" class="rev_slider"  data-version="5.0">
			<ul> 
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/slide-bg13.jpg"  alt=""  width="1920" height="1020" /> 
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
						style="z-index: 5; white-space: normal;">Most amazing HTML5 template
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
						style="z-index: 5; white-space: nowrap;">Welcome to Anakual
					</div>
					<!-- LAYER NR. 3 -->
					<a class="tp-caption cap-btn btn-default btn btn-md" 
						id="slide-1-layer-3" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Learn more
					</a>
					<!-- LAYER NR. 4 -->
					<a class="tp-caption cap-btn btn btn-default btn-bordered btn-md" 
						id="slide-1-layer-4" 
						data-x="left" data-hoffset="340" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Purchase now
					</a>
				</li>
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/slide-bg14.jpg"  alt=""  width="1920" height="1020" /> 
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
						style="z-index: 5; white-space: normal;">Fully responsive HTML5 template
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
						style="z-index: 5; white-space: nowrap;">We are responsive
					</div>
					<!-- LAYER NR. 3 -->
					<a class="tp-caption cap-btn btn-default btn btn-md" 
						id="slide-2-layer-3" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Learn more
					</a>
					<!-- LAYER NR. 4 -->
					<a class="tp-caption cap-btn btn btn-default btn-bordered btn-md" 
						id="slide-2-layer-4" 
						data-x="left" data-hoffset="340" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Our features
					</a>
				</li>
				<li data-transition="slideremoveright"> 
					<!-- MAIN IMAGE -->
					<img src="<?= base_url()?>/sky/img/slider/slide-bg15.jpg"  alt=""  width="1920" height="1020" /> 
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
						style="z-index: 5; white-space: normal;">Multiple premium template only $17
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
						style="z-index: 5; white-space: nowrap;">All in one package
					</div>
					<!-- LAYER NR. 3 -->
					<a class="tp-caption cap-btn btn-default btn btn-md" 
						id="slide-3-layer-3" 
						data-x="left" data-hoffset="160" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Learn more
					</a>
					<!-- LAYER NR. 4 -->
					<a class="tp-caption cap-btn btn btn-default btn-bordered btn-md" 
						id="slide-3-layer-4" 
						data-x="left" data-hoffset="340" 
						data-y="top" data-voffset="520" 
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 5; white-space: nowrap;" href="#">Download now
					</a>
				</li>
			</ul>
		</div><!-- END REVOLUTION SLIDER -->
	</div>
	<!-- END OF SLIDER WRAPPER -->

    <!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot50">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title-head centered">
						<h2>Anakual corporate template</h2>
						<p>Anakual is the most amazing bootstrap 3 template with lot features that are easily customizable and looks great in all devices</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="absolute-icon">
						<i class="icon icon-mobile"></i>
						<h4>Fully serponsive</h4>
						<p>
						Assueverit nec pri summo iusto ignota eu. Qui id mutat vidisse principes, nemore molestie pri cu, ad cum veritus ancillae consetetur.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="absolute-icon">
						<i class="icon icon-tools"></i>
						<h4>Easy to customize</h4>
						<p>
						Assueverit nec pri summo iusto ignota eu. Qui id mutat vidisse principes, nemore molestie pri cu, ad cum veritus ancillae consetetur.
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="absolute-icon">
						<i class="icon icon-trophy"></i>
						<h4>Lot features</h4>
						<p>
						Assueverit nec pri summo iusto ignota eu. Qui id mutat vidisse principes, nemore molestie pri cu, ad cum veritus ancillae consetetur.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End contain wrapp -->
	
    <!-- Start contain wrapp -->
	<div class="contain-wrapp gray-container padding-bot70">	
		<div class="container">
			<div class="row margintop20">
				<div class="col-md-6 marginbot30">
					<!-- Start video wrapp -->
                    <div class="video-wrapper">
                        <div class="play-icon small"><a href="#"><i class="fa fa-play"></i></a></div>
                        <img src="<?= base_url()?>/sky/img/video-half.jpg" class="img-responsive" alt="" />
                        <div id="video1" class="jp-jplayer video"
                             data-media="video"
                             data-title="Big Buck Bunny"
                             data-m4v="video/idea.m4v"
                             data-ogv="video/idea.ogv"
                             data-webmv="video/idea.webm"
                             data-container="#jp_container2"></div>
                        <div id="jp_container2" class="jp-audio">
                            <table class="table-audio">
                                <tr>
                                    <td class="toggle-play">
                                        <a href="#" class="jp-play"><i class="fa fa-play-circle"></i></a>
                                        <a href="#" class="jp-pause"><i class="fa fa-pause"></i></a>
                                    </td>
                                    <td class="time"><span class="jp-current-time"></span></td>
                                    <td class="Progres-audio">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div class="jp-play-bar"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="time"><span class="jp-duration"></span></td>
                                    <td class="toggle-mute">
                                        <a href="#" class="jp-unmute"><i class="fa fa-volume-up"></i></a>
                                          <a href="#" class="jp-mute"><i class="fa fa-volume-down"></i></a>
                                    </td>
                                    <td class="volume-bar">
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value"></div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="jp-no-solution">
                                <strong>Update Required</strong>
                                To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                            </div>
                        </div>  
                    </div>
                    <!-- End video wrapp -->
				</div>
				<div class="col-md-6">
					<h4>More than <span>100k clients...</span> joining with Anakual business community</h4>
					<p>
					Suas eruditi vix ex. Scriptorem delicatissimi usu et. Cu virtute expetendis eam, et sit eleifend pertinacia complectitur. Debet error everti ex pri, an vis soluta alienum intellegat. Nusquam praesent ea per, sit no nibh fabulas, pri modo tibique percipitur an.
					</p>
					<ul class="list-icons">
						<li><i class="fa fa-check"></i> All in one package</li>
						<li><i class="fa fa-check"></i> 100% responsive</li>
						<li><i class="fa fa-check"></i> Support modern browser</li>
						<li><i class="fa fa-check"></i> Full documentanion and support</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
    <!-- End contain wrapp -->
	
	<!-- Start parallax -->
	<div class="parallax" data-background="<?= base_url()?>/sky/img/parallax/bg01.jpg" data-speed="0.5" data-size="50%">
		<div class="overlay"></div>
		<div class="container">
			<div class="content-parallax">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<div class="headline">
							<h2>Start your business journey with a amazing template</h2>
							<p class="btn-horizontal"><a href="#" class="btn btn-lg">Purchase now</a> <a href="#" class="btn btn-bordered btn-lg">View live demo</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End parallax -->
	
    <!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot60">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title-head centered">
						<h2>Meet our team</h2>
						<p>Supported by professional team with experience of more than a decade</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div id="recent-4column" class="owl-carousel leftControls-right lg-nav">
						<!-- Strat team 1 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="<?= base_url()?>/sky/img/team/img07.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Founder</span>
								<h5>Angling darma</h5>
								<p>Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant. </p>
							</div>
						</div>
						<!-- End team 1 -->
						
						<!-- Strat team 2 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="<?= base_url()?>/sky/img/team/img08.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Co-Founder</span>
								<h5>Angling kusuma</h5>
								<p>
								 Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant.
								 </p>
							</div>
						</div>
						<!-- End team 2 -->
						
						<!-- Strat team 3 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="img/team/img09.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Manager</span>
								<h5>Batik madrim</h5>
								<p>
								 Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant.
								 </p>
							</div>
						</div>
						<!-- End team 3 -->
						
						<!-- Strat team 4 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="<?= base_url()?>/sky/img/team/img10.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Designer</span>
								<h5>Loro jongrang</h5>
								<p>
								 Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant.
								 </p>
							</div>
						</div>
						<!-- End team 4 -->
						
						<!-- Strat team 5 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="<?= base_url()?>/sky/img/team/img11.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Manager</span>
								<h5>Sangkuriang</h5>
								<p>
								 Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant.
								 </p>
							</div>
						</div>
						<!-- End team 5 -->
						
						<!-- Strat team 6 -->
						<div class="item">
							<div class="img-wrapper">
								<div class="img-caption capZoomInDown">
									<div class="network">
										<div>
											<a href="#"><i class="icon icon-facebook"></i></a>
											<a href="#"><i class="icon icon-twitter"></i></a>
											<a href="#"><i class="icon icon-googleplus"></i></a>
											<a href="#"><i class="icon icon-linkedin"></i></a>
										</div>
									</div>
								</div>
								<img src="<?= base_url()?>/sky/img/team/img12.jpg" class="img-responsive" alt="" />
							</div>
							<div class="team-content nowrapp">
								<span>Designer</span>
								<h5>Dayang sumbi</h5>
								<p>
								 Copiosae suscipiantur et eum, te modus delicatissimi sea, feugiat graecis has ut. Cu eius error adolescens eos ex putant.
								 </p>
							</div>
						</div>
						<!-- End team 6 -->
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End contain wrapp -->

    <!-- Start contain wrapp -->
	<div class="contain-wrapp gray-container padding-bot70">	
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title-head centered">
						<h2>Latest project</h2>
						<p>More than 1000 free and premium high-quality design</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- Start gallery filter  -->
					<ul class="filter-items">
						<li><a href="#" data-filter="" class="active">All</a></li>
						<li><a href="#" data-filter="web">Web</a></li>
						<li><a href="#" data-filter="graphic">Graphic</a></li>
						<li><a href="#" data-filter="logo">Logo</a></li>
						<li><a href="#" data-filter="app">App</a></li>
					</ul>
					<!-- End gallery filter -->
				</div>
			</div>
			<div class="row">
				<div id="gallery" class="masonry gallery box resize">
					<div class="grid-sizer col-md-4 col-sm-6 col-xs-12"></div>
					<!-- Start Gallery 01 -->
					<div data-filter="web" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img01.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Dissentias</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 01 -->

					<!-- Star Gallery 02 -->
					<div data-filter="graphic" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img02.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Expetendis</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 02 -->
								
					<!-- Start Gallery 03 -->
					<div data-filter="app" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img03.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Sadipscing</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 03 -->
								
					<!-- Start Gallery 04 -->
					<div data-filter="logo" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img04.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Philosophia</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 04 -->
							
					<!-- Start Gallery 05 -->
					<div data-filter="logo" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img05.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Consulatu</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 05 -->
							
					<!-- Start Gallery 06 -->
					<div data-filter="web" class="grid-item col-md-4 col-sm-6 col-xs-12">
						<div class="img-wrapper">
							<div class="img-caption capBounceOut">
								<a href="img/gallery/zoom980x980.jpg" data-pretty="prettyPhoto" class="zoomer">
									<span><i class="icon icon-plus"></i></span>
								</a>
							</div>
							<img src="img/gallery/670x544/img06.jpg" class="img-responsive" alt="" />
						</div>
						<div class="img-content">
							<h4><a href="portfolio-detail.html">Efficiendi</a></h4>
							<span>By 99webpage</span>
						</div>
					</div>
					<!-- End Gallery 06 -->
				</div>
			</div>
		</div>
	</div>
    <!-- Start contain wrapp -->
	
	<!-- Start parallax -->
	<div class="parallax padding-bot50" data-background="img/parallax/bg12.jpg" data-speed="0.5" data-size="50%">
		<div class="overlay"></div>
		<div class="container">
			<div class="content-parallax">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 owl-column-wrapp text-center">
					<h5 class="head-title">Testimoni</h5>
					<div id="single-item" class="owl-carousel leftControls-right">
						<!-- Start testimoni 1 -->
						<div class="item">
							<div class="single-testimoni">
								<div class="testimoni-contain">
									<blockquote class="centered">
									<p>
									Debet error everti ex pri, an vis soluta alienum intellegat. Nusquam praesent ea per, sit no nibh fabulas, pri modo tibique percipitur an. Pri utinam legere antiopam et, veri graece semper mei ne.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="img/testimoni/avatar01.jpg" class="testimo-avatar" alt=""/></a>
									<span>Lasmini</span>
									<a href="#">Saursepuh corp.</a>
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
									Ei appetere iracundia pri, adhuc semper eu ius. Ea cum eius sanctus salutatus, pri at dolor legimus argumentum. Dicta laoreet vivendum pri no. Quo putant nonumes no, at gubergren instructior qui.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="img/testimoni/avatar02.jpg" class="testimo-avatar" alt=""/></a>
									<span>Brahma kumbara</span>
									<a href="#">Saursepuh corp.</a>
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
									Per elit falli causae ei, cu doctus fastidii nec. Scripta platonem duo ei, quidam recusabo consequat vix te. Ex simul persequeris sed, eius meis patrioque eum ne. Aliquando intellegat reformidans ad mea.
									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="img/testimoni/avatar03.jpg" class="testimo-avatar" alt=""/></a>
									<span>Joko tingkir</span>
									<a href="#">Tingkir inc.</a>
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
									Timeam ocurreret ei quo. Harum dolore maiestatis ei vis, ornatus scripserit eos cu. Tempor impedit offendit te has. Idque iudico accusata ad est, brute dissentiunt et mel. Qui augue libris an no euismod nonumes.

									</p>
									</blockquote>
								</div>
								<div class="testimo-author">
									<a href="#"><img src="img/testimoni/avatar04.jpg" class="testimo-avatar" alt=""/></a>
									<span>Dayang sumbi</span>
									<a href="#">Tkb Perahu inc.</a>
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
	
	<!-- Start contain wrapp -->
	<div class="contain-wrapp padding-bot10">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="title-head centered">
						<h2>Latest article</h2>
						<p>Ei his possit accusata reprimique eloquentiam et nam qui scripta.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 owl-column-wrapp">
					<div id="recent-3column" class="owl-carousel topControls">
						<!-- Start article post 1 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img01.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Te graeci blandit quo, graeco aliquip inciderint sed.</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 1 -->
						
						<!-- Start article post 2 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img02.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Senserit constituam delicatissimi usu et eum</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 2 -->
						
						<!-- Start article post 3 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img03.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Usu at populo ornatus atomorum cu nam</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 3 -->
						
						<!-- Start article post 4 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img04.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Recusabo assueverit at ius, dicit nostrud graeci</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 4 -->
						
						<!-- Start article post 5 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img05.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Singulis senserit tincidunt per, pro velit inermis</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 5 -->
						
						<!-- Start article post 6 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img06.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Omnis aliquip corpora eam eu has latine</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 6 -->
						
						<!-- Start article post 7 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img07.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Eam at dicam tempor, impedit expetendis necessi</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 7 -->
						
						<!-- Start article post 8 -->
						<div class="item">
							<div class="single-recent-blog">
								<div class="img-wrapper">
									<div class="img-caption capZoomInDown">
										<a href="singlepost-leftsidebar.html" class="zoomer">
											<span><i class="icon icon-attachment"></i></span>
										</a>
									</div>
									<img src="img/blog/img08.jpg" class="img-responsive" alt="" />
								</div>
								<div class="srb-content">
									<ul class="post-meta">
										<li><a href="#"><i class="fa fa-calendar"></i> 11/08/2016</a></li>
										<li><a href="#"><i class="fa fa-comments"></i> 0</a></li>
									</ul>
									<h5><a href="#">Discere copiosae eum cu ne ocurreret gloriatur</a></h5>
								</div>
							</div>
						</div>
						<!-- End article post 8 -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End contain wrapp -->
	
	<div class="clearfix"></div>
	
	<!-- Start footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="widget">
						<h4>About Anakual</h4>
						<p>
						Omnesque atomorum, pro integre nibh sale meis eam cu. Ut vim modus zril, ex cum erat dictas urbanitas pertinacia eu  eum. Usu in ullum omnesque atomoru pro integre imperdiet in. Saperet perpetua ut mei, nibh sale meis eam cu omnium gloriatur te mei ex blandit.
						</p>
						<div class="social-network">
							<a href="#"><i class="icon icon-facebook"></i></a>
							<a href="#"><i class="icon icon-twitter"></i></a>
							<a href="#"><i class="icon icon-googleplus"></i></a>
							<a href="#"><i class="icon icon-dribbble"></i></a>
							<a href="#"><i class="icon icon-linkedin"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="widget">
						<h4>Explor link</h4>
						<ul class="link-list">
							<li><a href="#">Our services</a></li>
							<li><a href="#">Meet our team</a></li>
							<li><a href="#">Forum</a></li>
							<li><a href="#">Help center</a></li>
							<li><a href="#">Contact Anakual</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Anakual terms</a></li>
							<li><a href="#">Site map</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h4>News & article</h4>
						<ul class="recent-post-list">
							<li>
								<h6><a href="#">Luptatum omittantur duo ne impetus  indoctum</a></h6>
							</li>
							<li>
								<h6><a href="#">Nibh labore corpora qui ex in modus tamquam</a></h6>
							</li>
							<li>
								<h6><a href="#">Petentium cum id sed an adhuc populo erroribus</a></h6>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="widget">
						<h4>Newsletter</h4>
						<!-- Start Subscribe -->
						<form class="form-subscribe">
							<input type="text" class="input-subscribe" placeholder="Enter your email address...">
							<button class="btn btn-primary btn-subscribe" type="button"><i class="fa fa-send"></i></button>
						</form>
						<!-- End Subscribe -->
					</div>
					<div class="widget">
					<h4>Last tweet</h4>
						<div class="tweet"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="subfooter">
			<p>2016 &copy; Copyright <a href="http://99webpage.com/">99webpage.</a> All rights Reserved.</p>
		</div>
	</footer>
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

	<!-- Theme option-->
	<script src="<?= base_url()?>/sky/js/template-option/demosetting.js"></script>	
</body>

</html>
