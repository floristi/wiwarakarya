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
                        <h1>Create New Job</h1>
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
									echo  form_open("c_jobs/create", $attributes); 
							?>
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Job Name:
                                    </label>
									<div class="col-sm-10">
										<input name="name" class="form-control" placeholder="name" type="text" required autofocus maxlength="50" required>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
										Position:
                                    </label>
									<div class="col-sm-10">
										<input name="position" class="form-control" placeholder="position" type="text" required autofocus maxlength="50" required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Position Category:
                                    </label>
									<div class="col-sm-10">
										<input name="position_category" placeholder="position category" class="form-control" type="text" required autofocus required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Due Date:
                                    </label>
									<div class="col-sm-10">
										<select class="tanggal form-control inline-group " name="due-day">
											<?php
												for($i=1; $i<=31; $i++)
													echo("<option value='".$i."'>".$i."</option>");
											?>
										</select>
										<select class="bulan form-control inline-group " name="due-month">
											<option value="1">Januari</option>
											<option value="2">Februari</option>
											<option value="3">Maret</option>
											<option value="4">April</option>
											<option value="5">Mei</option>
											<option value="6">Juni</option>
											<option value="7">Juli</option>
											<option value="8">Agustus</option>
											<option value="9">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
										<select class="tahun form-control inline-group" name="due-year">
											<?php
											for($i=1970; $i<=2015; $i++)
												echo("<option value='".$i."'>".$i."</option>");
											?>
										</select>
										<span></span>
										<select class="tanggal form-control inline-group" name="due-hour">
											<?php
											for($i=0; $i<=23; $i++)
												echo("<option value='".$i."'>".sprintf('%02d', $i)."</option>");
											?>
										</select>
										<span>:</span>
										<select class="tanggal form-control inline-group" name="due-minute">
											<?php
											for($i=0; $i<=59; $i++)
												echo("<option value='".$i."'>".sprintf('%02d', $i)."</option>");
											?>
										</select>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Major:
                                    </label>
									<div class="col-sm-10">
										<input name="major" class="form-control" placeholder="major" type="text" required autofocus required>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Last Education:
                                    </label>
									<div class="col-sm-10">
										<select name="last_education" class="form-control form-select">
											<option value="S3">S3</option>
											<option value="S2">S2</option>
											<option value="S1">S1</option>
											<option value="D4">D4</option>
											<option value="D3">D3</option>
											<option value="SMA">SMA/sederajat</option>
											<option value="SMP">SMP/sederajat</option>
											<option value="SD">SD/sederajat</option>
										</select>
									</div>
								</div>
                                <div class="form-group">
                                   <label class="col-sm-2 control-label">
                                        Salary:
                                    </label>
									<div class="col-sm-10">
										<input name="salary" class="col-sm-10" placeholder="Rp" type="text" required autofocus required >
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        TNC:
                                    </label>
									<div class="col-sm-10">
										<textarea name="tnc" placeholder="tnc" type="text" required autofocus required ></textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Company:
                                    </label>
									<div class="col-sm-10">
										<select type="text" autofocus name="created_by" class="form-control" autofocus>
                                            <?php foreach($companies as $company): ?>
                                            <option value="<?php echo $company->id; ?>"><?php echo $company->name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
									</div>
                                </div>

                                <div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" value="Create Jobs" name="submit">
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