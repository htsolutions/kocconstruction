<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KCK | CONTACT</title>
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
	<!--start-contact-->
	<div class="contact">
			<div class="container">
				<div class="contact-top">
					<h3>Contact Us</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
				</div>
				<div class="mp">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31715.49893245174!2d7.559387485963191!3d6.466146443451961!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1044a5b059e6555b%3A0x19f5ac25986409a5!2sEmene%2C+Enugu!5e0!3m2!1sen!2sng!4v1449079580041" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="contact-bottom">
					<div class="col-md-5 contact-bottom-left">
						<h3>Contact Information</h3>
						<p>In pharetra dui vitae odio maximus vulputate. Nulam finibus dui more neque dui vitae odio maximu.In pharetra dui vitae odio maximus vulputate. Nullfinibus dui more neque.odio maximus vulputate. Nulla odio maximus vulputate. Nulla odio maxi.</p>
						<h6>Koc Construction Konsult.
							<span>#8 Abatam close, Destiny layout, Emene Ind. Area(EIA), Enugu.</span>
						</h6>
						<p>Telephone: +234 806.7740.725
							<span>FAX: +234 708.5381.371</span>
							E-mail: <a href="mailto:info@example.com">koc.construction274@gmail.com</a>
						</p>
					</div>
					<div class="col-md-7 contact-bottom-right">
						<h3>Get in touch</h3>
					<form>
						<div class="contact-text">
							<input type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"/>
							<input type="text" value="Email Id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Id';}"/>
						</div>
						<div class="contact-textarea">
							<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
						</div>
						<div class="contact-but">
							<input type="submit" />
						</div>
					</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	<!--end-contact-->
	<!--start-touch-->	
<?php include "inc/footer.inc" ;?>
	<!--End-footer-->			
</body>
</html>