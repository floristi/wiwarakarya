<div class="featured">
	<div class="container" style="padding-top: 3em;">
		<div class="col-md-9">
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
		</div>
		<!-- Site Right Side -->
		<div class="col-md-3 span_1_of_right">
			<div id="eventCalendarInline"></div>
			<script>
				$(document).ready(function() {
					var eventsInline = [{ "date": "1337594400000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1337677200000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },{ "date": "1338897600000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1338885237000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },{ "date": "1341750647000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1342614647000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },{ "date": "1344515447000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1345033847000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },{ "date": "1347712247000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1348230647000", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" },{ "date": "1349094647000", "type": "meeting", "title": "Project A meeting", "description": "Lorem Ipsum dolor set", "url": "http://www.event1.com/" },{ "date": "1351600247", "type": "demo", "title": "Project B demo", "description": "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.", "url": "http://www.event2.com/" }];

					$("#eventCalendarInline").eventCalendar({
						jsonData: eventsInline
					});
				});
			</script>
		</div>
		<div class="clearfix"></div>	
	</div>		
</div>

<div class="featured">
	<div class="container" style="padding-top: 3em;">
		<h3>Events Detail</h3>
		<?php if ($this->session->userdata('username') && $this->session->userdata['role'] == 'ADMIN') {?>
		<div class="col-sm-12">
			<a class="btn btn-primary pull-right buttonpadding" href="<?php echo site_url('c_event/create_event'); ?>">Create Event</a>
		</div>
		<?php }?>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<?php $i = 1; foreach($events as $event) : ?>
			  <div class="panel panel-default">
				<div class="panel-heading" role="tab" id="heading<?php echo $i;?>">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
					  <?php echo $event->name;?>
					</a>
				  </h4>
				</div>
				<div id="collapse<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i;?>">
					<div class="panel-body">
						<div class="container">
							<div class="col-sm-9">
								<div class="col-sm-2">
									<label>Name</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->name; ?>
								</div>
								<div class="col-sm-2">
									<label>Description</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->description; ?>
								</div>
								<div class="col-sm-2">
									<label>Location</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->location; ?>
								</div>
								<div class="col-sm-2">
									<label>Time</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->time; ?>
								</div>
								<div class="col-sm-2">
									<label>Quota</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->quota_remaining . ' / ' . $event->quota; ?>
								</div>
								<div class="col-sm-2">
									<label>Speaker</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->speaker; ?>
								</div>
								<div class="col-sm-2">
									<label>Price</label>
								</div>
								<div class="col-sm-10">
									<?php echo $event->price; ?>
								</div>
							</div>
							<div class="col-sm-3">
								<label>Organized by:</label><h4><?php echo $event->company_name; ?></h4>
								<br />
								<?php if ($this->session->userdata('username') && $this->session->userdata['role'] == 'ADMIN') {?>
									<a  class="btn btn-info" href="<?php echo site_url('c_event/edit_event/'.$event->id); ?>">Edit</a>
									<a class="btn btn-warning" href="<?php echo site_url('c_event/delete_event/'.$event->id); ?>">Delete</a>
								<?php } else if ($this->session->userdata('username') && $this->session->userdata['role'] == 'APPLICANT') {?>
									<?php
										$attributes = array('class' => 'form-horizontal');	
										echo form_open("c_event/join_event/", $attributes); 
									?>
										<input type="hidden" name="event_id" value="<?php echo $event->id; ?>" />
										<div class="form-actions" style="display:inline-block">
											<div style="display:inline-block">
												<input class="btn btn-info" type="submit" value="Join Event" name="submit">
											</div>
										</div>
									<?php form_close() ?>
								<?php } ?>
								<div>
								</div>
							</div>
						</div>
					</div>
				</div>
			  </div>
			<?php $i++; endforeach;?>
		</div>
	</div>
</div>

<script src="<?php echo base_url();?>resources/js/moment.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>resources/js/jquery.eventCalendar.min.js" type="text/javascript"></script>
