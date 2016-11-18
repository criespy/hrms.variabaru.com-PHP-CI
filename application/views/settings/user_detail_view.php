<?php foreach ($detailuser as $row) : ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>Details of<small><?php echo $row['username'];?></small></h1>
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
          <label class="control-label col-sm-2" for='firstname'>Name:</label>
          <div class="col-sm-10">
            <input id="firstname" class="form-control" value="<?php echo $row['firstname']; ?>" />
            <input id="lastname" class="form-control" value="<?php echo $row['lastname']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='email'>Email:</label>
          <div class="col-sm-10">
            <input id="email" class="form-control" value="<?php echo $row['email']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for='password'>Password:</label>
          <div class="col-sm-10">
            <input id="password" type="password" class="form-control" value='apaajadahyangpentingtampil' />
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
          <div class="col-sm-4">
            <input id="picture" class="form-control" value="<?php echo $row['picture'];?>" />
          </div>
          <div class="col-sm-2">
            <button class="btn btn-default">Browse</button>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2"></label>
          <div class="col-sm-2">
            <img class="rounded" src="<?php echo base_url().$row['picture']; ?>" width="150px" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-default" onclick="kembali()" >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php endforeach; ?>
<!--script balik ke halaman setting user-->
<script>
  function kembali(){
    window.location.href = "<?php echo base_url()?>index.php/users/view/all"
  }
</script>
