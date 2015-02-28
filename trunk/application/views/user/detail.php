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
											if($user->cv_path == "0")
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
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOneLow">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordionLow" href="#collapseOneLow" aria-expanded="true" aria-controls="collapseOneLow">
											  Lowongan 1
											</a>
										  </h4>
										</div>
										<div id="collapseOneLow" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneLow">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwoLow">
										  <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionLow" href="#collapseTwoLow" aria-expanded="false" aria-controls="collapseTwoLow">
											  Lowongan 2
											</a>
										  </h4>
										</div>
										<div id="collapseTwoLow" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoLow">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThreeLow">
										  <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordionLow" href="#collapseThreeLow" aria-expanded="false" aria-controls="collapseThreeLow">
											  Lowongan 3
											</a>
										  </h4>
										</div>
										<div id="collapseThreeLow" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeLow">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									</div>
								</div>
								
								<div class="col-sm-12">
									<div class="lowongan">
										<h4>Events Terdaftar</h4>
									</div>
									<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOneEvent">
										  <h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOneEvent" aria-expanded="true" aria-controls="collapseOneEvent">
											  Lowongan 1
											</a>
										  </h4>
										</div>
										<div id="collapseOneEvent" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOneEvent">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwoEvent">
										  <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwoEvent" aria-expanded="false" aria-controls="collapseTwoEvent">
											  Lowongan 2
											</a>
										  </h4>
										</div>
										<div id="collapseTwoEvent" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwoEvent">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									  <div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThreeEvent">
										  <h4 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThreeEvent" aria-expanded="false" aria-controls="collapseThreeEvent">
											  Lowongan 3
											</a>
										  </h4>
										</div>
										<div id="collapseThreeEvent" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThreeEvent">
											<div class="panel-body">
												<div class="container">
													<div class="col-sm-9">
														Tes
													</div>
													<div class="col-sm-3">
														Tes
													</div>
												</div>
											</div>
										</div>
									  </div>
									</div>
								</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- end registration -->
        </div>
    </div>