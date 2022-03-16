
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky navbar-default bootsnav" >

        <div class="container">            
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" style="color:white" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="<?= base_url('/home')?>"><img src="<?= base_url()?>/sky/img/gooood.png" style="height:60px;" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                   
                    <li class="dropdown active"><a href="<?= base_url('/home')?>">Home</a></li>	
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Mountain Trekking</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Mount Kilimanjaro</a>
                                <ul class="dropdown-menu">
                               
                                    <?php if($mounttrakkingroute): ?>
							    <?php foreach($mounttrakkingroute as $cat): ?>
                                    <li><a href="<?= base_url('MountainTrekkingRoute/single_mountaintrekking_route')?>/<?php echo $cat->mountain_days; ?>"><?= $cat->mountain_days; ?></a></li>
                                    <?php endforeach; ?>
					           <?php endif; ?>
                                </ul>
                               
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Mount Meru</a>
                                <ul class="dropdown-menu">
                                <?php if($mounttrakkingroutemeru): ?>
                                <?php foreach($mounttrakkingroutemeru as $cat): ?>
                                    <li><a href="<?= base_url('MountainTrekkingRoute/single_mountaintrekking_route')?>/<?php echo $cat->mountain_days; ?>"><?= $cat->mountain_days; ?></a></li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>

                                </ul>
                            </li>
                  
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Tours & Safari</a>
                        <ul class="dropdown-menu">
                        <?php foreach($tourssafari as $cat): ?>
                            <li><a href="<?= base_url('Tours_and_Safaris/tours_and_safaris_details')?>/<?php echo $cat['tours_and_safari_title']; ?>"><?php echo $cat['tours_and_safari_title']; ?></a></li>
                            <?php endforeach; ?>

                        </ul>
                    </li>
                  
              
                    <li class="dropdown megamenu-fw" >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Destinations</a>
                        <ul class="dropdown-menu megamenu-content" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Northen Tanzania</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                               <?php foreach($nothern as $cat): ?>
                                                <li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
                                                <?php endforeach; ?>
                                         
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Southern Tanzania</h6>
                                        <div class="content">
                                            <ul class="menu-col">

                                            <?php foreach($southern as $cat): ?>
												<li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?= $cat->destinations_title; ?></a></li>
                                                <?php endforeach; ?>

                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                        <h6 class="title">Western Tanzania</h6>
                                        <div class="content">
                                            <ul class="menu-col">
                                            <?php foreach($western as $cat): ?>                                                
                                                <li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?php echo $cat->destinations_title; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                    <div class="col-menu col-md-3">
                                    <h6 class="title">Coastal & Island Tanzania</h6>
                                    <div class="content">
                                            <ul class="menu-col">
                                            <?php foreach($coastal as $cat): ?>                                                
                                                <li><a href="<?= base_url('destinations/single_destinations')?>/<?php echo $cat->destinations_title; ?>"><?php echo $cat->destinations_title; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div><!-- end col-3 -->
                                </div><!-- end row -->
                            </li>
                        </ul>
                    </li>
                    <li class="volu"><a href="<?= base_url()?>/volunteerings">Volunteering </a></li>
					<li><a href="<?= base_url()?>/contacts">Contact us</a></li>   
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    <!-- End Navigation -->
