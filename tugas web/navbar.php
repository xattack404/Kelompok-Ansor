<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<!-- navbar -->
<nav id="nav">
    <!-- logo-->
    <div class="logo"><a href="#">LOGO</a> </div>
    <!-- menu -->
    <div class="menu" id="menu">
        <ul>        
            <div class="close"><a href="#nav" title="close"><i class="fas fa-times white"></i></a> </div>
                <li><a class="page-scroll" href="#home">Home</a></li>
                <li><a class="page-scroll" href="#konten">Last Event</a></li>
                <li>
                    <h5>
                        Kategori
                        <i class="fas fa-caret-down"></i>
                        <i class="fas fa-sort-up"></i>
                    </h5>
                    <ul class="dropdown" id="dropdown">
                        <li><a href="">Fotografi</a></li>
                        <li><a href="">Logo</a></li>
                        <li><a href="">Video</a></li>
                        <li><a href="">Olimpiade</a></li>
                        <li><a href="">Olahraga</a></li>
                    </ul>
                </li>
                <li><a class="page-scroll" href="#">Registrasi</a></li>
        </ul>               
    </div>
    <div class="menu-toggle">
        <a href="#menu" title="menu"><i class="fas fa-bars white" aria-hidden="true"></i></a>
    </div>
    <!-- search -->
    <div class="search-form" id="search-form">
        <form action="">
            <input id="" type="search" placeholder="Search and Enter...">
            <!-- <button type="submit" title="cari"><i class="fas fa-search"></i></button> -->
        </form>
    </div>
    <div class="search-icon">
        <a href="#search-form" title="cari"><i class="fa fa-search white"></i></a>
        <a href="#nav" title="close"><i class="fas fa-times white"></i></a>
    </div>
</nav>
<!-- akhir navbar -->

<script src="assets/js/style.js"></script>
</body>
</html>