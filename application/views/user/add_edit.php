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
                        <h1>Register</h1>
                        <div id="user-container">
                            <?php 
									$attributes = array('class' => 'form-horizontal');
									echo form_open_multipart('c_user/create', $attributes); 
								?>
							
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Username:
                                    </label>
									<div class="col-sm-10">
										<input placeholder="username" class="form-control" type="text" name="username" required autofocus>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Password:                                        
                                    </label>
									<div class="col-sm-10">
										<input placeholder="password" class="form-control" type="password" name="password" required autofocus>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Retype Password:
                                       
                                    </label>
									<div class="col-sm-10">
										<input placeholder="retype password" class="form-control" type="password" required autofocus>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Full Name:
                                        
                                    </label>
									<div class="col-sm-10">
										<input placeholder="full name" type="text" class="form-control" name="fullname" required autofocus>
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
                                        Place of Birth:
                                    </label>
									<div class="col-sm-10">
										<input placeholder="place of birth" class="form-control" type="text" name="pob" required autofocus>
									</div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Date of Birth:
                                    </label>
									<div class="col-sm-10">
										<select class="tanggal form-control inline-group " name="dob-date">
											<?php
												for($i=1; $i<=31; $i++)
													echo("<option value='".$i."'>".$i."</option>");
											?>
										</select>
										<select class="bulan form-control inline-group " name="dob-month">
											<option value="1">Januari</option>
											<option value="2">Februari</option>
											<option value="3">Maret</option>
											<option value="4">April</option>
											<option value="5">Mai</option>
											<option value="6">Juni</option>
											<option value="7">Juli</option>
											<option value="8">Agustus</option>
											<option value="9">September</option>
											<option value="10">Oktober</option>
											<option value="11">November</option>
											<option value="12">Desember</option>
										</select>
										<select class="tahun form-control inline-group" name="dob-year">
											<?php
											for($i=1970; $i<=2015; $i++)
												echo("<option value='".$i."'>".$i."</option>");
											?>
										</select>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        CV:
                                    </label>
									<div class="col-sm-10">
										<input type="file" name="cv[]" class="form-control" enctype="multipart/form-data" autofocus>
									</div>
                                </div>
                                <div class="form-group ">
                                    <label class="col-sm-offset-2  col-sm-10 control-label">
                                        <input type="checkbox" value="option1" style="padding-left: 30px;">I Agree to Wiwara Karya
                                        <a class="terms" href="#">terms of service</a>
                                    </label>
                                </div>
								<div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" name="submit" value="create an account" accept=".pdf">
									</div>
									<div style="display: inline-block">
										<a class="btns" href="<?php echo site_url(); ?>">Cancel</a>
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