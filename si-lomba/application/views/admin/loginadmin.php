<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
      
  <!-- Login -->
    <form  method="post" action="<?= base_url('auth_admin/index') ?>" id="login" class="input-box">
      <h1>login</h1>

      <div class="input">
        <label for="username">username</label>
        <input class="" id="username" type="text" placeholder="masukan username">
        <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="input">
        <label>password 
          <i id="toggle" class="fa fa-eye-slash" aria-hidden="true"></i>
        </label>
        <input class="" id="password-login" type="password" placeholder="masukan password">
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
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
    </form>
    <!-- akhir Login -->
    
</body>
</html>