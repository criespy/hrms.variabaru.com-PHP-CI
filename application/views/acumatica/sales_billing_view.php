<div class="content-wrapper">
  <!-- Judul halaman -->
  <section class="content-header">
    <h1>Sales Billing open release</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <section class="content">
  <!--Input box nomor sales billing-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
    <!--form cari sales billing-->
      <?php $attributes = array('name' => 'cari', 'id' => 'cari', 'class' => 'form-inline');
       echo form_open('sales_billing/cari', $attributes);?>
      <div class="form-group col-sm-11 text-right">
        <label for="refnbr" class="label-control">No. sales billing:</label>
        <input type="input" size="25" name="refnbr" id="refnbr" class="form-control" /><!-- value="<?php// echo set_value('refnbr'); ?>" />-->
      </div>
      <div class="form-group col-sm-1 text-right">
         <input type="submit" class="btn btn-vb" value="cari" />
      </div>
      <?php form_close(); ?>
    </div>
  </div>
  <!--input box end-->
  <br />
  <!--Konten-->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
      <img src="<?php echo base_url();?>images/sales_billing_sign.png" class="text-right">
    </div>
  </div>
  <!--Konten end-->
  </section>
</div>
