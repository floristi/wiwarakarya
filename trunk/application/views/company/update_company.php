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
                        <h1>Update Company</h1>
						<p>Form untuk mengganti data berkaitan dengan Company</p>
						<br />
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
									echo  form_open("c_company/process/".$query->id, $attributes); 
							?>
                              
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Company Name:
                                    </label>
									<div class="col-sm-10">
										<input name="name" class="form-control" placeholder="name" type="text" required autofocus maxlength="50" required value="<?php echo $query->name; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">
										Address:
                                    </label>
									<div class="col-sm-10">
										<textarea name="address" placeholder="address" class="form-control" required><?php echo $query->address; ?></textarea>
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        City:
                                    </label>
									<div class="col-sm-10">
										<input name="city" placeholder="city" class="form-control" type="text" required autofocus required value="<?php echo $query->city; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Phone Number:
                                    </label>
									<div class="col-sm-10">
										<input name="phone" class="form-control" placeholder="phone number" type="text" required autofocus required value="<?php echo $query->phone; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Contact Name:
                                    </label>
									<div class="col-sm-10">
										<input name="contact_name" class="form-control" placeholder="contact name" type="text" required autofocus required value="<?php echo $query->contact_name; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Description:
                                    </label>
									<div class="col-sm-10">
										<textarea name="description" class="form-control" placeholder="description" type="text" required autofocus required ><?php echo $query->description; ?></textarea>
									</div>
								</div>
                                <div class="form-group">
                                   <label class="col-sm-2 control-label">
                                        Website:
                                    </label>
									<div class="col-sm-10">
										<input name="website" class="col-sm-10" placeholder="web" type="text" required autofocus required value="<?php echo $query->web; ?>">
									</div>
								</div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Email:
                                    </label>
									<div class="col-sm-10">
										<input name="email" placeholder="email" type="email" required autofocus required value="<?php echo $query->email; ?>">
									</div>
								</div>
                                <!-- <div class="form-group">
                                    <label class="col-sm-2 control-label">
                                        Photo:
                                    </label>
									<div class="col-sm-10">
										<input type="file" autofocus name="photo" class="form-control" enctype="multipart/form-data" autofocus>
									</div>
                                </div> -->

                                <div class="pull-right">
									<div style="display:inline-block">
										<input type="submit" value="Update Company" name="submit">
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

<!--
<div class="company_list">

<div class="page-header">
  <h2>UPDATE COMPANY</h2>
  <p>Form untuk mengganti data berkaitan dengan Company</p>
</div>
<h6 style="color:#FF2525">* Harus diisi</h6>

<div class="container">
  <div class="main">
    <form class="form-horizontal" method="post" action='<?php echo site_url('c_company/process/'.$query->id); ?>' onsubmit="return confirmAction('Apakah anda yakin untuk mengubah data supplier terkait?');">
      <fieldset>
        <legend>Form Update Data Company</legend>
        
        <div class="control-group">
          <label class="control-label" for="name">Company Name*</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"name\" maxlength=\"50\" required value=\"".$query->name."\">";
              } else {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"name\" maxlength=\"50\" required value=\"".set_value('name')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('name'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="address">Address*</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<textarea type=\"text\" class=\"input-xlarge\" style=\"resize: none;\" name=\"address\" maxlength=\"255\" required>".$query->address."</textarea>";
              } else {
                echo "<textarea type=\"text\" class=\"input-xlarge\" required style=\"resize: none;\" name=\"address\" maxlength=\"255\">".set_value('address')."</textarea>";
              }
            ?>
            <span class="help-block"><?php echo form_error('address'); ?></span>
          </div>
        </div>

         <div class="control-group">
          <label class="control-label" for="city">City*</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"city\" maxlength=\"20\" required value=\"".$query->city."\">";
              } else {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"city\" maxlength=\"20\" required value=\"".set_value('city')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('city'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="phone">Phone Number</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"phone\" maxlength=\"12\"  value=\"".$query->phone."\">";
              } else {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"phone\" maxlength=\"12\"  value=\"".set_value('phone')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('phone'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="contact_name">Contact Person</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"contact_name\" maxlength=\"30\"  value=\"".$query->contact_name."\">";
              } else {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"contact_name\" maxlength=\"30\"  value=\"".set_value('contact_name')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('contact_name'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="description">Description</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"description\" maxlength=\"30\"  value=\"".$query->description."\">";
              } else {
                echo "<input type=\"test\" class=\"input-xlarge\" name=\"description\" maxlength=\"30\"  value=\"".set_value('description')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('description'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="web">Website</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge\" name=\"web\" maxlength=\"30\"  value=\"".$query->web."\">";
              } else {
                echo "<input type=\"test\" class=\"input-xlarge\" name=\"web\" maxlength=\"30\"  value=\"".set_value('we')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('web'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="email">E-Mail</label>
          <div class="controls">
            <?php
              if(isset($query)) {
                echo "<input type=\"email\" class=\"input-xlarge\" name=\"email\" maxlength=\"30\"  value=\"".$query->email."\">";
              } else {
                echo "<input type=\"email\" class=\"input-xlarge\" name=\"email\" maxlength=\"30\"  value=\"".set_value('email')."\">";
              }
            ?> 
            <span class="help-block"><?php echo form_error('email'); ?></span>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="status">Status</label>
          <div class="controls">
            <div class="input-xlarge">
              <?php
              $stat = "Tidak Aktif";
              if ($query->status == 't') $stat = "Aktif";
              if(isset($query)) {
                echo "<input type=\"text\" class=\"input-xlarge uneditable-input\" name=\"status\" maxlength=\"30\" required value=\"".$stat."\" readonly>";
              } else {
                echo "<input type=\"text\" class=\"input-xlarge uneditable-input\" name=\"status\" maxlength=\"30\" required value=\"".set_value('status')."\" readonly>";
              }
            ?> 
            </div>
          </div>
        </div>

        <div class="form-actions">
          <input class="btn btn-primary" type="submit" value="Update Company" name="update">
          <?php
            if ($query->status == 't')
              echo "<input class=\"btn btn-danger\" type=\"submit\" value=\"Non Aktifkan Company\" name=\"delete\">";
            else
              echo "<input class=\"btn btn-success\" type=\"submit\" value=\"Aktifkan Company\" name=\"activate\">";
          ?>
        </div>
      </fieldset>
    </form>
  </div>
</div>
</div>-->