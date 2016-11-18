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
       <!--Input box nomor sales billing-->
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
       <!--input box end-->
     </div>

     <br />
     <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <!--Konten-->
        <table class="table">
          <tr>
            <th>Nomor Sales Billing</th>
            <th>Status</th>
            <th></th>
          </tr>
          <?php foreach ($sales_billing as $row): ?>
          <tr class="<?php if ($row['Status'] != 0) echo 'bg-danger'; else echo 'bg-success'?>">
            <td ><?php echo $row['RefNbr']; ?></td>
            <td><?php
              switch ($row['Status']) {
                case 0:
                  echo 'Open';
                  break;
                case 1:
                  echo 'Released';
                  break;
                case 2:
                  echo 'Partial';
                  break;
                default:
                  echo 'Completed';
                }?>
            </td>
            <td>
              <a class="rilis" onclick="return confirm('Yakin buka kembali release?')" href="<?php echo base_url().'index.php/sales_billing/rilis/'.$row['RefNbr']; ?>"</a>
              <?php if ($row['Status'] == 1 or $row['Status'] == 2) echo 're-open release';?>
            </td>
          </tr>
        </table>
        <?php endforeach; ?>
        <!--Konten end-->
      </div>
    </div>
  </section>
</div>
<script>
 $(document).on("click",".rilis",function(e)){
   bootbox.confirm("Yakin buka kembali release?");
 }
</script>
