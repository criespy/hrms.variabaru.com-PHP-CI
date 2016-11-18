<div class="login-form">
  <table>
    <td height="100px" width="300px" class="element text-center"></td>
  </table>
  <?php
    $attributes = array('name' => 'login_form', 'id' => 'login_form');
    echo form_open('login/verifikasi_login', $attributes);
  ?>
  <div class="form-group">
    <label for="username" >Username:</label>
    <input type="text" size="48" id="username" name="username" class="form-control" value="<?php echo set_value('username'); ?>"  />
    <p>
      <?php echo form_error('username', '<div class="text-danger">','</div>'); ?>
    </p>
  </div>
  <div class="form-group">
    <label for="userpass">Password:</label>
    <input type="password" size="48" id="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
    <p>
      <?php echo form_error('password', '<div class="text-danger">','</div>'); ?>
    </p>
  </div>
  <p class="text-danger">
  <?php $message = $this->session->flashdata('message');
      echo $message == '' ? '' : $message; ?>
  </p>
  <button type="submit" class="log-btn" />Login</button>
    <?php echo form_close();?>
  <br />
  <div class="text-right">
      <strong>Copyright &copy; 2016 <a href="#">riespratama</a>.</strong>
  </div>
</div>

<!-- script animasi error -->
<script type="text/javascript">
  $(document).ready(function(){
        $('.log-btn').click(function(){
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        });
        $('.form-control').keypress(function(){
            $('.log-status').removeClass('wrong-entry');
        });

    });
</script>
<!-- script animasi teks -->
<script src="../jquery/jquery-3.1.0.min.js"></script>
<script src="../js/typed.js"></script>
<script>
  $(function(){
      $(".element").typed({
        strings: ["<h2>Selamat datang...</h2>","<h1><b>Log</b>in</h1>"],
        typeSpeed: 0
      });
  });
</script>
