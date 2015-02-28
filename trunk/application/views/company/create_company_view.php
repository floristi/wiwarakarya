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
                        <h1>Register New Company</h1>
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
									echo  form_open("c_company/create_company", $attributes); 
							?>
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Company Name:
                                    </label>
									<div class="col-sm-10">
										<input name="name" class="form-control" placeholder="name" type="text" required autofocus maxlength="50" required value="<?php if(isset($name)) echo $name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
										Address:
                                    </label>
									<div class="col-sm-10">
										<textarea name="address" placeholder="address" class="form-control" required value="<?php if(isset($address)) echo $address; ?>"></textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        City:
                                    </label>
									<div class="col-sm-10">
										<input name="city" placeholder="city" class="form-control" type="text" required autofocus required value="<?php if(isset($city)) echo $city; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Phone Number:
                                    </label>
									<div class="col-sm-10">
										<input name="phone" class="form-control" placeholder="phone number" type="text" required autofocus required value="<?php if(isset($phone)) echo $phone; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Contact Name:
                                    </label>
									<div class="col-sm-10">
										<input name="contact_name" class="form-control" placeholder="contact name" type="text" required autofocus required value="<?php if(isset($contact_name)) echo $contact_name; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Description:
                                    </label>
									<div class="col-sm-10">
										<textarea name="description" class="form-control" placeholder="description" type="text" required autofocus required value="<?php if(isset($description)) echo $description; ?>"></textarea>
									</div>
								</div>
                                <div class="form-group">
                                   <label class="col-sm-2 control-label">
                                        Website:
                                    </label>
									<div class="col-sm-10">
										<input name="website" class="col-sm-10" placeholder="web" type="text" required autofocus required value="<?php if(isset($web)) echo $web; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Email:
                                    </label>
									<div class="col-sm-10">
										<input name="email" placeholder="email" type="email" required autofocus required value="<?php if(isset($email)) echo $email; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Photo:
                                    </label>
									<div class="col-sm-10">
										<input type="file" autofocus name="photo" class="form-control" enctype="multipart/form-data" autofocus>
									</div>
                                </div>

                                <div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" value="Create Company" name="submit">
                                    </div>
									<div style="display: inline-block">
										<a href="<?php echo site_url('c_company'); ?>"><input class="btns" type="button" value="Batal" name="batal" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan company baru?');"></a>
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