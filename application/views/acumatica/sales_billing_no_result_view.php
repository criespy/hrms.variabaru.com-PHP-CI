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
          </form>
       </div>
     </div>
     <br />
     <!--input box end-->
     <div class="row">
       <div class="col-sm-12">
         <!--Konten-->
         <div>
           <table class="table">
             <tr class="bg-danger">
               <td><?php echo ("Tidak ada nomor sales billing $sales_billing"); ?></td>
             </tr>
           </table>
           <!--Konten end-->
         </div>
       </div>
     </div>
  </section>
</div>
