    <div class="container">
        <div class="main">
            <!-- start registration -->
            <div class="registration">
                <div >
                    <!-- [if IE]
                        < link rel='stylesheet' type='text/css' href='ie.css'/>
                        [endif] -->

                    <!-- [if lt IE 7]>
                        < link rel='stylesheet' type='text/css' href='ie6.css'/>
                    <! [endif] -->
                    <script>
                        (function () {

                            // Create input element for testing
                            var inputs = document.createElement('input');

                            // Create the supports object
                            var supports = {};

                            supports.autofocus = 'autofocus' in inputs;
                            supports.required = 'required' in inputs;
                            supports.placeholder = 'placeholder' in inputs;

                            // Fallback for autofocus attribute
                            if (!supports.autofocus) {

                            }

                            // Fallback for required attribute
                            if (!supports.required) {

                            }

                            // Fallback for placeholder attribute
                            if (!supports.placeholder) {

                            }

                            // Change text inside send button on submit
                            var send = document.getElementById('register-submit');
                            if (send) {
                                send.onclick = function () {
                                    this.innerHTML = '...Sending';
                                }
                            }

                        })();
                    </script>
                    <div class="registration_form">
                        <h1>My Profile</h1>
                        <div id="user-container">
                            
								<div class="col-sm-12">
									<div class="buttonedit pull-right">
										<a class="btn btn-primary" href="<?php echo site_url('c_user/update/'.$user->id);?>" role="button">Update My Profile</a>
									</div>
								</div>
								<div class="col-sm-10">
									<div class="col-sm-2">
										Nama
									</div>
									<div class="col-sm-10">
										<?php echo $user->name;?>
									</div>
									<div class="col-sm-2">
										Username
									</div>
									<div class="col-sm-10">
										<?php echo $user->username;?>
									</div>
									<div class="col-sm-2">
										Birthday
									</div>
									<div class="col-sm-10">
										<?php echo $user->pob.', '.$user->dob;?>
									</div>
									<div class="col-sm-2">
										Last Education
									</div>
									<div class="col-sm-10">
										<?php echo $user->last_education;?>
									</div>
									<div class="col-sm-2">
										CV
									</div>
									<div class="col-sm-10">
										<?php 
											if($user->cv_path == null)
												echo "No CV";
											else{
												?>
											<a href="<?php echo $user->cv_path;?>" target="_blank">View CV</a>
										<?php
											}
										?>
									</div>
								</div>
								<div class="col-sm-2">
									Photos Here
								</div>
								<div class="col-sm-12">
									<div class="lowongan">
										<h4>Lowongan Terdaftar</h4>
									</div>
									
									<div class="panel-group" id="accordionLow" role="tablist" aria-multiselectable="true">
									<?php $i=1; foreach($jobs as $job) : ?>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingLow<?php echo $i;?>">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordionLow" href="#collapseLow<?php echo $i;?>" aria-expanded="true" aria-controls="collapseLow<?php echo $i;?>">
											  <?php echo $job->name;?>
											</a>
										  </h4>
										</div>
										<div id="collapseLow<?php echo $i;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingLow<?php echo $i;?>">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-6">
														<div class="col-sm-4">
															<label class="control-label">Name</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->name; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Position</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->position; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Position Category</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->position_category; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Due Date</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->due_date; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Major</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->major; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Last Education</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->last_education; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Salary</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->salary; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">TNC</label>
														</div>
														<div class="col-sm-8">
															<?php echo $job->tnc; ?>
														</div>
														
														
													</div>
													<div class="col-sm-6">
														<div class="col-sm-12">
															<label class="control-label">Provided By</label>
														</div>
														<div class="col-sm-12">
															<h4><?php echo $job->company_name; ?></h4>
														</div>

														<br/>

														<div class="col-sm-12">
															<label class="control-label">Status</label>
														</div>
														<div class="col-sm-12">
															<h4><?php echo $job->status; ?></h4>
														</div>

														<br/>

														<div class="col-sm-12">
															<label class="control-label">Applied at</label>
														</div>
														<div class="col-sm-12">
															<h4><?php echo $job->applied_at; ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <?php $i++; endforeach;?>
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="lowongan">
										<h4>Events Terdaftar</h4>
									</div>
									<div class="panel-group" id="accordions" role="tablist" aria-multiselectable="true">
									  <?php $j=1; foreach($registered_events as $event) : ?>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingEvent<?php echo $j;?>">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordions" href="#collapseEvent<?php echo $j;?>" aria-expanded="true" aria-controls="collapseEvent<?php echo $j;?>">
											  <?php echo $event->name;?>
											</a>
										  </h4>
										</div>
										<div id="collapseEvent<?php echo $j;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEvent<?php echo $j;?>">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-6">
														<div class="col-sm-4">
															<label class="control-label">Name</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->name; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Description</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->description; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Location</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->location; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Date</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->time; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Main Speaker</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->speaker; ?>
														</div>
														<div class="col-sm-4">
															<label class="control-label">Price</label>
														</div>
														<div class="col-sm-8">
															<?php echo $event->price; ?>
														</div>
														
														
													</div>
													<div class="col-sm-6">
														<div class="col-sm-12">
															<label class="control-label">Organized By</label>
														</div>
														<div class="col-sm-12">
															<h4><?php echo $event->company_name; ?></h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <?php $j++; endforeach;?>
									</div>
								</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- end registration -->
        </div>
    </div>