 <div id="page-content-wrapper">
   <div class="row">
     <div class="col-md-10">
       <!--Buat nutup menu - perlu didesain sedemikian rupa-->
       <div class="">
         <a href="#menu-toggle" class="btn" id="menu-toggle"><</a>
       </div>
       <!-- Buat nutup menu end -->
       <!-- Judul halaman -->
       <h2>Sales Billing open release</h2>
     </div>
     <!--Panel user -->
     <div class="col-md-2 text-right">
       login sebagai: <?php echo $username; ?><br />
       <a href="home/logout">Logout</a>
     </div>
     <!--Panel user end -->
   </div>
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
  </div>
</div>
 <!-- Menu Toggle Script -->
 <script>
 $("#menu-toggle").click(function(e) {
     e.preventDefault();
     $("#wrapper").toggleClass("toggled");
 });
 </script>
 <!-- Menu Toggle Script End -->
