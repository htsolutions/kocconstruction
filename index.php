<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>KCK | HOME ::</title>
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
<!--light-box-files -->
		<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('#example1 a').Chocolat();
		});
		</script>
</head>
<body>
	<!--start-header-->
	<?php include "inc/navi.inc";?>
	<!--end-header-->
	<!--start-banner-->
	<div class="banner">
		<div  id="top" class="callbacks_container">
			 <ul class="rslides" id="slider4">
			       <li>
						<div class="banner-1"></div>	
					</li>
					<li>
							<div class="banner-2"></div>	
					</li>
					<li>
							<div class="banner-3"></div>	
					</li>
			  </ul>
			</div>
	 	<div class="clearfix"> </div>
	</div>
		<!--End-banner-->
		<!--Slider-Starts-Here-->
				<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!--start-build-->
	<div class="build">
		<div class="container">
			<div class="build-mian">
				<div class="col-md-8 build-left">
					<h1>KCK READY TO BUILD<span>YOUR HOME</span></h1>
					<p></p>
				</div>
				<div class="col-md-4 build-right">
					<a href="#">GET A QUOTE FOR FREE</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--End-build-->	
	<!--start-design-->	
	<div class="design">
		<div class="container">
			<div class="design-main">
				<div class="col-md-3 design-left">
					<div class="design-text">
						<img src="images/design-1.png" alt="" />
						<h3>CONSULTING</h3>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
					</div>
				</div>
				<div class="col-md-3 design-left">
					<div class="design-text">
						<img src="images/design-2.png" alt="" />
						<h3>PLANNING</h3>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
					</div>
				</div>
				<div class="col-md-3 design-left">
					<div class="design-text">
						<img src="images/design-3.png" alt="" />
						<h3>DESIGN</h3>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
					</div>
				</div>
				<div class="col-md-3 design-left">
					<div class="design-text">
						<img src="images/design-4.png" alt="" />
						<h3>BUILD</h3>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--End-design-->
	<!--start-work-->
	<div class="work">
		<div class="container">
			<div class="work-top">
				<h3>OUR LATEST WORKS</h3>
			</div>
			<div class="work-btm">
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider5">
					<li>	
							<div class="work-bottom">
								<div class="col-md-6 work-left">
									<img src="images/work-1.jpg" alt="">
								</div>
								<div class="col-md-6 work-right">
									<div class="work-mian">
										<p>PROJECT NAME<span class="one">: First Bank Building</span></p>
										<p>LOCATION<span class="two">: New Haven, Enugu</span></p>
										<p>OWNER<span class="tre">: FBN</span></p>
										<p>PROJECT START<span class="fvr">: Feb 2014</span></p>
										<p>PROJECT END<span class="fve">: JUNE 2016</span></p>
									</div>
										<div class="work-one">
											<p>DESCRIPTION<label>:</label><span>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus, Vivamus viverra nibh in quam bibendum interdum.  Duis convallis est ante, id pulvinar tortor tempus sed.  Pellentesque nulla tellus,</span></p>
										</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="pop-up">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span><img src="images/pop-up.png" alt="" /></a>
							</div>
						</li>
						<li>	
							<div class="work-bottom">
								<div class="col-md-6 work-left">
									<img src="images/work-2.jpg" alt="">
								</div>
								<div class="col-md-6 work-right">
									<div class="work-mian">
										<p>PROJECT NAME<span class="one">: First Bank Building</span></p>
										<p>LOCATION<span class="two">: New Haven, Enugu</span></p>
										<p>OWNER<span class="tre">: FBN</span></p>
										<p>PROJECT START<span class="fvr">: Feb 2014</span></p>
										<p>PROJECT END<span class="fve">: JUNE 2016</span></p>
									</div>
										<div class="work-one">
											<p>DESCRIPTION<label>:</label><span> Viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus, Vivamus viverra nibh in quam bibendum interdum.  Duis convallis est ante, id pulvinar tortor tempus sed.  Pellentesque nulla tellus,</span></p>
										</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="pop-up">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog1"><span> </span><img src="images/pop-up.png" alt="" /></a>
							</div>
						</li>
						<li>	
							<div class="work-bottom">
								<div class="col-md-6 work-left">
									<img src="images/work-3.jpg" alt="">
								</div>
								<div class="col-md-6 work-right">
									<div class="work-mian">
										<p>PROJECT NAME<span class="one">: First Bank Building</span></p>
										<p>LOCATION<span class="two">: New Haven, Enugu</span></p>
										<p>OWNER<span class="tre">: FBN</span></p>
										<p>PROJECT START<span class="fvr">: Feb 2014</span></p>
										<p>PROJECT END<span class="fve">: JUNE 2016</span></p>
									</div>
										<div class="work-one">
											<p>DESCRIPTION<label>:</label><span>Vivamus quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus, Vivamus viverra nibh in quam bibendum interdum.  Duis convallis est ante, id pulvinar tortor tempus sed.  Pellentesque nulla tellus,</span></p>
										</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="pop-up">
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog2"><span> </span><img src="images/pop-up.png" alt="" /></a>
							</div>
						</li>
							</ul>
						</div>
					<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--End-work-->	
	<!--Slider-Starts-Here-->
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 5
			      $("#slider5").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->
	<!---pop-up-box---->
		 <script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
		 <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all"/>
		 <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	 <!---//pop-up-box---->
	 <div id="small-dialog" class="mfp-hide">
						<div class="login">
							<img src="images/work-1.jpg" alt="" />
						</div>
	</div>
	<div id="small-dialog1" class="mfp-hide">
						<div class="login">
							<img src="images/work-2.jpg" alt="" />
						</div>
	</div>
	<div id="small-dialog2" class="mfp-hide">
						<div class="login">
							<img src="images/work-3.jpg" alt="" />
						</div>
	</div>				
					<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!--start-footer-->
	<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 5,
						lazyLoad : true,
						autoPlay : true,
						pagination : false,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
	<!--start-project-->
		<!-- start content_slider -->
	<div class="project">
		<div id="example1">
			<div id="owl-demo" class="owl-carousel text-center">
				<div class="item">
					<a href="images/project-1.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-1.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-2.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-2.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-3.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-3.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-4.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-4.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-5.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-5.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-1.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-1.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-2.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-2.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-3.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-3.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-4.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-4.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
				<div class="item">
					<a href="images/project-5.jpg" title="Home" rel="title1">
						<img class="lazyOwl" data-src="images/project-5.jpg" alt="name">
					</a>
					<div class="project-name">
						<p>Project title here</p>
						<span> </span>
					</div>
				</div>
			</div>
		</div>
	</div>
			<!--//sreen-gallery-cursual---->
	<!--end-project-->	
	<!--start-clients-->	
	<div class="clients">
		<div class="container">
			<div class="clients-top">
				<h3>WE <span>LOVE</span> OUR CLIENTS THEY <span>LOVE</span> US!!</h3>
			</div>
			<div class="clients-btm">
				<div  id="top" class="callbacks_container">
			 	<ul class="rslides" id="slider6">
			       <li>
					<div class="clients-bottom">
						<p>“Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,”</p>
						<h4>- BIN BURHAN <span>(CEO. UniqueGraph)</span></h4>
					</div>
				</li>
				<li>
					<div class="clients-bottom">
						<p>“Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,”</p>
						<h4>- BIN <span>(CEO. UniqueGraph)</span></h4>
					</div>
				</li>
				<li>
					<div class="clients-bottom">
						<p>“Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,”</p>
						<h4>- BURHAN <span>(CEO. UniqueGraph)</span></h4>
					</div>
				</li>
			  </ul>
			</div>
	 		<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-clients-->
	<!--Slider-Starts-Here-->
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 6
			      $("#slider6").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!--End-slider-script-->	
	<!--start-news-->	
	<div class="news">
		<div class="container">
			<div class="news-top">
				<h3>OUR LATEST NEWS</h3>
				<p>be always on the wave of latest news and updates</p>
			</div>
			<div class="news-bottom">
				<div class="col-md-4 news-left">
					<img src="images/news-1.jpg" alt="" />
					<div class="news-main">
						<h4>Update news title</h4>
						<ul>
							<li><span>By:Admin</span></li>
							<li><span>01/01/2014</span></li>
							<li><span>5 Comment</span></li>
						</ul>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
						<div class="news-btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-left">
					<img src="images/news-2.jpg" alt="" />
					<div class="news-main">
						<h4>Update news title</h4>
						<ul>
							<li><span>By:Admin</span></li>
							<li><span>01/01/2014</span></li>
							<li><span>5 Comment</span></li>
						</ul>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
						<div class="news-btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-left">
					<img src="images/news-3.jpg" alt="" />
					<div class="news-main">
						<h4>Update news title</h4>
						<ul>
							<li><span>By:Admin</span></li>
							<li><span>01/01/2014</span></li>
							<li><span>5 Comment</span></li>
						</ul>
						<p>Vivamus viverra nibh in quam bibendum interdum. Duis convallis est ante, id pulvinar tortor tempus sed. Pellentesque nulla tellus,id pulvinar tortor tempus sed. Pellentesque nulla tellus,</p>
						<div class="news-btn">
							<a href="#">Read More</a>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="planning">
				<p>PRECISE PROJECT PLANNING, MODERN DESIGN AND SATISFYING RESULTS!</p>
			</div>
		</div>
	</div>
	<!--end-news-->	
	<!--start-touch-->	
<?php include "inc/footer.inc" ;?>			
</body>
</html>