	<div class="container">
        <div class="main">
            <!-- start registration -->
            <div class="registration">
                <div>
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
                        <h1>Apply Job</h1>
                        <!--
                        <div style="font-size:1.5em">Are you a job <b><em>poster</em></b> or a job <b><em>hunter</em></b>?</div>
                        <select id="user-role" class="form-control">
                            <option value="0">Job Hunter</option>
                            <option value="1">Job Poster</option>
                        </select>
                        <script type="text/javascript">
                            $("#user-role").change(function() {
                                var role = $("#user-role").val();
                                if (role == 0) {
                                    $("#company-container").fadeOut(500);
                                    $("#applicant-container").fadeIn(500);
                                } else if (role == 1) {
                                    $("#company-container").fadeIn(500);
                                    $("#applicant-container").fadeOut(500);
                                }
                            });
                        </script>
                        -->

                             
                        <div id="company-container">
                            <?php 
									
									$attributes = array('class' => 'form-horizontal');
									echo form_open("c_jobs/apply/".$job->id, $attributes);
							?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Job Name:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->name; ?></p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
										Position:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->position; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Position Category:
                                    </label>
									<div class="col-sm-10">
									
										<p class="control-label"><?php echo $job->position_category; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Due Date:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label">
                                        <?php $due_date = (new DateTime($job->due_date))->getTimestamp(); 
											echo $job->due_date;
										?>
										</p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Major:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->major; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Last Education:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->last_education; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                   <label class="col-sm-2 control-label">
                                        Salary:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->salary; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        TNC:
                                    </label>
									<div class="col-sm-10">
										<p class="control-label"><?php echo $job->tnc; ?></p>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Company:
                                    </label>
									<div class="col-sm-10">
                                        <p class="control-label">
                                            <?php foreach($companies as $company) {
                                                if ($company->id == $job->created_by) {
                                                    echo $company->name;
                                                }
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" value="Apply Job" name="submit">
                                    </div>
									<div style="display: inline-block">
										<a href="<?php echo site_url('c_jobs'); ?>"><input class="btns" type="button" value="Batal" name="batal" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan company baru?');"></a>
									</div>
								</div>
                                
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end registration -->
        </div>
    </div>