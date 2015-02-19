<?php $this->load->view('layout/header');?>		
			<div class="container">
				<div class="main">
					<!-- start registration -->
					<div class="registration">
						<div class="registration_left">
						<h2>new user? <span> create a runnerssport account </span></h2>
						<a href="#"><div class="reg_fb"><img src="<?php echo base_url();?>resources/images/facebook.png" alt=""><i>register using Facebook</i><div class="clearfix"></div></div></a>
						<!-- [if IE] 
							< link rel='stylesheet' type='text/css' href='ie.css'/>  
							[endif] -->  
				  
						<!-- [if lt IE 7]>  
							< link rel='stylesheet' type='text/css' href='ie6.css'/>  
						<! [endif] -->  
						<script>
							(function() {
						
							// Create input element for testing
							var inputs = document.createElement('input');
							
							// Create the supports object
							var supports = {};
							
							supports.autofocus   = 'autofocus' in inputs;
							supports.required    = 'required' in inputs;
							supports.placeholder = 'placeholder' in inputs;
						
							// Fallback for autofocus attribute
							if(!supports.autofocus) {
								
							}
							
							// Fallback for required attribute
							if(!supports.required) {
								
							}
						
							// Fallback for placeholder attribute
							if(!supports.placeholder) {
								
							}
							
							// Change text inside send button on submit
							var send = document.getElementById('register-submit');
							if(send) {
								send.onclick = function () {
									this.innerHTML = '...Sending';
								}
							}
						
						})();
						</script>
						<div class="registration_form">
						<!-- Form -->
							<form id="registration_form" action="contact.php" method="post">
								<div>
									<label>
										<input placeholder="first name:" type="text" tabindex="1" required autofocus>
									</label>
								</div>
								<div>
									<label>
										<input placeholder="last name:" type="text" tabindex="2" required autofocus>
									</label>
								</div>
								<div>
									<label>
										Address
									</label>
									<textarea></textarea>
								</div>
								<div>
									<label>
										Last Degree
									</label>
									<select class="form-control">
									  <option>SMP</option>
									  <option>SMA</option>
									  <option>Diploma D3</option>
									  <option>Sarjana S1</option>
									  <option>Magister S2</option>
									  <option>Doktor S3</option>
									</select>
								</div>
								<div>
									<label>
										<input placeholder="email address:" type="email" tabindex="3" required>
									</label>
								</div>
								<div class="sky-form">
									<label>Interest</label>
									<div class="sky_form1">
										<ul>
											<label class="checkbox-inline">
												<input type="checkbox" name="inlineCheckboxOptions" id="inlinecheck1" value="option1"> Option1
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="inlineCheckboxOptions" id="inlinecheck2" value="option2"> Option2
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="inlineCheckboxOptions" id="inlinecheck3" value="option1"> Option3
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="inlineCheckboxOptions" id="inlinecheck4" value="option2"> Option4
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="inlineCheckboxOptions" id="inlinecheck5" value="option1"> Option5
											</label>
											
											<div class="clearfix"></div>
										</ul>
									</div>
								</div>
								<div class="sky-form">
									<label>Gender</label>
									<div class="sky_form1">
										<ul>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
											</label>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
											</label>
											<div class="clearfix"></div>
										</ul>
									</div>
								</div>
								<div class="sky-form">
									<label>Membership Type</label>
									<div class="sky_form1">
										<ul>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadiox1" value="option1"> Free
											</label>
											<label class="radio-inline">
												<input type="radio" name="inlineRadioOptions" id="inlineRadiox2" value="option2"> Premium
											</label>
											<div class="clearfix"></div>
										</ul>
									</div>
								</div>
								<div>
									<label>Upload CV</label>
									<label>
										<input type="file" tabindex="3" required>
									</label>
								</div>
								<div>
									<label>
										<input placeholder="password" type="password" tabindex="4" required>
									</label>
								</div>						
								<div>
									<label>
										<input placeholder="retype password" type="password" tabindex="4" required>
									</label>
								</div>	
								<div>
									<input type="submit" value="create an account" id="register-submit">
								</div>
								<div class="sky-form">
									<label class="checkbox-inline">
										<input type="checkbox" id="inlineCheckbox1" value="option1">I Agree to Wiwara Karya &nbsp;<a class="terms" href="#">terms of service</a>
									</label>
								</div>
							</form>
							<!-- /Form -->
							</div>
						</div>
						
						<div class="registration_left">
							<h2>existing user</h2>
							<a href="#"><div class="reg_fb"><img src="<?php echo base_url();?>resources/images/facebook.png" alt=""><i>login using Facebook</i><div class="clearfix"></div></div></a>
							<div class="registration_form">
								<!-- Form -->
								<form id="registration_form" action="contact.php" method="post">
									<div>
										<label>
											<input placeholder="email:" type="email" tabindex="3" required>
										</label>
									</div>
									<div>
										<label>
											<input placeholder="password" type="password" tabindex="4" required>
										</label>
									</div>						
									<div>
										<input type="submit" value="sign in" id="register-submit">
									</div>
									<div class="forget">
										<a href="#">forgot your password</a>
									</div>
								</form>
								<!-- /Form -->
							</div>
						</div>
					<div class="clearfix"></div>
				</div>
				<!-- end registration -->
				</div>
			</div>
<?php $this->load->view('layout/footer');?>