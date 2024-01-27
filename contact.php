<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
    
	
	<title>Service Provider | Contact Page</title>
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
	<link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
		
	<!--================================SLIDER REVOLUTION =========================================-->
	
	<link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
		
</head>
<body>
	<div class="preloader"><span class="preloader-gif"></span></div>
	<div class="theme-wrap clearfix">
		<!--================================responsive log and menu==========================================-->
		<div class="wsmenucontent overlapblackbg"></div>
		<div class="wsmenuexpandermain slideRight">
			<a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
			<a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
		</div>
		<?php include_once('includes/header.php');?>
		
		<!--================================PAGE TITLE==========================================-->
		<div class="page-title-wrap bgorange-1 padding-top-30 padding-bottom-30"><!-- section title -->
			<h4 class="white">contact us</h4>
		</div><!-- section title end -->
		
		<!--================================CONTACT===========================================-->
		<section id="contact-form" class="margin-top-70 margin-bottom-40">
			<div class="container">
				<div class="row info-box-wrap clearfix">
					<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfix">
							<div class="info-icon">
								<i class="fa fa-phone bgblue-1 white" onclick="document.location.href = 'tel:+91 8793229733'"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Contact numbers</h6>
								</div>
								<div class="info-disc">
									<p>+<?php  echo htmlentities($row->MobileNumber);?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfix">
							<div class="info-icon">
								<i class="fa fa-envelope bggreen-1 white"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>email Address</h6>
								</div>
								<div class="info-disc">
									<p><?php  echo htmlentities($row->Email);?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"><!-- infobox -->
						<div class="info-box bgwhite shadow-1 clearfix">
							<div class="info-icon">
								<i class="fa fa-map-marker bgyallow-1 white" onclick="document.location.href = ''"></i>
							</div>
							<div class="info-content">
								<div class="info-title">
									
									<h6>Address</h6>
								</div>
								<div class="info-disc">
									<p><?php  echo htmlentities($row->PageDescription);?></p>
								</div>
							</div>
						</div>
					</div><!-- infobox end -->
					<?php $cnt=$cnt+1;}} ?>
				</div><!-- .row .info-box-wrap end -->
		
			
			</div><!-- container end -->
		</section>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.0899887937994!2d73.9306778!3d18.4795826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea035bbf7bc9%3A0xa502bc880bfed8e9!2sKohinoor%20Ambrosia%2C%20Kohinoor%20Ambrosia%20A%20Building%2C%20Sai%20Colony%2C%20Hadapsar%2C%20Pune%2C%20Maharashtra%20411028!5e0!3m2!1sen!2sin!4v1687536267011!5m2!1sen!2sin"
			 width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		
		<?php include_once('includes/footer.php');?>
	</div>

        
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
		
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBueyERw9S41n4lblw5fVPAc9UqpAiMgvM"></script>
	<script type="text/javascript" src="js/map.js"></script>
	
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