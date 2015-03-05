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
						<h1>Kerja Hebat</h1>
						<p> Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do. So throw off the bowlines. Sail away from the safe harbor. Catch the trade winds in your sails. Explore. Dream. Discover.(H. Jackson Brown Jr.) </p>
						<a class="show-more" href="#">SHOW ME MORE</a>
						
					</div>
				</div>
				<div class="item">
					<img src="<?php echo base_url();?>resources/images/banner.jpg" alt="Banner">
					<div class="carousel-caption">
						<h1>Kerja Hebat</h1>
						<p> Keep your dreams alive. Understand to achieve anything requires faith and belief in yourself, vision, hard work, determination, and dedication. Remember all things are possible for those who believe. (Gail Devers) </p>
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
							<h3><?php echo $events[0]->name; ?></h3>
							<h4><?php echo $events[0]->description; ?></h4>
							<a class="show" href="<?php echo site_url('c_event/'); ?>">SHOW ME MORE</a>
						</div>
				</div>
				<div class="col-md-6 blanc">
						<div class="blanc-info">
							<h3><?php echo $events[1]->name; ?></h3>
							<h4><?php echo $events[1]->description; ?></h4>
							<a class="show" href="<?php echo site_url('c_event/'); ?>">SHOW ME MORE</a>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>
		<!-- instock -->
		
		<div class="featured">
			<div class="container">
				<div class="col-md-9">
					<!--
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
					-->

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
								<?php if(count($jobs) >= 3){?>
									<?php for ($i = 0; $i < 3 ; $i++) : ?>
									<li>
										<div class="biseller-column">
											<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
											<a href="<?php echo site_url('c_jobs/apply/'.$jobs[$i]->id);?>"><i class="new"></i></a>
											<div class="biseller-name">
												<h4><?php echo $jobs[$i]->company_name;?></h4>
												<p><?php echo $jobs[$i]->position;?></p>
											</div>
										</div>
									</li>
								<?php 
									endfor;
								} 
								else{
									for ($i = 0; $i < count($jobs) ; $i++) :
								?>
									<li>
										<div class="biseller-column">
											<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
											<a href="#"><i class="new"></i></a>
											<div class="biseller-name">
												<h4><?php echo $jobs[$i]->company_name;?></h4>
												<p><?php echo $jobs[$i]->position;?></p>
											</div>
										</div>
									</li>
								<?php 
									endfor;
								}?>
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
							$("#flexiselDemo2").flexisel({
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
							<ul id="flexiselDemo2">
								<?php if(count($jobs) > 3){
									for($i = 3; $i < count($jobs); $i++):
									?>
								<li>
									<div class="biseller-column">
										<img src="<?php echo base_url();?>resources/images/1_1.jpg" class="img-responsive" alt="">
										<a href="<?php if ($this->session->userdata('username') && $this->session->userdata['role'] == 'APPLICANT') {echo site_url('c_jobs/apply/'.$jobs[$i]->id);} else echo "#";?>"><i class="new"></i></a>
										<div class="biseller-name">
											<h4><?php echo $jobs[$i]->company_name;?></h4>
											<p><?php echo $jobs[$i]->position;?></p>
										</div>
									</div>
								</li>
								<?php 
									endfor;
									}
								?>
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
