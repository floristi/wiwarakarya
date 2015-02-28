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
									echo form_open_multipart('c_user/update/'.$user->id, $attributes);
								?>
							
                               	<input type="hidden" name="username" value="<?php echo $user->username; ?>"></input>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Password:                                        
                                    </label>
									<div class="col-sm-10">
										<input placeholder="password" class="form-control" type="password" name="password" required autofocus>
											
										</input>
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
										<input placeholder="full name" type="text" class="form-control" name="fullname" value="<?php echo $user->name;?>" required autofocus>
											
										</input>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Last Education:
                                    </label>
									<div class="col-sm-10">
										<select name="last_education" class="form-control form-select">
											<option value="S3" <?php if($user->last_education == "S3") echo "selected"?>>S3</option>
											<option value="S2" <?php if($user->last_education == "S2") echo "selected"?>>S2</option>
											<option value="S1" <?php if($user->last_education == "S1") echo "selected"?>>S1</option>
											<option value="D4" <?php if($user->last_education == "D4") echo "selected"?>>D4</option>
											<option value="D3" <?php if($user->last_education == "D3") echo "selected"?>>D3</option>
											<option value="SMA" <?php if($user->last_education == "SMA") echo "selected"?>>SMA/sederajat</option>
											<option value="SMP" <?php if($user->last_education == "SMP") echo "selected"?>>SMP/sederajat</option>
											<option value="SD" <?php if($user->last_education == "SD") echo "selected"?>>SD/sederajat</option>
										</select>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Place of Birth:
                                    </label>
									<div class="col-sm-10">
										<input placeholder="place of birth" class="form-control" type="text" name="pob" value="<?php echo $user->pob;?>" required autofocus>
									</div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Date of Birth:
                                    </label>
									<div class="col-sm-10">
										<select class="tanggal form-control inline-group selecttgl" name="dob-date">
											<?php
												for($i=1; $i<=31; $i++)
													
													echo("<option id='val".$i."' value='".$i."'>".$i."</option>");
											?>
										</select>
										<script>
											var tgl = <?php echo substr($user->dob, -2)?>;
											$(".selecttgl").val(tgl);
										
										</script>
										<select class="bulan form-control inline-group selectbln" name="dob-month">
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
										
										<script>
											var bln = <?php echo substr($user->dob, -5, 2)?>;
											$(".selectbln").val(bln);
										
										</script>
										<select class="tahun form-control inline-group selectthn" name="dob-year">
											<?php
											for($i=1970; $i<=2015; $i++)
												echo("<option value='".$i."'>".$i."</option>");
											?>
										</select>
										<script>
											var thn = <?php echo substr($user->dob, 0, 4)?>;
											$(".selectthn").val(thn);
										
										</script>
									</div>
                                </div>
								<div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Current CV:
                                    </label>
									<div class="col-sm-10">
										<?php 
											if($user->cv_path == "0")
												echo "No CV";
											else
												echo $user->cv_path;
										?>
									</div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Update CV:
                                    </label>
									<div class="col-sm-10">
										<input type="file" name="cv" class="form-control" enctype="multipart/form-data" autofocus>
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
										<input type="submit" name="submit" value="update" accept=".pdf">
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