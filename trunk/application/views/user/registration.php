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
                        <div id="applicant-container">
                            <form id="applicant_registration_form" action="" method="post">
                                <div>
                                    <label>
                                        Username:
                                        <input placeholder="username" type="text" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Password:
                                        <input placeholder="password" type="password" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Full Name:
                                        <input placeholder="full name" type="text" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Place of Birth:
                                    </label>
                                    <textarea placeholder="place of birth" class="form-control"></textarea>
                                </div>

                                <div>
                                    <label>
                                        Date of Birth:
                                    </label>
                                    <select class="inline-group">
                                        <?php
                                            for($i=1; $i<=31; $i++)
                                                echo("<option>".$i."</option>");
                                        ?>
                                    </select>
                                    <select class="inline-group">
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>Mar</option>
                                        <option>Apr</option>
                                        <option>May</option>
                                        <option>Jun</option>
                                        <option>Jul</option>
                                        <option>Aug</option>
                                        <option>Sep</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                    </select>
                                    <select class="inline-group">
                                        <?php
                                        for($i=1970; $i<=2015; $i++)
                                            echo("<option>".$i."</option>");
                                        ?>
                                    </select>
                                </div>
                                <div>
                                    <label>
                                        CV:
                                    </label>
                                    <input type="file" required autofocus>
                                </div>
                                <div class="sky-form">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1">I Agree to Wiwara Karya
                                        &nbsp;<a class="terms" href="#">terms of service</a>
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" value="create an account" id="register-submit">
                                </div>
                            </form>
                        </div>

                        <!-- <div id="company-container" style="display:none">
                            <form id="company_registration_form" action="" method="post">
                                <div>
                                    <label>
                                        Username:
                                        <input placeholder="username" type="text" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Password:
                                        <input placeholder="password" type="password" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Company Name:
                                        <input placeholder="company name" type="text" required autofocus>
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        Address:
                                    </label>
                                    <textarea placeholder="address" class="form-control"></textarea>
                                </div>
                                <div>
                                    <label>
                                        City:
                                    </label>
                                    <input placeholder="city" type="text" required autofocus>
                                </div>
                                <div>
                                    <label>
                                        Phone Number:
                                    </label>
                                    <input placeholder="phone number" type="text" required autofocus>
                                </div>
                                <div>
                                    <label>
                                        Contact Name:
                                    </label>
                                    <input placeholder="contact name" type="text" required autofocus>
                                </div>
                                <div>
                                    <label>
                                        Description:
                                    </label>
                                    <textarea class="form-control" placeholder="description" type="text" required autofocus></textarea>
                                </div>
                                <div>
                                    <label>
                                        Email:
                                    </label>
                                    <input class="form-control" placeholder="email" type="email" required autofocus>
                                </div>
                                <div>
                                    <label>
                                        Photo:
                                    </label>
                                    <input type="file" required autofocus>
                                </div>
                                <div class="sky-form">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="option1">I Agree to Wiwara Karya
                                        &nbsp;<a class="terms" href="#">terms of service</a>
                                    </label>
                                </div>
                                <div>
                                    <input type="submit" value="create an account" id="register-submit">
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- end registration -->
        </div>
    </div>
<?php $this->load->view('layout/footer'); ?>