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
                                Date/Time:
                            </label>
                            <div class="col-sm-10">
                                <select class="tanggal form-control inline-group " name="time-day">
                                    <?php
                                        for($i=1; $i<=31; $i++)
                                            echo("<option value='".$i."'>".$i."</option>");
                                    ?>
                                </select>
                                <select class="bulan form-control inline-group " name="time-month">
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
                                <select class="tahun form-control inline-group" name="time-year">
                                    <?php
                                    for($i=1970; $i<=2015; $i++)
                                        echo("<option value='".$i."'>".$i."</option>");
                                    ?>
                                </select>
                                <span></span>
                                <select class="tanggal form-control inline-group" name="time-hour">
                                    <?php
                                    for($i=0; $i<=23; $i++)
                                        echo("<option value='".$i."'>".sprintf('%02d', $i)."</option>");
                                    ?>
                                </select>
                                <span>:</span>
                                <select class="tanggal form-control inline-group" name="time-minute">
                                    <?php
                                    for($i=0; $i<=59; $i++)
                                        echo("<option value='".$i."'>".sprintf('%02d', $i)."</option>");
                                    ?>
                                </select>
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
                              <select id="e2" name="company_id" class="input-xlarge form-control">
                                <option value=""> - please select company - </option>
                                <?php foreach ($companies as $row): ?>
                                <option value="<?php echo $row->id; ?>"><?php echo $row->name;?></option>
                                <?php endforeach;?>
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