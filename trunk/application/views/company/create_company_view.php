<?php $this->load->view('layout/header'); ?>

  <div class="container">
        <div class="main">
            <!-- start registration -->
            <div class="registration_company">
                <div class="registration_company_left">
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
                            <?php echo  form_open("c_company/create_company"); ?>
                              <fieldset>
                                <div>
                                    <label>
                                        Company Name:
                                        <input name="name" placeholder="name" type="text" required autofocus maxlength="50" required value="<?php if(isset($name)) echo $name; ?>">
                                        
                                        
                                    </label>
                                </div>

                                <div>
                                    <label>
                                        Address:
                                    </label>
                                    <textarea name="address" placeholder="address" class="form-control" required value="<?php if(isset($address)) echo $address; ?>"></textarea>
                                </div>
                                <div>
                                    <label>
                                        City:
                                    </label>
                                    <input name="city" placeholder="city" type="text" required autofocus required value="<?php if(isset($city)) echo $city; ?>">
                                </div>
                                <div>
                                    <label>
                                        Phone Number:
                                    </label>
                                    <input name="phone" placeholder="phone number" type="text" required autofocus required value="<?php if(isset($phone)) echo $phone; ?>">
                                </div>
                                <div>
                                    <label>
                                        Contact Name:
                                    </label>
                                    <input name="contact_name" placeholder="contact name" type="text" required autofocus required value="<?php if(isset($contact_name)) echo $contact_name; ?>">
                                </div>
                                <div>
                                    <label>
                                        Description:
                                    </label>
                                    <textarea name="description" placeholder="description" type="text" required autofocus required value="<?php if(isset($description)) echo $description; ?>"></textarea>
                                </div>
                                <div>
                                    <div>
                                    <label>
                                        Website:
                                    </label>
                                    <input name="website" placeholder="web" type="text" required autofocus required value="<?php if(isset($web)) echo $web; ?>">
                                </div>
                                <div>
                                    <label>
                                        Email:
                                    </label>
                                    <input name="email" placeholder="email" type="email" required autofocus required value="<?php if(isset($email)) echo $email; ?>">
                                </div>
                                <div>
                                    <label>
                                        Photo:
                                    </label>
                                    <input type="file" autofocus>
                                </div>

                                <div class="form-actions">
                                    <input class="btn btn-primary" type="submit" value="Create Company" name="submit">
                                    <a href="<?php echo site_url('c_company'); ?>"><input class="btn btn-danger" type="button" value="Batal" name="batal" onclick="return confirm Action('Apakah anda yakin tidak ingin menambahkan company baru?');"></a>
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
<?php $this->load->view('layout/footer'); ?>