<?php $this->load->view('layout/header'); ?>
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
                            <?php echo form_open('c_user/create'); ?>
                                <div>
                                    <label>
                                        Username:
                                        <input placeholder="username" type="text" name="username" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Password:
                                        <input placeholder="password" type="password" name="password" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Retype Password:
                                        <input placeholder="retype password" type="password" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Full Name:
                                        <input placeholder="full name" type="text" name="fullname" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Last Education:
                                    </label>
                                    <select name="last_education">
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
                                <div>
                                    <label>
                                        Place of Birth:
                                    </label>
                                    <input placeholder="place of birth" type="text" name="pob" required autofocus>
                                </div>

                                <div>
                                    <label>
                                        Date of Birth:
                                    </label>
                                    <select class="inline-group" name="dob-date">
                                        <?php
                                            for($i=1; $i<=31; $i++)
                                                echo("<option value='".$i."'>".$i."</option>");
                                        ?>
                                    </select>
                                    <select class="inline-group" name="dob-month">
                                        <option value="1">Jan</option>
                                        <option value="2">Feb</option>
                                        <option value="3">Mar</option>
                                        <option value="4">Apr</option>
                                        <option value="5">May</option>
                                        <option value="6">Jun</option>
                                        <option value="7">Jul</option>
                                        <option value="8">Aug</option>
                                        <option value="9">Sep</option>
                                        <option value="10">Oct</option>
                                        <option value="11">Nov</option>
                                        <option value="12">Dec</option>
                                    </select>
                                    <select class="inline-group" name="dob-year">
                                        <?php
                                        for($i=1970; $i<=2015; $i++)
                                            echo("<option value='".$i."'>".$i."</option>");
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <label>
                                        CV:
                                    </label>
                                    <input type="file" autofocus>
                                </div>
                                <div class="sky-form">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1">I Agree to Wiwara Karya
                                        &nbsp;<a class="terms" href="#">terms of service</a>
                                    </label>
                                </div>
                                <div style="display:inline-block">
                                    <input type="submit" name="submit" value="create an account" id="register-submit">
                                </div>
                                <div style="display: inline-block">
                                    <a href="<?php echo site_url(); ?>">Cancel</a>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end registration -->
        </div>
    </div>
<?php $this->load->view('layout/footer'); ?>