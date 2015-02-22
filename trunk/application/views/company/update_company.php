<?php $this->load->view('layout/header'); ?>

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
</div>


<?php $this->load->view('layout/footer'); ?>