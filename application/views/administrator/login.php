<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/style_login.css'); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/css/hiccup.css'); ?>">
      <link rel="shortcut icon" href="">
      <title>Administrator</title>
   </head>
   <body class="body-login-form">
      <div id='box'>
         <form method="POST" fm-controller="login" fm-target="<?php echo site_url('/admin/login/doLogin'); ?>" fm-success="<?php echo site_url('admin'); ?>">
            <p class="title">Administrator</p>
            <p><input type="text" name="name" placeholder="Username" class="input-form-login" required></p>
            <p><input type="password" name="pass" placeholder="Password" class="input-form-login" required></p>
            <p><input type="submit" value="Login" class="submit-form-login" name="login"></p>
            <p class="pesan"></p>
         </form>
      </div>
   </body>
   <script type="text/javascript" src="<?php echo base_url('public/js/hiccup.js') ?>"></script>
</html>
