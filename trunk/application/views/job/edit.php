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
                        <h1>Edit Job</h1>
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
									echo form_open("c_jobs/edit/" . $job->id, $attributes);
							?>
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Job Name:
                                    </label>
									<div class="col-sm-10">
										<input name="name" class="form-control" placeholder="name" type="text" value="<?php echo $job->name; ?>" required autofocus maxlength="50" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
										Position:
                                    </label>
									<div class="col-sm-10">
										<input name="position" class="form-control" placeholder="name" type="text" value="<?php echo $job->position; ?>" required autofocus maxlength="50" required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Position Category:
                                    </label>
									<div class="col-sm-10">
										<input name="position_category" placeholder="city" class="form-control" type="text" value="<?php echo $job->position_category; ?> " required autofocus required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Due Date:
                                    </label>
									<div class="col-sm-10">
                                        <?php $due_date = (new DateTime($job->due_date))->getTimestamp(); ?>
										<select class="tanggal form-control inline-group " name="due-day" value="<?php echo date('j', $due_date); ?>">
											<?php for($i=1; $i<=31; $i++): ?>
                                            <option value="<?php echo $i; ?>" <?php if(date('j', $due_date) == $i) echo 'selected="selected"'; ?>><?php echo $i ?></option>;
											<?php endfor; ?>
										</select>
										<select class="bulan form-control inline-group " name="due-month">
											<option value="1" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Januari</option>
											<option value="2" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Februari</option>
											<option value="3" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Maret</option>
											<option value="4" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>April</option>
											<option value="5" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Mei</option>
											<option value="6" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Juni</option>
											<option value="7" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Juli</option>
											<option value="8" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Agustus</option>
											<option value="9" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>September</option>
											<option value="10" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Oktober</option>
											<option value="11" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>November</option>
											<option value="12" <?php if(date('n', $due_date)) echo 'selected="selected"'; ?>>Desember</option>
										</select>
										<select class="tahun form-control inline-group" name="due-year">
											<?php for($i=1970; $i<=2015; $i++): ?>
												<option value="<?php echo $i; ?>" <?php if(date('Y', $due_date) == $i) echo 'selected="selected"'; ?>><?php echo $i; ?></option>
											<?php endfor; ?>
										</select>
										<span></span>
										<select class="tanggal form-control inline-group" name="due-hour">
											<?php for($i=0; $i<=23; $i++): ?>
											<option value="<?php echo $i; ?>" <?php if(date('G', $due_date) == $i) echo 'selected="selected"'; ?>><?php echo sprintf('%02d', $i); ?></option>
											<?php endfor; ?>
										</select>
										<span>:</span>
										<select class="tanggal form-control inline-group" name="due-minute">
                                            <?php for($i=0; $i<=59; $i++): ?>
                                            <option value="<?php echo $i; ?>" <?php if(date('i', $due_date) == $i) echo 'selected="selected"'; ?>><?php echo sprintf('%02d', $i); ?></option>
                                            <?php endfor; ?>
										</select>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Major:
                                    </label>
									<div class="col-sm-10">
										<input name="major" class="form-control" placeholder="contact name" type="text" value="<?php echo $job->major; ?>" required autofocus required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Last Education:
                                    </label>
									<div class="col-sm-10">
										<select name="last_education" class="form-control form-select">
											<option value="S3" <?php if($job->last_education == 'S3') echo 'selected="selected"'; ?>>S3</option>
											<option value="S2" <?php if($job->last_education == 'S2') echo 'selected="selected"'; ?>>S2</option>
											<option value="S1" <?php if($job->last_education == 'S1') echo 'selected="selected"'; ?>>S1</option>
											<option value="D4" <?php if($job->last_education == 'D4') echo 'selected="selected"'; ?>>D4</option>
											<option value="D3" <?php if($job->last_education == 'D3') echo 'selected="selected"'; ?>>D3</option>
											<option value="SMA" <?php if($job->last_education == 'SMA') echo 'selected="selected"'; ?>>SMA/sederajat</option>
											<option value="SMP" <?php if($job->last_education == 'SMP') echo 'selected="selected"'; ?>>SMP/sederajat</option>
											<option value="SD" <?php if($job->last_education == 'SD') echo 'selected="selected"'; ?>>SD/sederajat</option>
										</select>
									</div>
								</div>
                                <div class="form-group">
                                   <label class="col-sm-2 control-label">
                                        Salary:
                                    </label>
									<div class="col-sm-10">
										<input name="salary" class="col-sm-10" placeholder="Rp" type="text" value="<?php echo $job->salary; ?>" required autofocus required >
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        TNC:
                                    </label>
									<div class="col-sm-10">
										<textarea name="tnc" placeholder="tnc" type="text" required autofocus required><?php echo $job->tnc; ?></textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Company:
                                    </label>
									<div class="col-sm-10">
										<select type="text" autofocus name="created_by" class="form-control" autofocus>
                                            <?php foreach($companies as $company): ?>
                                            <option value="<?php echo $company->id; ?>" <?php if($job->created_by == $company->id) echo 'selected=selected'; ?>><?php echo $company->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
									</div>
                                </div>

                                <div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" value="Edit Job" name="submit">
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