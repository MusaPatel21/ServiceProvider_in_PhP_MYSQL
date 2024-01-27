<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<?php include_once "Service/include/header.php"; ?>
<?php
$cities = ["Ahmednagar", "Akola", "Akot", "Amalner", "Ambejogai", "Amravati", "Anjangaon", "Arvi", "Aurangabad", "Bhiwandi", "Dhule", "Kalyan-Dombivali", "Ichalkaranji", "Kalyan-Dombivali", "Karjat", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur", "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Mira-Bhayandar", "Morshi", "Mukhed", "Mul", "Greater Mumbai*", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon", "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad", "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani", "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune", "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner", "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon", "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar", "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur", "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur", "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha", "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"];
?>
<!DOCTYPE html>
<html>
<head>
   
	
	<title>Service Provider | Register</title>
	<link rel="icon" type="images/x-icon" href="images/Logo.png"/>

	
   
	
    <!--================================BOOTSTRAP STYLE SHEETS================================-->
        
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	
    <!--================================ Main STYLE SHEETs====================================-->
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/color/color.css">
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
	<link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!--================================FONTAWESOME==========================================-->
		
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
	<!--================================GOOGLE FONTS=========================================-->
	
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
		
</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		
		<!--================================HEADER==========================================-->
		<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">Register</h4>
		</div><!-- section title end -->
		<div class="sc-page"><!--sc-page-->
			<!--================================PRICING PLAN SECTION 1==========================================-->
		
			<section class="pricing-section padding-top-70 padding-bottom-40">
				<div class="container"><!-- section container -->
					<div class="row pricing-wrap style-2 clearfix">
                    <form action="scripts/register.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input id="name" name="name" type="text" class="form-control" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <label for="">Contact No.</label>
                    <input id="contact"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="mobilenumber" type="text" class="form-control" placeholder="Contact" minlength="10"
                        maxlength="10" required>
                </div>

                <div class="form-group">
                    <label for="">Address</label>
                    <input id="address" name="address" type="text" class="form-control" placeholder="Enter Address"
                        required>
                </div>

                
                <div class="form-group">
                    <label for="">City</label>
                    <select class="form-control" name="city" id="city">
                        <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city ?>"> <?= $city ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Photo(Square Size)</label>
					<br>
                    <input id="propic" name="propic" type="file" class="form-control-file" placeholder="Select Photo 1"
                        required>
                </div>

                <div class="form-group">
                    <label for="">Add Description</label>
                    <textarea name="disc" id="disc" class="form-control"
                        placeholder="" required></textarea>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input id="pasword" name="Pasword" type="Pasword" class="form-control"
                        placeholder="Enter 6 Character Password" minlength="4" required>
                </div>

                <div class="form-group">
                    <label for="">Profession</label>
                    <select class="form-control" name="category" id="category">
                        <option value="electrician">Electrician</option>
                        <option value="plumber">Plumber</option>
                        <option value="dr">dr</option>
                        <option value="mobile">Mobile Repairer</option>
                    </select>
                </div>

                <button style="margin-top: 30px;" class="btn btn-block btn-primary" type="submit" name="register"
                    id="register">Register</button>
            </form>
					
						
						
					</div><!-- .row pricing end -->
				</div><!-- container end -->
<?php include_once('includes/footer.php');?>
	</div>
	
	
	<!--================================JQuery===========================================-->
        
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	
	<!--================================BOOTSTRAP===========================================-->
        
	<script src="bootstrap/js/bootstrap.min.js"></script>	
	
	<!--================================NAVIGATION===========================================-->
	
	<script type="text/javascript" src="js/menu.js"></script>
	
	<!--================================SLIDER REVOLUTION===========================================-->
		
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
	<script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
	
	<!--================================MAP===========================================-->
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM&amp;sensor=false"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<!-- map with geo locations -->
	
	<script type="text/javascript" src="js/jquery.mapit.js"></script>
	<script src="js/initializers.js"></script>
	
	<!--================================OWL CARESOUL=============================================-->
		
	<script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
		
	<!--================================FunFacts Counter===========================================-->
		
	<script src="js/jquery.countTo.js"></script>
	
	<!--================================jquery cycle2=============================================-->
	
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>	
	
	<!--================================waypoint===========================================-->
		
	<script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
	
	<!--================================RATINGS===========================================-->	
	
	<script src="js/jquery.raty-fa.js"></script>
	<script src="js/rate.js"></script>
	
	<!--================================ testimonial ===========================================-->
	<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			
			<div class="rg-image-wrapper">
				<div class="rg-image"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
						<h5></h5>
						<div class="caption-metas">
							<p class="position"></p>
							<p class="orgnization"></p>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</script>	
	<script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>
	
	<!--================================custom script===========================================-->
		
	<script type="text/javascript" src="js/custom.js"></script>
    
</body>
</html>