<div class="content-wrapper">
  <section class="content-header">
    <h1>Create new user<small></small></h1>
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
          echo form_open('users/tambah_user', $attributes);
        ?>
        <div class="form-group">
          <label class="control-label col-sm-1" for='firstname' >Name:</label>
          <div class="col-sm-6">
            <input name="firstname" class="form-control" placeholder="nama depan" />
            <input name="lastname" class="form-control" placeholder="nama belakang" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for='email'>Email:</label>
          <div class="col-sm-6">
            <input name="email" class="form-control" placeholder="alamat email" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for='password' >Password:</label>
          <div class="col-sm-6">
            <input name="password" type="password" class="form-control" placeholder="password" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for='password2' >Re-type Password:</label>
          <div class="col-sm-6">
            <input name="password2" type="password" class="form-control" placeholder="ketik ulang password" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-1" for='privilege'>Authority:</label>
          <div class="col-sm-6">
            <select name="privilege" class="form-control" />
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
          <label class="control-label col-sm-1" for='picture'>Picture:</label>
          <div class="col-sm-6">
            <input name="picture" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-1 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-default" onclick="kembali()" >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!--script balik ke halaman setting user-->
<script>
  function kembali(){
    window.location.href = "<?php echo base_url()?>index.php/users/view/all"
  }
</script>
