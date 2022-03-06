<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>SKYMWAMOTO | Destinations Hotels</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="<?= base_url()?>/skytour/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url()?>/skytour/revolution-slider/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url()?>/skytour/revolution-slider/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url()?>/skytour/revolution-slider/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url()?>/skytour/revolution-slider/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    
    <link href="<?= base_url()?>/skytour/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>/skytour/css/style.css" rel="stylesheet">
	<link href="<?= base_url()?>/skytour/css/vendors.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
    <link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?= base_url()?>/skytour/css/custom.css" rel="stylesheet">

</head>

<body>
	
	<div id="page">
		
	<header class="header menu_fixed">
    <?= $this->include('includes/header');?>

	</header>
	<!-- /header -->
	
	<main>


		<section class="hero_in general">
		<div class="wrapper" style="background-repeat:no-repeat;background-size:cover;background-image: url(<?=  base_url() ?>/skytour/img/hotels.JPG) ">
			<div class="container">

				<h1 class="fadeInUp">ALL HOTELS</h1>
				
			</div>
		</div>
	</section>
		<!--/hero_in-->
	
		
		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- End Map -->

		<div class="container margin_60_35">
			
			<!-- /custom-search-input-2 -->
			  <?php if($luxury){ ?>
			 <h4 class="text-center">LUXURY HOTELS</h4>
			<div class="isotope-wrapper">

			<div class="row">
          
                      <?php foreach($luxury as $cat): ?>
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                     
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->destinations_title; ?>"><img src="<?= base_url('uploads/hotels_image/'.$cat->hotels_image) ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							
						</figure>
						<div class="wrapper">
					    <h3><a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->hotels_title; ?>"><?php echo $cat->hotels_title; ?></a></h3>
                        
						</div>
					
					</div>
                  
				</div>
                <?php endforeach; ?>
                 <?php }
                 else{
                 	?>
                 	<!-- <h4 class="text-center">No Luxury   Hotels have been Uploaded</h4> -->
                 	<?php

                 } ?>
                   			
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
			<!-- /custom-search-input-2 -->
			  <?php if($midrange){ ?>
			 <h4 class="text-center">MIDRANGE HOTELS</h4>
			<div class="isotope-wrapper">

			<div class="row">
        
                      <?php foreach($midrange as $cat): ?>
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                     
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->destinations_title; ?>"><img src="<?= base_url('uploads/hotels_image/'.$cat->hotels_image) ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							
						</figure>
						<div class="wrapper">
					    <h3><a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->hotels_title; ?>"><?php echo $cat->hotels_title; ?></a></h3>
                        
						</div>
					
					</div>
                  
				</div>
                <?php endforeach; ?>
                    
			
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
               <?php }
                 else{
                 	?>
                 	<!-- <h4 class="text-center">No MidRange  Hotels have been Uploaded</h4> -->
                 	<?php

                 } ?>
			<!-- /custom-search-input-2 -->
			 <?php if($comfortable){?>
			 <h4 class="text-center">COMFORTABLE HOTELS</h4>
			<div class="isotope-wrapper">

			<div class="row">
           
                      <?php foreach($comfortable as $cat): ?>
				<div class="col-xl-4 col-lg-6 col-md-6 isotope-item popular">
                     
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->destinations_title; ?>"><img src="<?= base_url('uploads/hotels_image/'.$cat->hotels_image) ?>" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							
						</figure>
						<div class="wrapper">
					    <h3><a href="<?= base_url('hotels/single_hotels')?>/<?php echo $cat->hotels_title; ?>"><?php echo $cat->hotels_title; ?></a></h3>
                        
						</div>
					
					</div>
                  
				</div>
                <?php endforeach; ?>
                   
			
				<!-- /box_grid -->
			</div>
			<!-- /row -->
			</div>
			 <?php }
                 else{
                 	?>
                 	<!-- <h4 class="text-center">No Comfortable  Hotels have been Uploaded</h4> -->
                 	<?php

                 } ?>
			
			
		</div>
		<!-- /container -->
		<br>
		<br>
		<br>
		<br>
		<br>
		
		
		
	</main>
	<!--/main-->
		<!--footer-->
    <?= $this->include('includes/front_footer')?>
	<!--/footer-->
	</div>
	<!-- page -->
	
	
	
	<div id="toTop"></div><!-- Back to top button -->


	
	<!-- COMMON SCRIPTS -->
    <script src="<?= base_url()?>/skytour/js/common_scripts.js"></script>
    <script src="<?= base_url()?>/skytour/js/main.js"></script>
	<script src="<?= base_url()?>/skytour/assets/validate.js"></script>
	
	<!-- Map -->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB6Vck_vRXDPR8ILH8ZLOeGSEz_n4YR0mU"></script>
	<script src="<?= base_url()?>/skytour/js/markerclusterer.js"></script>
	<script src="<?= base_url()?>/skytour/js/map_hotels.js"></script>
	<script src="<?= base_url()?>/skytour/js/infobox.js"></script>
	
	<!-- Masonry Filtering -->
	<script src="<?= base_url()?>/skytour/js/isotope.min.js"></script>
	<script>
	$(window).on('load', function(){
	  var $container = $('.isotope-wrapper');
	  $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
	});

	$('.filters_listing').on( 'click', 'input', 'change', function(){
	  var selector = $(this).attr('data-filter');
	  $('.isotope-wrapper').isotope({ filter: selector });
	});
	</script>

	
	
	
  
</body>
</html>