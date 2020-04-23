<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<!-- navbar -->
<nav id="nav">
    <div class="toggle-nav">
        <a href="#nav"><i class="fas fa-bars white" aria-hidden="true"></i></a>
    </div>
</nav>
<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <div class="toggle-side">
        <a href="#sidebar"><i class="fas fa-times white" aria-hidden="true"></i></a>
    </div>
    <div class="profile-admin">
        <img id="profil" src="assets/ico/logo.jpg" alt="profil">
        <p id="about">Super admin</p>
    </div>
    <div class="menu">
        <ul>
            <li><a href="index.php" >dashboard</a></li>
            <li><a href="user.php" >user</a></li>
            <li><a href="lomba.php" >lomba</a></li>
            <li><a href="transaksi.php" >transaksi</a></li>
            <!-- <li>
                <input type="checkbox" id="lomba">
                <label for="lomba">kategori lomba
                    <i class="fas fa-caret-down"></i>
                    <i class="fas fa-sort-up"></i>
                </label>
                <ul class="dropdown" id="dropdown">
                    <li><a href="#">Menulis</a></li>
                    <li><a href="#">Mewarnai</a></li>
                    <li><a href="#">Melukis</a></li>
                </ul>
            </li> -->
            <li><a href="laporan.php" >laporan</a></li>
            <li><a href="adminpanel.php" >admin panel</a></li>
        </ul>
    </div>
    <div class="logout">
        <a href=""><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</div>
</body>
</html>