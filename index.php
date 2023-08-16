<?php 
if ($conn = mysqli_connect("localhost","root","","web")==false) {
   header("location:setup.php");
   die();
   header("location:index.php");
 }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>KTM Duke Showroom</title>
<!-- <?php
 //start the PHP_session function 
if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];

?> -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/component.css" rel="stylesheet" type="text/css"  />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Duke Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola Welcome" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script> 
<script src="js/modernizr.custom.js"></script>
<link href="css/swipebox.css" rel='stylesheet' type='text/css' />
<!--//js-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".work-grid-middle a").swipebox();
						});
					</script>


</head>
  <!--start-home-->
 <body class="cbp-spmenu-push">
       <!--top-header-->
		<!--bottom-->
		  <section class="button">
					<button id="showLeftPush"><img src="images/menu-icon.png" alt="pushbutton" style="background-color: black"></button>
		   </section>
		   	<!-- start-search-->
			  <div class="search">
			   <div id="sb-search" class="sb-search">
				  <form>
					 <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
					 <input class="sb-search-submit" type="submit" value="">
					 <span class="sb-icon-search"> </span>
				  </form>
			    </div>
			   </div>
			 <!--search-scripts-->
			 <script src="js/classie.js"></script>
			 <script src="js/uisearch.js"></script>
			   <script>
				 new UISearch( document.getElementById( 'sb-search' ) );
			   </script>
				<!--//search-scripts-->

			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<h3>Menu</h3>
				<a class="active scroll" href="#house">Home</a>
				<a class="scroll" href="#about">About</a>
				<a class="scroll" href="#service">Services</a>
			    <a class="scroll" href="#model">Latest Models</a>
				<a class="scroll" href="#news">News</a>
				<a class="scroll" href="#gallery">Gallery</a>
				<a class="scroll" href="#test">Testimonials</a>
				<a class="scroll" href="#contact">Contact</a>
				<a href="admin.php">Admin-Login</a>
				<ul class=" side-icons" style="margin-top: 5px">
							<li><a target="_blank" class="fb" href="https://www.facebook.com/"></a></li>
							<li><a target="_blank" class="twitt" href="https://plus.google.com/discover"></a></li>
							<li><a target="_blank" class="goog" href="https://twitter.com/login?lang=en"></a></li>
							<li><a target="_blank" class="drib" href="https://www.instagram.com/?hl=en"></a></li>
					   </ul>
		  </nav>
	      <div class="banner" id="house">
		       <div class="container">
						<div class="callbacks_container">
						<ul class="rslides callbacks callbacks1" id="slider4">
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 50ms ease-in-out;">
								<div class="banner-info">
								<h3>THE DUKE IS TO...</h3>
							   <a href="login.php" class="con"><i class="glyphicon glyphicon-cog"></i>LOG-IN</a>
								</div>
							</li>
							<li class="callbacks1_on" style="display: block; float: none; position: absolute; opacity: 1; z-index: 2; transition: opacity 50ms ease-in-out;">
								<div class="banner-info">
								   <h3>EXPRESS YOURSELF FULLY WITH ACTION.</h3>
								 <a href="login.php" class="con"><i class="glyphicon glyphicon-cog"></i>LOG-IN</a>
								</div>
							</li>
							<li class="callbacks1_on" style="display: block; float: none; position: absolute; opacity: 1; z-index: 2; transition: opacity 50ms ease-in-out;">
								<div class="banner-info">
								  <h3>...MAKE IT HAPPEN</h3>
								  <a href="login.php" class="con"><i class="glyphicon glyphicon-cog"></i>LOG-IN</a>
								</div>	
							</li>
								<li class="callbacks1_on" style="display: block; float: none; position: absolute; opacity: 1; z-index: 2; transition: opacity 50ms ease-in-out;">
								<div class="banner-info">
								  <h3>...LIVE WITH COURAGE</h3>
								  <a href="login.php" class="con"><i class="glyphicon glyphicon-cog"></i>LOG-IN</a>
								</div>	
							</li>
							<li class="callbacks1_on" style="display: block; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 50ms ease-in-out;">
								<div class="banner-info">
								 <h3>THE NEW MODEL.</h3>
							    <a href="login.php" class="con"><i class="glyphicon glyphicon-cog"></i>
								 LOG-IN</a>
								</div>
							</li>
						</ul>
						</div>

						<script type="text/javascript">
  $(document).ready(function(){
    $("#signup").click(function(){
      $("#register").modal();
    });

    $("#login").click(function(){
      $("#Login").modal();
    });
  });

      $("#btn").click(function(){
          alert("You have to login first!!");
      })

      $("#butn").click(function(){
          alert("You have to login first!!");
      })

      $("#botn").click(function(){
          alert("You have to login first!!");
      })


</script>
						<!--banner-Slider-->
						<script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
						auto: true,
						pager: true,
						nav:false,
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
				</div>


		 </div>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
  <!--start-about-->
     <div class="about-section" id="about">
	    <div class="container">
		       <h3 class="tittle">About</h3>
		        <div class="about-top">
				  <div class="col-md-6 about-text">
				   <h2>Welcome to Our Bike Showroom</h2>
				  <p>Every new ride on your KTM is an ADVENTURE waiting to be experienced – a dream that is yours to realize. The adventurous spirit lurks in all of us, but few ever answer its call. For those with the courage and vision to follow their sense of adventure, KTM is the perfect match. True adventurers, permanently challenging themselves, looking to new horizons for the next goal, destination or opponent to conquer.</p>
		    </div>
			<div class="col-md-6 about-pic">
		            <img src="images/head.jpg" alt="bike"/>
		    </div>
				<div class="clearfix"> </div>		
		    </div>
		</div>
	 </div>
  <!--//about-->
  <!--start-services-->
      <div class="service-section" id="service">
	    <div class="container">
		  <h3 class="tittle">Service</h3>
		    <div class="service-bottom">
				<div class="col-md-6 about-left">
					<div class="srv-one">
						<div class="srv-left">
							<h4>WARRANTY</h4>
							<p>KTM stands for reliability and quality. Our faith in our products is such that we provide a 24-month manufacturer’s warranty on our street motorcycles.</p>
						</div>
						<div class="srv-right">
							<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="srv-two">
						<div class="srv-left">
							<h4>Details</h4>
							<p>Details of the warranty terms and conditions can be found in the Service & Warranty Booklet.</p>
						</div>
						<div class="srv-right">
							<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 about-left">
					<div class="srv-one">
						<div class="ab-left">
							<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
						</div>
						<div class="ab-right">
						<h4>Maintenance Fuel recommendations</h4>
<p>The recommended fuel is specified in the Owner's Manual. This must meet the requirements of the EN 228 standard or equivalent, and must show the corresponding octane number (ROZ...)
</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="srv-two">
						<div class="ab-left">
							<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						</div>
						<div class="ab-right">
							<h4>Warning</h4>
							<p>Do not use fuel made from methanol (e.g. M15, M85, M100) or with a proportion of more than 10 % ethanol (e.g. E15, E25, E85, E100).</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	 </div>
  <!--latest-models-->
		  <div class="top-places" id="model">
		     <div class="container" style="background-image: url("images/5.png"); ">
			     <h3 class="tittle">Latest Models</h3>
			    <div class="tip-main">
			      <div class="col-md-4 top-grid">
					 <img src="images/790.png" alt="bike"/>
					 <h4>KTM 790</h4>
					 <p><h1>THE SCALPEL</h1>

This is our sharpest tool in the shed, developed with one task in mind: to dominate the street. A true rider knows that here, power needs precision. Feedback. Poise. That’s why KTM combined a light, state-of-the-art chassis with the new LC8c engine. The result: plenty of torque on tap, a 105 horsepower rush blasting out of corners and a huge grin on your face. And it’s available as a KTM 790 DUKE L with 70 kW and 35 kW for the A2 license. In order to slingshot this telepathic lightweight even further ahead, advanced ride by wire, integrated connectivity options and next-generation rider aids are here today. But that’s not the end of it. Imagine an up and down quickshifter that takes its name extremely seriously. Customized ride modes. Personalized traction control. And a lean, mean KISKA design that’ll make you learn to love waiting for the others as you raced ahead.</p>

					 <ul class=" top-icons">
							<li><a target="_blank" class="fb" href="https://www.facebook.com/"></a></li>
							<li><a target="_blank" class="twitt" href="https://plus.google.com/discover"></a></li>
							<li><a target="_blank" class="goog" href="https://twitter.com/login?lang=en"></a></li>
							<li><a target="_blank" class="drib" href="https://www.instagram.com/?hl=en"></a></li>
					   	</ul>
				  </div>
				   <div class="col-md-4 top-grid">
					    <img src="images/rc200.png" alt="bike"/>
					 	<h4>RC 200</h4>
						<p><h1>CITY PERFORMANCE</h1>
RC 200 is the first step into KTM´s Ready to Race philosophy. The premium full faired bike is an eye-catcher for its outstanding style. The 200cc engine is combining top performance together with efficient mileage. Premium components such as USD front fork, multifunctional fully digital display and radial brake caliper are completing the package and making RC 200 an excellent value for money full faired motorcycle.</p>
						<ul class=" top-icons">
							<li><a target="_blank" class="fb" href="https://www.facebook.com/"></a></li>
							<li><a target="_blank" class="twitt" href="https://plus.google.com/discover"></a></li>
							<li><a target="_blank" class="goog" href="https://twitter.com/login?lang=en"></a></li>
							<li><a target="_blank" class="drib" href="https://www.instagram.com/?hl=en"></a></li>
					   	</ul>

				  </div>		
				    <div class="col-md-4 top-grid">
					     <img src="images/690.png" alt="bike"/>
					 	 <h4>KTM 690</h4>
						  <p><h1>Smooth criminal</h1>

Two decades ago, the original Duke was nothing short of revolutionary. KTM’s first single-cylinder street bike grew into a cult classic, adding extreme fun to a raw and radical concept. Today’s 690 DUKE stays faithful to its ancestor’s ways, but adds future-proof refinements: impressive smoothness, sophisticated electronics, improved ergonomics and tons of grunt. This firmly cements the world’s strongest single-cylinder production motorcycle at the cutting edge of engineering. Long live the Duke!</p>

						<ul class=" top-icons">
							<li><a target="_blank" class="fb" href="https://www.facebook.com/"></a></li>
							<li><a target="_blank" class="twitt" href="https://plus.google.com/discover"></a></li>
							<li><a target="_blank" class="goog" href="https://twitter.com/login?lang=en"></a></li>
							<li><a target="_blank" class="drib" href="https://www.instagram.com/?hl=en"></a></li>
					   	</ul>
				  </div>		
					<div class="clearfix"> </div>				
				</div>
			</div>
	     </div>

  <!--//about-->

       <!--news-starts-->
       <div class="news" id="news">
           <div class="container">
               <h3 class="tittle">Our News</h3>
               <div class="news-bottom">
                   <div class="news-one">

                               <div class="col-md-4 work-grid-middle">
                                   <a class="example-image-link " href="images/news2.jpg" data-lightbox="example-set" data-title="" >
                                       <img class="example-image" src="images/news2.jpg" alt="bike"/></a></div>
                       <div class="col-md-6 news-right">
                           <a href="#"><h4>EICMA 2017: NEW POWER GENERATION FOR KTMEICMA 2017: NEW POWER GENERATION FOR KTMWWWWWEICMA 2017: NEW POWER GENERATION FOR KTM</h4></a>
                           <h5>07.11.2017</h5>
                           <p class="one">KTM pulled the covers off its all-new, production ready KTM 790 DUKE at EICMA, Milan, today (November 7, 2017) along with a KTM 790…</p>
                       </div>
                       <div class="clearfix"> </div>
                   </div>
                   <div class="news-one">
                       <div class="col-md-6 news-right">
                           <a href="#"><h4>MATTHIAS WALKNER AND KTM WIN 2018 DAKAR RALLYMATTHIAS WALKNER AND KTM WIN 2018 DAKAR RALLYWWWWWMATTHIAS WALKNER AND KTM WIN 2018 DAKAR RALLY</h4></a>
                           <h5>12.09.2015</h5>
                           <p class="one">Red Bull KTM Factory Racing’s Matthias Walkner entered the final timed special stage of the rally with a healthy 22-minute lead over his…</p>
                       </div>
                       <div class="col-md-4 work-grid-middle">
                               <a class="example-image-link" href="images/news.jpg" data-lightbox="example-set" data-title="">
                                   <img class="example-image" src="images/news.jpg" alt="bike" height="400px" /></a></div>
                       <div class="clearfix"> </div>
                   </div>
               </div>
           </div>
       </div>
       </div>
       <!--news-end-->
		
<!--start-gallery-->
<div class="work" id="gallery">
		<div class="container">
				<h3 class="tittle">Gallery</h3>
			<div class="work-grids">
				<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>KTM 390 Duke</h5>
						<p>The 390 Duke is significantly more expensive than the outgoing model, but the pricing can be justified, given the many upgrades it has had, both cosmetic and mechanical. It still remains a value-for-money product, but in a segment above the outgoing model.</p>
                        <a href="login.php">login to book</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="images/390d.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/390d.png" alt="bike" height=400px;" /></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>KTM 200 Duke</h5>
						<p>The price has remained exactly the same, making it more value than before; it remains the most value when you consider performance for your buck, but if you’re in the market for something that can do relaxed motoring, look elsewhere.</p>
						<a href="login.php">login to book</a>
					</div>
					<div class="clearfix"> </div>
				</div>
								<div class="work-grids-top">
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="images/200.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/200.png" alt="bike" height="400px" /></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>KTM RC200 </h5>
						<p>The 2017 model year of the KTM RC200 doesn’t have mechanical updates, other than the fact that the engine is now BS4 compliant. A couple of changes have been made to its appearance – there are orange wheels, a white/orange paint scheme which has been introduced for 2017. </p>
                        <a href="login.php">login to book</a>
					</div>
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="images/rc200.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/rc200.png" alt="bike" height="350px" /></a>
					</div>
					<div class="clearfix"> </div>
								</div>
						<div class="work-grids-top">
					<div class="col-md-4 work-grid-left">
						<h5>KTM 250 Duke</h5>
						<p>The 250 Duke is for those Duke customers who find the 200 Duke too slow, or find its powerband too frenetic to access; it is also for those who want a Duke with performance but can’t stretch their budget to the new, upmarket 390 Duke. </p>
                        <a href="login.php">login to book</a>
					</div>
					<div class="col-md-4 work-grid-middle">
					<a class="example-image-link" href="images/250.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/250.png" alt="bike" height="400px" /></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>KTM RC390</h5>
						<p>The 2017 KTM RC390 sports a host of updates but it hasn’t gotten the generation change that the 390 Duke has. That’s not to take away from its improvements, though: the one change we’re sure everyone will appreciate is the addition of a more comfortable seat. </p>
                        <a href="login.php">login to book</a>
					</div>
						<div class="clearfix"> </div>
					</div>
					<div class="work-grids-top">
					<div class="col-md-4 work-grid-middle">
						<a class="example-image-link" href="images/390.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/390.png" alt="bike" height="400px" /></a>
					</div>
					<div class="col-md-4 work-grid-left">
						<h5>KTM 790 Duke</h5>
						<p>Luckily for us, there are plans to assemble it at the Bajaj-KTM facility in Chakan outside Pune, meaning the one thing that endears us to KTMs above all else will be retained – a thrilling performance-to-price ratio.</p>
                        <a href="login.php">login to book</a>
					</div>
					<div class="col-md-4 work-grid-middle">
							<a class="example-image-link" href="images/790.png" data-lightbox="example-set" data-title=""><img class="example-image" src="images/790.png" alt="bike" height="400px" /></a>
					</div>
						<div class="clearfix"> </div>
				</div>

			</div>
	</div>
</div>
		<!-- //container -->
<!--//testimonials-->
		  <div class="testimonials" id="test">	
		       <div class="container">
			   	<h3 class="tittle">Testimonials</h3>
				<div class="callbacks_container">
                    <ul class="rslides" id="slider3">
                     <li>
		                 <div class="testi-text">
								<div class="testi-img">
									<img src="images/1.jpeg" alt="person"/>
								</div>
								<h4>Sushan</h4>
								<p><span></span>KTM has quickly become a common sight at the forefront of the extremely exciting World Supersport 300 championship, and among others Luca Grünwald has been one of the guys piloting the fast KTM RC 390 R. We shadowed the rider of Freudenberg KTM WorldSSP Team around the Assen circuit for the second round of the World Championship.<span></span></p>								
						  </div>
						  </li>
						  <li>
							  <div class="testi-text">
									<div class="testi-img">
										<img src="images/sona.jpg" alt="person"/>
									</div>
									<h4>Sujata</h4>
									<p><span></span>Take a trip to the ‘source’ of nine FIM Motocross World Championships and where Tony Cairoli was able to become an MXGP legend.<span></span></p>								
							</div>
						  </li>
					</ul>
					 </div>
			   </div>
		   </div>
		   <script src="js/responsiveslides.min.js"></script>
						 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 3
						  $("#slider3").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 600,
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
  <!-- footer -->
   <div class="about-section" id="contact">
	    <div class="container" style="align-self: center">
		        <div class="about-top">
				  <div class="col-md-6 about-text">
 		<h1>Contact Us</h1>
 		<h4>KTM DUKE</h4>
      <p>Copyright &copy; 2017 &middot; All Rights Reserved &middot; KTM DUKE</p>
 		<p><i class="footer"></i> Railton Road, Guildford, Surrey GU2 9JX</p>
      <p><i class="footer"></i> +1 432 233 567</p>
 	</div>
  </div>
</div>
</div>

<style type="text/css">
		.icon{
		height: 50px;
		border: 1px solid black;
		background-color: yellow;
		float: left;
	}
	.form{
		text-align: center;
	}
	.img{
		width: 95%;
		height: 300px;
		border: 5px solid red;
	}
	body{
		background-image: url("images/5.png");
	}
		.title{
		border: 1px solid black;
		text-align: center;
		font-size: 20px;
		font-family: cursive;
		margin: 30px;
		word-spacing: 20px;
	}
	.images{
		float: left;
	}
	.image{
		height: 500px;
		width: 500px;
		text-align: center;
	}
</style>
</footer>
</body>
</html>