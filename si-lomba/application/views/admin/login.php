<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/style.css">
    <link rel="stylesheet" href="<?= base_url('/'); ?>assets/fontawesome/css/all.min.css">
    <script src="<?= base_url('/'); ?>assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
      
  <!-- Login -->
    <form method="post" action="<?= base_url('auth_admin/index') ?>" id="login" class="input-box">
      <h1>login</h1>

      <div class="input">
        <label for="username">username</label>
        <input class="" id="username" name="username" type="text" placeholder="masukan username">
      </div>

      <div class="input">
        <label>password 
          <i id="toggle" class="fa fa-eye-slash" aria-hidden="true"></i>
        </label>
        <input class="" id="password-login" name="password" type="password" placeholder="masukan password">

          <script>
            $(document).ready(function(){
                $('#toggle').on('click', function(){
                  if($(this).attr('class')=='fa fa-eye-slash'){
                    $(this).addClass('fa-eye')
                    $(this).removeClass('fa-eye-slash')
                    $('#password-login').attr('type', 'text')
                  }else{
                    $(this).removeClass('fa-eye')
                    $(this).addClass('fa-eye-slash')
                    $('#password-login').attr('type', 'password')
                  }
                })
            });
          </script>
      </div>

      <button type="submit" style="width: 100px;">Login</button> 
      <a href="#daftar"><button type="button" style="width: 100px;">Register</button></a>
      <a href="<?= base_url(); ?>">kembali ke halaman awal</a>
    </form>
    <!-- akhir Login -->
    
</body>
</html>