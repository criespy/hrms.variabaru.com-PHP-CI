<?php foreach ($barcode as $row): ?>
<div class="content-wrapper">
  <!-- Judul halaman -->
  <section class="content-header">
    <h1>Barcode Detail</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <br />
  <section class="content">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php
          $attributes = array('class' => 'form-horizontal');
          echo form_open('barcode/update_barcode', $attributes);
        ?>
        <div class="form-group">
          <label class="control-label col-sm-2 text-left" for='name'>Nama Barang:</label>
          <div class="col-sm-6">
            <input id="name" class="form-control" value="<?php echo $row['name'];?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 text-left" for='code'>Kode:</label>
          <div class="col-sm-6">
            <input id="code" class="form-control" value="<?php echo $row['code'];?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 text-left" for='override_name'>Nama Dicetak:</label>
          <div class="col-sm-6">
            <input id="override_name" class="form-control" value="<?php echo $row['override_name'];?>" />
          </div>
          <div class"col-sm-4">
            <h5 class="text-muted">
              <b><i>(jika kosong, nama barang yang dicetak)</i></b>
            </h5>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 text-left" for='note'>Catatan:</label>
          <div class="col-sm-6">
            <input id="note" class="form-control" value="<?php echo $row['note'];?>" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2 text-left" for='path'>Barcode:</label>
          <div class="col-sm-3">
            <img class="rounded" src="<?php echo base_url().'images/barcode/'.$row['path']; ?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <a class="btn btn-warning" href="<?php echo base_url().'index.php/barcode/create_pdf/'.$row['name'].'/'.$row['path']?>" target="_blank">Print</a>
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-default" onclick="kembali()" >Cancel</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php endforeach; ?>
<!--script balik ke halaman barcode-->
<script>
  function kembali(){
    window.location.href = "<?php echo base_url()?>index.php/barcode"
  }
</script>
