<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="<?= base_url('admin/'); ?>assets/styleadmin.css">
    <link rel="stylesheet" href="<?= base_url('admin/'); ?>assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="<?= base_url('admin/'); ?>assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <form class="user" method="post" action="<?= base_url('auth_admin/index') ?>"">
        <h1>login admin</h1>
        <div class="input">
            <label for="username">Username</label>
            <input type="text" id="username">
            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="input">
            <label for="password">password</label>
            <input type="password" id="password">
            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button type="submit">Login</button>
    </form> 
</body>
</html>