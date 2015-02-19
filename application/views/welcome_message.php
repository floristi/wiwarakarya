<?php $this->load->view('layout/header');?>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="<?php echo base_url();?>resources/images/banner_1.jpg" alt="Banner">
					<div class="carousel-caption">
						<h1>Big Title Here</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed malesuada sapien. Nulla aliquam orci nec massa hendrerit tincidunt. Donec in sollicitudin lacus. Curabitur et faucibus nulla. Maecenas sit amet semper libero, in iaculis felis. Aliquam erat volutpat. Donec sollicitudin turpis eget tortor tincidunt euismod.</p>
						<a class="show-more" href="#">SHOW ME MORE</a>
						
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>resources/images/banner.jpg" alt="Banner">
					<div class="carousel-caption">
						<h1>Big Title Here</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed malesuada sapien. Nulla aliquam orci nec massa hendrerit tincidunt. Donec in sollicitudin lacus. Curabitur et faucibus nulla. Maecenas sit amet semper libero, in iaculis felis. Aliquam erat volutpat. Donec sollicitudin turpis eget tortor tincidunt euismod.</p>
						<a class="show-more" href="#">SHOW ME MORE</a>
						
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- header -->
	
	
		<div class="instock">
			<div class="container">
				<div class="col-md-6 chuk">
						<div class="blanc-info">
							<h3>ANNOUNCEMENT</h3>
							<h4>Lorem Ipsum Dolor Sit Amet</h4>
							<a class="show" href="#">SHOW ME MORE</a>
						</div>
				</div>
				<div class="col-md-6 blanc">
						<div class="blanc-info">
							<h3>EVENT CALENDAR</h3>
							<h4>Job Fair in Jakarta</h4>
							<a class="show" href="#">SHOW ME MORE</a>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>
		<!-- instock -->
		
		<div class="featured">
			<div class="container">
				<div class="col-md-9">
					<div class="biseller-info">
						<h3 class="new-models">Premium Careers</h3>
						<ul id="flexiselDemo3">
							<li>
								<div class="biseller-column">
								<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="" class="veiw-img">
									<a href="#"><i class="join"></i></a>
								<div class="biseller-name">
									<h4>Web Developer</h4>
									<p>PT. Lalala</p>
								</div>
														
								</div>
							</li>
							<li>
								<div class="biseller-column">
									<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="" class="veiw-img">
										<a href="#"><i class="join"></i></a>
									<div class="biseller-name">
										<h4>Java Developer</h4>
										<p>PT. Lilili</p>
									</div>				
								</div>
							</li>
							<li>
								<div class="biseller-column">
									<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="" class="veiw-img">
									<a href="#"><i class="join"></i></a>
									<div class="biseller-name">
										<h4>C# Developer</h4>
										<p>PT. Lelele</p>
									</div>	
								</div>
							</li>
						</ul>
					</div>	

					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: false,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						});
					</script>
					<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.flexisel.js"></script>
			
					<div class="best-seller">
						<div class="biseller-info">
							<h3 class="new-models">Newest Careers</h3>
							<ul id="flexiselDemo1">
								<li>
									<div class="biseller-column">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>Database Admin</h4>
											<p>PT. Lululu</p>
										</div>
									</div>
								</li>
								<li>
									<div class="biseller-column">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>IT Ops</h4>
											<p>PT. Lololo</p>
										</div>
									</div>
								</li>
								<li>
									<div class="biseller-column">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>System Analyst</h4>
											<p>PT. Lalala</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						});
					</script>
					<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo5").flexisel({
								visibleItems: 3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems: 1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems: 2
									},
									tablet: { 
										changePoint:768,
										visibleItems: 3
									}
								}
							});
							
						});
					</script>
				
					<div class="best-seller">
						<div class="biseller-info">
							<ul id="flexiselDemo5">
								<li>
									<div class="biseller-column1">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>Something</h4>
											<p>PT. Whatever</p>
										</div>
									</div>
								</li>
								<li>
									<div class="biseller-column1">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>Someone</h4>
											<p>PT. Whenever</p>
										</div>
									</div>
								</li>
								<li>
									<div class="biseller-column1">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="#"><i class="new"></i></a>
										<div class="biseller-name">
											<h4>Somewhere</h4>
											<p>PT. Whoever</p>
										</div>
								
									</div>
								</li>
							</ul>
						</div>
					</div>
			
					
					<script type="text/javascript" src="<?php echo base_url();?>resources/js/jquery.flexisel.js"></script>

					<div class="clearfix"></div>
				</div>
				
				<!-- Site Right Side -->
				<div class="col-md-3 span_1_of_right">
					<section  class="sky-form">
						<div class="product_right">
							<h3 class="m_2">Categories</h3>
							<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Places</option>
								<option value="1">DKI Jakarta</option>
								<option value="2">Jawa Barat</option>
								<option value="3">Jawa Tengah</option>
								<option value="4">Jawa Timur</option>
								<option value="5">Others</option>							
							</select>
				  
							<select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Salary</option>
								<option value="1">Less than 3.000.000,00</option>
								<option value="2">3.000.000,00 - 5.000.000,00</option>
								<option value="3">5.000.000,00 - 7.000.000,00</option>
								<option value="4">7.000.000,00 - 10.000.000,00</option>
								<option value="5">More Than 10.000.000,00</option>
								<option value="6">Negotiable</option>
							</select>
				  
							<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Career</option>
								<option value="1">Schools</option>
								<option value="2">Seminar</option>
								<option value="3">Training</option>
								<option value="4">Others</option>
							</select>
				   
							<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
								<option value="0">Facility</option>
								<option value="1">Notebook</option>
								<option value="2">Insurance</option>
								<option value="3">Sports</option>
							</select>  
						</div>		
					</section>
                   	 
					<div class="sellers">
						<h3 class="m_2">Popular</h3>
						<div class="best">
							<div class="icon">
								<img src="<?php echo base_url();?>resources/images/sh1.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="data">
								<h4><a href="#">Sample Item Title Goes Here</a></h4>
								<p>2 Mar 2015</p>
								<h5>PT. Lilili</h5>
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="best">
							<div class="icon">
								<img src="<?php echo base_url();?>resources/images/sh1.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="data">
								<h4><a href="#">Sample Item Title Goes Here</a></h4>
								<p>3 Mar 2015</p>
								<h5>PT. Lululu</h5>
							</div>
							<div class="clearfix"></div>
						</div>	
						<div class="best">
							<div class="icon">
								<img src="<?php echo base_url();?>resources/images/sh1.jpg" class="img-responsive" alt=""/>
							</div>
							<div class="data">
								<h4><a href="#">Sample Item Title Goes Here</a></h4>
								<p>4 Mar 2015</p>
								<h5>PT. Lalala</h5>
							</div>
							<div class="clearfix"></div>
						</div>	
					</div>
					 
				</div>
				<div class="clearfix"></div>	
			</div>		
		</div>
		<?php $this->load->view('layout/footer');?>
