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
                    if (!supports.autofocus) {}

                    // Fallback for required attribute
                    if (!supports.required) {}

                    // Fallback for placeholder attribute
                    if (!supports.placeholder) {}

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
                <h1>New Event</h1>

                <div id="user-container">
                    <?php 
						$attributes = array('class' => 'form-horizontal');	
						echo  form_open("c_event/create_event", $attributes); 
					?>
                      
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Event Name:	
                            </label>
							<div class="col-sm-10">
								<input name="name" placeholder="name" class="form-control" type="text" required autofocus maxlength="50" required value="<?php if(isset($name)) echo $name; ?>">								
							</div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Description:
                            </label>
							<div class="col-sm-10">
								<textarea name="description" placeholder="description" class="form-control" rows="3" type="text" required autofocus required value="<?php if(isset($description)) echo $description; ?>"></textarea>
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Location:
                            </label>
							<div class="col-sm-10">
								<textarea name="location" placeholder="location" class="form-control" rows="3" type="text" required value="<?php if(isset($location)) echo $location; ?>"></textarea>
							</div>
						</div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Quota:
                            </label>
							<div class="col-sm-10">
								<input name="quota" placeholder="quota" class="form-control" type="text" required autofocus required value="<?php if(isset($quota)) echo $quota; ?>">
							</div>
						</div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Main Speaker:
                            </label>
							<div class="col-sm-10">
								<input name="speaker" placeholder="speaker" class="form-control" type="text" required autofocus required value="<?php if(isset($speaker)) echo $speaker; ?>">
							</div>
						</div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Ticket Price:
                            </label>
							<div class="col-sm-10">
								<input name="price" placeholder="price" class="form-control" type="text" required autofocus required value="<?php if(isset($price)) echo $price; ?>">
							</div>
						</div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Organize by:
                            </label>
                            <div class="controls col-sm-3">
                              <select id="e2" name="company" class="input-xlarge form-control" name="company_id">
                                <option value=""> - please select company - </option>
                                <?php 
                                  foreach ($companies as $row) {
                                    echo "<option value='$row->name'>". $row->name . "</option>";
                                  }
                                ?>
                              </select>
							</div>
							
							<span style="padding:10px 0 0 0;"class="help-block">&nbsp; &nbsp;Apabila data company belum dimasukan, biarkan field ini kosong atau <a href="<?php echo site_url('c_company/create_company'); ?>"> Register Company</a> <br><?php echo form_error('company'); ?></span>
                          
                        </div>
						
						<div class="pull-right">
							<div class="form-actions" style="display:inline-block">
								<input type="submit" value="Create Event" name="submit">
							</div>
							<div class="form-actions" style="display:inline-block">
								<a class="btns" href="<?php echo site_url('c_event'); ?>" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan event baru?')";>Cancel</a>
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