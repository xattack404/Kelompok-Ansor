<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('assets_frontend/js/jquery-3.4.1.min.js') }}"></script>
</head>
<body>
<!-- navbar -->
<nav id="nav">
    <!-- logo-->
    <div class="logo"><a href="#">SIMBA</a> </div>
    <!-- menu -->
    <div class="menu" id="menu">
        <ul>        
            <div class="close"><a href="#nav" title="close"><i class="fas fa-times white"></i></a> </div>
                <li><a class="page-scroll" href="{{ route('frontend.home.index')}}">Home</a></li>
                <li><a class="page-scroll eventt" href="#konten">Event</a></li>
                <li><a class="page-scroll" href="#">Atlet Aktif</a></li>
                <li><a class="page-scroll" href="#">More Info</a></li>
                <li><a class="page-scroll" href="{{ route('frontend.konfirmasi.index')}}">Konfirmasi Pembayaran</a></li>
                <li><a class="page-scroll" href="{{ route('frontend.registrasi.index')}}">Registrasi</a></li>
        </ul>               
    </div>
    <div class="menu-toggle">
        <a href="#menu" title="menu"><i class="fas fa-bars white" aria-hidden="true"></i></a>
    </div>
    <!-- search -->
    <div class="search-form" id="search-form">
        <form action="">
            <input id="" type="search" placeholder="search and enter...">
            <button type="submit" title="cari"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <div class="search-icon">
        <a href="#search-form" title="cari"><i class="fa fa-search white"></i></a>
        <a href="#nav" title="close"><i class="fas fa-times white"></i></a>
    </div>
</nav>
<!-- akhir navbar -->

<script src="{{ asset('assets_frontend/js/style.js') }}"></script>
</body>
</html>