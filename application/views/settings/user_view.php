<div class="content-wrapper">
  <!-- Judul halaman -->
  <section class="content-header">
    <h1>User Settings</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <!-- Apply any bg-* class to to the info-box to color it -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <table class="table table-hover">
          <tr>
            <th>
              Name
            </th>
            <th>
              E-mail Address
            </th>
          </tr>
          <?php foreach ($users as $row): ?>
          <tr>
            <td>
              <a href="<?php echo base_url(); ?>index.php/users/detail/<?php echo $row['id'];?>"><?php echo $row['firstname'].' '.$row['lastname']; ?></a>
            </td>
            <td>
              <?php echo $row['email']; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <button class="btn btn-default" onclick="create()">create new user</button>
      </div>
    </div>
    <br />
  </section>
</div>
<!--script ke halaman create user-->
<script>
  function create(){
    window.location.href = "<?php echo base_url()?>index.php/users/create/new"
  }
</script>
