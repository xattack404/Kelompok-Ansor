<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/styleadmin.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
      
  <!-- Login -->
    <form  method="post" action="<?= base_url('auth_admin/index') ?>" id="login" class="login-box">
      <h1>login admin</h1>

      <div class="input">
        <label for="username">username</label>
        <input class="" id="username" type="text" placeholder="">
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="input">
        <label for="password-login">password </label>
        <input class="" id="password-login" type="password" placeholder="">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>

      <button type="submit">Login</button> 
    </form>
    <!-- akhir Login -->
    
</body>
</html>