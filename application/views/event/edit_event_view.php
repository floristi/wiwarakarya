<div class="container">
<div class="main">
    <!-- start registration -->
    <div class="registration">
        <div class="registration_left">
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

                <div id="company-container">
                    <?php echo form_open("c_event/edit_event/".$event->id); ?>
                      <fieldset>
                        <div>
                            <label>
                                Event Name:
                                <input name="name" placeholder="name" type="text" required autofocus maxlength="50" required value="<?php if(isset($event->name)) echo $event->name; ?>">                                 
                                
                            </label>
                        </div>
                        <div>
                            <label>
                                Description:
                            </label>
                            <textarea name="description" placeholder="description" type="text" required autofocus required><?php if(isset($event->description)) echo $event->description; ?></textarea>
                        </div>
                        <div>
                            <label>
                                Location:
                            </label>
                            <textarea name="location" placeholder="location" class="text" required><?php if(isset($event->location)) echo $event->location; ?></textarea>
                        </div>
                        
                        <div>
                            <label>
                                Quota:
                            </label>
                            <input name="quota" placeholder="quota" type="text" required autofocus required value="<?php if(isset($event->quota)) echo $event->quota; ?>">
                        </div>

                        <div>
                            <label>
                                Main Speaker:
                            </label>
                            <input name="speaker" placeholder="speaker" type="text" required autofocus required value="<?php if(isset($event->speaker)) echo $event->speaker; ?>">
                        </div>

                        <div>   
                            <label>
                                Ticket Price:
                            </label>
                            <input name="price" placeholder="price" type="text" required autofocus required value="<?php if(isset($event->price)) echo $event->price; ?>">
                        </div>
                        
                        <div>
                            <label>
                                Organize by:
                            </label>
                            <div class="controls">
                              <select id="e2" name="company_id" class="input-xlarge">
                                <option value=""> - please select company - </option>
                                <?php foreach ($companies as $row) { ?>
                                    <option value="<?php echo $row->id; ?>" <?php if(isset($event->created_by) && $event->created_by == $row->id) echo "selected=selected"; ?>> <?php echo $row->name; ?></option>;
                                <?php } ?>
                                ?>
                              </select>
                              <span class="help-block">Apabila data company belum dimasukan, biarkan field ini kosong atau <a href="<?php echo site_url('c_company/create_company'); ?>"> Register Company</a> <br><?php echo form_error('company'); ?></span>
                          </div>
                        </div>

                        <div class="form-actions">
                            <input class="btn btn-primary" type="submit" value="Create Event" name="submit">
                            <a href="<?php echo site_url('c_event'); ?>"><input class="btn btn-danger" type="button" value="Batal" name="batal" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan event baru?');"></a>
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