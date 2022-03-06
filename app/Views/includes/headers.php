<header class="header menu_fixed">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Page Preload -->
		<div id="logo">
			<a href="<?= base_url('/home')?>">

				<img src="<?= base_url()?>/skytour/img/logo.jpg" width="150" height="106" alt="" class="logo_normal">
				<img src="<?= base_url()?>/skytour/img/logo.jpg" width="150" height="36" alt="" class="logo_sticky">
		
			
			</a>
		</div>

		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li class="colorr"><span><a href="<?= base_url('/home')?>">Home</a></span>
				
				</li>
				<li ><span><a href="">Destinations</a></span>
					<!-- style=" font-size:15px;font-family: 'Poppins', Helvetica, sans-serif;font-weight:bold;" -->
					<ul>
				
                      <li><span><a href="">Northen Tanzania</a></span>


							<ul>
							<?php if($nothern) { ?>
							<?php foreach($nothern as $cat): ?>
                     
								<li ><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
								<?php endforeach; ?>
								<?php } 
								else {
									?>
                                   
									<?php
								} ?>
							
							</ul>

                      </li>
                       <li><span><a href="">Southern Tanzania</a></span>
                            	
							<ul>
							<?php if($southern) { ?>
							<?php foreach($southern as $cat): ?>
                     
								<li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
								<?php endforeach; ?>
								<?php } 
								else {
									?>
                                   
									<?php
								} ?>
							
							</ul>
                       </li>
                       <li><span><a href="">Western Tanzania</a></span>


							<ul>
							<?php if($western) { ?>
							<?php foreach($western as $cat): ?>
                     
								<li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
								<?php endforeach; ?>
								<?php } 
								else {
									?>
                                   
									<?php
								} ?>
							
							</ul>

                       </li>
                       <li><span><a href="">Coastal & Island Tanzania</a></span>

							<ul>
							<?php if($coastal) { ?>
							<?php foreach($coastal as $cat): ?>
                     
								<li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
								<?php endforeach; ?>
								<?php } 
								else {
									?>
                                   
									<?php
								} ?>
							
							</ul>

                       </li>
						
					
						
					
					</ul>
				</li>
				<li><span><a href="">Mountain Trekking</a></span>
					<ul>
						<li>
							<span><a href="">Mount Kilimanjaro</a></span>
							
							<ul>
							<?php if($mounttrakkingroute) { ?>
							<?php foreach($mounttrakkingroute as $cat): ?>
                     
								<li><a href="<?= base_url('MountainTrekkingRoute/single_mountaintrekking_route')?>/<?php echo $cat->mountain_days; ?>"><?= $cat->mountain_days; ?></a></li>
								<?php endforeach; ?>
								<?php } 
								else {
									?>
                                   
									<?php
								} ?>
							
							</ul>
						
						</li>
						<li>
							<span><a href=""><p >Mount Meru</p></a></span>
							
							<ul>
							<?php foreach($mounttrakkingroutemeru as $cat): ?>
                     
								<li><a href="<?= base_url('MountainTrekkingRoute/single_mountaintrekking_route')?>/<?php echo $cat->mountain_days; ?>"><?= $cat->mountain_days; ?></a></li>
								<?php endforeach; ?>
							
							</ul>
						
						</li>
				
						
					</ul>
				</li>
				<li><span><a href="">Tours & Safari</a></span>
					<ul>
				
                      <?php foreach($tourssafari as $cat): ?>
						<li><a href="<?= base_url('Tours_and_Safaris/tours_and_safaris_details')?>/<?php echo $cat['tours_and_safari_title']; ?>"><?php echo $cat['tours_and_safari_title']; ?></a></li>
						<?php endforeach; ?>
						
					
						
					
					</ul>
				</li>
			    <li><span><a href="<?= base_url()?>/volunteerings">Volunteering</a></span></li>
				<li><span><a href="<?= base_url()?>/aboutus">About Us</a></span></li>
                <li><span><a href="<?= base_url()?>/contacts">Contact Us</a></span></li>
				
			</ul>
		</nav>
	</header>