<div class="content-wrapper">
  <!-- Judul halaman -->
  <section class="content-header">
    <h1>Barcode Maker</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <br />
  <section class="content">
    <!--Input box -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!--form cari barcode-->
        <?php $attributes = array('name' => 'cari', 'id' => 'cari', 'class' => 'form-inline');
        echo form_open('barcode/cari', $attributes);?>
        <div class="form-group">
          <label for="refnbr">No. barcode / nama barang:</label>
          <input type="text" size="50" name="refnbr" id="refnbr" class="form-control" placeholder="" /><!-- value="<?php// echo set_value('refnbr'); ?>" />-->
        </div>
        <button type="submit" class="btn btn-primary" />Cari</button>
        <?php form_close(); ?>
      </div>
    </div>
    <!--input box end-->
    <br />
    <!--Konten-->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
          <table class="table table-striped" >
            <tr>
              <th>Nama</th>
              <th>Code</th>
              <th>Barcode</th>
              <th></th>
            </tr>
        <?php foreach ($barcode as $row):?>
            <tr>
              <td><a href="<?php echo base_url().'index.php/barcode/update_barcode/'.$row['id'] ?>"><?php echo $row['name']; ?></a></td>
              <td><?php echo $row['code']; ?></td>
              <td><img class="img-rounded" width="125" height="61" src="<?php echo base_url().'images/barcode/'.$row['path']; ?>" /></td>
              <td><a class="btn btn-default" href="<?php echo base_url().'index.php/barcode/create_pdf/'.$row['name'].'/'.$row['path']?>" target="_blank">print</a></td>
            </tr>
        <?php endforeach; ?>
          </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <?php echo $page;?>
      </div>
    </div>
    <!--Konten end-->
  </section>
</div>
