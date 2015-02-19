<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Wiwara Karya</title>

		<link href="<?php echo base_url();?>resources/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="<?php echo base_url();?>resources/css/style.css" rel="stylesheet" type="text/css" media="all" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
		<link rel="stylesheet" href="<?php echo base_url();?>resources/css/eventCalendar.css">

		<!-- Theme CSS file: it makes eventCalendar nicer -->
		<link rel="stylesheet" href="<?php echo base_url();?>resources/css/eventCalendar_theme_responsive.css">
		<script src="<?php echo base_url();?>resources/js/jquery-1.10.2.js"></script>
		<script src="<?php echo base_url();?>resources/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>resources/js/easing.js"></script>

		<link rel="stylesheet" href="<?php echo base_url();?>resources/css/flexslider.css" type="text/css" media="screen" />
		<link href="<?php echo base_url();?>resources/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
		<link href="<?php echo base_url();?>resources/css/form.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="<?php echo base_url();?>resources/js/megamenu.js"></script>
		<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

		<script src="<?php echo base_url();?>resources/js/menu_jquery.js"></script>
		<script src="<?php echo base_url();?>resources/js/jquery.easydropdown.js"></script>
		<script src="<?php echo base_url();?>resources/js/jquery.etalage.min.js"></script>
		<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 800,
					source_image_height: 1000,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

	</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="top_bg">
				<div class="container">
					<div class="header_top">
                                        <div id="logo">
		<img src='<?php echo base_url()?>\resources\images\wiwarazoom.png' alt="Makara" width="100" height="100">
	</div>

						<div class="social-icons">
								<i class="facebook"></i>
								<i class="twitter"></i>
								<i class="googlepluse"></i>
							</div>
						<div class="top_right">

							<ul>
								<li><a href="<?php echo site_url('navigation/registration');?>">Create Account </a></li>|

								<li class="login" >
											<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
												<div id="loginBox">
													<form id="loginForm">
															<fieldset id="body">
																<fieldset>
																	  <label for="email">Email Address</label>
																	  <input type="text" name="email" id="email">
																</fieldset>
																<fieldset>
																		<label for="password">Password</label>
																		<input type="password" name="password" id="password">
																 </fieldset>
																<input type="submit" id="login" value="Sign in">
																<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
															</fieldset>
														<span><a href="#">Forgot your password?</a></span>
												 </form>
											</div>
									  </div>
								</li>
							</ul>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="head-bann">
			<div class="container">
				<div class="head-nav">
					<span class="menu"> </span>
					<ul class="megamenu skyblue">
						<li><a class="color1" href="<?php echo site_url('navigation');?>">Home</a></li>
						<li class="grid"><a class="color2" href="<?php echo site_url('navigation/info_career');?>">Info Careers</a>
							<!--<div class="megapanel">
								<div class="row">
									<div class="col1">
										<div class="h_nav">
											<h4>shop</h4>
											<ul>
												<li><a href="women.html">men</a></li>
												<li><a href="women.html">women</a></li>
												<li><a href="women.html">kids</a></li>
												<li><a href="women.html">sports</a></li>
												<li><a href="women.html">brands</a></li>
												<li><a href="women.html">collections</a></li>
											</ul>
										</div>
									</div>
									<div class="col1">
										<div class="h_nav">
											<h4>help</h4>
											<ul>
												<li><a href="women.html">trends</a></li>
												<li><a href="women.html">sale</a></li>
												<li><a href="women.html">style videos</a></li>
												<li><a href="women.html">accessories</a></li>
												<li><a href="women.html">kids</a></li>
												<li><a href="women.html">style videos</a></li>
											</ul>
										</div>
									</div>
									<div class="col1">
										<div class="h_nav">
											<h4>my company</h4>
											<ul>
												<li><a href="women.html">trends</a></li>
												<li><a href="women.html">sale</a></li>
												<li><a href="women.html">style videos</a></li>
												<li><a href="women.html">accessories</a></li>
												<li><a href="women.html">kids</a></li>
												<li><a href="women.html">style videos</a></li>
											</ul>
										</div>
									</div>
									<div class="col1">
										<div class="h_nav">
											<h4>account</h4>
											<ul>
												<li><a href="women.html">login</a></li>
												<li><a href="women.html">create an account</a></li>
												<li><a href="women.html">create wishlist</a></li>
												<li><a href="women.html">my shopping bag</a></li>
												<li><a href="women.html">brands</a></li>
												<li><a href="women.html">create wishlist</a></li>
											</ul>
										</div>
									</div>
									<div class="col1">
										<div class="h_nav">
											<h4>my company</h4>
											<ul>
												<li><a href="women.html">trends</a></li>
												<li><a href="women.html">sale</a></li>
												<li><a href="women.html">style videos</a></li>
												<li><a href="women.html">accessories</a></li>
												<li><a href="women.html">kids</a></li>
												<li><a href="women.html">style videos</a></li>
											</ul>
										</div>
									</div>
									<div class="col1">
										<div class="h_nav">
											<h4>popular</h4>
											<ul>
												<li><a href="women.html">men</a></li>
												<li><a href="women.html">women</a></li>
												<li><a href="women.html">kids</a></li>
												<li><a href="women.html">sports</a></li>
												<li><a href="women.html">brands</a></li>
												<li><a href="women.html">collections</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col2"></div>
									<div class="col1"></div>
									<div class="col1"></div>
									<div class="col1"></div>
									<div class="col1"></div>
								</div>
								</div>-->
							</li>
							<li><a class="color4" href="<?php echo site_url('navigation/event');?>">Events</a></li>
							<li><a class="color5" href="<?php echo site_url('navigation/payment');?>">Payment</a></li>
							<li><a class="color6" href="<?php echo site_url('navigation/gallery');?>">Gallery</a></li>
							<li><a class="color7" href="<?php echo site_url('navigation/about_us');?>">About Us</a></li>
							<li class="pull-right"><a class="color8" href="<?php echo site_url('navigation/find_job');?>">Find a Job</a></li>
							<div class="clearfix"> </div>

					</ul>
				</div>
			</div>
		</div>
		<!-- script-for-nav -->
		<script>
			$( "span.menu" ).click(function() {
			  $( ".head-nav ul" ).slideToggle(300, function() {
				// Animation complete.
			  });
			});
		</script>
		<!-- script-for-nav -->
