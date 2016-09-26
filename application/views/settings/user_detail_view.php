<div class="content-wrapper">
  <section class="content-header">
    <h1>Details of<small>ariesw</small></h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
          $attributes = array('class' => 'form-horizontal');
          echo form_open('users/update_user', $attributes);
        ?>
        <div class="form-group">
          <label class="label-control col-sm-2" for='firstname'>Nama:</label>
          <div class="col-sm-10">
            <input id="firstname" class="form-control" value="Aries" />
            <input id="lastname" class="form-control" value="Wibowo" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='email'>Email:</label>
          <div class="col-sm-10">
            <input id="email" class="form-control" value='aries@variabaru.com' />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='password'>Password:</label>
          <div class="col-sm-10">
            <input id="password" type="password" class="form-control" value='apajadah' />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='privilege'>Authority:</label>
          <div class="col-sm-10">
            <select id="privilege" class="form-control" />
              <option>
                Administrator
              </option>
              <option>
                User
              </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='picture'>Picture:</label>
          <div class="col-sm-10">
            <input id="picture" class="form-control" value='<?php echo base_url(); ?>images/users/1.jpg' />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Save</button>
          </div>
        </div>
        <?php form_close(); ?>
      </div>
    </div>
  </section>
</div>
