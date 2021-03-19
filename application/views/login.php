<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
      <img src="<?php echo base_url('assets/img/logo.png')?>" width="50" height="50" id="icon" style="margin-top: 20px;" alt="User Icon" />    
    <!-- Login Form -->
    <form id="login" method="post" action="<?php echo base_url('login/cekLogin'); ?>" class="form-horizontal">
      <input type="text" id="username"  name="username" placeholder="username">
      <input type="text" id="password"  name="password" placeholder="password">
      <input type="submit"  value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>