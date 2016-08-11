<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KCK| QUOTE </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Alchemist Responsive web template, Bootstrap Web Templates, Flat Web Templates,  Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, sony ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="icon" href="images/favicon.ico">
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
	<!--start-get-->
	<div class="get">
		<div class="container">
			<div class="get-main">
				<h3>Get A Quote</h3>
			</div>
			<div class="get-bottom">
				<div class="col-md-7 get-bottom-left">
					<form>
						<label>Full Name</label>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
						<label>Email</label>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
						<label>Phone Number</label>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
						<label>Company</label>
						<input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
						<label>Describe your project in a few sentences:</label>
						<textarea value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"> </textarea>
						<div class="get-btn">
							<input type="submit" value="Submit" />
						</div>
					</form>
				</div>
				<div class="col-md-5 get-bottom-right">
					<div class="get-btm-top">
						<h4>What you get</h4>
						<ul>
							<li><a href="#">Fusce<span>feugiat</span> malesuada odio orbi nunc odio gravida.</a></li>
							<li><a href="#">Bulum iaculis<span> lacinia</span> est. Proin dictum elemntum velit.</a></li>
							<li><a href="#">Duis<span> ultricies</span> pharetra magna onec accumsan malesuada orci</a></li>
						</ul>
					</div>
					<div class="get-btm-top">
						<h4>Your privacy</h4>
						<div class="get-btm-one">
							<div class="get-lock">
								<img src="images/lock.png" alt="" />
							</div>
							<div class="get-text">
								<p>Suspendisse commodo tempor sagittis! In justo est, sollicitudin eu scelerisque pretium, placerat eget elit.. Praesent faucibus rutrum odio at rhoncus.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
	</div>
	<!--end-quote-->
	<!--start-touch-->	
	<?php include "inc/footer.inc";?>
	<!--End-footer-->			
</body>
</html>