<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-4 col-sm-1 col-xs-1">

      </div>
      <div class="col-md-4 col-sm-10 col-xs-10">
        <div class="row">
          <h1><b>Log</b>in</h1>
          <?php
            $attributes = array('name' => 'login_form', 'id' => 'login_form');
            echo form_open('login/verifikasi_login', $attributes);
          ?>
          <div class="form-group">
            <label for="username" >Username:</label>
            <input type="text" size="48" id="username" name="username" class="form-control" value="<?php echo set_value('username'); ?>"  />
            <p>
              <?php echo form_error('username', '<div class="text-danger">','</div>'); ?>
            </p>
          </div>
          <div class="form-group">
            <label for="userpass">Password:</label>
            <input type="password" size="48" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
            <p>
              <?php echo form_error('password', '<div class="text-danger">','</div>'); ?>
            </p>
          </div>
          <p class="text-danger">
          <?php $message = $this->session->flashdata('message');
              echo $message == '' ? '' : $message; ?>
          </p>
          <button type="submit" class="btn btn-default" />Login</button>
          <?php echo form_close();?>
        </div>
      </div>
      <div class="col-md-4 col-sm-1 col-xs-1">

      </div>
    </div>
  </section>
</div>
