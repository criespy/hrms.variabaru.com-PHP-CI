<div class="content-wrapper">
  <!-- Judul halaman -->
  <section class="content-header">
    <h1>Sales Billing open release</h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>
  <br />
  <section class="content">
    <!--Input box nomor sales billing-->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!--form cari sales billing-->
        <?php $attributes = array('name' => 'cari', 'id' => 'cari', 'class' => 'form-inline');
        echo form_open('sales_billing/cari', $attributes);?>
        <div class="form-group">
          <label for="refnbr">No. sales billing:</label>
          <input type="text" size="30" name="refnbr" id="refnbr" class="form-control" placeholder="VB/XX/X/XXXX" /><!-- value="<?php// echo set_value('refnbr'); ?>" />-->
        </div>
        <button type="submit" class="btn btn-primary" />Cari</button>
        <?php form_close(); ?>
      </div>
    </div>
    <!--input box end-->
    <br />
    <!--Konten-->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 text-right">
        <!--<img src="<?php echo base_url();?>images/sales_billing_sign.png" class="text-right">-->
      </div>
    </div>
    <!--Konten end-->
  </section>
</div>
