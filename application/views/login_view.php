<div id="page-content-wrapper">
  <div class="col-sm-3">
    <!--kosong-->
  </div>
  <div class="col-sm-6">
    <div class=row>
        <h1 class="text-center">Login</h1>
    </div>
    <div class="row text-center">
      <div class="col-sm-2">
        <!--kosong-->
      </div>
      <div class="col-sm-8">
        <?php
        $attributes = array('name' => 'login_form', 'id' => 'login_form', 'class' => 'form-inline');
        echo form_open('login/verifikasi_login', $attributes); ?>
        <p class="text-left">
          <label for="username" >Username:</label>
        </p>
        <p>
          <input type="text" size="48" id="username" name="username" class="form-control" value="<?php echo set_value('username'); ?>"  />
        </p>
        <?php echo form_error('username', '<p class="text-danger">','</p>'); ?>
        <p class="text-left">
          <label for="userpass">Password:</label>
        </p>
        <p>
          <input type="password" size="48" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
        </p>
        <?php echo form_error('password', '<p class="text-danger">','</p>'); ?>
        <label></label>
        <p class="text-right">
          <input type="submit" class="btn btn-vb" value="Login" />
        </p>
        <p class="text-danger">
          <?php $message = $this->session->flashdata('message');
          echo $message == '' ? '' : $message; ?>
        </p>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <!--kosong-->
  </div>
</div>
