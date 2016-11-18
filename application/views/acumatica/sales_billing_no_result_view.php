 <div class="content-wrapper">
   <section class="content-header">
     <h1>Sales Billing open release</h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
       <li class="active">Here</li>
     </ol>
   </section>
   <br />
   <section class="content">
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
     <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
         <!--Konten-->
         <div class="bg-danger">
           <?php echo ("Tidak ada nomor sales billing $sales_billing"); ?>
         </div>
       </div>
     </div>
     <!--Konten end-->
  </section>
</div>
