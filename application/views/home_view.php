<div id="page-content-wrapper">
  <div class="row">
    <div class="col-md-10">
      <!--Buat nutup menu - perlu didesain sedemikian rupa-->
      <div class="">
        <a href="#menu-toggle" class="btn" id="menu-toggle"><</a>
      </div>
      <!-- Buat nutup menu end-->
      <h2>ITMS Home Panel</h2>
    </div>
    <div class="col-md-2 text-right">
      login sebagai: <?php echo $username; ?><br />
      <a href="<?php echo base_url(); ?>index.php/login/logout">Logout</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div>
        <h4>Logged Area Content</h4>
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
