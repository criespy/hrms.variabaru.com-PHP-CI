 <div class="content-wrapper">
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
     <div class="col-md-7">

     </div>
     <!--form cari sales billing-->
     <div class="col-md-5 text-right">
         <?php $attributes = array('name' => 'cari', 'id' => 'cari', 'class' => 'form-inline');
          echo form_open('sales_billing/cari', $attributes);?>
          <label for="refnbr text-right">No. sales billing</label>
          <input type="input" size="25" name="refnbr" id="refnbr" class="form-control" value="<?php echo set_value('refnbr'); ?>" />
          <input type="submit" class="btn btn-vb" value="cari" />
         <?php form_close(); ?>
     </div>
   </div>
   <br />
   <!--input box end-->
   <div class="row">
     <div class="col-sm-12">
       <!--Konten-->
       <div>
         <table class="table">
           <tr>
             <th>Nomor Sales Billing</th>
             <th>Status</th>
             <th></th>
           </tr>
           <?php foreach ($sales_billing as $row): ?>
             <tr class="<?php if ($row['Status'] != 0) echo 'bg-danger'; else echo 'bg-success'?>">
               <td ><?php echo $row['RefNbr']; ?></td>
               <td><?php echo $row['Status']; ?></td>
               <td><a class="rilis" onclick="return confirm('Yakin buka kembali release?')" href="<?php echo base_url().'index.php/sales_billing/rilis/'.$row['RefNbr'] ?>"</a>re-open release</td>
             </tr> <!--onclick="return confirm('Yakin buka kembali release?')"-->
         </table>
         <?php endforeach; ?>
         <!--Konten end-->
       </div>
     </div>
   </div>
  </section>
  <script>
   $(document).on("click",".rilis",function(e){
     bootbox.confirm("Yakin buka kembali release?");
   }
  </script>
</div>
