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
  <?php $i = 0;?>
                <?php if($tourssafaridetails) { ?>
                <?php foreach($tourssafaridetails as $cat): ?>
            <?php
                                          $i++;
						    	       if($i == 1)
						    	       break;
                                       ?>
        <?php endforeach; ?>
                     <?php } 
                      else {

                     } ?>

    <title><?php echo $cat->tours_and_safari_title; ?></title>

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
			<div class="row marginbot30">
				<div class="col-md-12">
      
                     <!-- Start Images slider -->
							<div class="flexslider">
								<ul class="slides">
									<li><img style="width:900px; height: 400px;" src="<?= base_url('uploads/toursandsafariimages/'.$cat->tours_and_safari_image) ?>" alt=""></li>
                  
								
								</ul>
							</div>
              <br>
              <br>
							<!-- End Images slider -->
				<!-- Start button trigger modal -->
        <h3 class="text-center" style="color:#062C17;"><?php echo $cat->tours_and_safari_title; ?></h3>
        <button type="button" class="btn btn-primary" style="background-color: #062C17;" data-toggle="modal" data-target="#myModal">
						ENQUIRE NOW
					</button>
					<!-- End button trigger modal -->
					
					<!-- Start modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
            <form method="post" id="destinations_form" enctype="multipart/form-data">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
									<h6 class="modal-title"><?php echo $cat->tours_and_safari_title; ?></h6>
								</div>
								<div class="modal-body">
									

      
        <div class="col-sm-12">
		<div class="form-group">
		  
		   <input type="text" placeholder="Full Name" name="name" id="name" class="form-control" />
		   <span id="name_error" class="text-danger"></span>
		 </div>
	   </div>
	   <div class="col-sm-12">
		<div class="form-group">
		   <input type="email" placeholder="Email" name="email" id="email" class="form-control" />
		   <span id="email_error" class="text-danger"></span>
		 </div>
	   </div>

		 <div class="col-sm-12">
		<div class="form-group">
		   
		   <input type="integer" placeholder="Phone Number" name="phonenumber" id="email" class="form-control" />
		   <span id="phonenumber_error" class="text-danger"></span>
		 </div>
	   </div>
	         <div class="col-sm-12">
          <div class="form-group">
            
            
             <select class="form-control select2" name="country" id="country"  value="" style="width: 100%;">
             <option selected="selected" value=""> Select Your Country</option>
             <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>
              
               
            </select>
            <span id="country_error" class="text-danger"></span>
          </div>
        </div>
          <div class="row">
	    <div class="col-md-6">
		<div class="form-group">
		   <label>Travel Date</label>
		   <input type="date" name="date" id="date" class="form-control" />
		   <span id="date_error" class="text-danger"></span>
		 </div>
	   </div>
	     <div class="col-md-6">
		<div class="form-group">
		  <label>Number of Persons</label>
		   <input type="integer" name="persons" id="persons"  class="form-control" />
		   <span id="persons_error" class="text-danger"></span>
		 </div>
	   </div>
	   </div>
	     <div class="form-group">
            
        <textarea placeholder="Additional information Which we should know?:" class="form-control" id="message" name="message"></textarea>
             <span id="message_error" class="text-danger"></span>
          </div>
								</div>
                <div class="modal-footer">
          <input type="hidden" name="enquire" id="enquire" value="<?php echo $cat->tours_and_safari_title; ?>" />
          <input type="hidden" name="action" id="action" value="Add" />
          <!-- <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" /> -->
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
							</div>
            </form>
						</div>
					</div>
					<!-- End modal -->
					
					<!-- Start Shortcode -->
                    <?php foreach($tourssafaridetails as $cat): ?>
                    <div class="panel-group margintop30" id="accordion1" >
                        <div class="panel panel-default">
                            <div class="panel-heading" id="heading1">
                                <h6 class="panel-title">
                                    <a  data-parent="#accordion1" href="#panel1" >
                                    <?php echo $cat->tours_and_safari_route_day; ?>
                                    </a>
                                </h6>
                            </div>
                            <div id="panel1" >
                                <div class="panel-body" style="background-color: #062C17;">
                                <?php echo $cat->tours_and_safari_route_description; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
					<!-- End Shortcode -->
				</div>
			</div>
			
		
		</div>
    </div>
	<!-- End contain wrapp -->
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



  <script type="text/javascript">
  
  $(document).ready( function () {
 
  $('#addDestinations').click(function(){

    $('#destinations_form')[0].reset();

    $('#name_error').text('');

    $('#email_error').text('');

    $('#phonenumber_error').text('');

    $('#country_error').text('');

    $('#date_error').text('');

    $('#message_error').text('');

    $('#persons_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#destinationenquire').modal('show');
    

       });
    });

   $('#destinations_form').on('submit', function(event){
   	

    event.preventDefault();

    $.ajax({

      url:"<?= base_url('destinations/saveenquire')?>",

      method:"POST",

      data:new FormData(this),
        contentType: false,  
        cache: false,  
        processData:false,  
        dataType: "json", 
         beforeSend:function(){

        $('#submit_button').val('wait...');

        $('#submit_button').attr('disabled', 'disabled');

      }, 
                    

      success:function(data)
      {
        
        $('#submit_button').val('Add');

        $('#submit_button').attr('disabled', false);

        if(data.error == 'yes')
        {

          $('#name_error').text(data.name_error);
          $('#email_error').text(data.email_error);
          $('#country_error').text(data.country_error);
          $('#phonenumber_error').text(data.phonenumber_error);
          $('#date_error').text(data.date_error);
          $('#message_error').text(data.message_error);
          $('#persons_error').text(data.persons_error);

        }
        else
        {
         
          $('#destinationenquire').modal('hide');
         $('#enquire').html(data.message);

          // location.reload();
    

        }

      }

    })

  });
	</script>
	</body>

</html>
    

    
	
	