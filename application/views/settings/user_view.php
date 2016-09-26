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
              Nama
            </th>
            <th>
              Alamat e-mail
            </th>
          </tr>
          <?php foreach ($users as $row): ?>
          <tr>
            <td>
              <a href="<?php echo base_url(); ?>index.php/users/detail/1"><?php echo $row['firstname'].' '.$row['lastname']; ?></a>
            </td>
            <td>
              <?php echo $row['email']; ?>
            </td>
          </tr>
          <?php endforeach; ?>
          <tr>
            <td>
              dummy Aries Wibowo
            </td>
            <td>
              dummy aries@variabaru.com
            </td>
          </tr>
          <tr>
            <td>
              dummy Rosalia Yudanto
            </td>
            <td>
              dummy rosa@variabaru.com
            </td>
          </tr>
        </table>
      </div>
    </div>
  </section>
</div>
