<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KCK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Alchemist Responsive web template, Bootstrap Web Templates, Flat Web Templates,  Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, sony ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery-1.11.0.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--Start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>	
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--end-smoth-scrolling-->
<!--start-top-nav-script-->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
<!--End-top-nav-script-->
</head>
<body>
	<!--start-header-->
	<?php include "inc/navi.inc";?>
	<!--end-header-->
	<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<h3>A Few Words About Us</h3>
				<h5>Uspendisse laoreet nibh ac cursus vestibulum. Vestibulum eu arcu at justo tristique malesuada. Aliquam erat volutpat. Vivamus condimentum feugiat magna</h5>
				<p>Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orc i ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus.</p>
				<div class="about-text">
					<div class="col-md-4 about-text-left">
						<img src="images/abt-1.jpg" alt="">
						<h5>What We Do</h5>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et dignissim augue, et sagittis turpis. Vestibulum congue turpis ac tincidunt accumsan.</p>
					</div>
					<div class="col-md-4 about-text-left">
						<img src="images/abt-2.jpg" alt="">
						<h5>Our Capabilities</h5>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et dignissim augue, et sagittis turpis. Vestibulum congue turpis ac tincidunt accumsan.</p>
					</div>
					<div class="col-md-4 about-text-left">
						<img src="images/abt-3.jpg" alt="">
						<h5>Our Standards</h5>
						<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam et dignissim augue, et sagittis turpis. Vestibulum congue turpis ac tincidunt accumsan.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--end-about-->
	<!--start-team-->
	<div class="team">
		<div class="container">
			<div class="team-main">
				<h3>Our Team</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				<div class="team-top">
					<div class="col-md-4 team-top-left">
						<img src="images/team-1.jpg" src="">
						<div class="t-top">
							<h4>Kingsley Omenazu</h4>
							<P>Kingsley career span structural designs, Project Managemant, and business development. Kingsley is a civil engineer,
								he started his career as a project supervisor with so many years of exprience in the construction industry.</P>
						</div>
					</div>
					<div class="col-md-4 team-top-left">
						<img src="images/team-2.jpg" src="">
						<div class="t-top">
							<h4>Mubarak Mohammed</h4>
							<P>Mubarak is an Ahmadu Bello university trained economics with years of experience in financial managemant and cost effective 
								manager in fund disbursment in projects.</P>
						</div>	
					</div>
					<div class="col-md-4 team-top-left">
						<img src="images/team-3.jpg" src="">
						<div class="t-top">
							<h4>Uchenna Sanuel</h4>
							<P>Uche is the chief architect with so many years of expirence in his practice of basic and classic architecture
								Knowledgeable in use of various architectrual softwares. He has so many monumental design to his credit.</P>							
						</div>	
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-team-->
	<!--start-touch-->	
	<?php include "inc/footer.inc";?>
	<!--End-footer-->			
</body>
</html>