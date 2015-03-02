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
                <h1>Edit Event</h1>

                <div id="company-container">
                    <?php 
						$attributes = array('class' => 'form-horizontal');
						echo form_open("c_event/edit_event/".$event->id, $attributes); 
					?>
                      
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Event Name:
                            </label>
							<div class="col-sm-10">
								<input name="name" class="form-control" placeholder="name" type="text" required autofocus maxlength="50" required value="<?php if(isset($event->name)) echo $event->name; ?>">                                 
                            </div> 
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Description:
                            </label>
							<div class="col-sm-10">
								<textarea name="description" class="form-control" placeholder="description" type="text" required autofocus required><?php if(isset($event->description)) echo $event->description; ?></textarea>
							</div>
						</div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Location:
                            </label>
							<div class="col-sm-10">
								<textarea name="location" class="form-control" placeholder="location" class="text" required><?php if(isset($event->location)) echo $event->location; ?></textarea>
							</div>
						</div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Quota:
                            </label>
							<div class="col-sm-10">
								<input name="quota" class="form-control" placeholder="quota" type="text" required autofocus required value="<?php if(isset($event->quota)) echo $event->quota; ?>">
							</div>
						</div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Main Speaker:
                            </label>
							<div class="col-sm-10">
								<input name="speaker" class="form-control" placeholder="speaker" type="text" required autofocus required value="<?php if(isset($event->speaker)) echo $event->speaker; ?>">
							</div>
						</div>

                        <div class="form-group">   
                            <label class="col-sm-2 control-label">
                                Ticket Price:
                            </label>
							<div class="col-sm-10">
								<input name="price" class="form-control" placeholder="price" type="text" required autofocus required value="<?php if(isset($event->price)) echo $event->price; ?>">
							</div>
						</div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                Organize by:
                            </label>
                            <div class="controls col-sm-10">
                              <select id="e2" name="company_id" class="input-xlarge form-control">
                                <option value=""> - please select company - </option>
                                <?php foreach ($companies as $row) { ?>
                                    <option value="<?php echo $row->id; ?>" <?php if(isset($event->created_by) && $event->created_by == $row->id) echo "selected=selected"; ?>> <?php echo $row->name; ?></option>;
                                <?php } ?>
                                ?>
                              </select>
                              <span class="help-block">Apabila data company belum dimasukan, biarkan field ini kosong atau <a href="<?php echo site_url('c_company/create_company'); ?>"> Register Company</a> <br><?php echo form_error('company'); ?></span>
                          </div>
                        </div>

                        <div class="pull-right">
							<div style="display:inline-block">
								<input type="submit" value="Update Event" name="submit">
                            </div>
							<div style="display:inline-block">
								<a href="<?php echo site_url('c_event'); ?>"><input class="btns" type="button" value="Batal" name="batal" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan event baru?');"></a>
							</div>
						</div>
                        
                        </fieldset>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end registration -->
</div>
</div>